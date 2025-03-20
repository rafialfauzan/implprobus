<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="overflow-hidden sm:rounded-lg">
                <div class="p-6">
                    <div class="flex flex-col md:px-40">
                        <div class="card bg-base-100 shadow-lg mb-10">
                            <figure class="h-40">
                              <img
                                src="https://img.daisyui.com/images/stock/photo-1625726411847-8cbb60cc71e6.webp"
                                alt="City" class="w-full"/>
                            </figure>
                            <div class="avatar w-36 md:ml-10 md:mt-12 md:absolute mx-auto">
                                <div class="rounded-full border-4 border-white">
                                  <img src="/img/material/user1.png" />
                                </div>
                            </div>
                            <div class="card-body flex md:flex-row flex-col">
                              <div class="px-4 w-full md:justify-items-start justify-items-center mb-3">
                                
                                <h2 class="card-title">{{ Auth::user()->name }}</h2>
                                <p class="text-justify my-2"><i class="fa-solid fa-envelope"></i> {{ Auth::user()->email }}</p>
                                <a href="/editprofile/{{ Auth::user()->id }}"><button class="btn btn-sm btn-neutral rounded-2xl text-white">edit profile <i class="fa-solid fa-pen-to-square"></i></button></a>
                                <a href="/editpassacc"><button class="btn btn-sm btn-neutral rounded-2xl text-white">change password <i class="fa-solid fa-key"></i></button></a>
                                
                              </div>
                              <div class="px-4 w-full md:justify-items-end justify-items-center content-center">
                                <p>User Tag <i class="fa-solid fa-user-tag"></i></p>
                                <div class="badge badge-outline badge-accent mb-4">{{ Auth::user()->tag->name }}</div>
                                <p>User Type <i class="fa-regular fa-address-card"></i></p>
                                <div class="badge badge-outline badge-accent">{{ Auth::user()->usertype }}</div>
                              </div>
                            </div>
                          </div>
                          <div class="bg-white overflow-hidden shadow-lg rounded-2xl">
                            <div class="p-6 bg-white border-b border-gray-200">
                                <div class="justify-between flex flex-row">
                                    <p class="text-center text-3xl font-bold">Request List</p>
                                </div>
                                <div class="mt-5 mb-10">
                                    <a href="{{ route('createrq') }}" class="bg-black font-bold text-white px-2 py-2 rounded-md border-black border-solid border-2 hover:bg-white hover:text-black transition delay-50 duration-300"><i class="fa-solid fa-plus"></i> Create new request</a>
                                </div>
                                <div class="mt-5">
                                    <table class="table-fixed w-full">
                                        <thead class="bg-gray-300 text-black">
                                            <tr>
                                                <th class="p-3 text-sm font-bold tracking-wide text-left rounded-tl-xl">Title</th>
                                                <th class="p-3 text-sm font-bold tracking-wide text-left">Status</th>
                                                <th class="p-3 text-sm font-bold tracking-wide text-left rounded-tr-xl">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($req as $rq)
                                            @php
                                                if ($rq->status_id == 1) {
                                                    $bg = "badge-error";
                                                } elseif ($rq->status_id == 2) {
                                                    $bg = "badge-info";
                                                } elseif ($rq->status_id == 3) {
                                                    $bg = "badge-warning";
                                                } else {
                                                    $bg = "badge-success";
                                                }
                                            @endphp
                                            <tr>
                                                <td class="p-3 text-lg text-abugelap"><a href="/detailrequest/{{ $rq->id }}" class="hover:underline">{{ Str::limit($rq->judul, 20, '...') }}</a></td>
                                                <td class="p-3 text-sm text-abugelap"><div class="badge {{ $bg }} badge-lg rounded text-white">{{ $rq->status->name }}</div></td>
                                                <td class="p-3 text-xl text-abugelap"><a class="hover:text-black m-2" href="/editrq/{{ $rq->id }}"><i class="fa-solid fa-pen"></i></a>
                                                    <a onclick="return confirm('Are you sure you want to delete this data?')" class="hover:text-black m-2" href="/deletereq/{{ $rq->id }}"><i class="fa-solid fa-trash"></i></a></td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                    <h1 class="font-bold text-abu mt-2 ml-2 "><a href="/myrequest" class="hover:border-abu hover:border-b-2 transition delay-50 duration-300">View all Request <i class="fa-solid fa-up-right-from-square"></i></a></h1>
                                </div>
                                <div class="divider"></div>
                                <div class="justify-between flex flex-row">
                                    <p class="text-center text-3xl font-bold">Update System List</p>
                                </div>
                                {{-- <div class="mt-5 mb-10">
                                    <a href="{{ route('createtag') }}" class="bg-black font-bold text-white px-2 py-2 rounded-md border-black border-solid border-2 hover:bg-white hover:text-black transition delay-50 duration-300"><i class="fa-solid fa-plus"></i> Create new update system</a>
                                </div> --}}
                                <div class="mt-5">
                                    <table class="table-fixed w-full">
                                        <thead class="bg-gray-300 text-black">
                                            <tr>
                                                <th class="p-3 text-sm font-bold tracking-wide text-left rounded-tl-xl">Title</th>
                                                <th class="p-3 text-sm font-bold tracking-wide text-left">from Request</th>
                                                <th class="p-3 text-sm font-bold tracking-wide text-left rounded-tr-xl">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($updt as $up)
                                                <tr>
                                                    <td class="p-3 text-lg text-abugelap"><a href="/detailus/{{ $up->id }}" class="hover:underline">{{ Str::limit($up->judul, 25, '...') }}</a></td>
                                                    <td class="p-3 text-lg text-abugelap"><a href="#" class="hover:underline">Lorem ipsum dolor sit amet...</a></td>
                                                    <td class="p-3 text-xl text-abugelap"><a class="hover:text-black m-2" href="/editus/{{ $up->id }}"><i class="fa-solid fa-pen"></i></a>
                                                        <a onclick="return confirm('Are you sure you want to delete this data?')" class="hover:text-black m-2" href="#"><i class="fa-solid fa-trash"></i></a></td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                    <h1 class="font-bold text-abu mt-2 ml-2"><a href="/myupdatesystem" class="hover:border-abu hover:border-b-2 transition delay-50 duration-300">View all Update System <i class="fa-solid fa-up-right-from-square"></i></a></h1>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>