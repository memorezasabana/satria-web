<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>
        Satria
    </title>
    <link rel="icon" href="img/logo-only.svg" type="image/x-icon">
    <script src="https://cdn.tailwindcss.com">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

    <script src="{{ asset('js/script.js') }}"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Product+Sans:wght@400;600&display=swap" rel="stylesheet" />
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBBc8FlCC20cSAqDWNQ9ZwCwkWnxCRvapk"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>


    <style>
        body {
            font-family: 'Product Sans', sans-serif;
            letter-spacing: 0.03em;
            /* 3% letter spacing */
        }

        input:focus,
        select:focus,
        textarea:focus {
            outline: none;
            border-color: #e3342f;
            box-shadow: 0 0 0 1px #e3342f;
        }

        select {
            background-color: #e3342f;
            color: white;
        }

        select option {
            background-color: white;
            color: black;
        }

        .btn-hover:hover {
            background-color: #e3342f;
            /* Darker red */
        }

        .input-border-red:focus-within {
            border-color: #e3342f;
            /* Red border on focus */
        }

        @layer utilities {
            .animate-wave {
                display: inline-block;
                animation: wave 2s ease-in-out infinite;
            }

            @keyframes wave {

                0%,
                100% {
                    transform: rotate(0deg);
                }

                10% {
                    transform: rotate(14deg);
                }

                20% {
                    transform: rotate(-8deg);
                }

                30% {
                    transform: rotate(14deg);
                }

                40% {
                    transform: rotate(-4deg);
                }

                50% {
                    transform: rotate(10deg);
                }

                60% {
                    transform: rotate(0deg);
                }
            }
        }

        ::-webkit-scrollbar {
            width: 12px;
            height: 12px;
        }

        ::-webkit-scrollbar-track {
            background: #f1f1f1;
            border-radius: 10px;
        }

        ::-webkit-scrollbar-thumb {
            background: linear-gradient(to right, #e40028, #ff4364, #da3c58);
            border-radius: 10px;
        }

        ::-webkit-scrollbar-thumb:hover {
            background: linear-gradient(to right, #ff4364, #e40028);
        }
    </style>

</head>

<body class="bg-[#edf2f5] flex items-center justify-center min-h-screen overflow-x-hidden">


    <div class="w-screen h-[723px] left-0 top-0 absolute">
        <div
            class="w-screen h-[723px] left-0 top-0 absolute bg-gradient-to-b from-[#e40028] via-[#ff4364] to-[#da3c58]">
        </div>
        <img class="w-screen h-[723px] left-0 top-0 absolute" src="img/bg-header2.png" />
    </div>
    <div
        class="w-[1248px] h-[110px] px-[42px] top-0 absolute bg-white rounded-bl-3xl rounded-br-3xl justify-center items-center gap-24 inline-flex">
        <div class="justify-start items-center gap-[6.72px] inline-flex">
            <img src="img/logo-satria.png" alt="Logo Satria" class="w-[168px] h-[60px]" />
        </div>
        <div class="justify-start items-center gap-14 flex">
            <div class="text-[#2b2d42] text-2xl font-medium font-['Product Sans Medium'] leading-9 tracking-wide">
                Beranda</div>
            <div class="justify-start items-center gap-0.5 flex">
                <div class="text-[#2b2d42] text-2xl font-medium font-['Product Sans Medium'] leading-9 tracking-wide">
                    Fitur</div>
                <div class="w-6 h-6 relative">
                    <img src="img/icon-arrow_drop_down.png" alt="Dropdown Icon" class="w-full h-full object-contain" />
                </div>

            </div>
            <div class="text-[#2b2d42] text-2xl font-medium font-['Product Sans Medium'] leading-9 tracking-wide">
                Tentang Satria</div>
            <div class="text-[#2b2d42] text-2xl font-medium font-['Product Sans Medium'] leading-9 tracking-wide">
                Kontak</div>
        </div>
        <div class="justify-start items-center gap-0.5 flex">
            <div class="w-9 h-9 relative">
                <img src="img/icon-notification.png" alt="Notification Icon" class="w-full h-full object-contain" />
            </div>

            <div class="px-4 py-2.5 rounded-xl justify-center items-center gap-2.5 flex">
                <div class="text-[#d8042a] text-2xl font-medium font-['Product Sans Medium'] leading-9 tracking-wide">
                    |</div>
            </div>
            <div class="py-2.5 rounded-xl justify-center items-center gap-2.5 flex">
                <div class="text-[#d8042a] text-2xl font-medium font-['Product Sans Medium'] leading-9 tracking-wide">
                    Wijaya Reza</div>
            </div>
        </div>
    </div>
    <div
        class="top-[171px] absolute text-white text-5xl font-medium font-['Product Sans Medium'] leading-[72px] tracking-wider">
        Verifikasi OTP</div>
    <div
        class="w-[950px] top-[259px] absolute text-center text-white text-[32px] font-normal font-['Product Sans'] leading-10 tracking-wide">
        Masukkan kode OTP yang telah dikirimkan ke nomor telepon Anda untuk melanjutkan proses pelaporan.</div>
    <div
        class="p-[86px] top-[400px] absolute bg-white rounded-[18px] shadow flex-col justify-center items-center gap-[27px] inline-flex w-[860px]">
        <div class="text-gray-800 rounded-lg inline-block text-xl justify-center items-center gap-[27px]">
            <p class="mb-1 text-center">
                Masukkan kode OTP yang telah dikirim ke
            </p>
            <p class="mb-[27px] font-bold text-center">
                +62 857 3892 2347
            </p>

            <div class="flex justify-center items-center space-x-2 mb-[27px] gap-4">
                <input class="w-[72px] h-[85px] border-2 border-red-500 rounded-xl text-center text-5xl" maxlength="1"
                    type="text" />
                <input class="w-[72px] h-[85px] border-2 border-red-500 rounded-xl text-center text-5xl" maxlength="1"
                    type="text" />
                <input class="w-[72px] h-[85px] border-2 border-red-500 rounded-xl text-center text-5xl" maxlength="1"
                    type="text" />
                <input class="w-[72px] h-[85px] border-2 border-red-500 rounded-xl text-center text-5xl" maxlength="1"
                    type="text" />
                <input class="w-[72px] h-[85px] border-2 border-red-500 rounded-xl text-center text-5xl" maxlength="1"
                    type="text" />
                <input class="w-[72px] h-[85px] border-2 border-red-500 rounded-xl text-center text-5xl" maxlength="1"
                    type="text" />
            </div>

            <p class="text-center">
                Tidak Menerima Kode OTP? </p>
            </p>
            <p class="mb-[27px] text-center text-red-500 font-bold" href="#">
                Kirim Ulang (30)
            </p>

            <div class="flex justify-center mt-4"> <!-- Menambahkan margin top di sini -->
                <a href="{{ url('/riwayatLapor') }}"
                    class="bg-red-500 text-white px-8 py-2.5 rounded-lg text-xl font-medium flex items-center justify-center">
                    Verifikasi
                    <i class="fas fa-check ml-2"></i>
                </a>

            </div>
        </div>
    </div>

    <div class="w-screen h-[386px] py-9 left-0 top-[960px] absolute justify-center items-start gap-[79px] inline-flex">
        <div
            class="w-screen h-[300px] py-9 left-0 absolute bg-gradient-to-r from-red-500 to-red-700 justify-center items-start gap-[96px] inline-flex">
            <div class="w-[485.85px] flex-col justify-start items-start gap-[8px] inline-flex">
                <a href="{{ url('/') }}">
                    <img class="w-[167.50px] h-[60px]" src="img/logo-satrialight.png" alt="Logo SATRIA" />
                </a>

                <div
                    class="self-stretch text-justify text-white text-xl font-normal font-['Product Sans'] leading-[30px]">
                    SATRIA merupakan platform untuk melaporkan kejadian bencana di Surabaya yang menghubungkan
                    masyarakat dengan pihak berwenang, memastikan laporan direspons dengan cepat dan penanganan darurat
                    dilakukan secara efektif.</div>
            </div>

            <div class="w-[386px] flex-col justify-start items-start gap-[32px] inline-flex">
                <div class="self-stretch text-white text-xl font-medium font-['Product Sans Medium'] leading-[30px]">
                    Hubungi Kami</div>
                <div class="self-stretch h-[146.99px] flex-col justify-start items-start gap-[13.50px] flex">
                    <div class="self-stretch justify-start items-center gap-6 inline-flex">
                        <img class="w-[25.49px] h-[25.49px]" src="img/icon-locationv2.png" />
                        <div
                            class="w-[369px] h-[60px] text-white text-xl font-normal font-['Product Sans'] leading-[30px]">
                            Jl. Jemursari Tim. II No.2, Jemur Wonosari, Kec. Wonocolo, Surabaya</div>
                    </div>
                    <div class="self-stretch justify-start items-center gap-6 inline-flex">
                        <img class="w-[25.49px] h-[25.49px]" src="img/icon-telephone.png" />
                        <div class="text-white text-xl font-normal font-['Product Sans'] leading-[30px]">(031) 99860466
                        </div>
                    </div>
                    <div class="self-stretch justify-start items-center gap-6 inline-flex">
                        <img class="w-[25.49px] h-[25.49px]" src="img/icon-email.png" />
                        <div class="text-white text-xl font-normal font-['Product Sans'] leading-[30px]">
                            bpbd@surabaya.go.id</div>
                    </div>
                </div>
            </div>
            <div class="w-[186.47px] flex-col justify-start items-start gap-[32px] inline-flex">
                <div class="self-stretch text-white text-xl font-medium font-['Product Sans Medium'] leading-[30px]">
                    Sosial Media</div>
                <div class="self-stretch justify-start items-center gap-[10.50px] inline-flex">
                    <img class="w-[38.74px] h-[38.74px]" src="img/icon-instagram.png" />
                    <img class="w-[38.74px] h-[38.74px]" src="img/icon-facebook.png" />
                    <img class="w-[38.74px] h-[38.74px]" src="img/icon-youtube.png" />

                </div>
            </div>


        </div>
        <div
            class="w-screen h-[100px] py-9 left-0 top-[300px] absolute bg-gradient-to-r from-red-500 to-red-700 justify-center items-start inline-flex">
            <div class="w-[485.85px] flex-col justify-start items-start gap-[8px] inline-flex">
                <div class="text-center"><span
                        class="text-white text-xl font-normal font-['Product Sans'] leading-[30px]">Copyright</span><span
                        class="text-white text-xl font-medium font-['Product Sans Medium'] leading-[30px]"> </span><span
                        class="text-white text-xl font-medium font-['Montserrat'] leading-[30px]">©</span><span
                        class="text-white text-xl font-medium font-['Product Sans Medium'] leading-[30px]"> </span><span
                        class="text-white text-xl font-normal font-['Product Sans'] leading-[30px]">2024 Satria. All
                        Rights
                        Reserved.</span></div>
            </div>
        </div>
    </div>

</body>

</html>