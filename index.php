<?php 
  include "./parts/header.php";
  include_once "./parts/functions.php";
?>
<body>

  <!-- Navigačný panel -->
  <?php include_once "./parts/nav.php"; ?>

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

  <!-- Sekcia dôvodov, prečo si vybrať MaxCesta -->
  <div class="container-fluid listok">
    <h3 class="logosmall">Prečo si vybrať MaxCesta?</h3>
    <ul class="list-group list-group-flush logotext">
      <li class="list-group-item">INDIVIDUÁLNY PRÍSTUP: Vždy berieme do úvahy vaše priania a robíme všetko pre to, aby bol váš pobyt čo najpríjemnejší a jedinečný.</li>
      <li class="list-group-item">KVALITA SLUŽIEB: Naši klienti sú s nami spokojní, pretože si vážime ich dôveru a vždy sa snažíme ponúknuť najlepšiu kvalitu služieb.</li>
      <li class="list-group-item">ŠIROKÝ VÝBER DESTINÁCIÍ: Ponúkame nielen obľúbené turistické destinácie, ale aj skryté perly sveta, ktoré vám prinesú nezabudnuteľné zážitky.</li>
      <li class="list-group-item">SKÚSENOSTI A PROFESIONALITA: Náš tím tvoria odborníci, ktorí ovládajú cestovný ruch do detailov a sú pripravení vám poskytnúť to najlepšie.</li>
      <li class="list-group-item">FLEXIBILITA A PRISPÔSOBENIE ZÁJAZDOV: Chápeme, že každý klient má svoje vlastné predstavy o ideálnom výlete, preto vám umožňujeme flexibilitu v výbere itinerára, dátumov či špeciálnych požiadaviek. Každý zájazd sa dá prispôsobiť presne podľa vašich predstáv.</li>
      <li class="list-group-item">ZÁKAZNÍCKA PODPORA 24/7: Naša starostlivosť o klientov nekončí podpisom zmluvy. Sme tu pre vás počas celého pobytu, poskytujeme 24-hodinovú podporu a zaručujeme, že sa na nás môžete kedykoľvek obrátiť v prípade akýchkoľvek otázok alebo problémov.</li>
    </ul>
  </div>

  <a class="zdroj" href="o_nas.php"><h4 class="logotext">Viac o nás!</h4></a>

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