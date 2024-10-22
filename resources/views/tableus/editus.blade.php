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
                                <h1 class="card-title text-3xl font-extrabold">Edit Update System</h1>
                                <form action="/editus/{{ $data->id }}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <div class="mt-3">
                                        <p class="font-bold">Title</p>
                                        <input type="text" class="input rounded-xl input-bordered w-full" value="{{ $data->judul }}" name="title">
                                    </div>
                                    <div class="mt-3">
                                        <p class="font-bold">Link .exe</p>
                                        <input type="text" class="input rounded-xl input-bordered w-full" value="{{ $data->link }}" name="linkexe">
                                    </div>
                                    <div class="mt-3">
                                        <p class="font-bold">Outlet</p>
                                        <select name="outlet" id="outlet" class="select select-bordered w-full">
                                            @foreach ($outlet as $out)
                                            @if (old('tag', $data->outlet_id) == $out->id)
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
                                            @foreach ($kategori as $kategoriitem)
                                            @if (old('category', $data->kategori_id) == $kategoriitem->id)
                                            <option value="{{ $kategoriitem->id }}" selected>{{ $kategoriitem->name }}</option>
                                            @else
                                            <option value="{{ $kategoriitem->id }}">{{ $kategoriitem->name }}</option>
                                            @endif
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="mt-3">
                                        <p class="font-bold">Image</p>
                                        <input type="file" multiple class="file-input file-input-bordered w-full" name="images[]">
                                        <div class="label">
                                            <span class="label-text">MAX FILES: 6 IMAGES</span>
                                            <span class="label-text">MAX SIZE: 200KB</span>
                                        </div>
                                        <div class="flex flex-row container">
                                            @foreach ($image as $img)
                                            <div class="h-[200px] w-1/2 md:w-1/3 border shadow-sm overflow-hidden rounded-xl image">
                                                <a onclick="return confirm('Are you sure you want to delete this data?')" href="/deleteimg/{{ $img->id }}" class="btn btn-error btn-sm text-white rounded-xl absolute">✕</a>
                                                <img src="/img/{{ $img->image }}" alt="" class="rounded-xl h-full w-full object-cover">   
                                            </div>
                                            @endforeach
                                        </div>
                                    </div>
                                    <div class="mt-3">
                                        <p class="font-bold">Description</p>
                                        <input type="hidden" id="body" name="body" value="{{ $data->deskripsi }}">
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