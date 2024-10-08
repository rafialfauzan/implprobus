<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="overflow-hidden sm:rounded-lg">
                <div class="p-6">
                    <div class="flex flex-col md:px-40">
                        <div class="mb-5 flex flex-row justify-between">
                            <a href="/editrq" class="btn btn-neutral mt-3 bg-black rounded-[28px]"><i class="fa-solid fa-pen"></i> Edit Request</a>
                            <a href="{{ url()->previous() }}" class="text-5xl text-black mt-2 hover:text-gray-700"><i class="fa-solid fa-circle-arrow-left"></i></a>
                        </div>
                        <div class="bg-white rounded-[28px] shadow-md card">
                                <div class="dropdown dropdown-top absolute right-0 bottom-0 m-3 rounded-[16px]">
                                    <div tabindex="0" role="button" class="btn m-1">Change Status</div>
                                    <ul tabindex="0" class="dropdown-content menu bg-base-100 rounded-box z-[1] w-40 p-2 shadow">
                                    <li><a>Urgent</a></li>
                                    <li><a>Open</a></li>
                                    <li><a>Progress</a></li>
                                    <li><a>Closed</a></li>
                                    </ul>
                                </div>
                                <div class="absolute right-0 md:m-5 m-3 badge badge-error badge-lg rounded text-white">Urgent</div>
                            <div class="card-body">
                                <h1 class="card-title text-2xl font-bold">Lorem ipsum dolor sit amet consectetur adipisicing elit. Vitae, impedit?</h1>
                                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Consectetur velit obcaecati exercitationem eaque totam in praesentium dolorem. Recusandae deserunt, sint esse voluptates accusantium consectetur! Laudantium voluptates repudiandae perspiciatis atque tenetur?</p>
                                <div class="mb-5 flex flex-wrap rounded-md image-container">
                                    <div class="h-[200px] w-1/2 md:w-1/3 border shadow-sm overflow-hidden cursor-pointer rounded-xl image" onclick="my_modal_3.showModal()">
                                        <img src="{{ asset('img/tes1.jpg') }}" alt="" class="rounded-xl h-full w-full object-cover hover:w-[120%] hover:h-[120%] ease-in-out duration-300">
                                    </div>
                                    <div class="h-[200px] w-1/2 md:w-1/3 border shadow-sm overflow-hidden cursor-pointer rounded-xl image" onclick="my_modal_3.showModal()">
                                        <img src="{{ asset('img/tes2.jpg') }}" alt="" class="rounded-xl h-full w-full object-cover hover:w-[120%] hover:h-[120%] ease-in-out duration-300">
                                    </div>
                                    <div class="h-[200px] w-1/2 md:w-1/3 border shadow-sm overflow-hidden cursor-pointer rounded-xl image" onclick="my_modal_3.showModal()">
                                        <img src="{{ asset('img/tes3.jpg') }}" alt="" class="rounded-xl h-full w-full object-cover hover:w-[120%] hover:h-[120%] ease-in-out duration-300">
                                    </div>
                                    <div class="h-[200px] w-1/2 md:w-1/3 border shadow-sm overflow-hidden cursor-pointer rounded-xl image" onclick="my_modal_3.showModal()">
                                        <img src="{{ asset('img/tes4.jpg') }}" alt="" class="rounded-xl h-full w-full object-cover hover:w-[120%] hover:h-[120%] ease-in-out duration-300">
                                    </div>
                                    <div class="h-[200px] w-1/2 md:w-1/3 border shadow-sm overflow-hidden cursor-pointer rounded-xl image" onclick="my_modal_3.showModal()">
                                        <img src="{{ asset('img/tes5.jpg') }}" alt="" class="rounded-xl h-full w-full object-cover hover:w-[120%] hover:h-[120%] ease-in-out duration-300">
                                    </div>
                                    <div class="h-[200px] w-1/2 md:w-1/3 border shadow-sm overflow-hidden cursor-pointer rounded-xl image" onclick="my_modal_3.showModal()">
                                        <img src="{{ asset('img/tes6.jpg') }}" alt="" class="rounded-xl h-full w-full object-cover hover:w-[120%] hover:h-[120%] ease-in-out duration-300">
                                    </div>
                                </div>
                                <dialog id="my_modal_3" class="modal">
                                    <div class="modal-box w-11/12 max-w-5xl">
                                        <form method="dialog">
                                            <button class="btn btn-sm btn-circle btn-error absolute right-2 top-2 text-white">✕</button>
                                        </form>
                                        <img src="{{ asset('img/tes5.jpg') }}" alt="">
                                    </div>
                                </dialog>
                                <div class="card-actions justify-start">
                                    <div class="badge badge-secondary badge-lg text-white">Burger King</div>
                                </div>
                                <div class="card-actions justify-start">
                                    <div class="badge badge-primary badge-lg text-white">Programmer</div>
                                    <div class="badge badge-neutral badge-lg text-white">PHIS</div>
                                </div>
                                <div>
                                    <p class="text-sm font-bold"><i class="fa-solid fa-hourglass-start"></i> 19 December 2024 - 2 February 2025</p>
                                </div>
                                <div>
                                    <p class="text-sm font-bold"><i class="fa-solid fa-calendar"></i> 19 December 2024 | Updated by {{ Auth::user()->name }}</p>
                                </div>
                                <div>
                                    <p class="text-sm font-bold"><i class="fa-solid fa-user-pen"></i> {{ Auth::user()->name }}</p>
                                </div>
                            </div>
                        </div>
                        <div class="divider font-bold text-abu">
                            COMMENT
                        </div>
                        <div>
                            <div class="chat chat-start w-full">
                                <div class="chat-header">
                                  {{ Auth::user()->name }}
                                  <time class="text-xs opacity-50">2 hours ago</time>
                                </div>
                                <div class="chat-bubble bg-white text-black shadow-lg border w-full">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quasi, officia, possimus id eum hic veniam cum repellat amet, illo nihil consequuntur neque dolor laborum itaque nam a voluptas! Corrupti neque laborum, qui blanditiis architecto reprehenderit quam non magni et! Amet, eaque enim harum incidunt officia ullam sapiente dicta ad voluptatibus eum magni at voluptate iste ipsa illo provident officiis veritatis molestiae quia similique aspernatur ut, cupiditate eos. Assumenda, iste omnis quidem minima sunt recusandae animi ea expedita libero porro? Necessitatibus non fuga nesciunt deserunt nihil quidem aliquid! Autem, iusto, veniam vero fuga, tempore doloremque libero consequatur ipsa provident inventore perspiciatis! <a href="https://probussystem.com" class="hover:underline">https://probussystem.com</a></div>
                            </div>
                        </div>
                        <div class="my-5 grid grid-cols-1">
                            <form action="" method="POST">
                                @csrf
                                {{-- <textarea name="comment" id="comment" rows="2" class="textarea textarea-bordered shadow-md rounded-3xl" placeholder="Type Comment Here"></textarea> --}}
                                <input type="text" class="input input-bordered w-4/5" placeholder="Comment Here">
                                <button type="submit" class="btn btn-neutral bg-black shadow-md w-1/6">Send <i class="fa-solid fa-paper-plane"></i></button>
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
                // document.querySelector('.popup-image').style.display = 'block';
                document.querySelector('.modal-box img').src = image.getAttribute('src');
            }
        });

        // document.querySelector('.popup-image span').onclick = () =>{
        //     document.querySelector('.popup-image').style.display = 'none'; 
        // }
    </script>
</x-app-layout>