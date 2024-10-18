<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-4 lg:px-6">
            <div class=" overflow-hidden sm:rounded-lg">
                <div class="p-3">
                   <div class="divider">
                    <p class="font-bold text-abu">REQUEST</p>
                   </div>
                    <div class="grid md:grid-cols-4 grid-rows-1">
                        <div class="flex flex-col w-full">
                            <h1 class="font-bold text-abu mt-2 ml-2"><a href="/myproc/1" class="hover:border-abu hover:border-b-2">Urgent <i class="fa-solid fa-up-right-from-square"></i></a></h1>
                            @if (count($urgent) >= 1)
                                @foreach ($urgent as $ur)
                                <a href="/detailrequest/{{ $ur->id }}" class="mx-2">
                                    <div class="card bg-white rounded-xl mt-3">
                                        <div class="absolute right-0 m-3 badge badge-error rounded-[2px] text-white">Urgent</div>
                                        <div class="card-body">
                                            <h1 class="card-title font-bold">
                                                {{ $ur->judul }} 
                                            </h1>
                                        </div>
                                        <div class="card-actions justify-start pl-7">
                                            <div class="badge badge-secondary mb-3">{{ $ur->outlet->nm_out }}</div>
                                        </div>
                                        <div class="card-actions justify-start pl-7">
                                            <div class="badge badge-primary mb-3 text-white">{{ $ur->tag->name }}</div>
                                            <div class="badge badge-neutral mb-3 text-white">{{ $ur->kategori->name }}</div>
                                        </div>
                                        <div class="justify-start pl-7">
                                            <div class="mb-3 text-xs"><i class="fa-solid fa-calendar"></i> Update: {{ $ur->updated_at->toFormattedDayDateString() }} ({{ $ur->updated_at->diffForHumans() }})</div>
                                        </div>
                                    </div>
                                </a> 
                                @endforeach
                            @endif
                        </div>
                        <div class="flex flex-col w-full">
                            <h1 class="font-bold text-abu mt-2 ml-2"><a href="/myproc/2" class="hover:border-abu hover:border-b-2">Open <i class="fa-solid fa-up-right-from-square"></i></a></h1>
                            @if (count($open) >= 1)
                                @foreach ($open as $op)
                                <a href="/detailrequest/{{ $op->id }}" class="mx-2">
                                    <div class="card bg-white rounded-xl mt-3">
                                        <div class="absolute right-0 m-3 badge badge-info rounded-[2px] text-white">Open</div>
                                        <div class="card-body">
                                            <h1 class="card-title font-bold">
                                                {{ $op->judul }}
                                            </h1>
                                        </div>
                                        <div class="card-actions justify-start pl-7">
                                            <div class="badge badge-secondary mb-3">{{ $op->outlet->nm_out }}</div>
                                        </div>
                                        <div class="card-actions justify-start pl-7">
                                            <div class="badge badge-primary mb-3 text-white">{{ $op->tag->name }}</div>
                                            <div class="badge badge-neutral mb-3 text-white">{{ $op->kategori->name }}</div>
                                        </div>
                                        <div class="justify-start pl-7">
                                            <div class="mb-3 text-xs"><i class="fa-solid fa-calendar"></i> Update: {{ $op->updated_at->toFormattedDayDateString() }} ({{ $op->updated_at->diffForHumans() }})</div>
                                        </div>
                                    </div>
                                </a>
                                @endforeach
                            @endif
                        </div>
                        <div class="flex flex-col w-full">
                            <h1 class="font-bold text-abu mt-2 ml-2"><a href="/myproc/3" class="hover:border-abu hover:border-b-2">Progress <i class="fa-solid fa-up-right-from-square"></i></a></h1>
                            @if (count($progress) >= 1)
                                @foreach ($progress as $pr)
                                <a href="/detailrequest/{{ $pr->id }}" class="mx-2">
                                    <div class="card bg-white rounded-xl mt-3">
                                        <div class="absolute right-0 m-3 badge badge-warning rounded-[2px] text-white">Progress</div>
                                        <div class="card-body">
                                            <h1 class="card-title font-bold">
                                                {{ $pr->judul }} 
                                            </h1>
                                        </div>
                                        <div class="card-actions justify-start pl-7">
                                            <div class="badge badge-secondary mb-3">{{ $pr->outlet->nm_out }}</div>
                                        </div>
                                        <div class="card-actions justify-start pl-7">
                                            <div class="badge badge-primary mb-3 text-white">{{ $pr->tag->name }}</div>
                                            <div class="badge badge-neutral mb-3 text-white">{{ $pr->kategori->name }}</div>
                                        </div>
                                        <div class="justify-start pl-7">
                                            <div class="mb-3 text-xs"><i class="fa-solid fa-calendar"></i> Update: {{ $pr->updated_at->toFormattedDayDateString() }} ({{ $pr->updated_at->diffForHumans() }})</div>
                                        </div>
                                    </div>
                                </a>   
                                @endforeach
                            @endif
                        </div>
                        <div class="flex flex-col w-full">
                            <h1 class="font-bold text-abu mt-2 ml-2"><a href="/myproc/4" class="hover:border-abu hover:border-b-2">Closed <i class="fa-solid fa-up-right-from-square"></i></a></h1>
                            @if (count($closed) >= 1)
                                @foreach ($closed as $cl)
                                <a href="/detailrequest/{{ $cl->id }}" class="mx-2">
                                    <div class="card bg-white rounded-xl mt-3">
                                        <div class="absolute right-0 m-3 badge badge-success rounded-[2px] text-white">Closed</div>
                                        <div class="card-body">
                                            <h1 class="card-title font-bold">
                                                {{ $cl->judul }} 
                                            </h1>
                                        </div>
                                        <div class="card-actions justify-start pl-7">
                                            <div class="badge badge-secondary mb-3">{{ $cl->outlet->nm_out }}</div>
                                        </div>
                                        <div class="card-actions justify-start pl-7">
                                            <div class="badge badge-primary mb-3 text-white">{{ $cl->tag->name }}</div>
                                            <div class="badge badge-neutral mb-3 text-white">{{ $cl->kategori->name }}</div>
                                        </div>
                                        <div class="justify-start pl-7">
                                            <div class="mb-3 text-xs"><i class="fa-solid fa-calendar"></i> Update: {{ $cl->updated_at->toFormattedDayDateString() }} ({{ $cl->updated_at->diffForHumans() }})</div>
                                        </div>
                                    </div>
                                </a> 
                                @endforeach
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
