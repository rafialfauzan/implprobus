@php
    use Carbon\Carbon;
    $rentang = Carbon::parse($datarq->start_date)->diffInDays(Carbon::parse($datarq->end_date));
    $rqid = $datarq->user_id;
    $aid = Auth::user()->id;
    $ait = Auth::user()->tag_id;
    $stid = $datarq->status_id;
    $ust = Auth::user()->usertype;

    if ($stid == 1) {
        $bg = "badge-error";
    } elseif ($stid == 2) {
        $bg = "badge-info";
    } elseif ($stid == 3) {
        $bg = "badge-warning";
    } else {
        $bg = "badge-success";
    }
    
@endphp
<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="overflow-hidden sm:rounded-lg">
                <div class="p-6">
                    <div class="flex flex-col md:px-40">
                        <div class="mb-5 flex flex-row justify-between">
                            @if ($rqid == $aid || $ust == 'admin')
                            <a href="/editrq/{{ $datarq->id }}" class="btn btn-neutral mt-3 bg-black rounded-[28px]"><i class="fa-solid fa-pen"></i> Edit Request</a> 
                            @endif
                            <a href="{{ url()->previous() }}" class="text-5xl text-black mt-2 hover:text-gray-700"><i class="fa-solid fa-circle-arrow-left"></i></a>
                        </div>
                        <div class="bg-white rounded-[28px] shadow-md card">
                            @if ($stid != 4)
                            @if ($ait == $datarq->tag_id || $aid == $datarq->user_id)
                            
                            <div class="dropdown dropdown-top absolute right-0 bottom-0 m-3 rounded-[16px]">
                                <div tabindex="0" role="button" class="btn m-1">Change Status</div>
                                <ul tabindex="0" class="dropdown-content menu bg-base-100 rounded-box z-[1] w-40 p-2 shadow">
                                    @if ($datarq->status_id == 1 || $datarq->status_id == 2)
                                    
                                    <li><a href="/updatestatus/{{ $datarq->id }}/3" class="btn btn-warning text-white my-1 {{ $datarq->status_id == 3 ? 'hidden' : '' }}">Progress</a></li> 
                                    
                                    @else
                                    
                                    <li><a href="/updatestatus/{{ $datarq->id }}/4" class="btn btn-success text-white my-1 {{ $datarq->status_id == 4 ? 'hidden' : '' }}">Closed</a></li>
                                    
                                    @endif
                                    {{-- <li><a href="/updatestatus/{{ $datarq->id }}/1" class="btn btn-error text-white my-1 {{ $datarq->status_id == 1 ? 'hidden' : '' }}">Urgent</a></li>
                                    <li><a href="/updatestatus/{{ $datarq->id }}/2" class="btn btn-info text-white my-1 {{ $datarq->status_id == 2 ? 'hidden' : '' }}">Open</a></li> --}}
                                </ul>
                            </div>
                            @endif
                            @endif
                            <div class="absolute right-0 md:m-5 m-3 badge {{ $bg }} badge-lg rounded text-white">{{ $datarq->status->name }}</div>
                            <div class="card-body">
                                <h1 class="card-title text-2xl font-bold">{{ $datarq->judul }}</h1>
                                <article>
                                    {!! $datarq->deskripsi !!}
                                </article>
                                <div class="mb-5 flex flex-wrap rounded-md image-container">
                                    @foreach ($dataimg as $img)
                                    <div class="h-[200px] w-1/2 md:w-1/3 border shadow-sm overflow-hidden cursor-pointer rounded-xl image" onclick="my_modal_3.showModal()">
                                        <img src="/img/{{ $img->image }}" alt="" class="rounded-xl h-full w-full object-cover hover:w-[120%] hover:h-[120%] ease-in-out duration-300">
                                    </div>
                                    @endforeach
                                </div>
                                <dialog id="my_modal_3" class="modal">
                                    <div class="modal-box w-11/12 max-w-5xl">
                                        <form method="dialog">
                                            <button class="btn btn-sm btn-circle btn-error absolute right-2 top-2 text-white">✕</button>
                                        </form>
                                        <img src="{{ asset('img/tes5.jpg') }}" alt="" class="w-full">
                                    </div>
                                </dialog>
                                <div class="card-actions justify-start">
                                    <div class="badge badge-secondary badge-lg text-white">{{ $datarq->outlet->nm_out }}</div>
                                </div>
                                <div class="card-actions justify-start">
                                    <div class="badge badge-primary badge-lg text-white">{{ $datarq->tag->name }}</div>
                                    <div class="badge badge-neutral badge-lg text-white">{{ $datarq->kategori->name }}</div>
                                </div>
                                <div>
                                    <p class="text-sm font-bold"><i class="fa-solid fa-hourglass-start"></i> Deadline: {{ Carbon::create($datarq->start_date)->toFormattedDayDateString() }} - {{ Carbon::create($datarq->end_date)->toFormattedDayDateString() }} 
                                    @if ($rentang == 1)
                                        ({{ $rentang }} day)
                                    @else
                                        ({{ $rentang }} days) 
                                    @endif</p>
                                </div>
                                <div>
                                    <p class="text-sm font-bold"><i class="fa-solid fa-calendar"></i> Posted: {{ Carbon::create($datarq->created_at)->toFormattedDayDateString() }} ({{ $datarq->created_at->diffForHumans() }})</p>
                                </div>
                                <div>
                                    <p class="text-sm font-bold">
                                        <i class="fa-solid fa-file-pen"></i> Updated: {{ $datarq->updated_at->toFormattedDayDateString() }} ({{ $datarq->updated_at->diffForHumans() }})
                                    </p>
                                </div>
                                <div>
                                    <p class="text-sm font-bold"><i class="fa-solid fa-user-pen"></i> {{ $datarq->user->name }}</p>
                                </div>
                            </div>
                        </div>
                        @if ($stid != 1 && $stid != 2)
                            
                        @if ($datarq->user_id != $aid && $ait == $datarq->tag_id)
                        <div>
                            <a href="/createus/{{ $datarq->id }}"><button type="button" class="btn btn-neutral bg-black mt-3 w-full text-white rounded-3xl"><i class="fa-solid fa-plus"></i> Create Update System</button></a>
                        </div> 
                        @endif
                        @endif
                        {{-- <details class="collapse bg-white mt-5 shadow-lg">
                            <summary class="collapse-title text-xl font-medium">Status Log</summary>
                            <div class="collapse-content">
                              <p>content</p>
                              <p>content</p>
                              <p>content</p>
                              <p>content</p>
                              <p>content</p>
                              <p>content</p>
                              <p>content</p>
                            </div>
                        </details> --}}
                        @if (count($dataus) >= 1)
                        <details class="collapse bg-white mt-5 shadow-lg">
                            <summary class="collapse-title text-xl font-bold">Update System</summary>
                            <div class="collapse-content">
                                <div class="overflow-x-auto">
                                    <table class="table">
                                      
                                      <tbody>
                                        <!-- row 1 -->
                                        @foreach ($dataus as $us)
                                        <tr>
                                          <th><div class="badge badge-accent badge-outline mx-1">{{ $us->user->name }}</div></th>
                                          <td><a href="/detailus/{{ $us->id }}" class="hover:underline font-bold text-base">{{ $us->judul }} <i class="fa-solid fa-up-right-from-square"></i></a></td>
                                          <td>{{ $us->created_at->diffForHumans() }}</td>
                                        </tr>
                                        @endforeach
                                      </tbody>
                                    </table>
                                  </div>
                                
                                  {{-- <p class="my-1"> </p> --}}
                            </div>
                        </details>
                        @endif
                        <div class="divider font-bold text-abu">
                            COMMENT
                        </div>
                        <div>
                            @if (count($komentar) >= 1)
                            @foreach ($komentar as $komen)
                            <div class="chat {{ $komen->user_id == $aid ? 'chat-end' : 'chat-start' }}">
                                <div class="chat-header">
                                  {{ $komen->user->name }}
                                  <time class="text-xs opacity-50">{{ $komen->created_at->diffForHumans() }}</time>
                                </div>
                                <div class="chat-bubble bg-white text-black shadow-lg border">
                                    {!! $komen->body !!}
                                </div>
                                @if ($komen->user_id == $aid)
                                <div class="chat-footer opacity-50"><a data-confirm-delete="true" href="/deletekomen/{{ $komen->id }}" class="hover:underline">Delete Comment</a></div>
                                @endif
                            </div>
                            @endforeach
                            @endif
                        </div>
                        <div class="my-5 bg-white shadow-lg rounded-xl p-2">
                            <form action="/komentar/{{ $datarq->id }}" method="POST">
                                @csrf
                                <input type="hidden" id="comment" name="comment" value="{{ old('comment') }}">
                                <trix-editor trix-attachment-remove input="comment"></trix-editor>
                                <button type="submit" class="btn btn-neutral bg-black mt-3 w-full text-white">Comment <i class="fa-solid fa-paper-plane"></i></button>
                            </form>
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