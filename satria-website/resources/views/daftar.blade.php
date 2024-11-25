<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>
        Get Started Now
    </title>
    <script src="https://cdn.tailwindcss.com">
    </script>
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

        .checkbox-custom {
            width: 1.25rem;
            height: 1.25rem;
            border-radius: 0.25rem;
            border: 2px solid #d1d5db;
            /* Tailwind's gray-300 */
            appearance: none;
            -webkit-appearance: none;
            -moz-appearance: none;
            outline: none;
            cursor: pointer;
        }

        .checkbox-custom:checked {
            background-color: #e3342f;
            /* Tailwind's red-500 */
            border-color: #e3342f;
            /* Tailwind's red-500 */
        }
    </style>
    <script>
        function togglePasswordVisibility() {
            const passwordInput = document.getElementById('password');
            const eyeIcon = document.getElementById('eye-icon');
            if (passwordInput.type === 'password') {
                passwordInput.type = 'text';
                eyeIcon.classList.remove('fa-eye-slash');
                eyeIcon.classList.add('fa-eye');
            } else {
                passwordInput.type = 'password';
                eyeIcon.classList.remove('fa-eye');
                eyeIcon.classList.add('fa-eye-slash');
            }
        }

        function validateForm() {
            const phoneInput = document.getElementById('phone');
            const passwordInput = document.getElementById('password');
            const confirmPasswordInput = document.getElementById('confirm-password');
            const nameInput = document.getElementById('name');
            const termsCheckbox = document.getElementById('terms');
            if (phoneInput.value === '' || passwordInput.value === '' || confirmPasswordInput.value === '' || nameInput.value === '' || !termsCheckbox.checked) {
                alert('Please fill in all fields and agree to the terms and conditions.');
                return false;
            }
            if (passwordInput.value !== confirmPasswordInput.value) {
                alert('Passwords do not match.');
                return false;
            }
            return true;
        }
    </script>
</head>

<body class="bg-white flex items-center justify-center min-h-screen">
    <div class="flex flex-col md:flex-row bg-white rounded-2xl overflow-hidden max-w-6xl w-full">
        <div class="w-full md:w-1/2 p-16">
            <h2 class="text-2xl font-semibold mb-4">
                Get Started Now!
            </h2>
            <p class="text-gray-600 mb-6">
                Masukkan detail Anda untuk membuat akun baru
            </p>
            <div class="flex space-x-4 mb-6">
                <button
                    class="flex items-center justify-center w-2/3 py-2 border border-gray-300 rounded-lg whitespace-nowrap">
                    <img src="https://cdn4.iconfinder.com/data/icons/logos-brands-7/512/google_logo-google_icongoogle-512.png"
                        alt="Google logo" class="h-5 w-5 mr-2">
                    Daftar dengan Google
                </button>
                <button
                    class="flex items-center justify-center w-2/3 py-2 border border-gray-300 rounded-lg whitespace-nowrap">
                    <i class="fab fa-apple text-black mr-2">
                    </i>
                    Daftar dengan Apple
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
                <label class="block text-gray-700 font-bold mb-2" for="name">
                    Nama
                </label>
                <div class="flex items-center border border-gray-300 rounded-lg px-3 py-2 input-border-red">
                    <i class="fas fa-user text-red-500 mr-2">
                    </i>
                    <input class="w-full outline-none" id="name" placeholder="Masukkan nama" type="text" />
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
            <div class="mb-4">
                <label class="block text-gray-700 font-bold mb-2" for="password">
                    Kata Sandi
                </label>
                <div class="flex items-center border border-gray-300 rounded-lg px-3 py-2 input-border-red">
                    <i class="fas fa-lock text-red-500 mr-2">
                    </i>
                    <input class="w-full outline-none" id="password" placeholder="Masukkan kata sandi" type="text" />
                    <i class="fas text-gray-400 ml-2 cursor-pointer fa-eye-slash" id="eye-icon"
                        onclick="togglePasswordVisibility()">
                    </i>
                </div>
            </div>
            <div class="mb-4">
                <label class="block text-gray-700 font-bold mb-2" for="password">
                    Konfirmasi Kata Sandi
                </label>
                <div class="flex items-center border border-gray-300 rounded-lg px-3 py-2 input-border-red">
                    <i class="fas fa-lock text-red-500 mr-2">
                    </i>
                    <input class="w-full outline-none" id="password" placeholder="Masukkan kata sandi" type="text" />
                    <i class="fas text-gray-400 ml-2 cursor-pointer fa-eye-slash" id="eye-icon"
                        onclick="togglePasswordVisibility()">
                    </i>
                </div>
            </div>
            <div class="mb-6 flex items-center">
                <input class="mr-2 checkbox-custom" id="terms" type="checkbox" />
                <label class="text-gray-700" for="terms">
                    Saya setuju dengan syarat dan ketentuan
                </label>
            </div>
            <button class="w-full py-2 bg-red-500 text-white rounded-lg btn-hover" onclick="return validateForm()">
                Daftar
            </button>
            <p class="text-center text-gray-600 mt-2">
                Sudah punya akun?
                <a class="text-red-500" href="#">
                    Masuk
                </a>
            </p>
        </div>
        <div
            class="w-full md:w-1/2 h-[720px] bg-gradient-to-r from-red-500 to-red-700 flex items-center justify-center p-8 rounded-2xl mt-12">

            <div class="text-left">
                <img alt="Illustration of a tornado hitting a house" class="mb-4 mx-auto" height="300"
                    src="img/icon-bencana.png" width="320" />
                <p class="text-white text-lg font-semibold">
                    Solusi praktis untuk melaporkan bencana dengan
                    <br>
                    cepat dan mudah.
                </p>
                <p class="text-white mt-2">
                    Daftarkan akun Anda untuk melapor bencana.
                </p>
            </div>
        </div>
    </div>
</body>

</html>