<?php 
  include_once "./classes/WebsiteHelper.php";
  WebsiteHelper::sessionControl();
  $websiteHelper = new WebsiteHelper();
  WebsiteHelper::renderHead();
?>
<body>

  <?php $websiteHelper->renderNavbarGeneral(); ?>

  <?php $websiteHelper->renderCarousel('others'); ?>

  <hr class="border border-dark border-3 opacity-75">

  <div class="container-fluid">
      <h3 class="logolist">Vitajte v MaxCesta!</h3>
      <p class="logotext"> Urobili ste skvelý výber z nášho katalógu a teraz stačí len vyplniť dotazník, aby sme mohli pripraviť všetko potrebné pre vaše nezabudnuteľné dobrodružstvo. Vyplňte prosím dotazník nižšie a my sa postaráme o každý detail, aby bola vaša cesta čo najpohodlnejšia a najzaujímavejšia.</p>
      <h5 class="logolist mt-0">Nechajte nás splniť vaše sny!</h5>
  </div>

  <!-- Sekcia formulára pre registráciu -->
  <div class="container">
    <h3 class="logolist">Registrácia</h3>
    <form id="registrationForm" onsubmit="return validateForm(event)" method="POST" action="db/control_zaevid.php">
      <div class="mb-3 otazka">
        <label for="count" class="form-label">Počet ľudí:</label>
        <input type="text" id="count" name="count" class="form-control border border-2 border-dark" style="background: rgb(250, 247, 240);" placeholder="Zadajte počet ľudí...">
        <div id="countError" class="text-danger" style="display:none;">Prosím, zadajte platné číslo.</div>
      </div>
      <div class="mb-3 otazka">
        <label for="city">Vyberte si mesto, do ktorého chcete cestovať:</label>
        <select id="city" name="city" class="form-control border border-2 border-dark fw-semibold" style="background: rgb(250, 247, 240);">
          <option class="fw-semibold" value="">Vyberte mesto</option>
          <option class="fw-semibold" value="Paríž">Paríž - Mesto romantiky a kultúry.</option>
          <option class="fw-semibold" value="Berlín">Berlín - História a súčasnosť.</option>
          <option class="fw-semibold" value="Londýn">Londýn - Tradície a inovácie.</option>
          <option class="fw-semibold" value="Rím">Rím - Večná história.</option>
        </select>
        <div id="cityError" class="text-danger" style="display:none;">Prosím, vyberte mesto.</div>
      </div>
      <div class="mb-3 otazka">
        <label class="m3" id="types">Vyberte si, ktorý zájazd je vám bližšie:</label>
        <input type="radio" class="btn-check" name="types" value="Rodinný Tour" id="option5">
        <label class="btn btn-outline-dark form-control border border-2 border-dark fw-semibold mt-1 mb-1" for="option5">Rodinný Tour</label>
        <input type="radio" class="btn-check" name="types" value="Kultúrny Tour" id="option6">
        <label class="btn btn-outline-dark form-control border border-2 border-dark fw-semibold mb-1" for="option6">Kultúrny Tour</label>
        <input type="radio" class="btn-check" name="types" value="Relax Tour" id="option7">
        <label class="btn btn-outline-dark form-control border border-2 border-dark fw-semibold mb-1" for="option7">Relax Tour</label>
        <input type="radio" class="btn-check" name="types" value="Dobrodružný Tour" id="option8">
        <label class="btn btn-outline-dark form-control border border-2 border-dark fw-semibold mb-1" for="option8">Dobrodružný Tour</label>
        <input type="radio" class="btn-check" name="types" value="Expresný Tour" id="option9">
        <label class="btn btn-outline-dark form-control border border-2 border-dark fw-semibold mb-1" for="option9">Expresný Tour</label>
        <div id="typesError" class="text-danger" style="display:none;">Prosím, vyberte typ zájazdu.</div>
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
  <?php WebsiteHelper::renderFooter(); ?>
</body>
</php>