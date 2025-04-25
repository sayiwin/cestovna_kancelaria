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

  <?php
    pozdrav();
  ?>

  <!--  -->
  <div class="container">
    <form method="POST" action="db/control_logout.php" class="d-grid gap-2 col-5 mx-auto d-md-flex justify-content-md-center">
      <button class="btn btn-outline-dark border-2 fw-medium mb-5 btn-lg" type="submit">Logout</button>
    </form>
  </div>

  <div class="mb-3 otazka">
    <form method="POST" action="db/delete_user.php">
      <label for="login" class="form-label">Zadajte svoj login pre potvrdenie odstránenia účtu:</label>
      <input type="text" id="login" name="login" class="form-control border border-2 border-dark" style="background: rgb(250, 247, 240);" placeholder="Zadajte login...">
      <button class="btn btn-outline-danger border-2 fw-medium mt-2 btn-lg" type="submit">Odstrániť účet</button>
      <div id="loginError" class="text-danger mt-2" style="display:none;">Prosím, zadajte váš login.</div>
    </form>
  </div>

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