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
                    <div class="mt-5">
                        <a href="{{ route('createkategori') }}" class="bg-white font-bold text-black px-2 py-2 rounded-md border-black border-solid border-2 hover:bg-black hover:text-white transition delay-50 duration-300"><i class="fa-solid fa-plus"></i> Create new category</a>
                    </div>
                    <div class="mt-5">
                        <div class="my-10">
                            <p class="text-center text-xl font-bold">Category List</p>
                        </div>
                        <table class="table-fixed w-full">
                            <thead class="bg-gray-50 border-b-2 border-black">
                                <tr>
                                    <th class="p-3 text-sm font-bold tracking-wide text-left">Name</th>
                                    <th class="p-3 text-sm font-bold tracking-wide text-left">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($kategori as $item)
                                    <tr>
                                        <td class="p-3 text-sm text-gray-700">{{ $item->name }}</td>
                                        <td class="p-3 text-xl text-gray-700"><a class="hover:text-black m-2" href="#"><i class="fa-solid fa-pen"></i></a><a class="hover:text-black m-2" href="#"><i class="fa-solid fa-trash"></i></a></td>
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