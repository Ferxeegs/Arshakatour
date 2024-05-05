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
  document.addEventListener("DOMContentLoaded", function () {
    const cardElements = document.querySelectorAll(
      ".align-items-center.card"
    );

    cardElements.forEach(function (card) {
      card.addEventListener("click", function () {
        const targetPage = this.getAttribute("data-target");
        window.location.href = targetPage;
      });
    });
  });
</script>
<script>
  document.addEventListener("DOMContentLoaded", function () {
    const cardElements = document.querySelectorAll(
      ".align-items-center.card"
    );

    cardElements.forEach(function (card) {
      card.addEventListener("click", function () {
        const background = this.dataset.background;
        const title = this.dataset.title;
        const subtitle = this.dataset.subtitle;
        const description = this.dataset.description;
        const targetPage = this.dataset.target;

        // Additional information for Tempat Wisata and Paket Harga
        const tempatWisata = [
          "Destination1",
          "Destination2",
          "Destination3",
        ]; // Replace with your actual data
        const harga = "Rp 250.000"; // Replace with your actual data

        localStorage.setItem(
          "selectedPackage",
          JSON.stringify({
            background,
            title,
            subtitle,
            description,
            tempatWisata,
            harga,
          })
        );

        window.location.href = targetPage;
      });
    });
  });
</script>