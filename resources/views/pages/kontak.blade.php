@extends('layouts.app')

@section('title')
Kontak
@endsection

@section('content')
<section class="container">
    <div class="row">
        <div class="col-12 my-5">
            <p class="fs-3 fw-bold harga-mulai bg-dark text-light mt-5 w-100 rounded-4 text-center py-3" data-aos="fade-up">
                Kontak dan Bantuan
            </p>
        </div>
        <div class="col-sm-5 mb-3 mb-sm-0 ms-5 mt-3 kontak" data-aos="fade-zoom-in" data-aos-easing="ease-in-back" data-aos-delay="200" data-aos-offset="0">
            <img src="/images/kontakbantuann.png" alt="" class="px-auto mx-auto" />
            <div class="py-3 w-75 btn-dark rounded-5 fs-4 fw-bold text-center">
                arshakaTour
            </div>
        </div>

        <div class="col-sm-6 mb-3 mb-sm-0 mt-3 pesan-kontak card-detail-wisata" data-aos="fade-zoom-in" data-aos-easing="ease-in-back" data-aos-delay="300" data-aos-offset="0">
            <form id="contactForm">
                <div class="flex-column text-dark">
                    <p class="text-black fs-2 fw-bold text-center mt-3 pb-1">
                        Kirim Pesan Anda
                    </p>
                    <div class="mx-3 w-auto">
                        <div class="mb-3">
                            <label for="fknama" class="form-label">Nama</label>
                            <input type="text" class="form-control rounded-3" id="fknama" />
                        </div>

                        <div class="mb-3">
                            <label for="fktelp" class="form-label">WA/Telp</label>
                            <input type="tel" class="form-control rounded-3" id="fktelp" />
                            <p>
                                Pastikan No Wa / Telp aktif agar dapat kami hubungi kembali.
                            </p>
                        </div>
                        <div>
                            <label for="fkpesan" class="form-label">Pesan</label>
                            <textarea class="form-control rounded-3" id="fkpesan" rows="9"></textarea>
                        </div>
                        <button type="submit" class="btn btn-dark float-end rounded-4 px-5 mt-4">
                            Kirim
                        </button>
                    </div>
                </div>
            </form>
        </div>

        <div class="col-12 fs-4 fw-bold mt-5 text-center sosmed">
            <p>
                Simak Update dan Penawaran Terbaik dari Kami <br />
                dibawah ini
            </p>
            <a href="#"><img src="/images/ig-logo.svg" alt="" /></a>
            <a href="#"><img src="/images/fb-logo.svg" alt="" /></a>
            <a href="#"><img src="/images/yt-logo.svg" alt="" /></a>
            <a href="#"><img src="/images/wa-logo.svg" alt="" /></a>
        </div>
    </div>
</section>
@endsection

<script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>

<script>
    document.addEventListener("DOMContentLoaded", function() {
        const contactForm = document.getElementById("contactForm");

        contactForm.addEventListener("submit", function(event) {
            event.preventDefault(); // Prevent default form submission behavior

            // Retrieve input values from the form
            const nama = document.getElementById("fknama").value;
            const telepon = document.getElementById("fktelp").value;
            const pesan = document.getElementById("fkpesan").value;

            // Create data object to be sent to the API
            const data = {
                nama: nama,
                telepon: telepon,
                pesan: pesan
            };

            // Send data to the API using POST method with Axios
            axios.post("http://arshakajaya.test/api/kontak", data)
                .then(response => {
                    console.log("Berhasil mengirim data:", response.data);
                    // Clear the form after successful submission
                    contactForm.reset();
                    // Display a success message to the user
                    alert("Pesan berhasil dikirim!");
                })
                .catch(error => {
                    console.error("Gagal mengirim data:", error);
                    // Display an error message to the user
                    alert("Gagal mengirim pesan. Silakan coba lagi.");
                });
        });
    });
</script>