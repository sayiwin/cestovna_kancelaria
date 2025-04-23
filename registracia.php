<?php 
  include "./parts/header.php";
  include_once "./parts/functions.php";
?>
<body>

  <!-- Navigačný panel -->
  <?php include_once "./parts/nav_for_login.php"; ?>

  <!-- Karusel obrázkov s popismi -->
  <?php render_carousel('home'); ?>
    
  <hr class="border border-dark border-3 opacity-75">

  <!-- Sekcia formulára pre registráciu -->
  <div class="container">
    <h3 class="logolist">Registrácia</h3>
    <form id="registrationForm" method="POST" action="db/control_registr.php" onsubmit="return validateRegistr(event)">
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
        <button class="btn btn-outline-dark border-2 fw-medium mb-5 btn-lg" type="submit">Zaregistrujte sa</button>
      </div>
    </form>
  </div>

  <div class="container">
    <h3 class="logolist">Prihláste sa</h3>
    <form id="registrationForm" method="POST" action="db/control_login.php" onsubmit="return validateLogin(event)">
      <div class="mb-3 otazka">
        <label for="login" class="form-label">Vaš login:</label>
        <input type="text" id="login" name="login" class="form-control border border-2 border-dark" style="background: rgb(250, 247, 240);" placeholder="Zadajte login...">
        <div id="loginsError" class="text-danger" style="display:none;">Prosím, zadajte vaš login.</div>
      </div>
      <div class="mb-3 otazka">
        <label for="password" class="form-label">Vaše heslo:</label>
        <input type="password" id="password" name="password" class="form-control border border-2 border-dark" style="background: rgb(250, 247, 240);" placeholder="Zadajte heslo...">
        <div id="passwordError" class="text-danger" style="display:none;">Prosím, zadajte vaše heslo.</div>
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