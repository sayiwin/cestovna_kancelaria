<?php 
  include "./parts/header.php";
  include_once "./parts/functions.php";
?>
<body>

  <!-- Navigačný panel -->
  <?php include_once "./parts/nav_for_general.php"; ?>

  <!-- Karusel s obrázkami a popisom -->
  <?php render_carousel('others'); ?>

  <hr class="border border-dark border-3 opacity-75">
  
  <!-- Začiatok pre obsah -->
  <div class="container-fluid">
    <h3 class="logolist">Katalóg miest pre vašu cestu</h3>
    <div class="logotext">
      <h4>Objavte nové horizonty s MaxCesta!</h4>
      <p>V našom katalógu nájdete najzaujímavejšie, najkrajšie a najunikátnejšie mestá na vaše ďalšie dobrodružstvo. Od historických kultúrnych hlavných miest po moderné metropoly – vyberte si destináciu podľa vašich snov a prianí!</p>
      <p>S MaxCesta máte zaručený komfort, kvalitné služby a nezabudnuteľné zážitky, ktoré z vášho cestovania urobia skutočný zážitok. Nechajte sa inšpirovať a plánujte svoju ďalšiu cestu s nami!</p>
    </div>
  </div>

  <div class="container-fluid">
    <h3 class="logolist">Objavte svoje mestá!</h3>
  </div>

  <!-- katalog a obsah -->
  <div class="container-fluid mb-5 logotext">
    <div class="row">
      <div class="card col-md-3 border border-3 border-dark" style="background-color: rgb(250, 247, 240);">
        <img src="img/pexels-chris-molloy-220084-1308940.jpg" class="card-img-top mt-3" alt="...">
        <div class="card-body">
          <h5 class="card-title fw-bold">Paríž</h5>
          <p class="card-text">Mesto, ktoré nikdy nezabúda na svoju romantickú atmosféru. Paríž je domovom mnohých kultúrnych skvostov – od Eiffelovej veže po Louvre. Prechádzky po Champs-Élysées, návšteva katedrály Notre-Dame alebo relax v Jardin des Tuileries vás vtiahnu do jeho magickej atmosféry. Paríž je tiež mestom módy a špičkových reštaurácií.</p>
        </div>
        <div class="card-body">
          <a class="zdroj cards" href="zaevidovat.php">Spustiť registráciu!</a>
        </div>
      </div>
      <div class="card col-md-3 border border-3 border-dark" style="background-color: rgb(216, 210, 194)">
        <img src="img/pexels-abdel-rahman-abu-baker-958112-1963082.jpg" class="card-img-top mt-3" alt="...">
        <div class="card-body">
          <h5 class="card-title fw-bold">Berlín</h5>
          <p class="card-text">Berlín je mesto, ktoré sa vyznačuje svojou dynamickou históriou a kultúrnou rozmanitosťou. Obdivujte impozantnú Braniborskú bránu, navštívte slávny Berlínsky múr a vychutnajte si bohatú kultúru v galériách a múzeách na Ostrově muzeí. Mesto ponúka moderný nádych v štvrti Mitte aj v tradičných oblastiach, ako je Alexanderplatz.</p>
        </div>
        <div class="card-body">
          <a class="zdroj cards" href="zaevidovat.php">Spustiť registráciu!</a>
        </div>
      </div>
      <div class="card col-md-3 border border-3 border-dark" style="background-color: rgb(250, 247, 240);">
        <img src="img/pexels-chris-schippers-139261-427679.jpg" class="card-img-top mt-3" alt="...">
        <div class="card-body">
          <h5 class="card-title fw-bold">Londýn</h5>
          <p class="card-text">Londýn je fascinujúca kombinácia historických pamiatok a moderných atrakcií. Prezrite si slávny Tower of London, kde sú uložené korunovačné klenoty, navštívte Buckingham Palace, domov britskej kráľovskej rodiny, alebo sa prejdite okolo Big Bena a Houses of Parliament. Mesto ponúka aj bohatú kultúru v múzeách a galériách, ako je Britské múzeum alebo Tate Modern.</p>
        </div>
        <div class="card-body">
          <a class="zdroj cards" href="zaevidovat.php">Spustiť registráciu!</a>
        </div>
      </div>
      <div class="card col-md-3 border border-3 border-dark" style="background-color: rgb(216, 210, 194)">
        <img src="img/pexels-olly-937690.jpg" class="card-img-top mt-3" alt="...">
        <div class="card-body">
          <h5 class="card-title fw-bold">Rím</h5>
          <p class="card-text">Rím, mesto, ktoré je srdcom histórie a kultúry. Od antických pamiatok, ako je Koloseum, až po renesančné skvosty ako Bazilika svätého Petra. Prejdite sa po historických námestiach, ako je Piazza Navona, obdivujte Fontánu di Trevi alebo si oddýchnite v nádherných záhradách Vatikánu. Rím je mestom, ktoré vás zavedie do minulosti, ale zároveň ponúka moderné zážitky.</p>
        </div>
        <div class="card-body">
          <a class="zdroj cards" href="zaevidovat.php">Spustiť registráciu!</a>
        </div>
      </div>
    </div>
  </div>
  
  <hr class="border border-dark border-3 opacity-75">

  <!-- Akordeón pre detailné informácie o cenách -->
  <div class="container-fluid logotext">
    <h3 class="logolist">Cestovné ceny</h3>
    <p>Ceny rôznych typov túr sa líšia v závislosti od typu zážitku, destinácie a trvania výletu. Každá destinácia ponúka rôzne možnosti, ktoré vyhovujú rôznym preferenciám a rozpočtom cestovateľov.</p>
    <ul class="list-group list-group-flush">
      <?php include 'tours/rodinny.php'; ?>
      <?php include 'tours/kulturny.php'; ?>
      <?php include 'tours/relax.php'; ?>
      <?php include 'tours/dobrodruzny.php'; ?>
      <?php include 'tours/exspresny.php'; ?>
    </ul>
  </div>
  
  <!-- footer so základnými informáciami, kontaktami, Skripty pre Bootstrap a ďalšie funkcie -->
  <?php
    include "./parts/footer.php";
  ?>
</body>
</php>