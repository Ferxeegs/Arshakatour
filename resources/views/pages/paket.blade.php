@extends('layouts.app')

@section('title')
Paket Wisata
@endsection

@push('addon-style')
<style>
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
        line-height: 30px;
        /* 150% */
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

    .paket-detail-jogja {
        background-image: url("/images/jogja.png");
        background-size: cover;
    }

    .paket-detail-bali {
        background-image: url("/images/bali.png");
        background-size: cover;
    }

    .paket-detail-bromo {
        background-image: url("/images/bromo.png");
        background-size: cover;
    }

    .hari {
        position: relative;
        border-radius: 14px;
        background: rgba(217,
                217,
                217,
                0.7);
        /* Gunakan rgba untuk memberikan opasitas pada background */
        filter: blur(0.5px);
        width: 89px;
        height: 34px;
        margin: 18px;
    }

    .hari-p {
        text-align: center;
        padding: 3px;
        border-radius: 14px;
        background: rgba(217,
                217,
                217,
                0.7);
        /* Gunakan rgba untuk memberikan opasitas pada background */
        filter: blur(0.5px);
        width: 89px;
        height: 34px;
        margin: 18px;
    }

    .tempat-wisata {
        margin: 90px 0 9px 53px;
        font-size: 20px;
        font-style: normal;
        font-weight: 600;
        line-height: normal;
    }

    .tempat-wisata li {
        padding-top: 0;
        margin-bottom: 18px;
    }

    .btn-detail {
        position: relative;
        border-radius: 14px;
        background: rgba(217,
                217,
                217,
                0.7);
        /* Gunakan rgba untuk memberikan opasitas pada background */
        filter: blur(0.5px);
        width: 113px;
        height: 34px;
        margin-bottom: 20px;
    }

    .paket-harga {
        display: flex;
        position: relative;
        border-radius: 22px;
        background: rgba(217,
                217,
                217,
                0.7);
        /* Gunakan rgba untuk memberikan opasitas pada background */
        filter: blur(0.5px);
        width: 328px;
        height: 46px;
        margin-left: 12px;
        padding-left: 20px;
        align-items: center;
        margin-bottom: 10px;
    }


    .banner-paket {
        background-size: cover;
        height: 668px;
        margin-top: 80px;
        background-image: url("/images/paket-jogja-banner.png");
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

    .banner-paket-title {
        font-size: 92px;
        font-weight: 600;
    }

    .banner-paket-title2 {
        font-size: 40px;
        font-weight: 600;
    }

    .banner-paket-title3 {
        text-align: center;
        font-family: Montserrat;
        font-size: 20px;
        font-style: normal;
        font-weight: 600;
        line-height: normal;
        max-width: 937px;
        padding-top: 70px;
    }

    .card {
        height: 100%;
        border-radius: 15px;
    }

    .card-body {
        flex: 1;
    }

    .paket-detail-jogja {
        height: 100%;
    }


    #preview {
        padding-top: 10px;
    }

    #preview .card-body {
        padding-top: 63vh;
        transition: all 0.3s ease-in-out;

        &:hover {
            transform: scale(1.02);
            text-decoration: none;
        }
    }

    .card-container {
        transition: all 0.3s ease-in-out;

        &:hover {
            transform: scale(1.02);
            text-decoration: none;
        }
    }

    .card {
        width: 345px;
        height: 499px;
        margin-top: 10px;
        color: white;
        border-radius: 35px;
        /* Mengatur sudut melingkar */
    }

    .paket-jogja {
        background-image: url("/images/paket-jogja.png");
        background-size: cover;
        align-items: end;
        text-align: end;
        align-content: end;

        &:hover {
            transform: scale(1.05);
            text-decoration: none;
        }
    }
</style>
@endpush

@section('content')
<div class="banner-paket container" id="paket" style="background-image: url('')">
    <div class="banner-content container text-center" data-aos="zoom-in-up" data-aos-delay="150">
        <div>
            <p class="banner-paket-title2" id="banner-title2"></p>
            <p class="banner-paket-title" id="banner-title">Paket Wisata</p>
            <p class="banner-paket-title3" id="banner-description"></p>
        </div>
    </div>
</div>

<section class="container">
    <div class="row">
        <div class="col-12">
            <p class="fs-3 mt-5 fw-bold section-title">
                Destinasi Wisata Favorit
            </p>
        </div>
        <div id="destinasiContainer" class="row"></div>
    </div>
</section>

<section id="preview" class="container">
    <div class="row align-items-center fs-3 fw-bold">
        <div class="col-lg-12 pt-5">
            <p class="fs-3 fw-bold pt-2 section-title">
                Mau Berpetualang kemana hari ini
            </p>
        </div>

        <div id="paketContainer" class="row"></div>
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

@push('addon-script')
<script>
    function redirectToDetail() {
        window.location.href = "{{ route('detail') }}";
    }
</script>

<script>
    (function(w, d, s, u) {
        w.gbwawc = {
            url: u,
            options: {
                waId: "+62 8973859194",
                siteName: "Arshk",
                siteTag: "Arshktour",
                siteLogo: "https://waw.gallabox.com/chatbotavatars/4.png",
                widgetPosition: "RIGHT",
                triggerMessage: "Hubungi Kami",
                welcomeMessage: "Halo, selamat datang di Arshaka Tour",
                brandColor: "#25D366",
                messageText: "Ada yang bisa kami bantu?",
                replyOptions: ["Pesan paket wisata", "Lainnya", ""],
            },
        };
        var h = d.getElementsByTagName(s)[0],
            j = d.createElement(s);
        j.async = true;
        j.src = u + "/whatsapp-widget.min.js?_=" + Math.random();
        h.parentNode.insertBefore(j, h);
    })(window, document, "script", "https://waw.gallabox.com");
</script>

<script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Mendapatkan path dari URL
        const path = window.location.pathname;

        // Membagi path menjadi array dengan pemisah '/'
        const pathParts = path.split('/');

        // Mengambil bagian terakhir dari path, yang merupakan ID paket
        const packageIdString = pathParts[pathParts.length - 1];

        // Parse package ID menjadi integer
        const packageId = parseInt(packageIdString);

        // Cek jika package ID adalah nomor yang valid
        if (!isNaN(packageId)) {
            // Lakukan pengambilan data dari API dengan Axios
            axios.get('http://arshakajaya.test/api/paket')
                .then(response => {
                    const responseData = response.data;
                    console.log('Fetched data:', responseData);

                    const packagesData = responseData.data.data; // Accessing the 'data' property twice

                    // Cari paket dengan ID yang sesuai
                    const currentPackage = packagesData.find(p => p.id === packageId);

                    // Cek jika paket ditemukan
                    if (currentPackage) {
                        // Memperbarui konten HTML dengan data paket
                        const packageTitle = document.getElementById('banner-title2');
                        const packageDescription = document.getElementById('banner-description');
                        const banner = document.getElementById('paket');

                        packageTitle.textContent = currentPackage.nama; // Memperbarui judul paket
                        packageDescription.textContent = currentPackage.deskripsi; // Memperbarui deskripsi paket

                        // Set background image dynamically
                        banner.style.backgroundImage = `url('${currentPackage.gambar}')`;
                    } else {
                        console.error('Package not found with ID:', packageId);
                    }
                })
                .catch(error => {
                    console.error('Error fetching package data:', error);
                });
        } else {
            console.error('Invalid package ID:', packageIdString);
        }
    });
</script>

<script>
    document.addEventListener("DOMContentLoaded", async function() {
        try {
            const response = await axios.get('http://arshakajaya.test/api/paket');

            // Check for successful response
            if (response.status !== 200) {
                console.error('Error fetching data. Status:', response.status);
                return;
            }

            const data = response.data;

            console.log('API Response:', response);
            console.log('Data:', data);

            const paketContainer = document.getElementById('paketContainer');

            // Check if the container element exists
            if (!paketContainer) {
                console.error('Container element not found.');
                return;
            }

            // Clear any existing content in the container
            paketContainer.innerHTML = '';

            if (data.data && Array.isArray(data.data.data)) {
                data.data.data.forEach((paket, index) => {
                    const cardContainerClass = index % 3 === 0 ?
                        'col-md-3 mb-3 mb-sm-0 align-items-center card-container' :
                        'col-md-3 mb-3 mb-sm-0 offset-sm-1 align-items-center card-container';

                    // If it's the start of a new row, create a new row container
                    if (index % 3 === 0) {
                        const rowContainer = document.createElement('div');
                        rowContainer.classList.add('row');
                        paketContainer.appendChild(rowContainer);
                    }

                    const cardHTML = `
                    <div class="${cardContainerClass}" data-aos="fade-up" data-aos-delay="200">
                        <div class="card align-items-center paket-jogja"
                            style="background-image: url('${paket.gambar}'); background-size: cover; align-items: end; text-align: end; align-content: end;"
                            data-title="Paket Wisata"
                            data-subtitle="${paket.nama}"
                            data-description="${paket.deskripsi}"
                            data-paket-id="${paket.id}">
                            <div class="card-body">
                                <p class="card-title fs-3 fw-bold">${paket.nama}</p>
                            </div>
                        </div>
                    </div>
                `;
                    // Append the card HTML to the last row container
                    paketContainer.lastElementChild.innerHTML += cardHTML;
                });

                // Check if there are remaining cards after the loop
                const remainingCards = data.data.data.length % 3;
                if (remainingCards > 0) {
                    // If there are remaining cards, create a new row container
                    const rowContainer = document.createElement('div');
                    rowContainer.classList.add('row');
                    paketContainer.appendChild(rowContainer);
                }

                // Add event listener for clicking on cards
                paketContainer.querySelectorAll('.paket-jogja').forEach(card => {
                    card.addEventListener('click', function() {
                        const paketId = this.getAttribute('data-paket-id');
                        window.location.href = `/paket/${paketId}`; // Redirect to the paket page
                    });
                });
            } else {
                console.error('Invalid data structure:', data);
            }
        } catch (error) {
            console.error('Error fetching data:', error);
        }
    });
</script>

<script>
    document.addEventListener("DOMContentLoaded", async function() {
        try {
            const urlParts = window.location.pathname.split('/');
            const destinasiId = urlParts[urlParts.length - 1];

            if (!destinasiId) {
                console.error('Destinasi ID tidak tersedia.');
                return;
            }
            
            const response = await axios.get(`http://arshakajaya.test/api/destinasi`);

            if (response.status !== 200) {
                console.error('Error fetching data. Status:', response.status);
                return;
            }

            const data = response.data;

            console.log('API Response:', response);
            console.log('Data:', data);

            const destinasiContainer = document.getElementById('destinasiContainer');

            if (!destinasiContainer) {
                console.error('Container element not found.');
                return;
            }

            destinasiContainer.innerHTML = '';

            if (data.data.data && Array.isArray(data.data.data)) {
                const filteredData = data.data.data.filter(paket => paket.destinasi_id == destinasiId);

                console.log('Filtered Data:', filteredData); // Cek apakah data terfilter dengan benar

                filteredData.forEach((paket) => {
                    const cardDiv = document.createElement('div');
                    cardDiv.classList.add('col-sm-4', 'mb-3', 'mb-sm-0');

                    const cardInnerDiv = document.createElement('div');
                    cardInnerDiv.classList.add('card', 'flex-column', 'paket-detail-jogja',
                        'text-light');
                    cardInnerDiv.setAttribute('data-aos', 'fade-up');
                    cardInnerDiv.setAttribute('data-aos-delay', '100');

                    cardInnerDiv.style.backgroundImage = `url(${paket.gambar || ''})`;
                    cardInnerDiv.style.backgroundSize = 'cover';

                    const cardHTML = `
                        <p class="hari-p text-light">${paket.durasi || ''} Hari</p>
                        <ul class="tempat-wisata list-unstyled">
                            <li>${paket.tujuan_wisata1 || ''}</li>
                            <li>${paket.tujuan_wisata2 || ''}</li>
                            <li>${paket.tujuan_wisata3 || ''}</li>
                            <li>${paket.tujuan_wisata4 || ''}</li>
                            <li>${paket.tujuan_wisata5 || ''}</li>
                            <li>
                                <button type="button" class="btn btn-secondary btn-detail">
                                    Detail
                                </button>
                            </li>
                        </ul>
                        <p class="paket-harga fs-5">
                            ${paket.nama_pilihan || ''} <span class="ms-5 fw-bold">Rp ${paket.harga || ''}</span>
                        </p>
                    `;

                    cardInnerDiv.innerHTML = cardHTML;
                    cardDiv.appendChild(cardInnerDiv);

                    destinasiContainer.appendChild(cardDiv);

                    // Mengambil tombol detail dan menambahkan event listener
                    const btnDetail = cardDiv.querySelector('.btn-detail');
                    if (btnDetail) {
                        btnDetail.addEventListener('click', function() {
                            // Redirect ke halaman detail dengan menyertakan ID paket
                            window.location.href = `/details/${paket.id}`;
                        });
                    }
                });

                AOS.init();
            } else {
                console.error('Invalid or null data structure:', data);
            }
        } catch (error) {
            console.error('Error fetching data:', error);
        }
    });
</script>

@endpush