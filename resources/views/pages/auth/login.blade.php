<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin Login</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:ital,wght@0,200..800;1,200..800&display=swap"
        rel="stylesheet">
</head>

<body class="bg-[#FFFBE6]">

    <section class="w-screen h-screen flex justify-center items-center">
        <div class="content w-[35%] h-full flex flex-col justify-center items-center">
            <p class="font-light text-[58px] text-center"> Sign in to Continue to Dashboard</p>
            <form class=" pt-14 w-[100%]" action="{{ route('login') }}" method="POST">
                @csrf
                <div class="flex w-full flex-col justify-center items-center">
                    <input type="email" value="{{ old('email') }}" name="email" placeholder="Email"
                        class=" @error('email') is-invalid @enderror w-[90%] border-t border-l border-r rounded-tl-[16px] rounded-tr-[16px] border-[#989898] px-4 py-3 bg-transparent">
                    
                    <input type="password"  name="password" placeholder="Password"
                        class=" @error('password') is-invalid @enderror w-[90%] border border-t border-l border-r rounded-bl-[16px] rounded-br-[16px] border-[#989898] px-4 py-3 bg-transparent">
                    @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                    @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
                <div class="flex w-full justify-center items-center gap-4 pt-14">
                    <button type="submit"
                        class="bg-black py-4 text-white/75 hover:text-white w-[90%] text-[23px] font-semibold">Login</button>
                </div>
            </form>
        </div>
    </section>

</body>

</html>
