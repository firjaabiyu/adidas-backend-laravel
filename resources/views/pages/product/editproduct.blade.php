<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Items</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</head>

<body class="bg-[#FFFBE6] overflow-hidden">

    <div class="flex gap-3 h-[100vh] w-[100vw]">

        @include('component.sidebar')

        <section class="dashboard-main h-full w-[85%] p-3 overflow-y-scroll">
            <form action="{{ route('product.update', $item->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="dashboard-area bg-white border border-gray-400 p-6 flex flex-col rounded-[24px]">
                    <div class="header flex justify-between items-end">
                        <div class="left-header flex flex-col gap-1">
                            <p class="font-bold text-[23px]">Edit Items</p>
                        </div>
                        <div class="card-right-header flex gap-4">
                            <div class="card border hover:bg-black/5 duration-150 border-black/30 py-3 px-3">
                                <button class="font-bold text-[13px] flex gap-2 items-center" type="submit">Simpan
                                    <ion-icon class="text-[16px]" name="bookmark"></ion-icon></button>
                            </div>
                        </div>
                    </div>

                    <div class="main-content mt-8 flex flex-col gap-7">
                        <div class="Data-items p-4 w-full flex gap-3 border border-gray400/50 rounded-[16px]">

                            <!-- Left side (Photo) -->
                            <div class="w-1/3 flex justify-center items-center">
                                <div id="photoContainer"
                                    class="w-[400px] h-[400px] border border-black overflow-hidden bg-gray-200">

                                    <img id="photo" src="{{ asset($item->image) ? asset('storage/products/' . $item->image) : '' }}" alt="Items Photo" class="w-full h-full object-cover" />
                                </div>
                            </div>

                            <!-- Right side (Form Inputs) -->
                            <div class="w-2/3 pl-8">
                                <h2 class="text-xl font-semibold mb-4">Data Items</h2>
                                <!-- Cat Input -->
                                <div class="formg-group flex flex-col">
                                    <label for="status" class="mb-2">Kategori</label>
                                    <select name="category" id="dropdown"
                                        class="px-3 py-1 border border-gray-400/50 rounded-[8px] mb-6 w-full">
                                        <option value="Men Originals"
                                            {{ $item->category == 'Men Originals' ? 'selected' : '' }}>Men Originals
                                        </option>

                                        <option value="Men Sportwear"
                                            {{ $item->category == 'Men Sportwear' ? 'selected' : '' }}>Men Sportwear
                                        </option>

                                        <option value="Men Jerseys"
                                            {{ $item->category == 'Men Jerseys' ? 'selected' : '' }}>Men Jerseys
                                        </option>

                                    </select>
                                </div>

                                <!-- Type Input -->
                                <div class="form-group flex flex-col">
                                    <label class="mb-2">Tipe Items</label>
                                    <select name="type" id="dropdown"
                                        class="px-3 py-1 border border-gray-400/50 rounded-[8px] mb-6 w-full">
                                        <option value="shoes" {{ $item->type == 'shoes' ? 'selected' : '' }}>Shoes
                                        </option>

                                        <option value="t-shirt" {{ $item->type == 't-shirt' ? 'selected' : '' }}>
                                            t-Shirt</option>

                                        <option value="jerseys" {{ $item->type == 'jerseys' ? 'selected' : '' }}>
                                            Jerseys</option>

                                        <option value="jacket" {{ $item->type == 'jacket' ? 'selected' : '' }}>Jacket
                                        </option>

                                        <option value="hat" {{ $item->type == 'hat' ? 'selected' : '' }}>Hat</option>
                                    </select>
                                </div>

                                <!-- Name Input -->
                                <div class="form-group flex flex-col">
                                    <label class="mb-2">Nama Items</label>
                                    <input value="{{ $item->name }}" type="teks" name="name"
                                        class="px-3 py-2 border border-gray-400/50 rounded-[8px] mb-6"
                                        placeholder="Masukin Nama Items">
                                </div>

                                <!-- Harga Input -->
                                <div class="form-group flex flex-col">
                                    <label class="mb-2">Harga Items</label>
                                    <input value="{{ $item->price }}" type="teks" name="price"
                                        class="px-3 py-2 border border-gray-400/50 rounded-[8px] mb-6"
                                        placeholder="Masukin Harga Items">
                                </div>

                                <!-- Photo Upload -->
                                <div class="form-group flex flex-col">
                                    <label for="photoUpload" class="mb-2">Upload Photo</label>
                                    <input type="file" name="image" id="photoUpload"
                                        class="px-3 py-2 border border-gray-400/50 rounded-[8px] mb-6" accept="image/*">
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </form>
        </section>
    </div>

</body>


<script>
    // Function to handle photo upload and display it
    document.getElementById('photoUpload').addEventListener('change', function (event) {
        const file = event.target.files[0];
        if (file) {
            const reader = new FileReader();
            reader.onload = function (e) {
                // Set the uploaded image as the photo in the container
                document.getElementById('photo').src = e.target.result;
            };
            reader.readAsDataURL(file);
        }
    });

</script>

</html>
