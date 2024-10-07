<x-app-layout>
    {{-- <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot> --}}

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-4 lg:px-6">
            <div class=" overflow-hidden sm:rounded-lg">
                <div class="p-3">
                   <div class="flex flex-col">
                    <div class="flex flex-row justify-between">
                        <h1 class="font-bold text-xl text-black mt-2 ml-2">Urgent</h1>
                        <a href="{{ url()->previous() }}" class="text-black hover:text-gray-700 text-3xl"><i class="fa-solid fa-circle-arrow-left"></i></a>
                    </div>
                    <div class="grid md:grid-cols-4 grid-rows-1">
                        <a href="/detailus" class="mx-2">
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
                        <a href="/detailus" class="mx-2">
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
                        <a href="/detailus" class="mx-2">
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
                        <a href="/detailus" class="mx-2">
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
                        <a href="/detailus" class="mx-2">
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
                        <a href="/detailus" class="mx-2">
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
                        <a href="/detailus" class="mx-2">
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
                        <a href="/detailus" class="mx-2">
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
                   </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
