@extends('layouts.app')

@section('title')
Home
@endsection

@push('addon-style')
    <style>
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
  width: 300px;
  height: 499px;
  margin-top: 10px;
  color: white;
  border-radius: 35px; /* Mengatur sudut melingkar */
}

@media (min-width: 800px) and (max-width: 1199px) {
  .card {
    width: 250px;
    height: 450px;
  }
}

@media (min-width: 1200px) {
  .card {
    width: 350px;
    height: 499px;
  }
}

    </style>
@endpush

@section('content')
<div class="banner container-xxl" id="home">
    <div class="banner-content container text-center">
        <div class="mt-5" data-aos="zoom-in-up" data-aos-delay="150">
            <p class="banner-title mt-5">Paket Wisata Murah</p>
            <p class="banner-title2">Destinasi Terbaik Indonesia</p>
            <p class="banner-title3">Temukan Petualangan Anda di Satu Tempat</p>
            <a href="#preview" class="text-decoration-none text-dark">
                <button type="button" class="btn btn-light btn-xl fw-bold px-5 py-lg-4 mt-5">
                    Explore All Product
                </button>
            </a>
        </div>
    </div>
</div>

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
        <div class="col-12">
            <p class="fs-3 mt-5 fw-bold section-title">
                Destinasi Wisata Favorit
            </p>
        </div>
        <div id="destinasiContainer" class="row"></div>
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

@push('addon.script')
<script>
    const navEl = document.querySelector(".navbar");
    window.addEventListener("scroll", () => {
        if (window.scrollY >= 56) {
            navEl.classList.add("navbar-scrolled");
        } else if (window.scrollY < 56) {
            navEl.classList.remove("navbar-scrolled");
        }
    });

    document
        .querySelectorAll('.navbar-nav a[href^="#"]')
        .forEach((anchor) => {
            anchor.addEventListener("click", function(e) {
                e.preventDefault();

                const targetId = this.getAttribute("href").substring(1);
                const targetElement = document.getElementById(targetId);

                window.scrollTo({
                    top: targetElement.offsetTop - navEl.clientHeight, // Adjusted for navbar height
                    behavior: "smooth",
                });
            });
        });
</script>
@endpush

<script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>

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
            const response = await axios.get('http://arshakajaya.test/api/paket');

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

            if (data.data && Array.isArray(data.data.data)) {
                data.data.data.forEach((paket) => {
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
                            ${paket.nama || ''} <span class="ms-5 fw-bold">Rp ${paket.harga || ''}</span>
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