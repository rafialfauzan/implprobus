<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="overflow-hidden sm:rounded-lg">
                <div class="p-6">
                    <div class="flex flex-col md:px-40">
                        <div class="text-end text-5xl mb-5">
                            <a href="{{ url()->previous() }}" class="text-black hover:text-gray-700"><i class="fa-solid fa-circle-arrow-left"></i></a>
                        </div>
                        <x-auth-validation-errors class="mb-4" :errors="$errors" />
                        <div class="bg-white rounded-[28px] shadow-md card">
                            <div class="card-body">
                                <h1 class="card-title text-3xl font-extrabold">Create Request</h1>
                                <form method="POST" action="/createrq" enctype="multipart/form-data">
                                    @csrf
                                    <div class="mt-3">
                                        <p class="font-bold">Title</p>
                                        <input type="text" class="input rounded-xl input-bordered w-full" name="title" value="{{ old('title') }}">
                                    </div>
                                    <div class="mt-3">
                                        <p class="font-bold">Outlet</p>
                                        <select name="outlet" id="outlet" class="select select-bordered w-full">
                                            @foreach ($outlet as $out)
                                            <option value="{{ $out->id }}">{{ $out->nm_out }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="mt-3">
                                        <p class="font-bold">Tag</p>
                                        <select name="tag" id="tag" class="select select-bordered w-full">
                                            @foreach ($tag as $tagitem)
                                            <option value="{{ $tagitem->id }}">{{ $tagitem->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="mt-3">
                                        <p class="font-bold">Category</p>
                                        <select name="category" id="category" class="select select-bordered w-full">
                                            @foreach ($kategori as $kategoriitem)
                                            <option value="{{ $kategoriitem->id }}">{{ $kategoriitem->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="mt-3">
                                        <p class="font-bold">Status</p>
                                        <select name="status" id="status" class="select select-bordered w-full">
                                            <option value="1">Urgent</option>
                                            <option value="2">Open</option>
                                        </select>
                                    </div>
                                    <div class="mt-3">
                                        <p class="font-bold">Period</p>
                                        <div class="flex">
                                            <input type="date" class="rounded-lg w-full border-gray-300" name="startdate" value="{{ old('startdate') }}" required>
                                            <div class="divider divider-horizontal">TO</div>
                                            <input type="date" class="rounded-lg w-full border-gray-300" name="enddate" value="{{ old('enddate') }}" required>
                                        </div>
                                    </div>
                                    <div class="mt-3">
                                        <p class="font-bold">Image</p>
                                        <input type="file" multiple class="file-input file-input-bordered w-full" name="images[]">
                                        <div class="label">
                                            <span class="label-text">MAX FILES: 6 IMAGES</span>
                                            <span class="label-text">MAX SIZE: 200KB</span>
                                        </div>
                                    </div>
                                    <div class="mt-3">
                                        <p class="font-bold">Description</p>
                                        <input type="hidden" id="body" name="body" value="{{ old('body') }}">
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