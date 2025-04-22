<?php 
  include "./parts/header.php";
  include_once "./parts/functions.php";
?>
<body>

  <!-- Navigačný panel -->
  <?php include_once "./parts/nav_for_general.php"; ?>

  <!-- Karusel s obrázkami a popisom -->
  <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="img/pexels-elina-sazonova-1850619.jpg" class="d-block w-100" alt="...">
          <div class="carousel-caption">
            <div class="logotwo mt-5">
              <h1>MaxCesta</h1>
              <h5 class="text-decoration-underline">Cestovná registrácia</h5>
            </div>
          </div>
        </div>
        <div class="carousel-item">
          <img src="img/pexels-davifnr-2064827.jpg" class="d-block w-100" alt="...">
          <div class="carousel-caption">
            <div class="logotwo mt-5 text-decoration-underline">
              <h1>MaxCesta</h1>
              <h5 class="text-decoration-underline">Cestovná registrácia</h5>
            </div>
          </div>
        </div>
        <div class="carousel-item">
          <img src="img/pexels-kristina-paul-713711153-27960501.jpg" class="d-block w-100" alt="...">
          <div class="carousel-caption">
            <div class="logotwo mt-5 text-decoration-underline">
              <h1>MaxCesta</h1>
              <h5 class="text-decoration-underline">Cestovná registrácia</h5>
            </div>
          </div>
        </div>
        <div class="carousel-item">
          <img src="img/pexels-mati-angulo-330211-930595.jpg" class="d-block w-100" alt="...">
          <div class="carousel-caption">
            <div class="logotwo mt-5 text-decoration-underline">
              <h1>MaxCesta</h1>
              <h5 class="text-decoration-underline">Cestovná registrácia</h5>
            </div>
          </div>
        </div>
    </div>
  </div>

  <hr class="border border-dark border-3 opacity-75">

  <div class="container-fluid">
      <h3 class="logolist">Vitajte v MaxCesta!</h3>
      <p class="logotext"> Urobili ste skvelý výber z nášho katalógu a teraz stačí len vyplniť dotazník, aby sme mohli pripraviť všetko potrebné pre vaše nezabudnuteľné dobrodružstvo. Vyplňte prosím dotazník nižšie a my sa postaráme o každý detail, aby bola vaša cesta čo najpohodlnejšia a najzaujímavejšia.</p>
      <h5 class="logolist mt-0">Nechajte nás splniť vaše sny!</h5>
  </div>

  <!-- Sekcia formulára pre registráciu -->
  <div class="container">
    <h3 class="logolist">Registrácia</h3>
    <form id="registrationForm" onsubmit="return validateForm(event)">
      <div class="mb-3 otazka">
        <label for="pocet" class="form-label">Počet ľudí:</label>
        <input type="text" id="pocet" class="form-control border border-2 border-dark" style="background: rgb(250, 247, 240);" placeholder="Zadajte svoje čislo...">
        <div id="pocetError" class="text-danger" style="display:none;">Prosím, zadajte platné číslo.</div>
      </div>
      <div class="mb-3 otazka">
        <label for="mesto">Vyberte si mesto, do ktorého chcete cestovať:</label>
        <select id="mesto" name="mesto" class="form-control border border-2 border-dark fw-semibold" style="background: rgb(250, 247, 240);">
          <option class="fw-semibold" value="">Vyberte mesto</option>
          <option class="fw-semibold" value="par">Paríž - Mesto romantiky a kultúry.</option>
          <option class="fw-semibold" value="ber">Berlín - História a súčasnosť.</option>
          <option class="fw-semibold" value="lon">Londýn - Tradície a inovácie.</option>
          <option class="fw-semibold" value="rim">Rím - Večná história.</option>
        </select>
        <div id="mestoError" class="text-danger" style="display:none;">Prosím, vyberte mesto.</div>
      </div>
      <div class="mb-3 otazka">
        <label class="m3" id="tour">Vyberte si, ktorý zájazd je vám bližšie:</label>
        <input type="radio" class="btn-check" name="tour" id="option5">
        <label class="btn btn-outline-dark form-control border border-2 border-dark fw-semibold mt-1 mb-1" for="option5">Rodinný Tour</label>
        <input type="radio" class="btn-check" name="tour" id="option6">
        <label class="btn btn-outline-dark form-control border border-2 border-dark fw-semibold mb-1" for="option6">Kultúrny Tour</label>
        <input type="radio" class="btn-check" name="tour" id="option7">
        <label class="btn btn-outline-dark form-control border border-2 border-dark fw-semibold mb-1" for="option7">Relax Tour</label>
        <input type="radio" class="btn-check" name="tour" id="option8">
        <label class="btn btn-outline-dark form-control border border-2 border-dark fw-semibold mb-1" for="option8">Dobrodružný Tour</label>
        <input type="radio" class="btn-check" name="tour" id="option9">
        <label class="btn btn-outline-dark form-control border border-2 border-dark fw-semibold mb-1" for="option9">Expresný Tour</label>
        <div id="tourError" class="text-danger" style="display:none;">Prosím, vyberte typ zájazdu.</div>
      </div>
      <div class="mb-3 form-check otazka">
        <input type="checkbox" id="terms" class="form-check-input bg-dark">
        <label class="form-check-label" for="terms">Povolenie na spracovanie vašich informácií</label>
        <div id="termsError" class="text-danger" style="display:none;">Musíte súhlasiť s podmienkami.</div>
      </div>
      <div class="d-grid gap-2 col-5 mx-auto d-md-flex justify-content-md-end">
        <button class="btn btn-outline-dark border-2 fw-medium mb-5 btn-lg" type="submit">Začnite svoju cestu</button>
      </div>
    </form>
  </div>
  
  <!-- footer so základnými informáciami, kontaktami, Skripty pre Bootstrap a ďalšie funkcie -->
  <?php
    include "./parts/footer.php";
  ?>
</body>
</php>