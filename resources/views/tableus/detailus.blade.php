<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="overflow-hidden sm:rounded-lg">
                <div class="p-6">
                    <div class="flex flex-col md:px-40">
                        <div class="mb-5 flex flex-row justify-between">
                            <a href="/editus" class="btn btn-neutral mt-3 bg-black rounded-[28px]"><i class="fa-solid fa-pen"></i> Edit Update System</a>
                            <a href="{{ url()->previous() }}" class="text-5xl text-black mt-2 hover:text-gray-700"><i class="fa-solid fa-circle-arrow-left"></i></a>
                        </div>
                        <div class="bg-white rounded-[28px] shadow-md card">
                            <div class="card-body">
                                <h1 class="card-title text-2xl font-bold">Lorem ipsum dolor sit amet consectetur adipisicing elit. Vitae, impedit?</h1>
                                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Consectetur velit obcaecati exercitationem eaque totam in praesentium dolorem. Recusandae deserunt, sint esse voluptates accusantium consectetur! Laudantium voluptates repudiandae perspiciatis atque tenetur?</p>
                                <div>
                                    <i class="fa-solid fa-link"></i> <a class="underline hover:font-bold" href="#"> https://probussystem.com</a>
                                </div>
                                <div class="mb-5">
                                    <div class="mb-5 flex flex-wrap rounded-md image-container">
                                        <div class="h-[200px] w-1/2 md:w-1/3 border shadow-sm overflow-hidden cursor-pointer rounded-xl image" onclick="my_modal_3.showModal()">
                                            <img src="{{ asset('img/tes1.jpg') }}" alt="" class="rounded-xl h-full w-full object-cover hover:w-[120%] hover:h-[120%] ease-in-out duration-300">
                                        </div>
                                        <div class="h-[200px] w-1/2 md:w-1/3 border shadow-sm overflow-hidden cursor-pointer rounded-xl image" onclick="my_modal_3.showModal()">
                                            <img src="{{ asset('img/tes2.jpg') }}" alt="" class="rounded-xl h-full w-full object-cover hover:w-[120%] hover:h-[120%] ease-in-out duration-300">
                                        </div>
                                        <div class="h-[200px] w-1/2 md:w-1/3 border shadow-sm overflow-hidden cursor-pointer rounded-xl image" onclick="my_modal_3.showModal()">
                                            <img src="{{ asset('img/tes3.jpg') }}" alt="" class="rounded-xl h-full w-full object-cover hover:w-[120%] hover:h-[120%] ease-in-out duration-300">
                                        </div>
                                        <div class="h-[200px] w-1/2 md:w-1/3 border shadow-sm overflow-hidden cursor-pointer rounded-xl image" onclick="my_modal_3.showModal()">
                                            <img src="{{ asset('img/tes4.jpg') }}" alt="" class="rounded-xl h-full w-full object-cover hover:w-[120%] hover:h-[120%] ease-in-out duration-300">
                                        </div>
                                        <div class="h-[200px] w-1/2 md:w-1/3 border shadow-sm overflow-hidden cursor-pointer rounded-xl image" onclick="my_modal_3.showModal()">
                                            <img src="{{ asset('img/tes5.jpg') }}" alt="" class="rounded-xl h-full w-full object-cover hover:w-[120%] hover:h-[120%] ease-in-out duration-300">
                                        </div>
                                        <div class="h-[200px] w-1/2 md:w-1/3 border shadow-sm overflow-hidden cursor-pointer rounded-xl image" onclick="my_modal_3.showModal()">
                                            <img src="{{ asset('img/tes6.jpg') }}" alt="" class="rounded-xl h-full w-full object-cover hover:w-[120%] hover:h-[120%] ease-in-out duration-300">
                                        </div>
                                    </div>
                                    <dialog id="my_modal_3" class="modal">
                                        <div class="modal-box w-11/12 max-w-5xl">
                                            <form method="dialog">
                                                <button class="btn btn-sm btn-circle btn-error absolute right-1 top-1 text-white">✕</button>
                                            </form>
                                            <img src="{{ asset('img/tes5.jpg') }}" alt="">
                                        </div>
                                    </dialog>
                                </div>
                                <div class="card-actions justify-start">
                                    <div class="badge badge-secondary badge-lg text-white">Burger King</div>
                                </div>
                                <div class="card-actions justify-start">
                                    <div class="badge badge-neutral badge-lg text-white">PHIS</div>
                                </div>
                                <div>
                                    <p class="text-sm font-bold"><i class="fa-solid fa-calendar"></i> 19 December 2024</p>
                                </div>
                                <div>
                                    <p class="text-sm font-bold"><i class="fa-solid fa-user-pen"></i> {{ Auth::user()->name }}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        document.querySelectorAll('.image-container img').forEach(image =>{
            image.onclick = () =>{
                document.querySelector('.modal-box img').src = image.getAttribute('src');
            }
        });
    </script>
</x-app-layout>