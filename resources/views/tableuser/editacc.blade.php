<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <div class="my-5">
                        <a href="{{ url()->previous() }}" class="bg-white font-bold text-black px-2 py-2 rounded-md border-black border-solid border-2 hover:bg-black hover:text-white transition delay-50 duration-300">« Back</a>
                    </div>
                    <div class="flex-col">
                        <div>
                            <p class="text-center text-xl font-bold">Edit account</p>
                        </div>
                        <form method="POST" action="">
                            @csrf
                
                            <!-- Name -->
                            <div class="mt-5">
                                <x-label for="name" :value="__('Name')" />
                
                                <x-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus />
                            </div>
                
                            <!-- Email Address -->
                            <div class="mt-4">
                                <x-label for="email" :value="__('Email')" />
                
                                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required />
                            </div>
                            
                            <!-- Tag -->
                            <div class="mt-5">
                                <x-label for="tag" :value="__('Tag')" />
                
                                {{-- <x-input id="tag" class="block mt-1 w-full" type="text" name="tag" :value="old('tag')" required autofocus /> --}}
                                <select name="tag" id="tag" class="rounded-lg w-full mt-1 shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
                                    @foreach ($tag as $item)
                                    <option value="{{ $item->id }}">{{ $item->name }}</option> 
                                    @endforeach
                                </select>
                            </div>

                            <!-- User Type -->
                            <div class="mt-5">
                                <x-label for="usertype" :value="__('User Type')" />
                
                                {{-- <x-input id="usertype" class="block mt-1 w-full" type="text" name="usertype" :value="old('usertype')" required autofocus /> --}}
                                <select name="tag" id="tag" class="rounded-lg w-full mt-1 shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
                                    <option value="admin">admin</option>
                                    <option value="supervisor">supervisor</option>
                                    <option value="user">user</option>
                                </select>
                            </div>
                
                            <div class="flex items-center justify-end mt-4">
                                {{-- <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                                    {{ __('Already registered?') }}
                                </a> --}}
                
                                <x-button class="ml-4">
                                    {{ __('Edit') }}
                                </x-button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>