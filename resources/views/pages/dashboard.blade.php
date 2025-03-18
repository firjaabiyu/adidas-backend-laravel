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
                    <div class="left-header flex flex-col gap-1">
                        <p class="font-bold text-[23px]">Halo, {{ Auth::user()->name }}!</p>
                        <p class="text-black/60 text-[13px] font-semibold">Tanggal <span id="localdate"></span></p>
                    </div>

                </div>

                <div class="main-content mt-8 flex flex-col gap-7">
                    <div class="top-main-content flex justify-between w-full">

                        <div class="card-peforma w-[100%] flex flex-col border border-gray-400/50 rounded-[16px] p-4">
                            <div class="top-peforma flex items-end justify-between">
                                <p class="font-semibold text-[25px]">Peforma Kategori Items</p>
                                <div
                                    class="area-button flex gap-2 rounded-full px-2 py-1 bg-[#EEEDEB] border border-gray-300">
                                    <p
                                        class="cursor-pointer text-[11px] px-3 py-1 border-gray-300 font-semibold bg-white rounded-full">
                                        1 Pekan</p>
                                    <p
                                        class="cursor-pointer text-[11px] px-3 py-1 hover:border-gray-300 font-semibold hover:bg-white duration-200 rounded-full">
                                        1 Bulan</p>
                                    <p
                                        class="cursor-pointer text-[11px] px-3 py-1 hover:border-gray-300 font-semibold hover:bg-white duration-200 rounded-full">
                                        6 Bulan</p>
                                </div>
                            </div>
                            <div class="main-peforma mt-3 gap-2 grid grid-cols-2">
                                <div class="card flex flex-col p-3 gap-16 border border-gray-400/50 rounded-[12px]">
                                    <div class="header-card-peforma flex items-center gap-1">
                                        <ion-icon class="text-[20px] text-black/75" name="body">
                                        </ion-icon>
                                        <p class="font-semibold text-black/75">Topi</p>
                                    </div>
                                    <div class="bottom flex justify-between">
                                        <p class="font-semibold"><span class="text-[30px]">10</span> Pembeli</p>
                                        <div class="right flex items-end gap-3">
                                            <div
                                                class="card text-black/40 px-2 py-1 rounded-[10px] bg-black/20 font-bold">
                                                <p>-- %</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card flex flex-col p-3 gap-16 border border-gray-400/50 rounded-[12px]">
                                    <div class="header-card-peforma flex items-center gap-1">
                                        <ion-icon class="text-[20px] text-black/75" name="shirt"></ion-icon>
                                        <p class="font-semibold text-black/75">Jersey/T-shirt</p>
                                    </div>
                                    <div class="bottom flex justify-between">
                                        <p class="font-semibold"><span class="text-[30px]">100</span> Pembeli</p>
                                        <div class="right flex items-end gap-3">
                                            <div
                                                class="card text-green-800 flex gap-1 items-center px-2 py-1 rounded-[10px] bg-green-500/30 font-bold">
                                                <ion-icon class="rotate-[-45deg]" name="arrow-up"></ion-icon>
                                                <p>8 %</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card flex flex-col p-3 gap-16 border border-gray-400/50 rounded-[12px]">
                                    <div class="header-card-peforma flex items-center gap-1">
                                        <ion-icon class="text-[20px] text-black/75" name="body"></ion-icon>
                                        <p class="font-semibold text-black/75">Jacket</p>
                                    </div>
                                    <div class="bottom flex justify-between">
                                        <p class="font-semibold"><span class="text-[30px]">40</span> Pembeli</p>
                                        <div class="right flex items-end gap-3">
                                            <div
                                                class="card text-red-800 flex gap-1 items-center px-2 py-1 rounded-[10px] bg-red-500/30 font-bold">
                                                <ion-icon class="rotate-45" name="arrow-down"></ion-icon>
                                                <p>2 %</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card flex flex-col p-3 gap-16 border border-gray-400/50 rounded-[12px]">
                                    <div class="header-card-peforma flex items-center gap-1">
                                        <ion-icon class="text-[20px] text-black/75" name="footsteps"></ion-icon>
                                        <p class="font-semibold text-black/75">Sepatu</p>
                                    </div>
                                    <div class="bottom flex justify-between">
                                        <p class="font-semibold"><span class="text-[30px]">200</span> Orang</p>
                                        <div class="right flex items-end gap-3">
                                            <div
                                                class="card text-green-800 flex gap-1 items-center px-2 py-1 rounded-[10px] bg-green-500/30 font-bold">
                                                <ion-icon class="rotate-[-45deg]" name="arrow-up"></ion-icon>
                                                <p>19 %</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="Data-mahasiswa p-4 flex flex-col gap-4 border border-gray400/50 rounded-[16px]">
                        <div class="header flex justify-between">
                            <p class="font-semibold text-[25px]">List User</p>
                            <form>
                                <div class="inputgroup flex items-center">
                                    <input name="name" class="px-3 py-1 border-l border-t border-b border-gray-400/50"
                                        type="text" value="{{ request('name') }}" placeholder="Cari User...">
                                    <div class="inputgroup-append">
                                        <button
                                            class=" text-white/40  hover:text-white bg-black border border-gray-400/50 font-semibold py-1 px-2"
                                            type="submit">Search</button>
                                    </div>
                                </div>
                            </form>
                        </div>

                        <table class="min-w-full border border-gray-400 rounded-[10px] overflow-hidden">

                            <tr class="bg-gray-200 ">
                                <th class="px-4 py-2 text-left font-semibold">Nama</th>
                                <th class="px-4 py-2 text-left font-semibold">Email</th>
                                <th class="px-4 py-2 text-left font-semibold">Phone</th>
                                <th class="px-4 py-2 text-left font-semibold">Role</th>
                                <th class="px-4 py-2 text-center font-semibold"></th>
                            </tr>



                            @foreach ($users as $user)
                            <tr class="border-b ">
                                <td class="px-4 py-2">{{ $user->name }}</td>
                                <td class="px-4 py-2">{{ $user->email }}</td>
                                <td class="px-4 py-2">{{ $user->phone }}</td>
                                <td class="px-4 py-2">
                                    @if ($user->role == 1)
                                    <span
                                        class="bg-yellow-700/20 text-yellow-700 font-bold px-2 py-1 rounded-[5px] text-xs">Admin
                                    </span>
                                    @else
                                    <span
                                        class="bg-blue-700/20 text-blue-700 font-bold px-2 py-1 rounded-[5px] text-xs">User
                                    </span>
                                    @endif
                                <td>
                                    {{-- <a href="#" onclick="event.preventDefault(); document.getElementById('delete-user-{{ $user->id }}').submit()"
                                        class="py-2 rounded-[5px] hover:bg-black/10 text-red-500 font-semibold flex justify-center">Delete
                                    </a>
                                    <form action="{{ route('user.destroy', $user->id) }}" method="POST"
                                        id="delete-user-{{ $user->id }}">@method('DELETE')@csrf</form> --}}
                                </td>
                            </tr>
                            @endforeach



                        </table>
                    </div>
                </div>
            </div>
        </section>
    </div>



    <script>
        function showDate() {
            const options = {
                day: 'numeric',
                month: 'long',
                year: 'numeric'
            };
            const today = new Date();
            const date = today.toLocaleDateString('id-ID', options);
            document.getElementById('localdate').innerHTML = date;
        }

        window.onload = showDate();

    </script>

</body>

</html>
