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

        /* Animasi melayang untuk emoji 📩 */
        @keyframes floatAnimation {

            0%,
            100% {
                transform: translateY(0px) rotate(-5.55deg);
            }

            50% {
                transform: translateY(-10px) rotate(-5.55deg);
            }
        }

        /* Animasi bergoyang untuk emoji ☎️ */
        @keyframes wobbleAnimation {

            0%,
            100% {
                transform: rotate(0deg);
            }

            25% {
                transform: rotate(10deg);
            }

            75% {
                transform: rotate(-10deg);
            }
        }

        /* Terapkan animasi pada elemen */
        .emoji-email {
            animation: floatAnimation 2s ease-in-out infinite;
        }

        .emoji-phone {
            animation: wobbleAnimation 1.5s ease-in-out infinite;
        }

        /* Animasi Melambai untuk Emoji 🙋🏻‍♂️ */
        @keyframes waveAnimation {

            0%,
            100% {
                transform: rotate(0deg);
            }

            25% {
                transform: rotate(10deg);
            }

            50% {
                transform: rotate(-10deg);
            }

            75% {
                transform: rotate(10deg);
            }
        }

        /* Animasi Zoom In/Out untuk Emoji 🔎 */
        @keyframes zoomAnimation {

            0%,
            100% {
                transform: scale(1);
            }

            50% {
                transform: scale(1.2);
            }
        }

        /* Terapkan animasi pada elemen */
        .emoji-wave {
            animation: waveAnimation 1.5s ease-in-out infinite;
        }

        .emoji-zoom {
            animation: zoomAnimation 2s ease-in-out infinite;
        }

        /* Animasi Bendera Berkibar */
        @keyframes flagWave {

            0%,
            100% {
                transform: rotate(8deg);
            }

            50% {
                transform: rotate(15deg);
            }
        }

        .emoji-flag {
            animation: flagWave 1.5s ease-in-out infinite;
        }

        /* Animasi Melompat untuk Pin Lokasi */
        @keyframes bounce {

            0%,
            100% {
                transform: translateY(0);
            }

            50% {
                transform: translateY(-10px);
            }
        }

        .emoji-pin {
            animation: bounce 1.2s ease-in-out infinite;
        }

        /* Animasi Muncul untuk Rumah */
        @keyframes fadeIn {
            0% {
                opacity: 0;
                transform: scale(0.8);
            }

            100% {
                opacity: 1;
                transform: scale(1);
            }
        }

        .emoji-house {
            animation: fadeIn 1.5s ease forwards;
        }

        /* Animasi Bergoyang untuk Tanda Konstruksi 🚧 */
        @keyframes sway {

            0%,
            100% {
                transform: rotate(0deg);
            }

            25% {
                transform: rotate(-5deg);
            }

            75% {
                transform: rotate(5deg);
            }
        }

        .emoji-construction {
            animation: sway 1.5s ease-in-out infinite;
        }

        /* Animasi Maju-Mundur untuk Mobil 🚘 */
        @keyframes moveCar {

            0%,
            100% {
                transform: translateX(0);
            }

            50% {
                transform: translateX(-10px);
            }
        }

        .emoji-car {
            animation: moveCar 1.2s ease-in-out infinite;
        }
    </style>

</head>

<body class="bg-[#edf2f5] flex items-center justify-center min-h-screen overflow-x-hidden">

    <div class="w-screen h-[723px] left-0 top-0 absolute">
        <div
            class="w-screen h-[723px] left-0 top-0 absolute bg-gradient-to-tl from-[#000e6e] via-[#1c3f8f] to-[#63b8e3]">
        </div>
        <img class="w-screen h-[722px] left-0 top-[1px] absolute" src="img/bg-header.png" />
    </div>
    <div
        class="w-[1248px] h-[110px] px-[42px] top-0 absolute bg-white rounded-bl-3xl rounded-br-3xl justify-center items-center gap-24 inline-flex">
        <div class="justify-start items-center gap-[6.72px] flex">
            <img class="w-[167.50px] h-[60px]" src="img/logo-satria.png" />
        </div>
        <div class="justify-start items-center gap-14 flex">
            <div class="text-[#d8042a] text-2xl font-medium font-['Product Sans Medium'] leading-9 tracking-wide">
                Beranda</div>
            <div class="dropdown relative">
                <!-- Tombol Dropdown -->
                <div class="justify-start items-center gap-0.5 flex cursor-pointer">
                    <div
                        class="text-[#2b2d42] text-2xl font-medium font-['Product Sans Medium'] leading-9 tracking-wide">
                        Fitur
                    </div>
                    <div class="w-6 h-6 relative">
                        <img src="img/icon-arrow_drop_down.png" alt="Arrow Drop Down"
                            class="w-6 h-6 absolute left-0 top-0" />
                    </div>
                </div>
                <!-- Menu Dropdown -->
                <ul
                    class="dropdown-menu hidden absolute left-0 top-12 bg-white shadow-md rounded-md w-64 z-20 divide-y divide-gray-200">
                    <li class="py-2 px-4 hover:bg-gray-100 cursor-pointer">
                        <a href="{{ url('/formLapor') }}" class="block w-full h-full">Pelaporan Bencana</a>
                    </li>
                    <li class="py-2 px-4 hover:bg-gray-100 cursor-pointer">Pencarian Orang Hilang</li>
                    <li class="py-2 px-4 hover:bg-gray-100 cursor-pointer">Rute Ke Tempat Evakuasi</li>
                    <li class="py-2 px-4 hover:bg-gray-100 cursor-pointer">Status Jalan dan Infrastruktur</li>
                </ul>
            </div>
            <script>// Panggil fungsi initMap setelah script Google Maps dimuat
                window.onload = initMap;

                document.querySelector('.dropdown').addEventListener('click', function () {
                    const menu = this.querySelector('.dropdown-menu');
                    menu.classList.toggle('hidden'); // Menampilkan atau menyembunyikan menu
                });</script>


            <div class="text-[#2b2d42] text-2xl font-medium font-['Product Sans Medium'] leading-9 tracking-wide">
                Tentang Satria</div>
            <div class="text-[#2b2d42] text-2xl font-medium font-['Product Sans Medium'] leading-9 tracking-wide">
                Kontak</div>
        </div>
        <div class="justify-start items-center gap-[30px] flex">
            <div class="text-[#2b2d42] text-2xl font-medium font-['Product Sans Medium'] leading-9 tracking-wide">
                Masuk</div>
            <div
                class="h-14 w-[120px] bg-gradient-to-r from-red-500 to-red-700 rounded-xl justify-center items-center gap-2.5 flex hover:from-red-600 hover:to-red-800 cursor-pointer transition-colors duration-300">
                <div class="text-white text-2xl font-medium font-['Product Sans Medium'] leading-9 tracking-wide">
                    Daftar
                </div>
            </div>

        </div>
    </div>
    <div class="h-[431.40px] top-[136px] absolute flex-col justify-start items-center gap-4 inline-flex">
        <div class="self-stretch justify-between items-start inline-flex">
            <div class="w-[414px] flex-col justify-start items-start gap-[8px] inline-flex">
                <div class="justify-start items-center gap-[11px] inline-flex">
                    <div id="salam"
                        class="text-white text-5xl font-medium font-['Product Sans Medium'] leading-[72px] tracking-wide">
                        Selamat Siang
                    </div>
                    <div
                        class="text-white text-5xl font-medium leading-[72px] tracking-wide animate-wave origin-bottom">
                        👋
                    </div>

                </div>
                <div id="jam"
                    class="self-stretch text-white text-8xl font-medium font-['Product Sans Medium'] leading-[100px] tracking-wide">
                    00:00:00
                </div>

                <div id="tanggal"
                    class="self-stretch text-white text-[32px] font-light font-['Product Sans Light'] leading-[48px] tracking-tight">
                    25 September 2024
                </div>
            </div>
            <div class="px-4 py-2.5 bg-white/10 rounded-[10px] justify-start items-center gap-2 flex">
                <div class="w-6 h-6 relative">
                    <img src="img/icon-location.png" alt="Icon Location" class="w-6 h-6 absolute left-0 top-0">
                </div>

                <div class="text-white text-2xl font-normal font-['Product Sans'] leading-9 tracking-wide">
                    Mulyorejo, Kota Surabaya</div>
            </div>
        </div>
        <div class="self-stretch justify-start items-center gap-7 inline-flex">
            <div
                class="w-[142px] h-[195.40px] py-5 bg-white rounded-xl flex-col justify-center items-center inline-flex">
                <div class="h-[84px] justify-start items-center gap-2.5 inline-flex">
                    <div class="w-[84px] h-[60.34px] relative flex justify-center items-center">
                        <img class="w-[60px] h-[60px]" src="img/icon-sun.svg" />
                    </div>
                </div>
                <div class="text-[#000e6e] text-2xl font-normal font-['Product Sans'] leading-9 tracking-wide">Hari
                    Ini</div>
                <div class="text-[#000e6e] text-[32px] font-normal font-['Product Sans'] leading-[48px] tracking-wide">
                    33°</div>
            </div>
            <div
                class="w-[142px] h-[195.40px] py-5 bg-white/10 rounded-xl flex-col justify-center items-center inline-flex">
                <div class="h-[84px] justify-start items-center gap-2.5 inline-flex">
                    <div class="w-[84px] h-[60.34px] relative flex justify-center items-center">
                        <img class="w-[70px] h-[70px]" src="img/icon-partlycloudy.png" />
                    </div>
                </div>
                <div class="text-white text-2xl font-normal font-['Product Sans'] leading-9 tracking-wide">Kamis
                </div>
                <div class="text-white text-[32px] font-normal font-['Product Sans'] leading-[48px] tracking-wide">
                    33°</div>
            </div>
            <div
                class="w-[142px] h-[195.40px] py-5 bg-white/10 rounded-xl flex-col justify-center items-center inline-flex">
                <div class="h-[84px] justify-start items-center gap-2.5 inline-flex">
                    <div class="w-[84px] h-[60.34px] relative flex justify-center items-center">
                        <img class="w-[70px] h-[70px]" src="img/icon-cloudy.png" />
                    </div>
                </div>
                <div class="text-white text-2xl font-normal font-['Product Sans'] leading-9 tracking-wide">Jumat
                </div>
                <div class="text-white text-[32px] font-normal font-['Product Sans'] leading-[48px] tracking-wide">
                    33°</div>
            </div>
            <div
                class="w-[142px] h-[195.40px] py-5 bg-white/10 rounded-xl flex-col justify-center items-center inline-flex">
                <div class="h-[84px] justify-start items-center gap-2.5 inline-flex">
                    <div class="w-[84px] h-[60.34px] relative flex justify-center items-center">
                        <img class="w-[70px] h-[70px]" src="img/icon-partlycloudy.png" />
                    </div>
                </div>
                <div class="text-white text-2xl font-normal font-['Product Sans'] leading-9 tracking-wide">Sabtu
                </div>
                <div class="text-white text-[32px] font-normal font-['Product Sans'] leading-[48px] tracking-wide">
                    33°</div>
            </div>
            <div
                class="w-[142px] h-[195.40px] py-5 bg-white/10 rounded-xl flex-col justify-center items-center inline-flex">
                <div class="h-[84px] justify-start items-center gap-2.5 inline-flex">
                    <div class="w-[84px] h-[60.34px] relative flex justify-center items-center">
                        <img class="w-[70px] h-[70px]" src="img/icon-lightrain.png" />
                    </div>
                </div>
                <div class="text-white text-2xl font-normal font-['Product Sans'] leading-9 tracking-wide">Minggu
                </div>
                <div class="text-white text-[32px] font-normal font-['Product Sans'] leading-[48px] tracking-wide">
                    33°</div>
            </div>
            <div
                class="w-[142px] h-[195.40px] py-5 bg-white/10 rounded-xl flex-col justify-center items-center inline-flex">
                <div class="h-[84px] justify-start items-center gap-2.5 inline-flex">
                    <div class="w-[84px] h-[60.34px] relative flex justify-center items-center">
                        <img class="w-[60px] h-[60px]" src="img/icon-sun.svg" />
                    </div>
                </div>
                <div class="text-white text-2xl font-normal font-['Product Sans'] leading-9 tracking-wide">Senin
                </div>
                <div class="text-white text-[32px] font-normal font-['Product Sans'] leading-[48px] tracking-wide">
                    33°</div>
            </div>
            <div
                class="w-[142px] h-[195.40px] py-5 bg-white/10 rounded-xl flex-col justify-center items-center inline-flex">
                <div class="h-[84px] justify-start items-center gap-2.5 inline-flex">
                    <div class="w-[84px] h-[60.34px] relative flex justify-center items-center">
                        <img class="w-[60px] h-[60px]" src="img/icon-partlycloudy.png" />
                    </div>
                </div>
                <div class="text-white text-2xl font-normal font-['Product Sans'] leading-9 tracking-wide">Selasa
                </div>
                <div class="text-white text-[32px] font-normal font-['Product Sans'] leading-[48px] tracking-wide">
                    33°</div>
            </div>
        </div>
    </div>
    <div class="w-6 h-6 top-[801px] absolute bg-[#d9d9d9]"></div>
    <div class="h-[1733px] top-[623px] absolute flex-col justify-start items-start gap-[42px] inline-flex">
        <div
            class="self-stretch px-[54px] py-[29px] bg-white rounded-[18px] justify-start items-center gap-[51px] inline-flex">
            <span
                class="w-[97px] h-[106px] inline-flex justify-center items-center text-[106px] transform -rotate-12">📢</span>

            <div class="w-[992px] flex-col justify-center items-start gap-1 inline-flex">
                <div class="self-stretch justify-start items-center gap-[188px] inline-flex">
                    <div
                        class="text-[#d8042a] text-[32px] font-medium font-['Product Sans Medium'] leading-[48px] tracking-wide">
                        Peringatan: Kebakaran di Jl. Gubernur Suryo</div>
                    <div
                        class="p-2.5 bg-gradient-to-r from-red-500 to-red-700 rounded-lg justify-center items-center gap-2.5 flex group hover:bg-gradient-to-r hover:from-red-600 hover:to-red-800 transition-all duration-300 cursor-pointer">
                        <div
                            class="text-white text-base font-medium font-['Product Sans Medium'] leading-normal tracking-wide">
                            Rute Alternatif
                        </div>

                        <div class="w-6 h-6 relative group">
                            <img src="img/icon-rutealternatif.png" alt="Rute Alternatif Icon"
                                class="w-6 h-6 absolute left-0 top-0 group-hover:scale-110 transition-transform duration-300" />
                        </div>
                    </div>

                </div>
                <div class="justify-start items-center gap-[35px] inline-flex">
                    <div class="justify-start items-center gap-2 flex">
                        <div class="w-6 h-6 relative">
                            <img src="img/icon-locationdark.png" alt="Report Icon"
                                class="w-6 h-6 absolute left-0 top-0" />
                        </div>
                        <div
                            class="text-[#2b2d42] text-xl font-medium font-['Product Sans Medium'] leading-[30px] tracking-wide">
                            Embong Kaliasin, Gedung Negara Grahadi</div>
                    </div>
                    <div class="justify-start items-center gap-2 flex">
                        <div class="w-6 h-6 relative">
                            <img src="img/icon-report.png" alt="Report Icon" class="w-6 h-6 absolute left-0 top-0" />
                        </div>

                        <div
                            class="text-[#2b2d42] text-xl font-medium font-['Product Sans Medium'] leading-[30px] tracking-wide">
                            Kebakaran sedang berlangsung</div>
                    </div>
                </div>
                <div
                    class="self-stretch text-justify text-[#2b2d42] text-base font-normal font-['Product Sans'] leading-tight tracking-wide">
                    Hindari Jl. Gubernur Suryo dan sekitarnya. Akses jalan ditutup sementara untuk penanganan
                    darurat. Petugas pemadam kebakaran sedang berusaha memadamkan api. Mohon warga sekitar untuk
                    tetap tenang dan mengikuti arahan dari petugas. Jika berada di dekat lokasi, harap menjauh dari
                    area dan hindari mengganggu proses evakuasi serta penanganan kebakaran.</div>
            </div>
        </div>
        <div class="self-stretch justify-start items-center gap-7 inline-flex">
            <div
                class="w-[291px] h-[267px] px-[42px] bg-white rounded-[18px] flex-col justify-start items-center gap-5 inline-flex">
                <div class="w-[193px] h-[150px] relative bg-white overflow-hidden">
                    <div
                        class="emoji-email w-24 h-[142.80px] left-[28px] top-[2.28px] absolute origin-top-left rotate-[-5.55deg] text-black text-8xl font-medium font-['Product Sans Medium'] leading-[144px] tracking-[2.88px]">
                        📩
                    </div>
                    <div
                        class="emoji-phone w-16 h-[95.19px] left-[102.79px] top-[54.81px] absolute text-black text-[64px] font-medium font-['Product Sans Medium'] leading-[96px] tracking-widest">
                        ☎️
                    </div>
                </div>

                <div
                    class="w-[251px] h-[77px] p-2.5 bg-gradient-to-r from-red-500 to-red-700 rounded-xl justify-center items-center gap-2.5 inline-flex group hover:bg-gradient-to-r hover:from-red-600 hover:to-red-800 transition-all duration-300">
                    <div onclick="window.location.href='{{ url('/formLapor') }}'"
                        class="text-center text-white text-2xl font-medium font-['Product Sans Medium'] leading-7 tracking-wide cursor-pointer">
                        Pelaporan<br />Bencana
                    </div>

                </div>

            </div>
            <div
                class="w-[291px] h-[267px] px-[42px] bg-white rounded-[18px] flex-col justify-start items-center gap-5 inline-flex">
                <div class="w-[193px] h-[150px] relative bg-white overflow-hidden">
                    <div
                        class="emoji-wave left-[33px] top-0 absolute text-black text-[100px] font-medium font-['Product Sans Medium'] leading-[150px] tracking-[3px]">
                        🙋🏻‍♂️
                    </div>
                    <div
                        class="emoji-zoom left-[97.78px] top-[61px] absolute text-black text-[64px] font-medium font-['Product Sans Medium'] leading-[96px] tracking-widest">
                        🔎
                    </div>
                </div>

                <div
                    class="w-[251px] h-[77px] p-2.5 bg-gradient-to-r from-red-500 to-red-700 rounded-xl justify-center items-center gap-2.5 inline-flex group hover:bg-gradient-to-r hover:from-red-600 hover:to-red-800 transition-all duration-300">
                    <div
                        class="text-center text-white text-2xl font-medium font-['Product Sans Medium'] leading-7 tracking-wide cursor-pointer">
                        Pencarian<br />Orang Hilang
                    </div>
                </div>

            </div>
            <div
                class="w-[291px] h-[267px] px-[42px] bg-white rounded-[18px] flex-col justify-start items-center gap-5 inline-flex">
                <div class="w-[193px] h-[150px] relative bg-white overflow-hidden">
                    <div
                        class="emoji-flag w-[63.85px] h-[86.38px] left-[129.87px] top-[-7px] absolute origin-top-left rotate-[8deg] text-black text-[64px] font-medium font-['Product Sans Medium'] leading-[96px] tracking-widest">
                        🚩
                    </div>
                    <div
                        class="emoji-pin w-16 h-[86.13px] left-0 top-[60.29px] absolute text-black text-[64px] font-medium font-['Product Sans Medium'] leading-[96px] tracking-widest">
                        📍
                    </div>
                    <div
                        class="emoji-house w-24 h-[129.19px] left-[58px] top-[20.81px] absolute text-black text-8xl font-medium font-['Product Sans Medium'] leading-[144px] tracking-[2.88px]">
                        🏠
                    </div>
                </div>

                <div
                    class="w-[251px] h-[77px] p-2.5 bg-gradient-to-r from-red-500 to-red-700 rounded-xl justify-center items-center gap-2.5 inline-flex group hover:bg-gradient-to-r hover:from-red-600 hover:to-red-800 transition-all duration-300">
                    <div
                        class="text-center text-white text-2xl font-medium font-['Product Sans Medium'] leading-7 tracking-wide cursor-pointer">
                        Rute Ke<br />Tempat Evakuasi
                    </div>
                </div>

            </div>
            <div
                class="w-[291px] h-[267px] px-[42px] bg-white rounded-[18px] flex-col justify-start items-center gap-5 inline-flex">
                <div class="w-[193px] h-[150px] relative bg-white overflow-hidden">
                    <div
                        class="emoji-construction w-24 h-[157px] left-[33px] top-[4px] absolute text-black text-8xl font-medium font-['Product Sans Medium'] leading-[144px] tracking-[2.88px]">
                        🚧
                    </div>
                    <div
                        class="emoji-car w-16 h-[104.67px] left-[97px] top-[65px] absolute text-black text-[64px] font-medium font-['Product Sans Medium'] leading-[96px] tracking-widest">
                        🚘
                    </div>
                </div>

                <div
                    class="w-[251px] h-[77px] p-2.5 bg-gradient-to-r from-red-500 to-red-700 rounded-xl justify-center items-center gap-2.5 inline-flex group hover:bg-gradient-to-r hover:from-red-600 hover:to-red-800 transition-all duration-300">
                    <div
                        class="text-center text-white text-2xl font-medium font-['Product Sans Medium'] leading-7 tracking-wide cursor-pointer">
                        Status Jalan<br />dan Infrastruktur
                    </div>
                </div>

            </div>
        </div>
        <div class="self-stretch px-[29px] py-9 bg-white rounded-[18px] justify-center items-start gap-10 inline-flex">
            <div class="w-[556.54px] flex-col justify-start items-center gap-6 inline-flex">
                <div class="h-[42px] flex-col justify-start items-center flex">
                    <div
                        class="self-stretch text-[#d8042a] text-2xl font-medium font-['Product Sans Medium'] leading-9 tracking-wide">
                        Statistik Kejadian Bencana per Tahun
                    </div>
                    <div
                        class="self-stretch text-center text-[#2b2d42] text-base font-normal font-['Product Sans'] leading-normal tracking-wide">
                        Sumber: BPBD Kota Surabaya
                    </div>
                </div>

                <!-- Canvas for chart -->
                <div class="self-stretch justify-start items-center">
                    <img src="img/chart.png" id="bencanaChart"></img>
                </div>



            </div>

            <div class="w-[562px] flex-col justify-start items-center gap-[39px] inline-flex">
                <div class="h-[42px] flex-col justify-start items-center flex">
                    <div
                        class="self-stretch text-[#d8042a] text-2xl font-medium font-['Product Sans Medium'] leading-9 tracking-wide">
                        Data Kejadian Bencana 2024
                    </div>
                    <div
                        class="self-stretch text-center text-[#2b2d42] text-base font-normal font-['Product Sans'] leading-normal tracking-wide">
                        Kota Surabaya (Hingga Saat Ini)
                    </div>
                </div>
                <div class="self-stretch justify-start items-center gap-[26px] inline-flex">
                    <div class="w-[268px] flex-col justify-start items-start gap-2 inline-flex">
                        <div
                            class="self-stretch px-4 py-2.5 rounded-lg border border-[#e40028] justify-start items-center gap-2.5 inline-flex">
                            <div
                                class="text-[#2b2d42] text-base font-normal font-['Product Sans'] leading-[26.88px] tracking-wide">
                                Korban Terdampak: 1.957 orang</div>
                        </div>
                        <div
                            class="self-stretch px-4 py-2.5 rounded-lg border border-[#e40028] justify-start items-center gap-2.5 inline-flex">
                            <div
                                class="text-[#2b2d42] text-base font-normal font-['Product Sans'] leading-[26.88px] tracking-wide">
                                Korban Luka-luka: 7 orang</div>
                        </div>
                        <div
                            class="self-stretch px-4 py-2.5 rounded-lg border border-[#e40028] justify-start items-center gap-2.5 inline-flex">
                            <div
                                class="text-[#2b2d42] text-base font-normal font-['Product Sans'] leading-[26.88px] tracking-wide">
                                Korban Meninggal: 3 orang</div>
                        </div>
                        <div
                            class="self-stretch px-4 py-2.5 rounded-lg border border-[#e40028] justify-start items-center gap-2.5 inline-flex">
                            <div
                                class="text-[#2b2d42] text-base font-normal font-['Product Sans'] leading-[26.88px] tracking-wide">
                                Korban Hilang: 0 orang</div>
                        </div>
                        <div
                            class="self-stretch px-4 py-2.5 rounded-lg border border-[#e40028] justify-start items-center gap-2.5 inline-flex">
                            <div
                                class="text-[#2b2d42] text-base font-normal font-['Product Sans'] leading-[26.88px] tracking-wide">
                                Korban Mengungsi: 500 orang</div>
                        </div>
                    </div>
                    <div class="w-[268px] flex-col justify-start items-start gap-2 inline-flex">
                        <div class="self-stretch justify-start items-center inline-flex">
                            <div
                                class="w-[194px] h-[47px] px-4 py-2.5 bg-gradient-to-r from-red-500 to-red-700 rounded-tl-lg rounded-bl-lg border border-[#e40028] justify-start items-center gap-2.5 flex">
                                <div
                                    class="text-white text-base font-normal font-['Product Sans'] leading-[26.88px] tracking-wide">
                                    Banjir</div>
                            </div>
                            <div
                                class="w-[74px] h-[47px] px-4 py-2.5 rounded-tr-lg rounded-br-lg border border-[#e40028] justify-center items-center gap-2.5 flex">
                                <div
                                    class="text-[#2b2d42] text-base font-normal font-['Product Sans'] leading-[26.88px] tracking-wide">
                                    10</div>
                            </div>
                        </div>
                        <div class="self-stretch justify-start items-center inline-flex">
                            <div
                                class="w-[194px] h-[47px] px-4 py-2.5 bg-gradient-to-r from-red-500 to-red-700 rounded-tl-lg rounded-bl-lg border border-[#e40028] justify-start items-center gap-2.5 flex">
                                <div
                                    class="text-white text-base font-normal font-['Product Sans'] leading-[26.88px] tracking-wide">
                                    Kebakaran</div>
                            </div>
                            <div
                                class="w-[74px] h-[47px] px-4 py-2.5 rounded-tr-lg rounded-br-lg border border-[#e40028] justify-center items-center gap-2.5 flex">
                                <div
                                    class="text-[#2b2d42] text-base font-normal font-['Product Sans'] leading-[26.88px] tracking-wide">
                                    20</div>
                            </div>
                        </div>
                        <div class="self-stretch justify-start items-center inline-flex">
                            <div
                                class="w-[194px] h-[47px] px-4 py-2.5 bg-gradient-to-r from-red-500 to-red-700 rounded-tl-lg rounded-bl-lg border border-[#e40028] justify-start items-center gap-2.5 flex">
                                <div
                                    class="text-white text-base font-normal font-['Product Sans'] leading-[26.88px] tracking-wide">
                                    Tanah Longsor</div>
                            </div>
                            <div
                                class="w-[74px] h-[47px] px-4 py-2.5 rounded-tr-lg rounded-br-lg border border-[#e40028] justify-center items-center gap-2.5 flex">
                                <div
                                    class="text-[#2b2d42] text-base font-normal font-['Product Sans'] leading-[26.88px] tracking-wide">
                                    5</div>
                            </div>
                        </div>
                        <div class="self-stretch justify-start items-center inline-flex">
                            <div
                                class="w-[194px] h-[47px] px-4 py-2.5 bg-gradient-to-r from-red-500 to-red-700 rounded-tl-lg rounded-bl-lg border border-[#e40028] justify-start items-center gap-2.5 flex">
                                <div
                                    class="text-white text-base font-normal font-['Product Sans'] leading-[26.88px] tracking-wide">
                                    Angin Puting Beliung</div>
                            </div>
                            <div
                                class="w-[74px] h-[47px] px-4 py-2.5 rounded-tr-lg rounded-br-lg border border-[#e40028] justify-center items-center gap-2.5 flex">
                                <div
                                    class="text-[#2b2d42] text-base font-normal font-['Product Sans'] leading-[26.88px] tracking-wide">
                                    3</div>
                            </div>
                        </div>
                        <div class="self-stretch justify-start items-center inline-flex">
                            <div
                                class="w-[194px] h-[47px] px-4 py-2.5 bg-gradient-to-r from-red-500 to-red-700 rounded-tl-lg rounded-bl-lg border border-[#e40028] justify-start items-center gap-2.5 flex">
                                <div
                                    class="text-white text-base font-normal font-['Product Sans'] leading-[26.88px] tracking-wide">
                                    Gempa Bumi</div>
                            </div>
                            <div
                                class="w-[74px] h-[47px] px-4 py-2.5 rounded-tr-lg rounded-br-lg border border-[#e40028] justify-center items-center gap-2.5 flex">
                                <div
                                    class="text-[#2b2d42] text-base font-normal font-['Product Sans'] leading-[26.88px] tracking-wide">
                                    2</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="self-stretch h-[304px] flex-col justify-start items-start gap-7 flex">
            <div
                class="self-stretch h-[220px] bg-gradient-to-r from-red-500 to-red-700 rounded-[18px] flex-col justify-center items-center gap-6 flex">
                <div
                    class="self-stretch text-center text-white text-4xl font-medium font-['Product Sans Medium'] leading-[41.40px] tracking-wide">
                    JUMLAH LAPORAN SEKARANG</div>
                <div class="self-stretch text-center text-white text-[64px] font-medium font-['Product Sans Medium'] leading-[73.60px] tracking-widest"
                    id="counter">
                    1024
                </div>

            </div>
            <div class="self-stretch justify-between items-center inline-flex">
                <div
                    class="w-[397px] h-14 px-4 py-2.5 bg-white rounded-xl border-2 border-[#d8042a] justify-center items-center gap-2.5 flex">
                    <div
                        class="text-[#2b2d42] text-base font-medium font-['Product Sans Medium'] leading-[26.88px] tracking-wide">
                        Belum Ditangani: 124 Laporan</div>
                </div>
                <div
                    class="w-[397px] h-14 px-4 py-2.5 bg-white rounded-xl border-2 border-[#d8042a] justify-center items-center gap-2.5 flex">
                    <div
                        class="text-[#2b2d42] text-base font-medium font-['Product Sans Medium'] leading-[26.88px] tracking-wide">
                        Sedang Dalam Penanganan: 200 Laporan</div>
                </div>
                <div
                    class="w-[397px] h-14 px-4 py-2.5 bg-white rounded-xl border-2 border-[#d8042a] justify-center items-center gap-2.5 flex">
                    <div
                        class="text-[#2b2d42] text-base font-medium font-['Product Sans Medium'] leading-[26.88px] tracking-wide">
                        Sudah Ditangani: 700 Laporan</div>
                </div>
            </div>
        </div>
        <div class="self-stretch h-[356px] flex-col justify-start items-start gap-7 flex">
            <div class="self-stretch justify-between items-center inline-flex">
                <div class="text-center"><span
                        class="text-[#2b2d42] text-4xl font-bold font-['Product Sans'] leading-[41.40px] tracking-wide">Cuitan
                    </span><span style="color:#d8042a"
                        class="text-4xl font-bold font-['Product Sans'] leading-[41.40px] tracking-wide">Terhangat</span>
                </div>
                <div
                    class="p-2.5 bg-white rounded-lg border-2 border-[#d8042a] justify-center items-center gap-2.5 flex hover:shadow-lg transition-all duration-300 cursor-pointer">
                    <div
                        class="text-[#d8042a] text-base font-medium font-['Product Sans Medium'] leading-normal tracking-wide">
                        Lihat Lainnya
                    </div>
                    <div class="w-6 h-6 relative">
                        <img class="w-6 h-6 absolute left-0 top-0" src="img/icon-lihatlainnya.png"
                            alt="Lihat Lainnya" />
                    </div>
                </div>

            </div>
            <div class="self-stretch justify-between items-center inline-flex">
                <div
                    class="w-[397px] h-[284px] p-6 bg-white rounded-[18px] border border-[#8d99af] flex-col justify-center items-start gap-3 inline-flex">
                    <div
                        class="self-stretch text-[#2b2d42] text-xl font-bold font-['Product Sans'] leading-[30px] tracking-wide">
                        Banjir di Wilayah Wonokromo</div>
                    <div class="w-[349px] h-[140px] text-justify"><span
                            class="text-[#2b2d42] text-base font-normal font-['Product Sans'] leading-tight tracking-wide">Saya
                            ingin melaporkan kejadian banjir yang melanda wilayah Wonokromo sejak pagi tadi. Air
                            sudah masuk ke rumah-rumah warga dengan ketinggian sekitar 50 cm. Kami membutuhkan
                            bantuan evakuasi dan distribusi logistik karena banyak warga yang terjebak di rumah.
                        </span><span
                            class="text-[#d8042a] text-base font-medium font-['Product Sans Medium'] leading-tight tracking-wide">Baca
                            Lebih Lanjut</span></div>
                    <div
                        class="self-stretch text-right text-[#2b2d42] text-base font-normal font-['Product Sans'] leading-normal tracking-wide">
                        1 jam yang lalu | Andi Saputra</div>
                </div>
                <div
                    class="w-[397px] h-[284px] p-6 bg-white rounded-[18px] border border-[#8d99af] flex-col justify-center items-start gap-3 inline-flex">
                    <div
                        class="self-stretch text-[#2b2d42] text-xl font-bold font-['Product Sans'] leading-[30px] tracking-wide">
                        Pohon Tumbang di Jalan Darmo</div>
                    <div class="w-[349px] h-[140px] text-justify"><span
                            class="text-[#2b2d42] text-base font-normal font-['Product Sans'] leading-tight tracking-wide">Telah
                            terjadi pohon tumbang di Jalan Raya Darmo akibat angin kencang. Pohon tersebut menimpa
                            beberapa kendaraan dan menyebabkan kemacetan panjang. Tidak ada korban jiwa, namun butuh
                            segera ditangani agar lalu lintas bisa normal kembali. </span><span style="color: #d8042a;"
                            class="text-base font-medium font-['Product Sans Medium'] leading-tight tracking-wide">Baca
                            Lebih Lanjut</span></div>
                    <div
                        class="self-stretch text-right text-[#2b2d42] text-base font-normal font-['Product Sans'] leading-normal tracking-wide">
                        3 jam yang lalu | Wulan Pratiwi</div>
                </div>
                <div
                    class="w-[397px] h-[284px] p-6 bg-white rounded-[18px] border border-[#8d99af] flex-col justify-center items-start gap-3 inline-flex">
                    <div
                        class="self-stretch text-[#2b2d42] text-xl font-bold font-['Product Sans'] leading-[30px] tracking-wide">
                        Tanah Longsor di Gunung Anyar</div>
                    <div class="w-[349px] h-[140px] text-justify"><span
                            class="text-[#2b2d42] text-base font-normal font-['Product Sans'] leading-tight tracking-wide">Telah
                            terjadi tanah longsor di daerah Gunung Anyar setelah hujan deras semalam. Longsor ini
                            menutup akses jalan utama dan merusak beberapa rumah. Warga setempat butuh bantuan
                            segera untuk proses evakuasi dan pembersihan area. Beberapa rumah juga terancam longsor
                            susulan. </span><span
                            class="text-[#d8042a] text-base font-medium font-['Product Sans Medium'] leading-tight tracking-wide">Baca
                            Lebih Lanjut</span></div>
                    <div
                        class="self-stretch text-right text-[#2b2d42] text-base font-normal font-['Product Sans'] leading-normal tracking-wide">
                        1 jam yang lalu | Andi Saputra</div>
                </div>
            </div>
        </div>
    </div>
    <div
        class="w-screen h-[300px] py-9 left-0 top-[2438px] absolute bg-gradient-to-r from-red-500 to-red-700 justify-center items-start gap-[96px] inline-flex">
        <div class="w-[485.85px] flex-col justify-start items-start gap-[8px] inline-flex">
            <div class="justify-start items-center gap-[6.72px] inline-flex">
                <img src="img/logo-satrialight.png" alt="Logo Satria" class="w-[168px] h-[60px]" />
            </div>

            <div class="self-stretch text-justify text-white text-xl font-normal font-['Product Sans'] leading-[30px]">
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
                    <div class="w-[369px] h-[60px] text-white text-xl font-normal font-['Product Sans'] leading-[30px]">
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
        class="w-screen h-[100px] py-9 left-0 top-[2700px] absolute bg-gradient-to-r from-red-500 to-red-700 justify-center items-start gap-[96px] inline-flex">
        <div class="w-[485.85px] flex-col justify-start items-start gap-[8px] inline-flex">
            <div class="text-center"><span
                    class="text-white text-xl font-normal font-['Product Sans'] leading-[30px]">Copyright</span><span
                    class="text-white text-xl font-medium font-['Product Sans Medium'] leading-[30px]"> </span><span
                    class="text-white text-xl font-medium font-['Montserrat'] leading-[30px]">©</span><span
                    class="text-white text-xl font-medium font-['Product Sans Medium'] leading-[30px]"> </span><span
                    class="text-white text-xl font-normal font-['Product Sans'] leading-[30px]">2024 Satria. All Rights
                    Reserved.</span></div>
        </div>
    </div>

</body>

</html>