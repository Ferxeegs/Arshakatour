@extends('layouts.app')

@section('title')
Detail
@endsection

@push('addon-style')
<style>
    @import url("https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700&display=swap");

    * {
        padding: 0;
        margin: 0;
        font-family: "Montserrat", sans-serif;
    }

    body {
        background-color: #eaecfa;
    }

    .page-content {
        margin-top: 100px;
    }

    footer {
        margin: 150px 135px 10px 135px;

        p {
            color: white;
        }
    }

    .footer-container {
        border-radius: 15px;
        overflow: hidden;
        padding-left: 40px;
        background-color: rgba(2, 4, 21, 0.8) !important;
    }

    .footer-title {
        font-weight: 600px;
        font-size: 20px;
        margin-bottom: 5px;
    }

    .footer-desc {
        font-weight: 300px;
        font-size: 12px;
        text-align: justify;
    }

    .footer-desc a {
        color: white;
    }

    .logo {
        width: 20px;
    }

    .side-pic {
        width: 360px;
    }

    .form-control,
    .form-select {
        border-radius: 10px;
        background-color: rgba(234, 236, 250, 1);
        border-width: 2.5px;
    }

    .form-text {
        font-size: 12px;
    }

    .navbar {
        /* margin: 0 200px; */
        transition: background-color 0.5s ease-in-out;
        /* Tambahkan transisi warna */
    }

    .navbar-nav .nav-link {
        color: white !important;
        font-size: 20px;
        font-style: normal;
        font-weight: 600;
        margin-top: 5px;
        margin-right: 20px;

        &:hover {
            text-decoration: underline;
        }
    }

    .navbar-brand {
        margin-right: auto;
        /* Brand di sebelah kiri */
        margin-left: 50px;
        margin-top: 0;
        font-size: 20px;
    }

    .navbar-scrolled {
        background-color: #353644 !important;
        /* Mengatur warna latar belakang transparan */
        box-shadow: 0 3px 10px rgba(0, 0, 0, 0.15);
    }

    @media (max-width: 991px) {
        .sidebar {
            background-color: rgba(255, 255, 255, 0.15);
            backdrop-filter: blur(10px);
        }
    }

    @media (max-width: 767px) {
        .navbar {
            max-width: 100%;
            /* Set maximum width to 100% for smaller screens */
            margin-left: 0;
            margin-right: 0;
        }

        .navbar-nav {
            flex-direction: column;
            align-items: stretch;
        }

        .navbar-nav .nav-link {
            margin-top: 10px;
            /* Adjust margin for better spacing */
            margin-right: 0;
        }

        .navbar-brand {
            margin-left: 15px;
            /* Adjust margin for better spacing */
        }
    }

    .banner-detail {
        background-size: cover;
        height: 668px;
        margin-top: 80px;
        background-image: url("/images/detail-jogja.png");
        background-position: center;
        border-radius: 25px;
    }

    .banner-content {
        align-items: center;
        justify-content: center;
        display: flex;
        height: 100%;
        color: white;
    }

    .banner-detail-title {
        font-size: 92px;
        font-weight: 600;
    }

    .banner-detail-title2 {
        font-size: 40px;
        font-weight: 600;
    }

    .banner-detail-title3 {
        text-align: center;
        font-family: Montserrat;
        font-size: 36px;
        font-style: normal;
        font-weight: 700;
        line-height: normal;
        max-width: 200px;
        border-radius: 14px;
    }

    .card-detail-wisata {
        max-width: 470px;
        max-height: 456px;
        flex-shrink: 0;
        border-radius: 30px;
        background: #ffffff;
    }

    .tujuan-wisata {
        margin-bottom: 70px;
    }

    .tujuan-wisata li {
        color: rgba(2, 4, 21, 0.8);
        font-size: 20px;
        font-weight: 600;
        margin: 13px 80px;
    }

    .peserta-harga li {
        display: flex;
        color: rgba(2, 4, 21, 0.8);
        background-color: rgba(234, 236, 250, 1);
        margin-top: 10px;
        border-radius: 12px;
        padding: 8px 40px;
        margin-left: 5px;
    }

    .peserta-harga li span {
        margin-left: auto;
    }

    .form-reservasi {
        width: 1037px !important;
        max-width: 1073px !important;
        max-height: 1000px;
    }

    .ketentuan {
        border-radius: 30px !important;
        background: #ffffff;
    }

    .syarat-ketentuan li {
        font-size: 14px;
        font-style: normal;
        font-weight: 500;
    }

    .accordion-header {
        margin-bottom: 10px;
    }

    .accordion-icon {
        border: solid;
        width: 21px;
        height: 21px;
        text-align: center;
        display: inline-flex;
        /* Menggunakan inline-flex untuk penataan yang lebih baik */
        align-items: center;
        /* Posisikan di tengah secara vertikal */
        justify-content: center;
        /* Posisikan di tengah secara horizontal */
    }

    .kelebihan li {
    border-radius: 20px;
    background: #fafafa;
    margin-bottom: 13px;
    width: 500px;
    height: 54px;
    display: flex;
    align-items: center;
    justify-content: center;
    margin-left: 60px;
    }

    .section3-desc {
        display: flex;
        width: 1030px;
        height: 72px;
        flex-direction: column;
        justify-content: center;
        flex-shrink: 0;
        color: #000;

        font-family: Montserrat;
        font-size: 20px;
        font-style: normal;
        font-weight: 500;
        line-height: 30px; /* 150% */
    }

</style>
@endpush

@section('content')
<div class="banner-detail container" id="paket">
    <div class="banner-content container text-center" data-aos="fade-up" data-aos-delay="200">
        <div>
            <p class="banner-detail-title2">Paket Wisata</p>
            <p class="banner-detail-title"></p>
            <p class="banner-detail-title3 mx-auto"></p>
        </div>
    </div>
</div>

<section class="container">
    <div class="row">
        <div class="col-12">
            <p class="fs-3 fw-bold harga-mulai bg-dark text-light mt-3 w-100 rounded-4 text-center py-3" data-aos="fade-up" data-aos-delay="200">
                Harga Mulai dari <span id="harga-detail"></span>
            </p>
        </div>

        <div class="card col-sm-5 mb-3 mb-sm-0 ms-5 mt-3 card-detail-wisata" data-aos="fade-up" data-aos-delay="400">
            <div class="flex-column">
                <p class="text-black fs-2 fw-bold text-center mt-3 pb-3">
                    Tujuan Wisata
                </p>
                <ul class="tujuan-wisata list-unstyled">
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                </ul>
            </div>
            <a href="#form-rsv" class="text-center">
                <button class="btn btn-dark w-50 rounded-5 py-3 mx-auto">
                    Pesan Sekarang
                </button>
            </a>
            
        </div>

        <div class="col-sm-5 mb-3 mb-sm-0 mt-3 card card-detail-wisata offset-1" data-aos="fade-up" data-aos-delay="600">
            <div class="flex-column text-dark">
                <p class="text-black fs-2 fw-bold text-center mt-3 pb-1">
                    Detail Harga
                </p>
                <div class="container row mx-auto fw-bold">
                    <div class="container col-6 bg-light rounded-4 py-2">
                        Jumlah Peserta Tour
                    </div>
                    <div class="container col-5 bg-light rounded-4 text-center py-2">
                        Harga/Pax
                    </div>
                    <ul class="peserta-harga list-unstyled">
                        <li><span></span></li>
                        <li><span></span></li>
                        <li><span></span></li>
                        <li><span></span></li>
                        <li><span></span></li>
                        <li><span></span></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<section>
    <div id="form-rsv" class="form-reservasi card-detail-wisata col-11 my-5 py-5 px-5 mx-auto ">
        <div class="text-center fs-2 fw-bold mb-3">Form Reservasi Wisata</div>
        <form id="reservationForm" action="#">
            <div class="row">
                <div class="col-5">
                    <div class="mb-3">
                        <label for="fpnama" class="form-label">Nama Lengkap</label>
                        <input type="text" class="form-control" id="fpnama" name="nama" />
                    </div>
                    <div class="mb-0">
                        <label for="fptelp" class="form-label">WA/Telp</label>
                        <input type="number" class="form-control" id="fptelp" name="telp" aria-describedby="emailHelp" />
                        <div id="emailHelp" class="form-text">
                            Pastikan No Wa / Telp aktif agar dapat kami hubungi kembali.
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="fppeserta" class="form-label">Jumlah Peserta</label>
                        <input type="number" class="form-control" id="fppeserta" name="peserta" aria-describedby="emailHelp" />
                    </div>
                    <div class="mb-3">
                        <label for="fppaket" class="form-label">Pilihan Paket Wisata:</label>
                        <select class="form-select" aria-label="Default select example" id="fppaket" name="paket">
                            <option selected>Paket 1</option>
                            <option value="2">Paket 2</option>
                            <option value="3">Paket 3</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="fptanggal" class="form-label">Tanggal Tour</label>
                        <input type="date" class="form-control" id="fptanggal" name="tanggal" aria-describedby="emailHelp" />
                    </div>
                </div>
                <div class="col-6 offset-1">
                    <label for="fppesan" class="form-label">Pesan</label>
                    <textarea class="form-control rounded-4 mb-1" id="fppesan" name="pesan" rows="12"></textarea>
                    <div class="text-center">
                        <button type="submit" class="btn btn-dark mt-5 w-50 rounded-5 py-3">
                            Pesan Sekarang
                        </button>
                    </div>
                </div>
            </div>
        </form>
    </div>
</section>

<section>
    <div
    class="container mt-5 rounded-4"
    data-aos="fade-up"
    data-aos-delay="200"
    >
    <div class="accordion-item ketentuan ps-5 py-4">
        <p class="fs-3 fw-bold">Ketentuan Umum</p>
        <h2 class="accordion-header" id="headingOne">
        <button
            class="accordion-button fw-bolder mb-2"
            type="button"
            data-bs-toggle="collapse"
            data-bs-target="#collapseOne"
            aria-expanded="true"
            aria-controls="collapseOne"
        >
            <span class="accordion-icon mx-1 fs-5 fw-bold"> + </span>
            <span class="ms-3">Syarat dan Ketentuan Tour</span>
        </button>
        </h2>
        <div
        id="collapseOne"
        class="accordion-collapse collapse"
        aria-labelledby="headingOne"
        data-bs-parent="#syaratKetentuan"
        >
        <div class="accordion-body">
            <ul class="syarat-ketentuan">
            <li>
                Paket Wisata yang kami tawarkan adalah bersifat private.
            </li>
            <li>
                Harga tour sewaktu waktu bisa berubah, terkait akan perubahan
                HTM, Kenaikan BBM yang berhubungan dengan pariwisata.
            </li>
            <li>
                Armada yang kami sediakan mulai dari All New Avanza, Grand New
                Innova, ELF Short, Hiace Commuter dan ELF Long.
            </li>
            <li>
                Anda juga bisa custom paket wisata jogja sesuai dengan butget.
            </li>
            <li>Untuk anak kecil dibawah 2 tahun Free.</li>
            <li>
                Apabila peserta tour memiliki penyakit, harap membawa obat
                sendiri.
            </li>
            <li>
                Paket tour dan harga hanya berlaku untuk wisatawan domestik
                atau mancanegara pemegang KIMS/KITAS.
            </li>
            </ul>
        </div>
        </div>
        <h2 class="accordion-header" id="headingTwo">
        <button
            class="accordion-button fw-bolder mb-2"
            type="button"
            data-bs-toggle="collapse"
            data-bs-target="#collapseTwo"
            aria-expanded="true"
            aria-controls="collapseTwo"
        >
            <span class="accordion-icon mx-1 fs-5 fw-bold"> + </span>
            <span class="ms-3">Fasilitas Selama Tour</span>
        </button>
        </h2>
        <div
        id="collapseTwo"
        class="accordion-collapse collapse"
        aria-labelledby="headingTwo"
        data-bs-parent="#fasilitasTour"
        >
        <div class="accordion-body">
            <ul class="syarat-ketentuan">
            <li>
                Paket Wisata yang kami tawarkan adalah bersifat private.
            </li>
            <li>
                Harga tour sewaktu waktu bisa berubah, terkait akan perubahan
                HTM, Kenaikan BBM yang berhubungan dengan pariwisata.
            </li>
            <li>
                Armada yang kami sediakan mulai dari All New Avanza, Grand New
                Innova, ELF Short, Hiace Commuter dan ELF Long.
            </li>
            <li>
                Anda juga bisa custom paket wisata jogja sesuai dengan butget.
            </li>
            <li>Untuk anak kecil dibawah 2 tahun Free.</li>
            <li>
                Apabila peserta tour memiliki penyakit, harap membawa obat
                sendiri.
            </li>
            <li>
                Paket tour dan harga hanya berlaku untuk wisatawan domestik
                atau mancanegara pemegang KIMS/KITAS.
            </li>
            </ul>
        </div>
        </div>
        <h2 class="accordion-header" id="headingThree">
        <button
            class="accordion-button fw-bolder mb-2"
            type="button"
            data-bs-toggle="collapse"
            data-bs-target="#collapseThree"
            aria-expanded="true"
            aria-controls="collapseThree"
        >
            <span class="accordion-icon mx-1 fs-5 fw-bold"> + </span>
            <span class="ms-3">Peraturan Tour</span>
        </button>
        </h2>
        <div
        id="collapseThree"
        class="accordion-collapse collapse"
        aria-labelledby="headingThree"
        data-bs-parent="#peraturanTour"
        >
        <div class="accordion-body">
            <ul class="syarat-ketentuan">
            <li>
                Paket Wisata yang kami tawarkan adalah bersifat private.
            </li>
            <li>
                Harga tour sewaktu waktu bisa berubah, terkait akan perubahan
                HTM, Kenaikan BBM yang berhubungan dengan pariwisata.
            </li>
            <li>
                Armada yang kami sediakan mulai dari All New Avanza, Grand New
                Innova, ELF Short, Hiace Commuter dan ELF Long.
            </li>
            <li>
                Anda juga bisa custom paket wisata jogja sesuai dengan butget.
            </li>
            <li>Untuk anak kecil dibawah 2 tahun Free.</li>
            <li>
                Apabila peserta tour memiliki penyakit, harap membawa obat
                sendiri.
            </li>
            <li>
                Paket tour dan harga hanya berlaku untuk wisatawan domestik
                atau mancanegara pemegang KIMS/KITAS.
            </li>
            </ul>
        </div>
        </div>

        <h2 class="accordion-header" id="headingFour">
        <button
            class="accordion-button fw-bolder mb-2"
            type="button"
            data-bs-toggle="collapse"
            data-bs-target="#collapseFour"
            aria-expanded="true"
            aria-controls="collapseFour"
        >
            <span class="accordion-icon mx-1 fs-5 fw-bold"> + </span>
            <span class="ms-3">Pemesanan Layanan</span>
        </button>
        </h2>
        <div
        id="collapseFour"
        class="accordion-collapse collapse"
        aria-labelledby="headingFour"
        data-bs-parent="#pemesananLayanan"
        >
        <div class="accordion-body">
            <ul class="syarat-ketentuan">
            <li>
                Paket Wisata yang kami tawarkan adalah bersifat private.
            </li>
            <li>
                Harga tour sewaktu waktu bisa berubah, terkait akan perubahan
                HTM, Kenaikan BBM yang berhubungan dengan pariwisata.
            </li>
            <li>
                Armada yang kami sediakan mulai dari All New Avanza, Grand New
                Innova, ELF Short, Hiace Commuter dan ELF Long.
            </li>
            <li>
                Anda juga bisa custom paket wisata jogja sesuai dengan butget.
            </li>
            <li>Untuk anak kecil dibawah 2 tahun Free.</li>
            <li>
                Apabila peserta tour memiliki penyakit, harap membawa obat
                sendiri.
            </li>
            <li>
                Paket tour dan harga hanya berlaku untuk wisatawan domestik
                atau mancanegara pemegang KIMS/KITAS.
            </li>
            </ul>
        </div>
        </div>

        <h2 class="accordion-header" id="headingFive">
        <button
            class="accordion-button fw-bolder mb-2"
            type="button"
            data-bs-toggle="collapse"
            data-bs-target="#collapseFive"
            aria-expanded="true"
            aria-controls="collapseFive"
        >
            <span class="accordion-icon mx-1 fs-5 fw-bold"> + </span>
            <span class="ms-3">Metode Pembayaran</span>
        </button>
        </h2>
        <div
        id="collapseFive"
        class="accordion-collapse collapse"
        aria-labelledby="headingFive"
        data-bs-parent="#metodePembayaran"
        >
        <div class="accordion-body">
            <ul class="syarat-ketentuan">
            <li>
                Paket Wisata yang kami tawarkan adalah bersifat private.
            </li>
            <li>
                Harga tour sewaktu waktu bisa berubah, terkait akan perubahan
                HTM, Kenaikan BBM yang berhubungan dengan pariwisata.
            </li>
            <li>
                Armada yang kami sediakan mulai dari All New Avanza, Grand New
                Innova, ELF Short, Hiace Commuter dan ELF Long.
            </li>
            <li>
                Anda juga bisa custom paket wisata jogja sesuai dengan butget.
            </li>
            <li>Untuk anak kecil dibawah 2 tahun Free.</li>
            <li>
                Apabila peserta tour memiliki penyakit, harap membawa obat
                sendiri.
            </li>
            <li>
                Paket tour dan harga hanya berlaku untuk wisatawan domestik
                atau mancanegara pemegang KIMS/KITAS.
            </li>
            </ul>
        </div>
        </div>
        <h2 class="accordion-header" id="headingSix">
        <button
            class="accordion-button fw-bolder mb-2"
            type="button"
            data-bs-toggle="collapse"
            data-bs-target="#collapseSix"
            aria-expanded="true"
            aria-controls="collapseSix"
        >
            <span class="accordion-icon mx-1 fs-5 fw-bold"> + </span>
            <span class="ms-3">Lain-lain</span>
        </button>
        </h2>
        <div
        id="collapseSix"
        class="accordion-collapse collapse"
        aria-labelledby="headingSix"
        data-bs-parent="#lainLain"
        >
        <div class="accordion-body">
            <ul class="syarat-ketentuan">
            <li>
                Paket Wisata yang kami tawarkan adalah bersifat private.
            </li>
            <li>
                Harga tour sewaktu waktu bisa berubah, terkait akan perubahan
                HTM, Kenaikan BBM yang berhubungan dengan pariwisata.
            </li>
            <li>
                Armada yang kami sediakan mulai dari All New Avanza, Grand New
                Innova, ELF Short, Hiace Commuter dan ELF Long.
            </li>
            <li>
                Anda juga bisa custom paket wisata jogja sesuai dengan butget.
            </li>
            <li>Untuk anak kecil dibawah 2 tahun Free.</li>
            <li>
                Apabila peserta tour memiliki penyakit, harap membawa obat
                sendiri.
            </li>
            <li>
                Paket tour dan harga hanya berlaku untuk wisatawan domestik
                atau mancanegara pemegang KIMS/KITAS.
            </li>
            </ul>
        </div>
        </div>
    </div>
    </div>
</section>

<section class="container">
    <div class="row">
        <div data-aos="fade-right" data-aos-offset="300" data-aos-easing="ease-in-sine">
            <div class="col-12 fs-3 mt-5 pt-5 fw-bolder section-title ps-0">
                Apa yang membuat kami unggul?
            </div>
            <div class="col-12 ps-0">
                <p class="section3-desc mt-3">
                    Selamat datang di layanan travel wisata terbaik kami! Temukan
                    pengalaman perjalanan yang tak terlupakan dengan menggunakan
                    Arshaka Tour yang memiliki berbagai kelebihan yang membuat
                    perjalanan Anda lebih nyaman dan menyenangkan.
                </p>
            </div>
        </div>

        <div class="col-7">
            <p class="fs-3 fw-bolder section-title mb-5" data-aos="fade-right">
                Kelebihan Kami
            </p>
            <ul class="kelebihan list-unstyled fs-5 fw-bold">
                <li data-aos="zoom-out-right" data-aos-delay="100">
                    Destinasi Menakjubkan
                </li>
                <li data-aos="zoom-out-right" data-aos-delay="200">
                    Paket All-Inclusive
                </li>
                <li data-aos="zoom-out-right" data-aos-delay="300">
                    Harga Terjangkau
                </li>
                <li data-aos="zoom-out-right" data-aos-delay="400">
                    Pemandu Wisata Proffesional
                </li>
                <li data-aos="zoom-out-right" data-aos-delay="450">
                    Kepuasan Pelanggan Utama
                </li>
            </ul>
        </div>
        <div class="col-4 pt-5">
            <img data-aos="zoom-in-up" data-aos-delay="500" src="/images/ranting.png" alt="" class="side-pic w-auto" />
        </div>
    </div>
</section>
@endsection

<!-- Add Axios CDN link -->
<script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>

<script>
    // Function to update content based on API data
    function updateBannerContent(apiData, id) {
        // Check if the API data contains the expected structure
        if (apiData && apiData.data && apiData.data.data && Array.isArray(apiData.data.data) && apiData.data.data.length > 0) {
            // Find the destination with matching ID
            const destination = apiData.data.data.find(dest => dest.id == id);

            // Check if destination is found
            if (destination) {
                // Update banner titles
                const bannerTitle2Element = document.querySelector('.banner-detail-title2');
                const bannerTitleElement = document.querySelector('.banner-detail-title');
                const bannerTitle3Element = document.querySelector('.banner-detail-title3');

                // Update titles with data from the destination
                bannerTitle2Element.textContent = `Paket Wisata`;
                bannerTitleElement.textContent = destination.nama_pilihan;
                bannerTitle3Element.textContent = `${destination.durasi} Hari`;

                // Update background with data from the destination
                document.getElementById('paket').style.backgroundImage = `url(${destination.gambar})`;
            } else {
                console.error('Destination not found for ID:', id);
            }
        } else {
            console.error('Invalid API data structure or empty data:', apiData);
        }
    }

    // Extract ID from the URL
    const urlBanner = window.location.href;
    const idBanner = urlBanner.substring(urlBanner.lastIndexOf('/') + 1);

    // Make API request to get all destinations
    axios.get(`http://arshakajaya.test/api/destinasi`)
        .then(response => {
            const apiData = response.data;

            // Call the function to update content based on the received data and ID
            updateBannerContent(apiData, idBanner);
        })
        .catch(error => {
            console.error('Error fetching API data:', error);
        });
</script>

<script>
    // Function to update content based on API data
    function updateDestinationContent(apiData, id) {
        // Check if the API data contains the expected structure
        if (apiData && apiData.data && Array.isArray(apiData.data.data) && apiData.data.data.length > 0) {
            // Find the destination with matching ID
            const destination = apiData.data.data.find(dest => dest.id == id);

            // Check if destination is found
            if (destination) {
                // Update tujuan wisata list
                const tujuanWisataList = document.querySelector('.tujuan-wisata');

                // Clear previous data
                tujuanWisataList.innerHTML = '';

                // Populate tujuan wisata list
                for (let i = 1; i <= 5; i++) {
                    const tujuanWisata = destination['tujuan_wisata' + i];
                    if (tujuanWisata) {
                        const listItem = document.createElement('li');
                        listItem.textContent = tujuanWisata;
                        tujuanWisataList.appendChild(listItem);
                    }
                }
            } else {
                console.error('Destination not found for ID:', id);
            }
        } else {
            console.error('Invalid API data structure or empty data:', apiData);
        }
    }

    // Extract ID from the URL
    const url = window.location.href;
    const id = url.substring(url.lastIndexOf('/') + 1);

    // Make API request to get all destinations
    axios.get(`http://arshakajaya.test/api/destinasi`)
        .then(response => {
            const apiData = response.data;

            // Call the function to update content based on the received data and ID
            updateDestinationContent(apiData, id);
        })
        .catch(error => {
            console.error('Error fetching API data:', error);
        });
</script>

<script>
    // Function to update content based on API data
    function updateDetailHargaContent(apiData, id) {
        // Check if the API data contains the expected structure
        if (apiData && apiData.data && Array.isArray(apiData.data.data) && apiData.data.data.length > 0) {
            // Find the destination with matching ID
            const destination = apiData.data.data.find(dest => dest.id == id);

            // Check if destination is found
            if (destination) {
                // Update detail harga list
                const detailHargaList = document.querySelector('.peserta-harga');

                // Clear previous data
                detailHargaList.innerHTML = '';

                // Populate detail harga list
                const detailHargaData = [{
                        range: '2-3',
                        harga: destination.detail1
                    },
                    {
                        range: '4-6',
                        harga: destination.detail2
                    },
                    {
                        range: '7-12',
                        harga: destination.detail3
                    },
                    {
                        range: '12-17',
                        harga: destination.detail4
                    },
                    {
                        range: '18-23',
                        harga: destination.detail5
                    },
                    {
                        range: '23-30',
                        harga: destination.detail6
                    }
                ];

                detailHargaData.forEach(item => {
                    const listItem = document.createElement('li');
                    listItem.innerHTML = `${item.range} <span class="harga-range">Rp ${item.harga}</span>`;
                    detailHargaList.appendChild(listItem);
                });
            } else {
                console.error('Destination not found for ID:', id);
            }
        } else {
            console.error('Invalid API data structure or empty data:', apiData);
        }
    }

    // Extract ID from the URL
    const idDetailHarga = id;

    // Make API request to get all destinations
    axios.get(`http://arshakajaya.test/api/destinasi`)
        .then(response => {
            const apiData = response.data;

            // Call the function to update content based on the received data and ID
            updateDetailHargaContent(apiData, idDetailHarga);
        })
        .catch(error => {
            console.error('Error fetching API data:', error);
        });
</script>

<script>
    document.addEventListener("DOMContentLoaded", function() {
        const form = document.getElementById("reservationForm");

        form.addEventListener("submit", function(event) {
            event.preventDefault(); // Menghentikan pengiriman formulir default

            // Mendapatkan nilai input dari formulir
            const nama = document.getElementById("fpnama").value;
            const telepon = document.getElementById("fptelp").value; // Menggunakan "telepon" sebagai nama variabel
            const jumlah_peserta = document.getElementById("fppeserta").value; // Menggunakan "jumlah_peserta" sebagai nama variabel
            const pilihan_paket = document.querySelector("#fppaket option:checked").value;
            const tanggal = document.getElementById("fptanggal").value;
            const pesan = document.getElementById("fppesan").value;

            // Membuat objek data untuk dikirim ke API
            const data = {
                nama: nama,
                telepon: telepon,
                jumlah_peserta: jumlah_peserta,
                pilihan_paket: pilihan_paket,
                tanggal: tanggal,
                pesan: pesan
            };

            // Mengirimkan data ke API menggunakan metode POST dengan Axios
            axios.post("http://arshakajaya.test/api/reservasi", data, {
                    headers: {
                        "Content-Type": "application/json"
                    }
                })
                .then(response => {
                    console.log("Berhasil mengirim data:", response.data);
                    // Memunculkan alert ketika reservasi berhasil
                    alert("Reservasi berhasil disimpan!");
                    // Memuat ulang halaman setelah berhasil mengirim pesanan
                    window.location.reload();
                })
                .catch(error => {
                    console.error("Gagal mengirim data:", error);
                    // Memunculkan alert ketika reservasi gagal
                    alert("Gagal menyimpan reservasi. Silakan coba lagi!");
                    // Tambahkan penanganan kesalahan jika diperlukan
                    // Contoh: Menampilkan pesan ke pengguna bahwa reservasi gagal
                });
        });
    });
</script>

<script>
    // Function to update content based on API data
    function updateHargaDetail(apiData, urlId) {
        console.log('Function updateHargaDetail is being called.');

        // Check if the API data contains the expected structure
        if (apiData && apiData.meta && apiData.meta.code === 200 && apiData.data && apiData.data.data && apiData.data.data.length > 0) {
            // Find the destination with matching ID
            const destination = apiData.data.data.find(dest => dest.id == urlId);

            // Check if destination is found
            if (destination) {
                // Update detail harga content
                const hargaDetailElement = document.getElementById('harga-detail');
                const detail1 = destination.detail1;
                hargaDetailElement.textContent = `Rp ${detail1}`;
            } else {
                console.error('Destination not found for ID:', urlId);
            }
        } else {
            console.error('Invalid API data structure or empty data:', apiData);
        }
    }

    // Function to extract ID from URL
    function extractIdFromUrl() {
        // Get the current URL
        const currentUrl = window.location.href;

        // Extract the ID from the URL
        const urlId = currentUrl.split('/').pop();

        return urlId;
    }

    // Get the ID from the URL
    const urlId = extractIdFromUrl();

    // Make API request to get all destinations
    axios.get(`http://arshakajaya.test/api/destinasi`)
        .then(response => {
            const apiData = response.data;
            console.log('API Response:', apiData);

            // Call the function to update content based on the received data and ID
            updateHargaDetail(apiData, urlId);
        })
        .catch(error => {
            console.error('Error fetching API data:', error);
        });
</script>

<script>
    // Function to handle accordion button click
function handleAccordionButtonClick(button) {
    const accordionIcon = button.querySelector('.accordion-icon');
    // Toggle between + and - based on the current icon
    if (accordionIcon.textContent.trim() === '+') {
        accordionIcon.textContent = '-';
    } else {
        accordionIcon.textContent = '+';
    }
}

// Add event listener to all accordion buttons
const accordionButtons = document.querySelectorAll('.accordion-button');
accordionButtons.forEach(button => {
    button.addEventListener('click', () => {
        handleAccordionButtonClick(button);
    });
});

</script>