<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="overflow-hidden sm:rounded-lg">
                <div class="p-6">
                    <div class="flex flex-col md:px-40">
                        <div class="text-end text-5xl mb-5">
                            <a href="{{ url()->previous() }}" class="text-black hover:text-gray-700"><i class="fa-solid fa-circle-arrow-left"></i></a>
                        </div>
                        <div class="bg-white rounded-[28px] shadow-md card">
                            <div class="card-body">
                                <h1 class="card-title text-3xl font-extrabold">Edit Request</h1>
                                <form action="">
                                    <div class="mt-3">
                                        <p class="font-bold">Title</p>
                                        <input type="text" class="input rounded-xl input-bordered w-full">
                                    </div>
                                    <div class="mt-3">
                                        <p class="font-bold">Outlet</p>
                                        <select name="outlet" id="outlet" class="select select-bordered w-full">
                                            <option value="">Bapak Bakery</option>
                                            <option value="">Burger King</option>
                                            <option value="">Blackcanyon Batam</option>
                                            <option value="">The Plumber Arms</option>
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
                                            <option value="Urgent">Urgent</option>
                                            <option value="Open">Open</option>
                                            <option value="Progress">Progress</option>
                                            <option value="Closed">Closed</option>
                                        </select>
                                    </div>
                                    <div class="mt-3">
                                        <p class="font-bold">Period</p>
                                        <div class="flex">
                                            <input type="date" class="rounded-lg w-full border-gray-300">
                                            <div class="divider divider-horizontal">TO</div>
                                            <input type="date" class="rounded-lg w-full border-gray-300">
                                        </div>
                                    </div>
                                    <div class="mt-3">
                                        <p class="font-bold">Image</p>
                                        <input type="file" multiple class="file-input file-input-bordered w-full">
                                        <div class="label">
                                            <span class="label-text">MAX SIZE: 1MB</span>
                                        </div>
                                    </div>
                                    <div class="mt-3">
                                        <p class="font-bold">Description</p>
                                        <input type="hidden" id="body" name="body">
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