<?php 
  include "./parts/header.php";
  include_once "./parts/functions.php";
?>
<body>

  <!-- Navigačný panel -->
  <?php include_once "./parts/nav_for_general.php"; ?>

  <!-- Karusel obrázkov s popismi -->
  <?php render_carousel('home'); ?>
    
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

  <a class="zdroj" href="faq.php"><h4 class="logotext">Viac o nás!</h4></a>

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