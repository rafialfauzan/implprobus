<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <div class="flex flex-row justify-between my-5">
                        <h1 class="text-xl md:text-3xl font-bold">Activity Log</h1>
                    </div>
                    <table class="table-auto w-full">
                        <thead class="bg-gray-300 text-black">
                            <tr>
                                <th class="p-3 text-sm font-bold tracking-wide text-center rounded-tl-xl">Request Name</th>
                                <th class="p-3 text-sm font-bold tracking-wide text-center">Status Changes</th>
                                <th class="p-3 text-sm font-bold tracking-wide text-center">by User</th>
                                <th class="p-3 text-sm font-bold tracking-wide text-center rounded-tr-xl">Date</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($reqlog as $rl)
                                
                            <tr>
                                <td class="p-3 text-sm text-abugelap"><a href="/detailrequest/{{ $rl->request_id }}" class="hover:underline">{{ $rl->request->judul }}</a></td>
                                <td class="p-3 text-sm text-abugelap text-center">{{ $rl->status->name }}</td>
                                <td class="p-3 text-sm text-abugelap text-center">{{ $rl->user->name }}</td>
                                <td class="p-3 text-sm text-abugelap text-center">{{ $rl->created_at->diffForHumans() }}</td>
                            </tr>
                            
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>