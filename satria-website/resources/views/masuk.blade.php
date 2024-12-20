<html lang="en">
<meta charset="utf-8" />
<meta content="width=device-width, initial-scale=1.0" name="viewport" />
<title>
    Satria
</title>
<script src="https://cdn.tailwindcss.com">
</script>
<script src="script.js"></script>
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet" />
<link href="https://fonts.googleapis.com/css2?family=Product+Sans:wght@400;600&display=swap" rel="stylesheet" />
<style>
    body {
        font-family: 'Product Sans', sans-serif;
        letter-spacing: 0.03em;
        /* 3% letter spacing */
    }

    .btn-hover:hover {
        background-color: #e3342f;
        /* Darker red */
    }

    .input-border-red:focus-within {
        border-color: #e3342f;
        /* Red border on focus */
    }
</style>
</head>

<body class="bg-white flex items-center justify-center min-h-screen">
    <div class="flex flex-col md:flex-row bg-white rounded-lg overflow-hidden max-w-6xl w-full">
        <div class="w-full md:w-1/2 p-16">
            <h2 class="text-2xl font-semibold mb-4">
                Get Started Now!
            </h2>
            <p class="text-gray-600 mb-6">
                Masukkan no telp dan kata sandi untuk masuk
            </p>
            <div class="flex space-x-4 mb-6">
                <button
                    class="flex items-center justify-center w-2/3 py-2 border border-gray-300 rounded-lg whitespace-nowrap">
                    <img src="https://cdn4.iconfinder.com/data/icons/logos-brands-7/512/google_logo-google_icongoogle-512.png"
                        alt="Google logo" class="h-5 w-5 mr-2">
                    Masuk dengan Google
                </button>
                <button
                    class="flex items-center justify-center w-2/3 py-2 border border-gray-300 rounded-lg whitespace-nowrap">
                    <i class="fab fa-apple text-black mr-2">
                    </i>
                    Masuk dengan Apple
                </button>
            </div>
            <div class="flex items-center mb-6">
                <div class="flex-grow border-t border-gray-300">
                </div>
                <span class="mx-4 text-gray-400">
                    atau
                </span>
                <div class="flex-grow border-t border-gray-300">
                </div>
            </div>
            <div class="mb-4">
                <label class="block text-gray-700 font-bold mb-2" for="phone">
                    No Telepon
                </label>
                <div class="flex items-center border border-gray-300 rounded-lg px-3 py-2 input-border-red">
                    <i class="fas fa-phone-alt text-red-500 mr-2">
                    </i>
                    <input class="w-full outline-none" id="phone" placeholder="Masukkan nomor telepon" type="text" />
                </div>
            </div>
            <div class="mb-6">
                <label class="block text-gray-700 font-bold mb-2" for="password">
                    Kata Sandi
                </label>
                <div class="flex items-center border border-gray-300 rounded-lg px-3 py-2 input-border-red">
                    <i class="fas fa-lock text-red-500 mr-2"></i>
                    <input class="w-full outline-none" id="password" placeholder="Masukkan kata sandi"
                        type="password" />
                </div>
            </div>
            <button class="w-full py-2 bg-red-500 text-white rounded-lg btn-hover"
                onclick="window.location.href='{{ url('/') }}'">
                Masuk
            </button>
            <p class="text-center text-gray-600 mt-2">
                Belum punya akun?
                <a class="text-red-500" href="{{ url('/daftar') }}">
                    Daftar
                </a>
            </p>
        </div>
        <div
            class="w-full md:w-1/2 bg-gradient-to-r from-red-500 to-red-700 flex items-center justify-center p-8 rounded-2xl">
            <div class="text-left">
                <img alt="Illustration of a tornado hitting a house" class="mb-4 mx-auto" height="300"
                    src="img/icon-bencana.png" width="320" />
                <p class="text-white text-lg font-semibold">
                    Solusi praktis untuk melaporkan bencana
                    <br>
                    dengan cepat dan mudah.
                </p>
                <p class="text-white mt-2">
                    Masukkan akun Anda untuk melapor bencana.
                </p>
            </div>
        </div>
    </div>
</body>

</html>