<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class=" overflow-hidden sm:rounded-lg">
                <div class="p-3">
                    <a href="#" class="btn bg-black text-white font-bold hover:bg-gray-700"><i class="fa-solid fa-plus"></i> Buat Request</a>
                    <div class="flex md:flex-row flex-col">
                        <div class="flex flex-col m-2">
                            <h1 class="font-bold text-abu"><a href="#" class="hover:border-abu hover:border-b-2">Urgent <i class="fa-solid fa-up-right-from-square"></i></a></h1>
                            <a href="/detailrequest">
                                <div class="card bg-white rounded-xl mt-3">
                                    <div class="absolute right-0 m-3 badge badge-error rounded-[2px] text-white">Urgent</div>
                                    <div class="card-body">
                                        <h1 class="card-title font-bold">
                                            Masalah tombol yang terlalu skibidi 
                                        </h1>
                                    </div>
                                    <div class="card-actions justify-start pl-7">
                                        <div class="badge badge-secondary mb-3">Burger King</div>
                                    </div>
                                    <div class="card-actions justify-start pl-7">
                                        <div class="badge badge-primary mb-3 text-white">Programmer</div>
                                        <div class="badge badge-neutral mb-3 text-white">PHIS</div>
                                    </div>
                                    <div class="justify-start pl-7">
                                        <div class="mb-3 text-xs"><i class="fa-solid fa-calendar"></i> 19 December 2024</div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="flex flex-col m-2">
                            <h1 class="font-bold text-abu"><a href="#" class="hover:border-abu hover:border-b-2">Open <i class="fa-solid fa-up-right-from-square"></i></a></h1>
                            <a href="/detailrequest">
                                <div class="card bg-white rounded-xl mt-3">
                                    <div class="absolute right-0 m-3 badge badge-info rounded-[2px] text-white">Open</div>
                                    <div class="card-body">
                                        <h1 class="card-title font-bold">
                                            Bug yang membuat -50000 aura
                                        </h1>
                                    </div>
                                    <div class="card-actions justify-start pl-7">
                                        <div class="badge badge-secondary mb-3">Bapak Bakery</div>
                                    </div>
                                    <div class="card-actions justify-start pl-7">
                                        <div class="badge badge-primary mb-3 text-white">Trainer</div>
                                        <div class="badge badge-neutral mb-3 text-white">PRESTO</div>
                                    </div>
                                    <div class="justify-start pl-7">
                                        <div class="mb-3 text-xs"><i class="fa-solid fa-calendar"></i> 20 December 2024</div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="flex flex-col m-2">
                            <h1 class="font-bold text-abu"><a href="#" class="hover:border-abu hover:border-b-2">Progress <i class="fa-solid fa-up-right-from-square"></i></a></h1>
                            <a href="/detailrequest">
                                <div class="card bg-white rounded-xl mt-3">
                                    <div class="absolute right-0 m-3 badge badge-warning rounded-[2px] text-white">Progress</div>
                                    <div class="card-body">
                                        <h1 class="card-title font-bold">
                                            Masalah gambar yang terlalu gyatt 
                                        </h1>
                                    </div>
                                    <div class="card-actions justify-start pl-7">
                                        <div class="badge badge-secondary mb-3">Blackcanyon Batam</div>
                                    </div>
                                    <div class="card-actions justify-start pl-7">
                                        <div class="badge badge-primary mb-3 text-white">Ecommerce</div>
                                        <div class="badge badge-neutral mb-3 text-white">PRESTO</div>
                                    </div>
                                    <div class="justify-start pl-7">
                                        <div class="mb-3 text-xs"><i class="fa-solid fa-calendar"></i> 21 December 2024</div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="flex flex-col m-2">
                            <h1 class="font-bold text-abu"><a href="#" class="hover:border-abu hover:border-b-2">Closed <i class="fa-solid fa-up-right-from-square"></i></a></h1>
                            <a href="/detailrequest">
                                <div class="card bg-white rounded-xl mt-3">
                                    <div class="absolute right-0 m-3 badge badge-success rounded-[2px] text-white">Closed</div>
                                    <div class="card-body">
                                        <h1 class="card-title font-bold">
                                            Deskripsi yang sigma & mewing 
                                        </h1>
                                    </div>
                                    <div class="card-actions justify-start pl-7">
                                        <div class="badge badge-secondary mb-3">The Plumber Arms</div>
                                    </div>
                                    <div class="card-actions justify-start pl-7">
                                        <div class="badge badge-primary mb-3 text-white">IT</div>
                                        <div class="badge badge-neutral mb-3 text-white">PPOS</div>
                                    </div>
                                    <div class="justify-start pl-7">
                                        <div class="mb-3 text-xs"><i class="fa-solid fa-calendar"></i> 22 December 2024</div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
