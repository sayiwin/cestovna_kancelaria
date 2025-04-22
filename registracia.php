<?php 
  include "./parts/header.php";
  include_once "./parts/functions.php";
?>
<body>

  <!-- Navigačný panel -->
  <?php include_once "./parts/nav_for_login.php"; ?>

  <!-- Karusel obrázkov s popismi -->
  <div id="carouselExampleCaptions" class="carousel slide">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="3" aria-label="Slide 4"></button>
    </div>
    <div>
    </div>
    <div class="carousel-inner border border-dark border-3">
      <div class="carousel-item active">
        <img src="img/pexels-elina-sazonova-1850619.jpg" class="d-block w-100" alt="...">
        <div class="carousel-caption">
          <div class="logo">
            <h1>MaxCesta</h1>
            <h5 class="text-decoration-underline">Maximálny oddych pre maximálnych osob</h5>
          </div>
          <div class="logotexton">
            <h5>Dovoľte si dobrodružstvo, ktoré si zaslúžite!</h5>
            <p>Predstavte si, ako sa slnko ponára do mora na tropickej pláži, alebo ako sa túlate po historických uličkách, ktoré rozprávajú príbehy dávnych civilizácií. MaxCesta vám ponúka cestu k nezabudnuteľným zážitkom, ktoré vám zmenia život!</p>
            </div>
        </div>
      </div>
      <div class="carousel-item">
        <img src="img/pexels-davifnr-2064827.jpg" class="d-block w-100 imgs" alt="...">
        <div class="carousel-caption">
          <div class="logo">
            <h1>MaxCesta</h1>
            <h5 class="text-decoration-underline">Maximálny oddych pre maximálnych osob</h5>
          </div>
          <div class="logotexton">
            <h5>Zažite slobodu a dobrodružstvo!</h5>
            <p>Vypnite na chvíľu od každodenných starostí a ponorte sa do nových svetov! Prežite naplno každý moment, objavujte nové miesta, spoznávajte nové kultúry a ľudí. Cestovanie nie je len o destináciách, je to o tých nezabudnuteľných chvíľach, ktoré prežijete!</p>
          </div>
          </div>
      </div>
      <div class="carousel-item">
        <img src="img/pexels-kristina-paul-713711153-27960501.jpg" class="d-block w-100 imgs" alt="...">
        <div class="carousel-caption">
          <div class="logo">
            <h1>MaxCesta</h1>
            <h5 class="text-decoration-underline">Maximálny oddych pre maximálnych osob</h5>
          </div>
          <div class="logotexton">
            <h5>Pocítite v srdci túto slobodu, ktorá vás napĺňa!</h5>
            <p>A čo je lepšie ako vidieť svet na vlastné oči? Či už relaxujete na pláži, potápate sa v krištáľovo čistých vodách alebo objavujete krásy miest, na ktoré nikdy nezabudnete - cesta je vždy viac než len cieľ.</p>
          </div>
        </div>
      </div>
      <div class="carousel-item">
        <img src="img/pexels-mati-angulo-330211-930595.jpg" class="d-block w-100 imgs" alt="...">
        <div class="carousel-caption">
          <div class="logo">
            <h1>MaxCesta</h1>
            <h5 class="text-decoration-underline">Maximálny oddych pre maximálnych osob</h5>
          </div>
          <div class="logotexton">
            <h5>Zaslúžite si to!</h5>
            <p>Prečo čakať na dokonalý moment? Ten je práve teraz! Zarezervujte si svoju vysnívanú dovolenku a nechajte sa unášať vlnami nových zážitkov, ktoré vás čakajú. Znova sa nájdete a obnovíte svoju energiu. Podľa nás to rozhodne stojí za to!</p>
          </div>
          </div>
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>
    
  <hr class="border border-dark border-3 opacity-75">

  <!-- Sekcia formulára pre registráciu -->
  <div class="container">
    <h3 class="logolist">Registrácia</h3>
    <form id="registrationForm" onsubmit="return validateRegistr(event)">
      <div class="mb-3 otazka">
        <label for="name" class="form-label">Vaše meno:</label>
        <input type="text" id="name" class="form-control border border-2 border-dark" style="background: rgb(250, 247, 240);" placeholder="Zadajte meno...">
        <div id="nameError" class="text-danger" style="display:none;">Prosím, zadajte vaše meno.</div>
      </div>
      <div class="mb-3 otazka">
        <label for="priezv" class="form-label">Vaše priezvisko:</label>
        <input type="text" id="priezv" class="form-control border border-2 border-dark" style="background: rgb(250, 247, 240);" placeholder="Zadajte priezvisko...">
        <div id="priezvError" class="text-danger" style="display:none;">Prosím, zadajte vaše priezvisko.</div>
      </div>
      <div class="mb-3 otazka">
        <label for="login" class="form-label">Vaš login:</label>
        <input type="text" id="login" class="form-control border border-2 border-dark" style="background: rgb(250, 247, 240);" placeholder="Zadajte login...">
        <div id="loginError" class="text-danger" style="display:none;">Prosím, zadajte vaš login.</div>
      </div>
      <div class="mb-3 otazka">
        <label for="heslo" class="form-label">Vaše heslo:</label>
        <input type="password" id="heslo" class="form-control border border-2 border-dark" style="background: rgb(250, 247, 240);" placeholder="Zadajte heslo...">
        <div id="hesloError" class="text-danger" style="display:none;">Prosím, zadajte vaše heslo.</div>
      </div>
      <div class="mb-3 otazka">
        <label for="email" class="form-label">Vaš email address:</label>
        <input type="email" id="email" class="form-control border border-2 border-dark" style="background: rgb(250, 247, 240);" placeholder="Zadajte svoj email...">
        <div id="emailError" class="text-danger" style="display:none;">Prosím, zadajte platnú emailovú adresu.</div>
      </div>
      <div class="mb-3 otazka">
        <label for="phone" class="form-label">Vaše číslo:</label>
        <input type="tel" id="phone" class="form-control border border-2 border-dark" style="background: rgb(250, 247, 240);" placeholder="Zadajte svoje čislo...">
        <div id="phoneError" class="text-danger" style="display:none;">Prosím, zadajte platné číslo.</div>
      </div>
      <div class="mb-3 otazka">
        <label for="pohlavie">Vyberte si pohlavie:</label>
        <select id="pohlavie" name="pohlavie" class="form-control border border-2 border-dark fw-semibold" style="background: rgb(250, 247, 240);">
          <option class="fw-semibold" value="">Vyberte pohlavie</option>
          <option class="fw-semibold" value="par">Muž.</option>
          <option class="fw-semibold" value="ber">Žena.</option>
        </select>
        <div id="pohlavieError" class="text-danger" style="display:none;">Prosím, zadajte pohlavie.</div>
      </div>
      <div class="mb-3 form-check otazka">
        <input type="checkbox" id="terms" class="form-check-input bg-dark">
        <label class="form-check-label" for="terms">Povolenie na spracovanie vašich informácií</label>
        <div id="termsError" class="text-danger" style="display:none;">Musíte súhlasiť s podmienkami.</div>
      </div>
      <div class="d-grid gap-2 col-5 mx-auto d-md-flex justify-content-md-end">
        <button class="btn btn-outline-dark border-2 fw-medium mb-5 btn-lg" type="submit">Zaregistrujte sa</button>
      </div>
    </form>
  </div>

  <div class="container">
    <h3 class="logolist">Prihláste sa</h3>
    <form id="registrationForm" onsubmit="return validateLogin(event)">
      <div class="mb-3 otazka">
        <label for="logins" class="form-label">Vaš login:</label>
        <input type="text" id="logins" class="form-control border border-2 border-dark" style="background: rgb(250, 247, 240);" placeholder="Zadajte login...">
        <div id="loginsError" class="text-danger" style="display:none;">Prosím, zadajte vaš login.</div>
      </div>
      <div class="mb-3 otazka">
        <label for="heslos" class="form-label">Vaše heslo:</label>
        <input type="password" id="heslos" class="form-control border border-2 border-dark" style="background: rgb(250, 247, 240);" placeholder="Zadajte heslo...">
        <div id="heslosError" class="text-danger" style="display:none;">Prosím, zadajte vaše heslo.</div>
      </div>
      <div class="mb-3 form-check otazka">
        <input type="checkbox" id="termss" class="form-check-input bg-dark">
        <label class="form-check-label" for="termss">Si z iného počítača?</label>
        <div id="termssError" class="text-danger" style="display:none;">Musíte súhlasiť.</div>
      </div>
      <div class="d-grid gap-2 col-5 mx-auto d-md-flex justify-content-md-end">
        <button class="btn btn-outline-dark border-2 fw-medium mb-5 btn-lg" type="submit">Prihláste sa</button>
      </div>
    </form>
  </div>
  <!-- footer so základnými informáciami a kontaktami -->
   
  <?php
  include "./parts/footer.php";
  ?>
</body>
</php>