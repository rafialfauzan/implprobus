@php
    use Carbon\Carbon;
    $rentang = Carbon::parse($req->start_date)->diffInDays(Carbon::parse($req->end_date));
@endphp
<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="overflow-hidden sm:rounded-lg">
                <div class="p-6">
                    <div class="flex flex-col md:px-40">
                        <div class="text-end text-5xl mb-5">
                            <a href="/" class="text-5xl text-black mt-2 hover:text-gray-700"><i class="fa-solid fa-house"></i></a>
                        </div>
                        <x-auth-validation-errors class="mb-4" :errors="$errors" />
                        <div class="bg-white rounded-[28px] shadow-md card">
                            <div class="card-body">
                                <h1 class="card-title text-3xl font-extrabold">Create Update System</h1>
                                <form action="/createus" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <div class="mt-3">
                                        <p class="font-bold">From Request</p>
                                        <div class="card bg-white w-full shadow-md text-black border">
                                            <div class="card-body">
                                              <h2 class="card-title">{{ $req->judul }}</h2>
                                              <div class="card-actions justify-start">
                                                <div class="badge badge-secondary badge-lg text-white">{{ $req->outlet->nm_out }}</div>
                                            </div>
                                            <div class="card-actions justify-start">
                                                <div class="badge badge-primary badge-lg text-white">{{ $req->tag->name }}</div>
                                                <div class="badge badge-neutral badge-lg text-white">{{ $req->kategori->name }}</div>
                                            </div>
                                            <div>
                                                <p class="text-sm font-bold"><i class="fa-solid fa-hourglass-start"></i> Deadline: {{ Carbon::create($req->start_date)->toFormattedDayDateString() }} - {{ Carbon::create($req->end_date)->toFormattedDayDateString() }} 
                                                @if ($rentang == 1)
                                                    ({{ $rentang }} day)
                                                @else
                                                    ({{ $rentang }} days) 
                                                @endif</p>
                                            </div>
                                            <div>
                                                <p class="text-sm font-bold"><i class="fa-solid fa-calendar"></i> Posted: {{ Carbon::create($req->created_at)->toFormattedDayDateString() }} ({{ $req->created_at->diffForHumans() }})</p>
                                            </div>
                                            <div>
                                                <p class="text-sm font-bold"><i class="fa-solid fa-user-pen"></i> {{ $req->user->name }}</p>
                                            </div>
                                            </div>
                                          </div>
                                        <input type="hidden" class="input rounded-xl input-bordered w-full" name="req" value="{{ $req->id }}" required>
                                    </div>
                                    <div class="mt-3">
                                        <p class="font-bold">Title</p>
                                        <input type="text" class="input rounded-xl input-bordered w-full" name="title" value="{{ old('title') }}" required>
                                    </div>
                                    <div class="mt-3">
                                        <p class="font-bold">Link .exe</p>
                                        <input type="text" class="input rounded-xl input-bordered w-full" name="linkexe" value="{{ old('linkexe') }}">
                                    </div>
                                    <div class="mt-3">
                                        <p class="font-bold">Outlet</p>
                                        <select name="outlet" id="outlet" class="select select-bordered w-full">
                                            @foreach ($outlet as $out)
                                            @if (old('outlet', $req->outlet_id) == $out->id)
                                            <option value="{{ $out->id }}" selected>{{ $out->nm_out }}</option>
                                            @else
                                            <option value="{{ $out->id }}">{{ $out->nm_out }}</option>
                                            @endif
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="mt-3">
                                        <p class="font-bold">Category</p>
                                        <select name="category" id="category" class="select select-bordered w-full">
                                            @foreach ($kategori as $kt)
                                            @if (old('category', $req->kategori_id) == $kt->id)
                                            <option value="{{ $kt->id }}" selected>{{ $kt->name }}</option>
                                            @else
                                            <option value="{{ $kt->id }}">{{ $kt->name }}</option>
                                            @endif
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="mt-3">
                                        <p class="font-bold">Image</p>
                                        <input type="file" multiple class="file-input file-input-bordered w-full" name="images[]">
                                        <div class="label">
                                            <span class="label-text">MAX FILES: 6 IMAGES</span>
                                            <span class="label-text">MAX SIZE: 200KB/IMAGE</span>
                                        </div>
                                        <div>
                                            <span>For multiple file : </span>
                                            <kbd class="kbd">ctrl</kbd>
                                            +
                                            <kbd class="kbd"><i class="fa-solid fa-arrow-pointer"></i> click</kbd>
                                        </div>
                                    </div>
                                    <div class="mt-3">
                                        <p class="font-bold">Description</p>
                                        <input type="hidden" id="body" name="body" value="{{ old('body') }}" required>
                                        <trix-editor trix-attachment-remove input="body"></trix-editor>
                                    </div>
                                    <div class="mt-3">
                                        <button type="submit" class="btn btn-neutral bg-black w-full">SAVE</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        document.addEventListener('trix-file-accept', function(e){
            e.preventDefault();
        });
    </script>
</x-app-layout>