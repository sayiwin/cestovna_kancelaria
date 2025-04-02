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
              <h5 class="text-decoration-underline">O nás</h5>
            </div>
          </div>
        </div>
        <div class="carousel-item">
          <img src="img/pexels-davifnr-2064827.jpg" class="d-block w-100" alt="...">
          <div class="carousel-caption">
            <div class="logotwo mt-5 text-decoration-underline">
              <h1>MaxCesta</h1>
              <h5 class="text-decoration-underline">O nás</h5>
            </div>
          </div>
        </div>
        <div class="carousel-item">
          <img src="img/pexels-kristina-paul-713711153-27960501.jpg" class="d-block w-100" alt="...">
          <div class="carousel-caption">
            <div class="logotwo mt-5 text-decoration-underline">
              <h1>MaxCesta</h1>
              <h5 class="text-decoration-underline">O nás</h5>
            </div>
          </div>
        </div>
        <div class="carousel-item">
          <img src="img/pexels-mati-angulo-330211-930595.jpg" class="d-block w-100" alt="...">
          <div class="carousel-caption">
            <div class="logotwo mt-5 text-decoration-underline">
              <h1>MaxCesta</h1>
              <h5 class="text-decoration-underline">O nás</h5>
            </div>
          </div>
        </div>
      </div>
  </div>

  <hr class="border border-dark border-3 opacity-75">

  <!-- Úvodný text o MaxCesta -->
  <div class="logotext" id="intro">
      <h2 class="logotext">MaxCesta - Vaša brána do sveta nezabudnuteľných zážitkov</h2>
      <p>MaxCesta je cestovná kancelária, ktorá už viac než 10 rokov pomáha Slovákov objavovať krásy Európy. Od malebných uličiek Paríža po majestátne hory Švajčiarska, od historických miest Ríma po moderné mestá Barcelony - máme zážitky pre každého. Naša vízia je jednoduchá: ponúkať kvalitné, autentické a nezabudnuteľné cestovateľské skúsenosti, ktoré obohatia váš život.</p>
      <p>Veríme, že každý výlet je príležitosťou na osobný rast a vytváranie nezabudnuteľných spomienok. Preto sa na každej ceste staráme o každý detail, aby ste sa mohli plne sústrediť na zážitky a objavovanie nových miest.</p>
  </div>

  <hr class="border border-dark border-3 opacity-75">

  <!-- Zákaznícke recenzie -->
  <div class="container-fluid">
      <h3 class="logolist">Čo o nás hovoria naši zákazníci?</h3>
      <ul class="list-group list-group-flush logotext">
        <li class="list-group-item">"MaxCesta nám pomohla zorganizovať našu vysnívanú dovolenku v Toskánsku. Perfektný servis, skvelí sprievodcovia a nezabudnuteľné zážitky! Určite odporúčame každému, kto chce objaviť krásy Talianska." - Jana a Peter</li>
        <li class="list-group-item">"S MaxCesta sme prežili najkrajšie dni v Barcelone. Všetko bolo dokonale naplánované a organizované. Určite sa vrátime! Veľká vďaka tímu za úžasný zážitok!" - Martin a Lucia</li>
        <li class="list-group-item">"Veľmi odporúčam túto cestovnú kanceláriu! Naša rodina si užila týždenný pobyt v Paríži bez stresu, všetko bolo pripravené do najmenších detailov. MaxCesta sa postarala o to, aby sme si užili každý okamih." - Maksym a Jana</li>
        <li class="list-group-item">"Cestovanie s MaxCesta je skutočný zážitok. Zájazd do Amsterdamu bol jednoducho perfektný – sprievodca nás vzal na miesta, ktoré by sme sami nikdy nenašli. To je pravá hodnota, ktorú získate pri spolupráci s touto cestovnou kanceláriou." - Karol a Andrea</li>
        <li class="list-group-item">"Vďaka MaxCesta sme sa dostali do Švajčiarska a jeho nádherných hôr. Bolo to ako sen! Zorganizovali pre nás nezabudnuteľný výlet a postarali sa o všetky detaily, takže sme sa mohli sústrediť len na krásu okolia. Ďakujeme!" - Michaela a Tomáš</li>
      </ul>
    </div>

  <hr class="border border-dark border-3 opacity-75">

  <!-- Hodnoty spoločnosti MaxCesta -->
  <div class="container-fluid">
    <h3 class="logostart">Naše hodnoty:</h3>
    <p class="textstart text-decoration-underline">MaxCesta nie je len o cestovaní, je to filozofia, ktorá stojí na kvalitných, zodpovedných a jedinečných zážitkoch z ciest. Veríme, že cestovanie by malo byť nielen zábavné, ale aj vzdelávacie a zodpovedné voči prírode a kultúram miest, ktoré navštevujeme. Čo je pre nás dôležité?</p>
    <ul class="logotext">
      <li>KVALITA A POZORNOSŤ K DETAILOM: Sme hrdí na to, že ponúkame len tie najlepšie zájazdy, kde každý aspekt - od plánovania po služby - je starostlivo premyslený do posledného detailu.</li>
      <li>ZODPOVEDNOSŤ VOČI PRÍRODE A SPOLOČNOSTI: Podporujeme udržateľný cestovný ruch a snažíme sa minimalizovať ekologický dopad, spolupracujúc s partnermi, ktorí zdieľajú naše hodnoty udržateľnosti.</li>
      <li>INDIVIDUÁLNY PRÍSTUP: Každý náš zákazník je pre nás jedinečný, a preto sme pripravení ponúknuť personalizované itineráre, ktoré zodpovedajú vašim preferenciám a záujmom.</li>
      <li>ZAMERANIE NA AUTENTICKÉ ZÁŽITKY: Našou prioritou nie je len organizovať výlety, ale vytvárať nezabudnuteľné spomienky, ktoré si so sebou odnesiete na celý život.</li>
    </ul>
  </div>

  <!-- Tím odborníkov -->
  <div class="container-fluid">
    <h3 class="logostart">Naši odborníci:</h3>
    <p class="textstart text-decoration-underline">V MaxCesta máme tím profesionálov, ktorí nielenže milujú svoje povolanie, ale aj vedia, ako z obyčajnej cesty vytvoriť nezabudnuteľný zážitok. Naši odborníci sú starostlivo vyberaní, aby zabezpečili, že každé vaše dobrodružstvo bude nielen príjemné, ale aj hodnotné. Čo môžete od našich odborníkov očakávať?</p>
    <ul class="logotext">
      <li>EXPERTÍZA A VEDOMOSTI: Naši odborníci nie sú len turistickí poradcovia, ale skutoční znalci kultúrnych a historických aspektov miest, ktoré navštevujeme. Neustále sa vzdelávame, aby sme vám priniesli najnovšie informácie a najlepšie zážitky.</li>
      <li>POHĽAD CESTOVATEĽA: Každý náš sprievodca alebo konzultant sám precestoval miesta, ktoré odporúčame, a je pripravený podeliť sa s vami o svoje osobné skúsenosti a tipy, ktoré vám pomôžu spoznať skutočnú krásu destinácie.</li>
      <li>PERSONALIZOVANÝ SERVIS: Sme pripravení počúvať vaše priania a ponúknuť riešenia, ktoré najlepšie vyhovujú vašim potrebám. Či už ide o exotické dobrodružstvo, romantický pobyt alebo kultúrnu cestu, náš tím zabezpečí, aby vaša cesta bola presne taká, ako ste si ju vysnívali.</li>
    </ul>
  </div>

  <!-- Ocenenia a úspechy spoločnosti -->
  <div class="container-fluid">
    <h3 class="logostart">Ocenenia a uznania:</h3>
    <p class="textstart text-decoration-underline">Sme hrdí na to, že naša práca získala uznanie v turistickom priemysle. Za viac než 10 rokov pôsobenia MaxCesta preukázala svoju spoľahlivosť a zodpovednosť voči cestovateľom. Tu sú niektoré z našich najväčších úspechov:</p>
    <ul class="logotext">
      <li>NAJLEPŠIA CESTOVNÁ KANCELÁRIA ROKA 2022: MaxCesta získala ocenenie v kategórii „Cestovná kancelária roka“ na základe spätnej väzby od našich zákazníkov a partnerov. Sme hrdí na to, že sa nám podarilo získať dôveru našich klientov a ponúkať im kvalitné a autentické zážitky.</li>
      <li>CESTOVATEĽSKÝ REBRÍČEK: V roku 2023 sme sa umiestnili na 1. mieste v kategórii „Najlepšie agentúry pre zájazdy po Európe“ podľa nezávislého hodnotenia.</li>
      <li>OCENENIE ZA UDRŽATEĽNÝ CESTOVNÝ RUCH: Získali sme ocenenie za aktívne podporovanie udržateľného cestovného ruchu, ktorý chráni prírodné a kultúrne dedičstvo miest, ktoré navštevujeme.</li>
      <li class="mb-5">UZNANIE OD NAŠICH KLIENTOV: Najväčšou odmenou je pre nás spokojnosť našich zákazníkov. Naša práca je pravidelne oceňovaná vďaka pozitívnym recenziám a vďačným zákazníkom, ktorí sa k nám opakovane vracajú.</li>
    </ul>
  </div>

  <hr class="border border-dark border-3 opacity-75">

  <!-- Sekcia pozvánok -->
  <div class="container-fluid">
    <h3 class="logolist">Pripravení na nové dobrodružstvá?</h3>
    <p class="logotext">
      Podeľte sa s nami o vaše cestovateľské sny a my vám pomôžeme ich premeniť na realitu. S MaxCesta každá cesta nie je len o trasách, ale o objavovaní nových možností, kultúr a zážitkov. Kontaktujte nás ešte dnes a dovolte nám pomôcť vám vytvoriť ideálnu cestu, ktorá vás inšpiruje a otvorí nové horizonty!
    </p>
    <a class="zdroj" href="registracia.php">
      <h4 class="text-decoration-underline logotext link-offset-2 link-underline link-underline-opacity-0">Zaregistrujte sa!</h4>
    </a>
    <img src="img/send.svg" class="rounded mx-auto d-block mb-5" alt="">
  </div>

  <!-- footer so základnými informáciami, kontaktami, Skripty pre Bootstrap a ďalšie funkcie -->
  <?php
    include "./parts/footer.php";
  ?>
</body>
</php>