<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="overflow-hidden sm:rounded-lg">
                <div class="p-6">
                    <div class="flex flex-col md:px-40">
                        <div class="text-end text-6xl mb-5">
                            <a href="{{ url()->previous() }}" class="text-black hover:text-gray-700"><i class="fa-solid fa-circle-arrow-left"></i></a>
                        </div>
                        <div class="bg-white rounded-[28px] shadow-md card">
                            <div class="card-body">
                                <h1 class="card-title text-2xl font-bold">Lorem ipsum dolor sit amet consectetur adipisicing elit. Vitae, impedit?</h1>
                                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Consectetur velit obcaecati exercitationem eaque totam in praesentium dolorem. Recusandae deserunt, sint esse voluptates accusantium consectetur! Laudantium voluptates repudiandae perspiciatis atque tenetur?</p>
                                <div>
                                    <i class="fa-solid fa-link"></i> <a class="underline hover:font-bold" href="#">https://probussystem.com</a>
                                </div>
                                <div class="mb-5">
                                    <i class="fa-solid fa-file-image"></i> <a class="hover:font-bold underline"> 3 images</a>
                                </div>
                                <div class="card-actions justify-start">
                                    <div class="badge badge-secondary badge-lg text-white">Burger King</div>
                                </div>
                                <div class="card-actions justify-start">
                                    <div class="badge badge-neutral badge-lg text-white">PHIS</div>
                                </div>
                                <div>
                                    <p class="text-sm font-bold"><i class="fa-solid fa-hourglass-start"></i> 19 December 2024 - 2 February 2025</p>
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
</x-app-layout>