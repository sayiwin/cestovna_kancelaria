<?php 
  include "./parts/header.php";
  include_once "./parts/functions.php";
?>
<body>

  <!-- Navigačný panel -->
  <?php include_once "./parts/nav_for_login.php"; ?>

  <!-- Karusel s obrázkami a popisom -->
  <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="img/pexels-elina-sazonova-1850619.jpg" class="d-block w-100" alt="...">
          <div class="carousel-caption">
            <div class="logotwo mt-5">
              <h1>MaxCesta</h1>
              <h5 class="text-decoration-underline">Otázky</h5>
            </div>
          </div>
        </div>
        <div class="carousel-item">
          <img src="img/pexels-davifnr-2064827.jpg" class="d-block w-100" alt="...">
          <div class="carousel-caption">
            <div class="logotwo mt-5 text-decoration-underline">
              <h1>MaxCesta</h1>
              <h5 class="text-decoration-underline">Otázky</h5>
            </div>
          </div>
        </div>
        <div class="carousel-item">
          <img src="img/pexels-kristina-paul-713711153-27960501.jpg" class="d-block w-100" alt="...">
          <div class="carousel-caption">
            <div class="logotwo mt-5 text-decoration-underline">
              <h1>MaxCesta</h1>
              <h5 class="text-decoration-underline">Otázky</h5>
            </div>
          </div>
        </div>
        <div class="carousel-item">
          <img src="img/pexels-mati-angulo-330211-930595.jpg" class="d-block w-100" alt="...">
          <div class="carousel-caption">
            <div class="logotwo mt-5 text-decoration-underline">
              <h1>MaxCesta</h1>
              <h5 class="text-decoration-underline">Otázky</h5>
            </div>
          </div>
        </div>
      </div>
  </div>
    
  <hr class="border border-dark border-3 opacity-75">

    <!-- Kontaktný formulár pre otázky -->
    <div class="container">
    <h3 class="logolist">Ak máte akékoľvek otázky - napíšte nám</h3>
    <form id="contactForm" onsubmit="return validateForms(event)">
      <div class="mb-3 otazka">
        <label for="name" class="form-label">Vaše meno:</label>
        <input type="text" id="name" class="form-control border border-2 border-dark" style="background: rgb(250, 247, 240);" placeholder="Zadajte meno...">
        <div id="nameError" class="text-danger" style="display:none;">Prosím, zadajte vaše meno.</div>
      </div>
      <div class="mb-3 otazka">
        <label for="email" class="form-label">Email address:</label>
        <input type="email" id="email" class="form-control border border-2 border-dark" style="background: rgb(250, 247, 240);" placeholder="Zadajte svoj email...">
        <div id="emailError" class="text-danger" style="display:none;">Prosím, zadajte platnú emailovú adresu.</div>
      </div>
      <div class="mb-3 otazka">
        <label for="question" class="form-label">Vaša otázka:</label>
        <textarea id="question" name="otazky" class="form-control border border-2 border-dark" style="background: rgb(250, 247, 240);" placeholder="Zadajte svoju otázku..."></textarea>
        <div id="questionError" class="text-danger" style="display:none;">Prosím, zadajte svoju otázku.</div>
      </div>
      <div class="mb-3 form-check otazka">
        <input type="checkbox" id="terms" class="form-check-input bg-dark">
        <label class="form-check-label" for="terms">Povolenie na spracovanie vašich informácií</label>
        <div id="termsError" class="text-danger" style="display:none;">Musíte súhlasiť s podmienkami.</div>
      </div>
      <div class="d-grid gap-2 col-5 mx-auto d-md-flex justify-content-md-end">
        <button class="btn btn-outline-dark border-2 fw-medium mb-5 btn-lg" type="submit">Odoslať</button>
      </div>
    </form>
  </div>

  <!-- footer so základnými informáciami a kontaktami -->
  <?php
  include "./parts/footer.php";
  ?>
</body>
</php>