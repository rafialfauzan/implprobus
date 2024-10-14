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
                    <div class="flex flex-row justify-between">
                        <h1 class="text-2xl md:text-3xl mt-2 md:mt-0 font-extrabold text-abugelap">Update System</h1>
                        <a href="{{ url('createus') }}" class="btn bg-black text-white font-bold hover:bg-gray-700"><i class="fa-solid fa-plus"></i> Create Update System</a>
                    </div>
                   <div class="flex flex-col">
                    <h1 class="font-bold text-abu mt-2 ml-2"><a href="/mus" class="hover:border-abu hover:border-b-2">More Update System <i class="fa-solid fa-up-right-from-square"></i></a></h1>
                    <div class="grid md:grid-cols-4 grid-rows-1">
                        <a href="/detailus" class="mx-2">
                            <div class="card bg-white rounded-xl mt-3">
                                <div class="card-body">
                                    <h1 class="card-title font-bold">
                                        Masalah tombol yang terlalu skibidi 
                                    </h1>
                                </div>
                                <div class="card-actions justify-start pl-7">
                                    <div class="badge badge-secondary mb-3">Burger King</div>
                                </div>
                                <div class="card-actions justify-start pl-7">
                                    <div class="badge badge-neutral mb-3 text-white">PHIS</div>
                                </div>
                                <div class="justify-start pl-7">
                                    <div class="mb-3 text-xs"><i class="fa-solid fa-calendar"></i> 19 December 2024</div>
                                </div>
                            </div>
                        </a>
                        <a href="/detailus" class="mx-2">
                            <div class="card bg-white rounded-xl mt-3">
                                <div class="card-body">
                                    <h1 class="card-title font-bold">
                                        Masalah tombol yang terlalu skibidi 
                                    </h1>
                                </div>
                                <div class="card-actions justify-start pl-7">
                                    <div class="badge badge-secondary mb-3">Burger King</div>
                                </div>
                                <div class="card-actions justify-start pl-7">
                                    <div class="badge badge-neutral mb-3 text-white">PHIS</div>
                                </div>
                                <div class="justify-start pl-7">
                                    <div class="mb-3 text-xs"><i class="fa-solid fa-calendar"></i> 19 December 2024</div>
                                </div>
                            </div>
                        </a>
                        <a href="/detailus" class="mx-2">
                            <div class="card bg-white rounded-xl mt-3">
                                <div class="card-body">
                                    <h1 class="card-title font-bold">
                                        Masalah tombol yang terlalu skibidi 
                                    </h1>
                                </div>
                                <div class="card-actions justify-start pl-7">
                                    <div class="badge badge-secondary mb-3">Burger King</div>
                                </div>
                                <div class="card-actions justify-start pl-7">
                                    <div class="badge badge-neutral mb-3 text-white">PHIS</div>
                                </div>
                                <div class="justify-start pl-7">
                                    <div class="mb-3 text-xs"><i class="fa-solid fa-calendar"></i> 19 December 2024</div>
                                </div>
                            </div>
                        </a>
                        <a href="/detailus" class="mx-2">
                            <div class="card bg-white rounded-xl mt-3">
                                <div class="card-body">
                                    <h1 class="card-title font-bold">
                                        Masalah tombol yang terlalu skibidi 
                                    </h1>
                                </div>
                                <div class="card-actions justify-start pl-7">
                                    <div class="badge badge-secondary mb-3">Burger King</div>
                                </div>
                                <div class="card-actions justify-start pl-7">
                                    <div class="badge badge-neutral mb-3 text-white">PHIS</div>
                                </div>
                                <div class="justify-start pl-7">
                                    <div class="mb-3 text-xs"><i class="fa-solid fa-calendar"></i> 19 December 2024</div>
                                </div>
                            </div>
                        </a>
                        <a href="/detailus" class="mx-2">
                            <div class="card bg-white rounded-xl mt-3">
                                <div class="card-body">
                                    <h1 class="card-title font-bold">
                                        Masalah tombol yang terlalu skibidi 
                                    </h1>
                                </div>
                                <div class="card-actions justify-start pl-7">
                                    <div class="badge badge-secondary mb-3">Burger King</div>
                                </div>
                                <div class="card-actions justify-start pl-7">
                                    <div class="badge badge-neutral mb-3 text-white">PHIS</div>
                                </div>
                                <div class="justify-start pl-7">
                                    <div class="mb-3 text-xs"><i class="fa-solid fa-calendar"></i> 19 December 2024</div>
                                </div>
                            </div>
                        </a>
                    </div>
                   </div>
                   <div class="divider">
                    <p class="font-bold text-abu">⇋</p>
                   </div>
                    <div class="flex flex-row justify-between">
                        <h1 class="text-2xl md:text-3xl mt-2 md:mt-0 font-extrabold text-abugelap">Request</h1>
                        <a href="{{ url('createrq') }}" class="btn bg-black text-white font-bold hover:bg-gray-700"><i class="fa-solid fa-plus"></i> Create Request</a>
                    </div>
                    <div class="grid md:grid-cols-4 grid-rows-1">
                        <div class="flex flex-col w-full">
                            <h1 class="font-bold text-abu mt-2 ml-2"><a href="/mrq" class="hover:border-abu hover:border-b-2">Urgent <i class="fa-solid fa-up-right-from-square"></i></a></h1>
                            @foreach ($urgent as $urgents)
                            <a href="/detailrequest/{{ $urgents->id }}" class="mx-2">
                                <div class="card bg-white rounded-xl mt-3">
                                    <div class="absolute right-0 m-3 badge badge-error rounded-[2px] text-white">{{ $urgents->status->name }}</div>
                                    <div class="card-body">
                                        <h1 class="card-title font-bold">
                                            {{ $urgents->judul }} 
                                        </h1>
                                    </div>
                                    <div class="card-actions justify-start pl-7">
                                        <div class="badge badge-secondary mb-3">{{ $urgents->outlet->nm_out }}</div>
                                    </div>
                                    <div class="card-actions justify-start pl-7">
                                        <div class="badge badge-primary mb-3 text-white">{{ $urgents->tag->name }}</div>
                                        <div class="badge badge-neutral mb-3 text-white">{{ $urgents->kategori->name }}</div>
                                    </div>
                                    <div class="justify-start pl-7">
                                        <div class="mb-3 text-xs"><i class="fa-solid fa-calendar"></i> {{ $urgents->updated_at }}</div>
                                    </div>
                                </div>
                            </a>
                            @endforeach
                        </div>
                        <div class="flex flex-col w-full">
                            <h1 class="font-bold text-abu mt-2 ml-2"><a href="/mrq" class="hover:border-abu hover:border-b-2">Open <i class="fa-solid fa-up-right-from-square"></i></a></h1>
                            @foreach ($open as $opens)
                            <a href="/detailrequest" class="mx-2">
                                <div class="card bg-white rounded-xl mt-3">
                                    <div class="absolute right-0 m-3 badge badge-info rounded-[2px] text-white">{{ $opens->status->name }}</div>
                                    <div class="card-body">
                                        <h1 class="card-title font-bold">
                                            {{ $opens->judul }}
                                        </h1>
                                    </div>
                                    <div class="card-actions justify-start pl-7">
                                        <div class="badge badge-secondary mb-3">{{ $opens->outlet->nm_out }}</div>
                                    </div>
                                    <div class="card-actions justify-start pl-7">
                                        <div class="badge badge-primary mb-3 text-white">{{ $opens->tag->name }}</div>
                                        <div class="badge badge-neutral mb-3 text-white">{{ $opens->kategori->name }}</div>
                                    </div>
                                    <div class="justify-start pl-7">
                                        <div class="mb-3 text-xs"><i class="fa-solid fa-calendar"></i> {{ $opens->created_at }}</div>
                                    </div>
                                </div>
                            </a>
                            @endforeach
                        </div>
                        <div class="flex flex-col w-full">
                            <h1 class="font-bold text-abu mt-2 ml-2"><a href="/mrq" class="hover:border-abu hover:border-b-2">Progress <i class="fa-solid fa-up-right-from-square"></i></a></h1>
                            @foreach ($progress as $prog)
                            <a href="/detailrequest" class="mx-2">
                                <div class="card bg-white rounded-xl mt-3">
                                    <div class="absolute right-0 m-3 badge badge-warning rounded-[2px] text-white">{{ $prog->status->name }}</div>
                                    <div class="card-body">
                                        <h1 class="card-title font-bold">
                                            {{ $prog->judul }} 
                                        </h1>
                                    </div>
                                    <div class="card-actions justify-start pl-7">
                                        <div class="badge badge-secondary mb-3">{{ $prog->outlet->nm_out }}</div>
                                    </div>
                                    <div class="card-actions justify-start pl-7">
                                        <div class="badge badge-primary mb-3 text-white">{{ $prog->tag->name }}</div>
                                        <div class="badge badge-neutral mb-3 text-white">{{ $prog->kategori->name }}</div>
                                    </div>
                                    <div class="justify-start pl-7">
                                        <div class="mb-3 text-xs"><i class="fa-solid fa-calendar"></i> {{ $prog->updated_at }}</div>
                                    </div>
                                </div>
                            </a>
                            @endforeach
                        </div>
                        <div class="flex flex-col w-full">
                            <h1 class="font-bold text-abu mt-2 ml-2"><a href="/mrq" class="hover:border-abu hover:border-b-2">Closed <i class="fa-solid fa-up-right-from-square"></i></a></h1>
                            @foreach ($closed as $close)
                            <a href="/detailrequest" class="mx-2">
                                <div class="card bg-white rounded-xl mt-3">
                                    <div class="absolute right-0 m-3 badge badge-success rounded-[2px] text-white">{{ $close->status->name }}</div>
                                    <div class="card-body">
                                        <h1 class="card-title font-bold">
                                            {{ $close->judul }} 
                                        </h1>
                                    </div>
                                    <div class="card-actions justify-start pl-7">
                                        <div class="badge badge-secondary mb-3">{{ $close->outlet->nm_out }}</div>
                                    </div>
                                    <div class="card-actions justify-start pl-7">
                                        <div class="badge badge-primary mb-3 text-white">{{ $close->tag->name }}</div>
                                        <div class="badge badge-neutral mb-3 text-white">{{ $close->kategori->name }}</div>
                                    </div>
                                    <div class="justify-start pl-7">
                                        <div class="mb-3 text-xs"><i class="fa-solid fa-calendar"></i> {{ $close->updated_at }}</div>
                                    </div>
                                </div>
                            </a>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
