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
                                <form action="">
                                    <div class="mt-3">
                                        <p class="font-bold">Title</p>
                                        <input type="text" class="input rounded-xl input-bordered w-full">
                                    </div>
                                    <div class="mt-3">
                                        <p class="font-bold">Link .exe</p>
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
                                        <p class="font-bold">Category</p>
                                        <select name="outlet" id="outlet" class="select select-bordered w-full">
                                            <option value="">PHIS</option>
                                            <option value="">PRESTO</option>
                                            <option value="">PPOS</option>
                                        </select>
                                    </div>
                                    <div class="mt-3">
                                        <p class="font-bold">Image</p>
                                        <input type="file" multiple class="file-input file-input-bordered w-full">
                                    </div>
                                    <div class="mt-3">
                                        <p class="font-bold">Description</p>
                                        <input type="hidden" id="body" name="body">
                                        <trix-editor trix-attachment-remove input="body"></trix-editor>
                                        
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