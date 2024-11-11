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

function updateJamSalamTanggal() {
    const jamElement = document.getElementById("jam");
    const salamElement = document.getElementById("salam");
    const tanggalElement = document.getElementById("tanggal");
    const waktuSekarang = new Date();

    // Mendapatkan jam, menit, dan detik
    let jam = waktuSekarang.getHours();
    let menit = waktuSekarang.getMinutes();
    let detik = waktuSekarang.getSeconds();

    // Mendapatkan tanggal, bulan, dan tahun
    const hari = waktuSekarang.getDate();
    const bulan = waktuSekarang.getMonth();
    const tahun = waktuSekarang.getFullYear();

    // Format untuk menambahkan angka 0 di depan jika < 10
    jam = jam < 10 ? "0" + jam : jam;
    menit = menit < 10 ? "0" + menit : menit;
    detik = detik < 10 ? "0" + detik : detik;

    // Mengupdate teks pada elemen HTML untuk jam
    jamElement.textContent = `${jam}:${menit}:${detik}`;

    // Menentukan salam berdasarkan jam
    let salam;
    if (jam >= 5 && jam < 12) {
        salam = "Selamat Pagi";
    } else if (jam >= 12 && jam < 15) {
        salam = "Selamat Siang";
    } else if (jam >= 15 && jam < 18) {
        salam = "Selamat Sore";
    } else {
        salam = "Selamat Malam";
    }

    // Mengupdate teks salam
    salamElement.textContent = salam;

    // Nama-nama bulan
    const namaBulan = [
        "Januari", "Februari", "Maret", "April", "Mei", "Juni",
        "Juli", "Agustus", "September", "Oktober", "November", "Desember"
    ];

    // Mengupdate teks pada elemen HTML untuk tanggal
    const tanggal = `${hari} ${namaBulan[bulan]} ${tahun}`;
    tanggalElement.textContent = tanggal;
}

// Memanggil fungsi updateJamSalamTanggal setiap 1 detik
setInterval(updateJamSalamTanggal, 1000);

// Memanggil sekali saat pertama kali untuk menghindari delay
updateJamSalamTanggal();


// Data untuk chart
const data = {
    labels: ['2020', '2021', '2022', '2023', '2024'], // Tahun
    datasets: [{
        label: 'Jumlah Kejadian Bencana',
        data: [60, 54, 48, 42, 36], // Data untuk masing-masing tahun
        backgroundColor: '#d8042a', // Warna grafik
        borderColor: '#d8042a',
        borderWidth: 1
    }]
};

const config = {
    type: 'bar', // Jenis chart (bar chart)
    data: data,
    options: {
        responsive: true,
        scales: {
            x: {
                beginAtZero: true
            },
            y: {
                beginAtZero: true
            }
        }
    }
};

// Membuat chart di elemen canvas
const ctx = document.getElementById('bencanaChart').getContext('2d');
new Chart(ctx, config);