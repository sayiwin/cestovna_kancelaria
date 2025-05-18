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

  <?php pozdrav();?>

  <!-- Sekcia správy používateľov -->
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

  <div class="container">
    <h3 class="logolist">Upravit moje údaje</h3>
    <form id="registrationForm" method="POST" action="db/update_user.php">
      <div class="mb-3 otazka">
        <label for="firstname" class="form-label">Vaše meno:</label>
        <input type="text" id="firstname" name="firstname" class="form-control border border-2 border-dark" style="background: rgb(250, 247, 240);" placeholder="Zadajte meno...">
        <div id="firstnameError" class="text-danger" style="display:none;">Prosím, zadajte vaše meno.</div>
      </div>
      <div class="mb-3 otazka">
        <label for="lastname" class="form-label">Vaše priezvisko:</label>
        <input type="text" id="lastname" name="lastname" class="form-control border border-2 border-dark" style="background: rgb(250, 247, 240);" placeholder="Zadajte priezvisko...">
        <div id="lastnameError" class="text-danger" style="display:none;">Prosím, zadajte vaše priezvisko.</div>
      </div>
      <div class="mb-3 otazka">
        <label for="login" class="form-label">Vaš login:</label>
        <input type="text" id="login" name="login" class="form-control border border-2 border-dark" style="background: rgb(250, 247, 240);" placeholder="Zadajte login...">
        <div id="loginError" class="text-danger" style="display:none;">Prosím, zadajte vaš login.</div>
      </div>
      <div class="mb-3 otazka">
        <label for="password" class="form-label">Vaše heslo:</label>
        <input type="password" id="password" name="password" class="form-control border border-2 border-dark" style="background: rgb(250, 247, 240);" placeholder="Zadajte heslo...">
        <div id="passwordError" class="text-danger" style="display:none;">Prosím, zadajte vaše heslo.</div>
      </div>
      <div class="mb-3 otazka">
        <label for="email" class="form-label">Vaš email address:</label>
        <input type="email" id="email" name="email" class="form-control border border-2 border-dark" style="background: rgb(250, 247, 240);" placeholder="Zadajte svoj email...">
        <div id="emailError" class="text-danger" style="display:none;">Prosím, zadajte platnú emailovú adresu.</div>
      </div>
      <div class="mb-3 otazka">
        <label for="phone" class="form-label">Vaše číslo:</label>
        <input type="tel" id="phone" name="phone" class="form-control border border-2 border-dark" style="background: rgb(250, 247, 240);" placeholder="Zadajte svoje čislo...">
        <div id="phoneError" class="text-danger" style="display:none;">Prosím, zadajte platné číslo.</div>
      </div>
      <div class="mb-3 form-check otazka">
        <input type="checkbox" id="terms" class="form-check-input bg-dark">
        <label class="form-check-label" for="terms">Povolenie na spracovanie vašich informácií</label>
        <div id="termsError" class="text-danger" style="display:none;">Musíte súhlasiť s podmienkami.</div>
      </div>
      <div class="d-grid gap-2 col-5 mx-auto d-md-flex justify-content-md-end">
        <button class="btn btn-outline-dark border-2 fw-medium mb-5 btn-lg" type="submit">Upravit údaje</button>
      </div>
    </form>
  </div>

  <hr class="border border-dark border-3 opacity-75">

  <!-- Sekcia pozvánok -->
  <div class="container-fluid">
    <h3 class="logolist">Pripravení na nové dobrodružstvá?</h3>
    <p class="logotext">
      Podeľte sa s nami o vaše cestovateľské sny a my vám pomôžeme ich premeniť na realitu. S MaxCesta každá cesta nie je len o trasách, ale o objavovaní nových možností, kultúr a zážitkov. Kontaktujte nás ešte dnes a dovolte nám pomôcť vám vytvoriť ideálnu cestu, ktorá vás inšpiruje a otvorí nové horizonty!
    </p>
    <a class="zdroj cards" href="katalog.php">
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