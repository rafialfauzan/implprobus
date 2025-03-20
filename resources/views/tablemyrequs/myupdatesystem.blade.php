<x-app-layout><div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
            <div class="p-6 bg-white border-b border-gray-200">
                <div class="justify-between flex flex-row">
                    <p class="text-center text-3xl font-bold">Update System List</p>
                    <a href="/profile" class="text-3xl text-black mt-2 hover:text-gray-700"><i class="fa-solid fa-circle-arrow-left"></i></a>
                </div>
                <div class="mt-5 mb-20">
                    <a href="{{ route('createtag') }}" class="bg-black font-bold text-white px-2 py-2 rounded-md border-black border-solid border-2 hover:bg-white hover:text-black transition delay-50 duration-300"><i class="fa-solid fa-plus"></i> Create new update system</a>
                </div>
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
                            @foreach ($updt as $us)
                                <tr>
                                    <td class="p-3 text-lg text-abugelap" ><a href="/detailus/{{ $us->id }}" class="hover:underline">{{ Str::limit($us->judul, 30, '...') }}</a></td>
                                    <td class="p-3 text-lg text-abugelap"><a href="#" class="hover:underline">Lorem ipsum dolor sit amet...</a></td>
                                    <td class="p-3 text-xl text-abugelap"><a class="hover:text-black m-2" href="/edittag/"><i class="fa-solid fa-pen"></i></a>
                                        <a onclick="return confirm('Are you sure you want to delete this data?')" class="hover:text-black m-2" href="/deletetag/"><i class="fa-solid fa-trash"></i></a></td>
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