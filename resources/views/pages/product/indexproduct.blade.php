<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Adidas</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</head>

<body class="bg-[#FFFBE6] overflow-hidden">

    <div class="flex gap-3 h-[100vh] w-[100vw]">

        @include('component.sidebar')

        <section class="dashboard-main h-full w-[85%] p-3 overflow-y-scroll">
            <div class="dashboard-area bg-white border border-gray-400 p-6 flex flex-col rounded-[0px]">
                <div class="header flex justify-between items-end">
                    <div class="left-header ">
                        <p class="font-bold text-[23px]">Semua Items</p>
                    </div>
                    <div class="card-right-header flex gap-4">
                        <a href="{{ route('product.create') }}">
                            <div class="card border hover:bg-black/5 duration-150 border-black/30 py-3 px-3">
                                <p class="font-bold text-[13px] flex gap-2 items-center">Tambah Items Baru <ion-icon
                                        class="text-[16px]" name="add-circle"></ion-icon>
                                </p>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="main-content-items h-auto flex flex-col pt-10">
                    <div class="cat-search flex justify-between">
                        <div class="cat flex gap-2">
                            <a href="#" class="cat-card bg-black text-white px-2 py-1 font-medium">Shoes</a>
                            <a href="#"
                                class="cat-card bg-[#C9C9C9] hover:bg-black hover:text-white text-white/80 px-2 py-1 font-medium">t-Shirt</a>
                            <a href="#"
                                class="cat-card bg-[#C9C9C9] hover:bg-black hover:text-white text-white/80 px-2 py-1 font-medium">Jerseys</a>
                            <a href="#"
                                class="cat-card bg-[#C9C9C9] hover:bg-black hover:text-white text-white/80 px-2 py-1 font-medium">Jacket</a>
                            <a href="#"
                                class="cat-card bg-[#C9C9C9] hover:bg-black hover:text-white text-white/80 px-2 py-1 font-medium">Hat</a>
                        </div>
                        <form>
                            <div class="inputgroup flex items-center">
                                <input name="name" class="px-3 py-1 border-l border-t border-b border-gray-400/50 "
                                    type="text" value="{{ request('name') }}" placeholder="Cari Items...">
                                <div class="inputgroup-append">
                                    <button
                                        class=" text-white/40  hover:text-white bg-black border border-gray-400/50  font-semibold py-1 px-2"
                                        type="submit">Search</button>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="main-items flex flex-wrap gap-3 pt-5">
                        @foreach ( $items as $barang)
                        <div class="card flex flex-col gap-2 bg-[#FFFBE6] border border-black p-3">
                            <div class="img-area">
                                @if ($barang->image)
                                    <img src="{{ asset('storage/product/'.$barang->image) }}" width="340" alt="imageitems">
                                @else
                                    <span>No Image</span>
                                @endif
                            </div>
                            <p class="font-light text-[20px]">{{ $barang->category }}</p>
                            <div class="price-name">
                                <p class="text-[30px]">{{ $barang->name }}</p>
                                <p class="text-[25px]">{{ 'Rp ' . number_format($barang->price, 0, ',', '.') }}</p>
                            </div>
                            <div class="actionbtn flex gap-1 pt-2 items-center">
                                <a href="" class="bg-black text-white py-1 px-2">Edit</a>
                                <div class="bullet"></div>
                                <a href="" class="bg-red-600 text-white py-1 px-2">Delete</a>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </section>
    </div>





</body>

</html>
