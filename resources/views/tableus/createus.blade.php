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
                                <h1 class="card-title text-3xl font-extrabold">Create Update System</h1>
                                <form action="/createus" method="POST" enctype="multipart/form-data">
                                    @csrf
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
                                            <option value="{{ $out->id }}">{{ $out->nm_out }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="mt-3">
                                        <p class="font-bold">Category</p>
                                        <select name="category" id="category" class="select select-bordered w-full">
                                            @foreach ($kategori as $kt)
                                            <option value="{{ $kt->id }}">{{ $kt->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="mt-3">
                                        <p class="font-bold">Image</p>
                                        <input type="file" multiple class="file-input file-input-bordered w-full" name="images[]">
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