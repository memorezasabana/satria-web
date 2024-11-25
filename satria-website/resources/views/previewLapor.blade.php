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
    <link rel="stylesheet" href="https://unpkg.com/leaflet/dist/leaflet.css" />
    <script src="https://unpkg.com/leaflet/dist/leaflet.js"></script>


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
        <a href="{{ url('/') }}">
            <img class="w-[167.50px] h-[60px]" src="img/logo-satria.png" alt="Logo SATRIA" />
        </a>
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
                    Username</div>
            </div>
        </div>
    </div>
    <div
        class="top-[171px] absolute text-white text-5xl font-medium font-['Product Sans Medium'] leading-[72px] tracking-wider">
        Preview Laporan Bencana</div>
    <div
        class="w-[950px] top-[259px] absolute text-center text-white text-[32px] font-normal font-['Product Sans'] leading-10 tracking-wide">
        Tinjau laporan bencana Anda sebelum dikirim untuk memastikan semua informasi sudah lengkap dan akurat.</div>
    <div
        class="p-8 top-[400px] absolute bg-white rounded-[18px] shadow flex-col justify-start items-start gap-[18px] inline-flex w-[860px]">
        <div class="bg-white rounded-lg p-6">
            <div class="text-red-600 font-medium mb-4 w-full rounded p-2 mt-2 bg-[8d99af] text-white">
                ID LAPORAN: 1234567890
            </div>
            <div
                class="text-red-600 font-medium mb-4 w-full border border-red-600 rounded p-2 mt-2 bg-red-600 text-white">
                Jenis Bencana: {{ $jenisBencana }}
            </div>
            <div class="w-full border border-red-600 rounded p-2 mb-4">
                <!-- Judul di dalam border -->
                <p class="text-red-600 font-bold mb-2">Deskripsi Kejadian:</p>

                <!-- Isi deskripsi -->
                <p class="bg-gray-100 p-2 rounded h-32 overflow-auto">
                    {{ $deskripsiKejadian }}
                </p>
            </div>
            <div class="flex space-x-4 mb-4">
                <p class="w-1/2 border border-red-600 rounded p-2">Tanggal Kejadian: {{ $tanggalKejadian }}</p>
                <div class="relative w-1/2">
                    <p class="w-full border border-red-600 rounded p-2">Waktu Kejadian: {{ $waktuKejadian }}</p>
                </div>
            </div>
            <div class="border border-red-600 rounded mb-4">
                <div id="map" class="w-full" style="height: 300px;"></div>
            </div>

            <div class="flex items-center border border-red-600 rounded p-2 mb-4">
                <i class="fas fa-map-marker-alt text-red-600 mr-2"></i>
                <input id="locationInput"
                    class="w-full border-none focus:outline-none focus:ring-0 focus:border-red-600 focus:ring-red-600"
                    name="location" type="text" readonly />
            </div>

            <script>
                var map = L.map('map').setView([0, 0], 13);

                L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
                    attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
                }).addTo(map);

                function onLocationFound(e) {
                    var radius = e.accuracy / 2;

                    L.marker(e.latlng).addTo(map)
                        .bindPopup("Lokasi Anda: " + e.latlng.toString())
                        .openPopup();

                    L.circle(e.latlng, radius).addTo(map);

                    map.setView(e.latlng, 13);

                    getAddress(e.latlng.lat, e.latlng.lng);
                }

                map.locate({ setView: true, maxZoom: 16 });

                map.on('locationfound', onLocationFound);

                map.on('locationerror', function () {
                    alert("Lokasi Anda tidak dapat ditemukan.");
                });

                function getAddress(lat, lng) {
                    var url = `https://nominatim.openstreetmap.org/reverse?lat=${lat}&lon=${lng}&format=json`;

                    fetch(url)
                        .then(response => response.json())
                        .then(data => {
                            var address = data.display_name;
                            document.getElementById('locationInput').value = address;
                        })
                        .catch(error => console.error("Error fetching address: ", error));
                }
            </script>
            <div class="w-full border border-red-600 rounded p-2 mb-4">
                <!-- Judul di dalam border -->
                <p class="text-red-600 font-bold mb-2">Petunjuk Alamat (Opsional):</p>

                <!-- Isi deskripsi -->
                <p class="bg-gray-100 p-2 rounded h-24 overflow-auto">
                    {{ $petunjukAlamat }}
                </p>
            </div>
            <div
                class="border-dashed border-2 border-red-600 rounded p-4 mb-4 text-center cursor-pointer text-[#8d99af]">
                <i class="fas fa-upload text-[#8d99af] text-3xl mb-2"></i>
                <p>Upload File Bukti Foto atau Video Maksimal 10 MB</p>
                <input class="hidden" id="fileInput" type="file" name="file_upload" onchange="showPreview(this)" />
                <span id="fileNameDisplay" class="block text-red-600 text-sm mt-2"></span>
            </div>


            <h2 class="text-red-600 font-bold mb-4">
                Tindakan yang Diperlukan
            </h2>
            <div class="grid grid-cols-2 md:grid-cols-3 gap-4 mb-4">
                @foreach ($tindakan as $item)
                    <label class="border border-red-600 rounded p-2 flex items-center cursor-pointer w-[240px]">
                        <input class="mr-2" type="checkbox" checked disabled />
                        {{ $item }}
                    </label>
                @endforeach
            </div>
            <div class="text-center text-[red-600] font-medium mb-4 w-full rounded p-2 mt-2 bg-[8d99af] text-white">
                LAPORAN INI BELUM ANDA PUBLIKASIKAN!
            </div>
            <h2 class="text-[#2b2d42] font-normal mb-4">
                Dengan ini, saya menyatakan bahwa semua informasi yang saya berikan dalam laporan ini adalah akurat
                dan benar, serta saya siap untuk diproses oleh instansi terkait untuk penanganan lebih lanjut.
            </h2>
            <div class="flex space-x-4">
                <button class="bg-[8d99af] text-white px-8 py-2.5 rounded-lg w-1/3 flex justify-center items-center">
                    Hapus
                    <i class="fas fa-trash-alt ml-2"></i>
                </button>

                <button
                    class="bg-white text-[#2b2d42] border-2 border-red-600 px-8 py-2.5 rounded-lg w-1/3 flex justify-center items-center">
                    Ubah Laporan
                    <i class="fas fa-edit ml-2 text-red-600"></i>
                </button>

                <a href="{{ url('/verifikasiOtp') }}"
                    class="bg-red-600 text-white px-8 py-2.5 rounded-lg w-1/3 flex justify-center items-center">
                    Kirim Laporan
                    <i class="fas fa-paper-plane ml-2"></i>
                </a>


            </div>
        </div>
    </div>
    <div class="w-screen h-[386px] py-9 left-0 top-[1900px] absolute justify-center items-start gap-[79px] inline-flex">
        <div
            class="w-screen h-[300px] py-9 left-0 absolute bg-gradient-to-r from-red-500 to-red-700 justify-center items-start gap-[96px] inline-flex">
            <div class="w-[485.85px] flex-col justify-start items-start gap-[8px] inline-flex">
                <div class="justify-start items-center gap-[6.72px] inline-flex">
                    <img src="img/logo-satrialight.png" alt="Logo Satria" class="w-[168px] h-[60px]" />
                </div>

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