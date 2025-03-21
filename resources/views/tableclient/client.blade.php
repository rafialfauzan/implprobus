<x-app-layout>
    {{-- <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Home') }}
        </h2>
    </x-slot> --}}

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    {{-- <div>
                        <p>Welcome to user page {{ Auth::user()->name }}</p>
                    </div> --}}
                    <div class="justify-between flex flex-row">
                        <p class="text-center text-3xl font-bold">Client List</p>
                        <a href="{{ url()->previous() }}" class="text-black hover:text-gray-700 text-3xl"><i class="fa-solid fa-circle-arrow-left"></i></a>
                    </div>
                    <div class="mt-5 mb-20">
                        <a href="{{ route('createclient') }}" class="bg-black font-bold text-white px-2 py-2 rounded-md border-black border-solid border-2 hover:bg-white hover:text-black transition delay-50 duration-300"><i class="fa-solid fa-plus"></i> Create new client</a>
                    </div>
                    <div class="mt-5">
                        <table class="table-fixed w-full">
                            <thead class="bg-gray-300 text-black">
                                <tr>
                                    <th class="p-3 text-sm font-bold tracking-wide text-left rounded-tl-xl">Name</th>
                                    <th class="p-3 text-sm font-bold tracking-wide text-left">Lokasi</th>
                                    <th class="p-3 text-sm font-bold tracking-wide text-left rounded-tr-xl">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($client as $cl)
                                    <tr>
                                        <td class="p-3 text-sm text-abugelap">{{ $cl->nm_out }}</td>
                                        <td class="p-3 text-sm text-abugelap">{{ $cl->lokasi }}</td>
                                        <td class="p-3 text-xl text-abugelap"><a class="hover:text-black m-2" href="/editclient/{{ $cl->id }}"><i class="fa-solid fa-pen"></i></a>
                                            <a class="hover:text-black m-2" href="/deleteclient/{{ $cl->id }}" data-confirm-delete="true"><i class="fa-solid fa-trash"></i></a></td> 
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>