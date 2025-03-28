<?php 
  include "./parts/header.php";
  include_once "./parts/functions.php";
?>
<body>

  <!-- Navigačný panel -->
  <?php include_once "./parts/nav.php"; ?>

  <!-- Karusel s obrázkami a popisom -->
  <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="img/pexels-elina-sazonova-1850619.jpg" class="d-block w-100" alt="...">
          <div class="carousel-caption">
            <div class="logotwo mt-5">
              <h1>MaxCesta</h1>
              <h5 class="text-decoration-underline">Katalóg</h5>
            </div>
          </div>
        </div>
        <div class="carousel-item">
          <img src="img/pexels-davifnr-2064827.jpg" class="d-block w-100" alt="...">
          <div class="carousel-caption">
            <div class="logotwo mt-5 text-decoration-underline">
              <h1>MaxCesta</h1>
              <h5 class="text-decoration-underline">Katalóg</h5>
            </div>
          </div>
        </div>
        <div class="carousel-item">
          <img src="img/pexels-kristina-paul-713711153-27960501.jpg" class="d-block w-100" alt="...">
          <div class="carousel-caption">
            <div class="logotwo mt-5 text-decoration-underline">
              <h1>MaxCesta</h1>
              <h5 class="text-decoration-underline">Katalóg</h5>
            </div>
          </div>
        </div>
        <div class="carousel-item">
          <img src="img/pexels-mati-angulo-330211-930595.jpg" class="d-block w-100" alt="...">
          <div class="carousel-caption">
            <div class="logotwo mt-5 text-decoration-underline">
              <h1>MaxCesta</h1>
              <h5 class="text-decoration-underline">Katalóg</h5>
            </div>
          </div>
        </div>
      </div>
  </div>

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
      <div class="card col-md-3 border border-3 border-darkv" style="background-color: rgb(250, 247, 240);">
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
      <li class="list-group-item">
        <div class="mb-5">
          <h4 class="logostartplus">Rodinný Tour:</h4>
          <p>Rodinné túry sú ideálne pre rodiny s deťmi. Tieto túry zahŕňajú pohodlné trasy, ktoré sú prispôsobené pre rodinné cestovanie, návštevy atrakcií, múzeí a špeciálne programy pre deti. Ceny sa pohybujú od 100 do 210 € na osobu v závislosti od mesta a veľkosti skupiny, pričom rodiny s deťmi môžu získať výhodné zľavy.</p>
          <div class="accordion border border-3 border-dark">
            <div class="accordion-item">
              <h2 class="accordion-header">
                <button class="accordion-button collapsed logotext" style="background-color: rgb(250, 247, 240);" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseOne" aria-expanded="false" aria-controls="panelsStayOpen-collapseOne">
                  Rodinný Tour
                </button>
              </h2>
              <div id="panelsStayOpen-collapseOne" class="accordion-collapse collapse" style="background-color: rgb(250, 247, 240);">
                <div class="accordion-body">
                  <div class="tabulka">
                    <table class="table table-striped">
                      <tr>
                        <th>Krajina:</th>
                        <th>Pre 1 osobu:</th>
                        <th>Pre 2 osoby:</th>
                        <th>Pre rodinu:</th>
                      </tr>
                      <tr>
                        <td>Paríž</td>
                        <td>120 €</td>
                        <td>230 €</td>
                        <td>350 €</td>
                      </tr>
                      <tr>
                        <td>Londýn</td>
                        <td>110 €</td>
                        <td>210 €</td>
                        <td>330 €</td>
                      </tr>
                      <tr>
                        <td>Berlín</td>
                        <td>100 €</td>
                        <td>190 €</td>
                        <td>300 €</td>
                      </tr>
                      <tr>
                        <td>Rím</td>
                        <td>110 €</td>
                        <td>210 €</td>
                        <td>320 €</td>
                      </tr>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </li>
      <li class="list-group-item">
        <div class="mb-5">
          <h4 class="logostartplus">Kultúrny Tour:</h4>
          <p>Kultúrne túry sú určené pre tých, ktorí sa chcú oboznámiť s históriou a kultúrou mesta. Tieto túry zahŕňajú prehliadky významných kultúrnych pamiatok, ako sú múzeá, divadlá a historické miesta. Ceny sa pohybujú od 70 do 150 € na osobu a sú ideálnou voľbou pre milovníkov histórie a umenia.</p>
          <div class="accordion border border-3 border-dark">
            <div class="accordion-item">
              <h2 class="accordion-header">
                <button class="accordion-button collapsed logotext" style="background-color: rgb(250, 247, 240);" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseTwo" aria-expanded="false" aria-controls="panelsStayOpen-collapseTwo">
                  Kultúrny Tour
                </button>
              </h2>
              <div id="panelsStayOpen-collapseTwo" style="background-color: rgb(250, 247, 240);" class="accordion-collapse collapse">
                <div class="accordion-body">
                  <div class="tabulka">
                    <table class="table table-striped">
                      <tr>
                        <th>Krajina:</th>
                        <th>Pre 1 osobu:</th>
                        <th>Pre 2 osoby:</th>
                        <th>Pre rodinu:</th>
                      </tr>
                      <tr>
                        <td>Paríž</td>
                        <td>120 €</td>
                        <td>230 €</td>
                        <td>350 €</td>
                      </tr>
                      <tr>
                        <td>Londýn</td>
                        <td>110 €</td>
                        <td>210 €</td>
                        <td>330 €</td>
                      </tr>
                      <tr>
                        <td>Berlín</td>
                        <td>100 €</td>
                        <td>190 €</td>
                        <td>300 €</td>
                      </tr>
                      <tr>
                        <td>Rím</td>
                        <td>110 €</td>
                        <td>210 €</td>
                        <td>320 €</td>
                      </tr>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </li>
      <li class="list-group-item">
        <div class="mb-5">
          <h4 class="logostartplus">Relax Tour:</h4>
          <p>Relaxačné túry sú ideálne pre tých, ktorí si chcú oddýchnuť a vychutnať si pokojnejšiu atmosféru mesta. Tieto túry často zahŕňajú návštevy wellness centier, prechádzky po parkoch, alebo zastávky v kaviarňach a reštauráciách s príjemnou atmosférou. Ceny takýchto túr sú od 60 do 130 € na osobu, čo ich robí dostupné pre tých, ktorí chcú kombinovať odpočinok s turizmom.</p>
          <div class="accordion border border-3 border-dark">
            <div class="accordion-item">
              <h2 class="accordion-header">
                <button class="accordion-button collapsed logotext" style="background-color: rgb(250, 247, 240);" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseThree" aria-expanded="false" aria-controls="panelsStayOpen-collapseThree">
                  Relax Tour
                </button>
              </h2>
              <div id="panelsStayOpen-collapseThree" style="background-color: rgb(250, 247, 240);" class="accordion-collapse collapse">
                <div class="accordion-body">
                  <div class="tabulka">
                    <table class="table table-striped">
                      <tr>
                        <th>Krajina:</th>
                        <th>Pre 1 osobu:</th>
                        <th>Pre 2 osoby:</th>
                        <th>Pre rodinu:</th>
                      </tr>
                      <tr>
                        <td>Paríž</td>
                        <td>70 €</td>
                        <td>130 €</td>
                        <td>210 €</td>
                      </tr>
                      <tr>
                        <td>Londýn</td>
                        <td>65 €</td>
                        <td>120 €</td>
                        <td>190 €</td>
                      </tr>
                      <tr>
                        <td>Berlín</td>
                        <td>60 €</td>
                        <td>110 €</td>
                        <td>180 €</td>
                      </tr>
                      <tr>
                        <td>Rím</td>
                        <td>65 €</td>
                        <td>120 €</td>
                        <td>190 €</td>
                      </tr>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </li>
      <li class="list-group-item">
        <div class="mb-5">
          <h4 class="logostartplus">Dobrodružný Tour:</h4>
          <p>Dobrodružné túry sú určené pre aktívnych cestovateľov, ktorí hľadajú nové zážitky. Tieto túry zahŕňajú rôzne exkurzie zamerané na extrémne športy, túry, cyklotúry alebo objavovanie menej známych častí mesta. Ceny sa pohybujú od 80 do 170 € na osobu a sľubujú nezabudnuteľné zážitky pre tých, ktorí milujú dobrodružstvo.</p>
          <div class="accordion border border-3 border-dark">
            <div class="accordion-item">
              <h2 class="accordion-header">
                <button class="accordion-button collapsed logotext" style="background-color: rgb(250, 247, 240);" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseFour" aria-expanded="false" aria-controls="panelsStayOpen-collapseFour">
                  Dobrodružný Tour
                </button>
              </h2>
              <div id="panelsStayOpen-collapseFour" style="background-color: rgb(250, 247, 240);" class="accordion-collapse collapse">
                <div class="accordion-body">
                  <div class="tabulka">
                    <table class="table table-striped">
                      <tr>
                        <th>Krajina:</th>
                        <th>Pre 1 osobu:</th>
                        <th>Pre 2 osoby:</th>
                        <th>Pre rodinu:</th>
                      </tr>
                      <tr>
                        <td>Paríž</td>
                        <td>90 €</td>
                        <td>170 €</td>
                        <td>280 €</td>
                      </tr>
                      <tr>
                        <td>Londýn</td>
                        <td>85 €</td>
                        <td>160 €</td>
                        <td>280 €</td>
                      </tr>
                      <tr>
                        <td>Berlín</td>
                        <td>80 €</td>
                        <td>150 €</td>
                        <td>240 €</td>
                      </tr>
                      <tr>
                        <td>Rím</td>
                        <td>85 €</td>
                        <td>160 €</td>
                        <td>250 €</td>
                      </tr>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </li>
      <li class="list-group-item">
        <div class="mb-5">
          <h4 class="logostartplus">Expresný Tour:</h4>
          <p>Expresné túry sú rýchle, ale intenzívne programy pre tých, ktorí majú obmedzený čas, ale chcú vidieť hlavné pamiatky. Tieto túry zahŕňajú rýchle prehliadky alebo mini-túry, ktoré umožňujú navštíviť najdôležitejšie miesta v krátkom čase. Ceny expresných túr sa pohybujú od 45 do 95 € na osobu a sú ideálne pre turistov, ktorí nemajú veľa času, ale chcú vidieť hlavné atrakcie.</p>
          <div class="accordion border border-3 border-dark">
            <div class="accordion-item">
              <h2 class="accordion-header">
                <button class="accordion-button collapsed logotext" style="background-color: rgb(250, 247, 240);" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseFive" aria-expanded="false" aria-controls="panelsStayOpen-collapseFive">
                  Expresný Tour
                </button>
              </h2>
              <div id="panelsStayOpen-collapseFive" style="background-color: rgb(250, 247, 240);" class="accordion-collapse collapse">
                <div class="accordion-body">
                  <table class="table table-striped">
                    <tr>
                      <th>Krajina:</th>
                      <th>Pre 1 osobu:</th>
                      <th>Pre 2 osoby:</th>
                      <th>Pre rodinu:</th>
                    </tr>
                    <tr>
                      <td>Paríž</td>
                      <td>55 €</td>
                      <td>95 €</td>
                      <td>160 €</td>
                    </tr>
                    <tr>
                      <td>Londýn</td>
                      <td>45 €</td>
                      <td>85 €</td>
                      <td>140 €</td>
                    </tr>
                    <tr>
                      <td>Berlín</td>
                      <td>45 €</td>
                      <td>85 €</td>
                      <td>140 €</td>
                    </tr>
                    <tr>
                      <td>Rím</td>
                      <td>50 €</td>
                      <td>95 €</td>
                      <td>160 €</td>
                    </tr>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>
      </li>
    </ul>
  </div>
  
  <!-- footer so základnými informáciami a kontaktami -->
  <?php
    include "./parts/footer.php";
  ?>
</body>
</php>