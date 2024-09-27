<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="overflow-hidden sm:rounded-lg">
                <div class="p-6">
                    <div class="flex flex-col md:px-40">
                        <div class="justify-items-end text-6xl mb-5">
                            <a href="/" class="text-black hover:text-gray-700"><i class="fa-solid fa-circle-arrow-left"></i></a>
                        </div>
                        <div class="bg-white rounded-[28px] shadow-md card">
                                <div class="dropdown dropdown-top absolute right-0 bottom-0 m-3 rounded-[16px]">
                                    <div tabindex="0" role="button" class="btn m-1">Change Status</div>
                                    <ul tabindex="0" class="dropdown-content menu bg-base-100 rounded-box z-[1] w-40 p-2 shadow">
                                    <li><a>Urgent</a></li>
                                    <li><a>Open</a></li>
                                    <li><a>Progress</a></li>
                                    <li><a>Closed</a></li>
                                    </ul>
                                </div>
                              <div class="absolute right-0 md:m-5 m-3 badge badge-error badge-lg rounded text-white">Urgent</div>
                            <div class="card-body">
                                <h1 class="card-title text-2xl font-bold">Lorem ipsum dolor sit amet consectetur adipisicing elit. Vitae, impedit?</h1>
                                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Consectetur velit obcaecati exercitationem eaque totam in praesentium dolorem. Recusandae deserunt, sint esse voluptates accusantium consectetur! Laudantium voluptates repudiandae perspiciatis atque tenetur?</p>
                                <div class="mb-5">
                                    <a class="hover:font-bold underline"><i class="fa-solid fa-file-image"></i> 3 images</a>
                                </div>
                                <div class="card-actions justify-start">
                                    <div class="badge badge-secondary badge-lg text-white">Burger King</div>
                                </div>
                                <div class="card-actions justify-start">
                                    <div class="badge badge-primary badge-lg text-white">Programmer</div>
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
                        <div class="my-5">
                            <button class="btn btn-neutral bg-black text-white w-full rounded-[28px]" id="btnsolusi">SOLUSI</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>