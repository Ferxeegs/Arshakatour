@extends('layouts.app')

@section('title')
    Travel Blog
@endsection

@push('addon-style')
   <style>
    .article {
  img {
    width: 40em;
    max-width: 100%;
  }
}

.travel-card {
  max-height: 10rem;
}

.position-relative {
  position: relative;
}

.position-absolute {
  position: absolute;
}

.bottom-0 {
  bottom: 0;
}
   </style>
@endpush

@section('content')
   
    <!-- Content -->
    <section class="container">
      <div class="row">
        <div class="col-12 my-5">
          <p
            class="fs-3 fw-bold harga-mulai bg-dark text-light mt-5 w-100 rounded-4 text-center py-3"
            data-aos="fade-up"
            data-aos-delay="100"
          >
            Travel Blog
          </p>
        </div>

        <div class="article col-8 ms-5">
          <div class="text-center">
            <h2 class="fw-bold">
              Pantai Parangtritis: Pesona Keindahan dan Mitos Mistis di Pantai
              Selatan Yogyakarta
            </h2>
            <img src="images/travel-blog.png" alt="" class="my-3 mx-auto" />
          </div>
          <div class="px-5 text-justify">
            <p>
              Pantai Parangtritis, terletak di selatan Yogyakarta, Indonesia,
              adalah destinasi wisata yang memikat para pengunjung dengan
              keindahan alamnya yang menakjubkan dan nuansa mistis yang melekat
              di sekelilingnya. Terkenal sebagai salah satu pantai paling ikonik
              di pulau Jawa, Parangtritis menawarkan pengalaman unik yang
              mencakup pasir putih, ombak yang kuat, dan mitos-mitos yang
              kental. Mari kita menjelajahi kecantikan dan cerita di balik
              pesona Pantai Parangtritis.
            </p>
            <article class="my-4">
              <h4 class="fw-bold my-4">Keindahan Alam Pantai Parangtritis</h4>
              <h5 class="fw-bold my-3">Pasir Putih yang Terhampar Luas</h5>
              <p>
                Pantai ini memukau pengunjung dengan pasir putihnya yang luas
                dan halus. Wisatawan dapat menikmati keindahan matahari terbit
                dan terbenam yang menyoroti pantai, menciptakan pemandangan yang
                memukau.
              </p>
              <h5 class="fw-bold">Ombak Besar yang Menantang</h5>
              <p>
                Parangtritis terkenal dengan ombaknya yang tinggi dan kuat. Bagi
                para penggemar selancar, ini adalah surga yang menantang.
                Pengunjung dapat menyaksikan peselancar mahir melibas ombak yang
                memukau.
              </p>
              <h5 class="fw-bold">
                Bukit Paralayang untuk Pemandangan Spektakuler
              </h5>
              <p>
                Tak jauh dari pantai, terdapat bukit Parangtritis yang menjadi
                tempat favorit para penggemar paralayang. Dari puncak bukit,
                Anda dapat menikmati panorama spektakuler pantai dan hamparan
                lautan yang membentang.
              </p>
            </article>
            <article class="my-4">
              <h4 class="fw-bold my-4">Keunikan Kultural dan Mitos Mistis</h4>
              <h5 class="fw-bold my-3">Legenda Nyi Roro Kidul</h5>
              <p>
                Parangtritis dihubungkan erat dengan legenda Nyi Roro Kidul,
                ratu laut yang diyakini oleh masyarakat setempat memiliki
                kekuatan gaib. Pantai ini dianggap sebagai tempat singgahnya,
                dan masyarakat meyakini bahwa mengenakan warna hijau di pantai
                dapat mengundang perhatiannya.
              </p>
              <h5 class="fw-bold">Upacara Labuhan</h5>
              <p>
                Setiap tahun, masyarakat setempat mengadakan upacara labuhan di
                Pantai Parangtritis. Upacara ini merupakan bentuk rasa syukur
                dan penghormatan kepada kekuatan alam. Pelaksanaan upacara ini
                menambah nuansa mistis di sekitar pantai.
              </p>
              <h5 class="fw-bold">Makam Panembahan Senopati</h5>
              <p>
                Di sekitar Pantai Parangtritis, terdapat makam Panembahan
                Senopati, pendiri Kesultanan Mataram. Tempat ini menjadi tujuan
                ziarah dan memberikan nuansa sejarah yang dalam bagi pengunjung.
              </p>
            </article>
            <article class="my-4">
              <h4 class="fw-bold my-4">Aktivitas Wisata Menarik</h4>
              <h5 class="fw-bold my-3">Kuda Lumping dan Dokar</h5>
              <p>
                Pengunjung dapat menikmati pengalaman unik dengan naik kuda
                lumping, tarian tradisional Jawa yang melibatkan kuda mainan.
                Selain itu, menyusuri pantai dengan dokar adalah cara yang
                menyenangkan untuk menjelajahi sekitar.
              </p>
              <h5 class="fw-bold">Wisata Air Terjun Jomblang</h5>
              <p>
                Tak jauh dari Pantai Parangtritis, terdapat air terjun Jomblang
                yang menakjubkan. Perjalanan menuju air terjun ini menawarkan
                petualangan seru melalui gua dan hutan yang lebat.
              </p>
            </article>
            <article class="my-4">
              <h4 class="fw-bold my-4">Tips dan Informasi Penting</h4>
              <h5 class="fw-bold my-3">Pakaian Hijau di Pantai</h5>
              <p>
                Jika Anda ingin mengikuti tradisi setempat, kenakanlah pakaian
                berwarna hijau ketika mengunjungi Pantai Parangtritis.
              </p>
              <h5 class="fw-bold">Waktu Terbaik untuk Berkunjung</h5>
              <p>
                Waktu terbaik untuk mengunjungi pantai ini adalah selama musim
                kemarau, sekitar bulan Mei hingga September, ketika cuaca sedang
                cerah dan ombak tidak terlalu tinggi.
              </p>
              <h5 class="fw-bold">Keamanan dan Kewaspadaan</h5>
              <p>
                Penting untuk tetap waspada terhadap kondisi ombak yang dapat
                berubah-ubah. Ikuti petunjuk keamanan dan hindari berenang di
                daerah yang dianggap berbahaya.
              </p>
            </article>
            <article class="my-4">
              <h4 class="fw-bold my-4">
                Informasi Praktis untuk Kunjungan Anda ke Pantai Parangtritis
              </h4>
              <h5 class="fw-bold my-3">Lokasi:</h5>
              <p>
                Pantai Parangtritis terletak di Desa Parangtritis, Kecamatan
                Kretek, Kabupaten Bantul, Daerah Istimewa Yogyakarta, Indonesia.
                Dengan jarak sekitar 27 kilometer selatan Yogyakarta, pantai ini
                dapat diakses dengan mudah melalui transportasi darat.
              </p>
              <h5 class="fw-bold">Jam Buka:</h5>
              <p>
                Pantai Parangtritis buka setiap hari, 24 jam. Namun, untuk
                kegiatan-kegiatan tertentu dan layanan penyewaan, jam
                operasional bisa berbeda. Sebaiknya, pastikan untuk memeriksa
                informasi terkini sebelum kunjungan Anda.
              </p>
              <h5 class="fw-bold">Harga Tiket Masuk:</h5>
              <p>
                Biaya masuk ke Pantai Parangtritis cukup terjangkau, dan
                pengunjung dapat menikmati keindahan alamnya dengan membayar
                tiket masuk. Harga tiket bisa berubah, oleh karena itu,
                disarankan untuk mengecek harga terbaru sebelum kunjungan.
                Biasanya, tarif tiket masuk berbeda antara wisatawan lokal dan
                internasional.
              </p>
            </article>
            <article class="my-4">
              <h4 class="fw-bold my-4">
                Tarif Aktivitas dan Layanan Tambahan:
              </h4>
              <h5 class="fw-bold my-3">Sewa Kuda Lumping:</h5>
              <p>
                Untuk pengalaman menarik menaiki kuda lumping, tersedia layanan
                sewa dengan tarif tertentu per putaran atau waktu tertentu.
              </p>
              <h5 class="fw-bold">Dokar dan Kuda Tunggang:</h5>
              <p>
                Wisatawan juga dapat menyewa dokar atau menaiki kuda dengan
                tarif yang bervariasi tergantung pada durasi dan jarak yang
                ditempuh.
              </p>
              <h5 class="fw-bold">Paralayang di Bukit Parangtritis:</h5>
              <p>
                Jika Anda tertarik untuk mencoba paralayang, terdapat layanan
                penyediaan alat dan instruktur dengan tarif khusus.
              </p>
            </article>
          </div>
        </div>
        <div class="col-3">
          <h4 class="fw-bold mt-5 pt-5">Pos Pos Terbaru</h4>
          <div class="sticky-top" style="top: 100px">
            <div class="card travel-card mb-4" style="width: 18rem">
              <div class="position-relative">
                <img
                  src="images/travel-blog.png"
                  class="card-img-top"
                  alt="..."
                />
                <div class="card-body position-absolute bottom-0 start-0">
                  <p class="card-text text-black fw-bold mx-auto">
                    Some quick example text
                  </p>
                </div>
              </div>
            </div>
            <div class="card travel-card mb-4" style="width: 18rem">
              <div class="position-relative">
                <img
                  src="images/travel-blog.png"
                  class="card-img-top"
                  alt="..."
                />
                <div class="card-body position-absolute bottom-0 start-0">
                  <p class="card-text text-black fw-bold mx-auto">
                    Some quick example text
                  </p>
                </div>
              </div>
            </div>
            <div class="card travel-card mb-4" style="width: 18rem">
              <div class="position-relative">
                <img
                  src="images/travel-blog.png"
                  class="card-img-top"
                  alt="..."
                />
                <div class="card-body position-absolute bottom-0">
                  <p class="card-text text-white fw-bold mx-auto">
                    Some quick example text
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    

    
    <!-- Bootstrap core JavaScript -->
    <script src="/vendor/jquery/jquery.slim.min.js"></script>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
      crossorigin="anonymous"
    ></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
      AOS.init();
    </script>
    <script>
      (function (w, d, s, u) {
        w.gbwawc = {
          url: u,
          options: {
            waId: "+62 82133513522",
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

    </section>
@endsection
