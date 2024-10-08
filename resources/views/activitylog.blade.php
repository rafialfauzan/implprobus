<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <div class="flex flex-row justify-between my-5">
                        <h1 class="text-xl md:text-3xl font-bold">Activity Log</h1>
                        <div class="join">
                            <input class="join-item input input-bordered" type="text" placeholder="Search Request">
                            <button class="btn btn-neutral join-item"><i class="fa-solid fa-magnifying-glass"></i></button>
                        </div>
                    </div>
                    <table class="table-auto w-full">
                        <thead class="bg-gray-300 text-black">
                            <tr>
                                <th class="p-3 text-sm font-bold tracking-wide text-center rounded-tl-xl">No</th>
                                <th class="p-3 text-sm font-bold tracking-wide text-center">Request Name</th>
                                <th class="p-3 text-sm font-bold tracking-wide text-center">Status Changes</th>
                                <th class="p-3 text-sm font-bold tracking-wide text-center">User</th>
                                <th class="p-3 text-sm font-bold tracking-wide text-center rounded-tr-xl">Date</th>
                            </tr>
                        </thead>
                        <tbody>
                                <tr>
                                    <td class="p-3 text-sm text-abugelap text-center">1</td>
                                    <td class="p-3 text-sm text-abugelap">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quibusdam, tempore!</td>
                                    <td class="p-3 text-sm text-abugelap text-center">Progress</td>
                                    <td class="p-3 text-sm text-abugelap text-center">{{ Auth::user()->name }}</td>
                                    <td class="p-3 text-sm text-abugelap text-center">19 December 2024</td>
                                </tr>
                                <tr>
                                    <td class="p-3 text-sm text-abugelap text-center">2</td>
                                    <td class="p-3 text-sm text-abugelap">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quibusdam, tempore!</td>
                                    <td class="p-3 text-sm text-abugelap text-center">Progress</td>
                                    <td class="p-3 text-sm text-abugelap text-center">{{ Auth::user()->name }}</td>
                                    <td class="p-3 text-sm text-abugelap text-center">19 December 2024</td>
                                </tr>
                                <tr>
                                    <td class="p-3 text-sm text-abugelap text-center">3</td>
                                    <td class="p-3 text-sm text-abugelap">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quibusdam, tempore!</td>
                                    <td class="p-3 text-sm text-abugelap text-center">Progress</td>
                                    <td class="p-3 text-sm text-abugelap text-center">{{ Auth::user()->name }}</td>
                                    <td class="p-3 text-sm text-abugelap text-center">19 December 2024</td>
                                </tr>
                                <tr>
                                    <td class="p-3 text-sm text-abugelap text-center">4</td>
                                    <td class="p-3 text-sm text-abugelap">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quibusdam, tempore!</td>
                                    <td class="p-3 text-sm text-abugelap text-center">Progress</td>
                                    <td class="p-3 text-sm text-abugelap text-center">{{ Auth::user()->name }}</td>
                                    <td class="p-3 text-sm text-abugelap text-center">19 December 2024</td>
                                </tr>
                                <tr>
                                    <td class="p-3 text-sm text-abugelap text-center">5</td>
                                    <td class="p-3 text-sm text-abugelap">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quibusdam, tempore!</td>
                                    <td class="p-3 text-sm text-abugelap text-center">Progress</td>
                                    <td class="p-3 text-sm text-abugelap text-center">{{ Auth::user()->name }}</td>
                                    <td class="p-3 text-sm text-abugelap text-center">19 December 2024</td>
                                </tr>
                                <tr>
                                    <td class="p-3 text-sm text-abugelap text-center">6</td>
                                    <td class="p-3 text-sm text-abugelap">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quibusdam, tempore!</td>
                                    <td class="p-3 text-sm text-abugelap text-center">Progress</td>
                                    <td class="p-3 text-sm text-abugelap text-center">{{ Auth::user()->name }}</td>
                                    <td class="p-3 text-sm text-abugelap text-center">19 December 2024</td>
                                </tr>
                                <tr>
                                    <td class="p-3 text-sm text-abugelap text-center">7</td>
                                    <td class="p-3 text-sm text-abugelap">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quibusdam, tempore!</td>
                                    <td class="p-3 text-sm text-abugelap text-center">Progress</td>
                                    <td class="p-3 text-sm text-abugelap text-center">{{ Auth::user()->name }}</td>
                                    <td class="p-3 text-sm text-abugelap text-center">19 December 2024</td>
                                </tr>
                                <tr>
                                    <td class="p-3 text-sm text-abugelap text-center">8</td>
                                    <td class="p-3 text-sm text-abugelap">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quibusdam, tempore!</td>
                                    <td class="p-3 text-sm text-abugelap text-center">Progress</td>
                                    <td class="p-3 text-sm text-abugelap text-center">{{ Auth::user()->name }}</td>
                                    <td class="p-3 text-sm text-abugelap text-center">19 December 2024</td>
                                </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>