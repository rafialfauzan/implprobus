<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="overflow-hidden sm:rounded-lg">
                <div class="p-6">
                    <div class="flex flex-col md:px-40">
                        <div class="text-end text-5xl mb-5">
                            <a href="/detailrequest/{{ $req->id }}" class="text-black hover:text-gray-700"><i class="fa-solid fa-circle-arrow-left"></i></a>
                        </div>
                        <x-auth-validation-errors class="mb-4" :errors="$errors" />
                        <div class="bg-white rounded-[28px] shadow-md card">
                            <div class="card-body">
                                <h1 class="card-title text-3xl font-extrabold">Edit Request</h1>
                                <form action="/editrq/{{ $req->id }}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <div class="mt-3">
                                        <p class="font-bold">Title</p>
                                        <input type="text" class="input rounded-xl input-bordered w-full" value="{{ $req->judul }}" name="title">
                                    </div>
                                    <div class="mt-3">
                                        <p class="font-bold">Outlet</p>
                                        <select name="outlet" id="outlet" class="select select-bordered w-full">
                                            @foreach ($outlet as $out)
                                            @if (old('tag', $req->outlet_id) == $out->id)
                                            <option value="{{ $out->id }}" selected>{{ $out->nm_out }}</option>
                                            @else
                                            <option value="{{ $out->id }}">{{ $out->nm_out }}</option>
                                            @endif
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="mt-3">
                                        <p class="font-bold">Tag</p>
                                        <select name="tag" id="tag" class="select select-bordered w-full">
                                            @foreach ($tag as $tagitem)
                                            @if (old('tag', $req->tag_id) == $tagitem->id)
                                            <option value="{{ $tagitem->id }}" selected>{{ $tagitem->name }}</option>
                                            @else
                                            <option value="{{ $tagitem->id }}">{{ $tagitem->name }}</option>
                                            @endif
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="mt-3">
                                        <p class="font-bold">Category</p>
                                        <select name="category" id="category" class="select select-bordered w-full">
                                            @foreach ($kategori as $kategoriitem)
                                            @if (old('category', $req->kategori_id) == $kategoriitem->id)
                                            <option value="{{ $kategoriitem->id }}" selected>{{ $kategoriitem->name }}</option>
                                            @else
                                            <option value="{{ $kategoriitem->id }}">{{ $kategoriitem->name }}</option>
                                            @endif
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="mt-3">
                                        <p class="font-bold">Status</p>
                                        <select name="status" id="status" class="select select-bordered w-full">
                                            @foreach ($status as $st)
                                            @if (old('status', $req->status_id) == $st->id)
                                            <option value="{{ $st->id }}" selected>{{ $st->name }}</option>
                                            @else
                                            <option value="{{ $st->id }}">{{ $st->name }}</option>
                                            @endif
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="mt-3">
                                        <p class="font-bold">Period</p>
                                        <div class="flex">
                                            <input type="date" class="rounded-lg w-full border-gray-300" value="{{ $req->start_date }}" name="startdate">
                                            <div class="divider divider-horizontal">TO</div>
                                            <input type="date" class="rounded-lg w-full border-gray-300" value="{{ $req->end_date }}" name="enddate">
                                        </div>
                                    </div>
                                    <div class="mt-3">
                                        <p class="font-bold">Image</p>
                                        <input name="images[]" type="file" multiple class="file-input file-input-bordered w-full">
                                        <div class="label">
                                            <span class="label-text">MAX FILES: 6 IMAGES</span>
                                            <span class="label-text">MAX SIZE: 1MB</span>
                                        </div>
                                        <div class="flex flex-row container">
                                            @foreach ($img as $image)
                                            <div class="h-[200px] w-1/2 md:w-1/3 border shadow-sm overflow-hidden rounded-xl image">
                                                <a onclick="return confirm('Are you sure you want to delete this data?')" href="/deleteimg/{{ $image->id }}" class="btn btn-error btn-sm text-white rounded-xl absolute">✕</a>
                                                <img src="/img/{{ $image->image }}" alt="" class="rounded-xl h-full w-full object-cover">   
                                            </div>
                                            @endforeach
                                        </div>
                                    </div>
                                    <div class="mt-3">
                                        <p class="font-bold">Description</p>
                                        <input type="hidden" id="body" name="body" value="{{ old('body', $req->deskripsi) }}">
                                        <trix-editor trix-attachment-remove input="body"></trix-editor>
                                    </div>
                                    <div class="mt-3">
                                        <button type="submit" class="btn btn-neutral bg-black w-full">EDIT</button>
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