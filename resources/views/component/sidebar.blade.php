<section class="sidebar h-full w-[15%] p-3">
    <div class="sidebar-area h-full flex flex-col justify-between">
        <div class="top flex flex-col">
            <p class="font-bold text-[25px]">Adidas Store</p>
            <div class="list-over-list mt-5 flex flex-col">
                <div class="list1 flex flex-col">
                    <p class="font-medium text-[13px] text-gray-500">Main Menu</p>
                    <ul class="mt-2 flex flex-col gap-2">
                        <a href="{{ url('/home') }}">
                            <li class="font-bold gap-2 p-2  flex items-center {{ request()->is('home') ? 'bg-white border border-gray-400' : 'hover:bg-white hover:border hover:border-gray-400 duration-200' }}">
                                <ion-icon name="stats-chart"></ion-icon>Dashboard
                            </li>
                        </a>
                        <a href="{{ route('product.index') }}">
                            <li
                                class="font-bold gap-2 p-2 flex items-center {{ request()->is('product*') ? 'bg-white border border-gray-400' : 'hover:bg-white hover:border hover:border-gray-400 duration-200' }}">
                                <ion-icon name="pricetag"></ion-icon>Items
                            </li>
                        </a>
                    </ul>
                </div>
            </div>
        </div>
        <div class="bottom">
            <div
                class="card-profile border border-gray-400 flex justify-between items-end bg-white px-2 py-3 cursor-pointer">
                <div class="left flex gap-2 items-center">
                    <img src="https://cdn.pixabay.com/photo/2015/10/05/22/37/blank-profile-picture-973460_1280.png"
                        class="rounded-full w-[30px]" alt="">
                    <p class="font-semibold">{{ Auth::user()->name }}</p>
                </div>
                <div class="logout-area flex items-center">
                    <a href="#"
                        onclick="event.preventDefault(); document.getElementById('logout-button').submit()">
                        <ion-icon class="text-red-800 text-[20px]" name="log-out"></ion-icon>
                    </a>
                    <form action="{{ route('logout') }}" method="POST" id="logout-button">@csrf</form>
                </div>
            </div>
        </div>
    </div>
</section>