<?php 
  include "./parts/header.php";
  include_once "./parts/functions.php";
?>
<body>

  <!-- Navigačný panel -->
  <?php include_once "./parts/nav_for_general.php"; ?>

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

  <!-- Sekcia pozvánok -->
  <div class="container-fluid">
    <h3 class="logolist">Pripravení na nové dobrodružstvá?</h3>
    <p class="logotext">
      Podeľte sa s nami o vaše cestovateľské sny a my vám pomôžeme ich premeniť na realitu. S MaxCesta každá cesta nie je len o trasách, ale o objavovaní nových možností, kultúr a zážitkov. Kontaktujte nás ešte dnes a dovolte nám pomôcť vám vytvoriť ideálnu cestu, ktorá vás inšpiruje a otvorí nové horizonty!
    </p>
    <a class="zdroj" href="katalog.php">
      <h4 class="text-decoration-underline logotext link-offset-2 link-underline link-underline-opacity-0">Vaša cesta začína u nás</h4>
    </a>
    <img src="img/send.svg" class="rounded mx-auto d-block mb-5" alt="">
  </div>

  <!-- footer so základnými informáciami, kontaktami, Skripty pre Bootstrap a ďalšie funkcie -->
  <?php
    include "./parts/footer.php";
  ?>
</body>
</php>