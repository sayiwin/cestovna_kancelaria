<?php 
  include_once "./classes/WebsiteHelper.php";
  WebsiteHelper::sessionControl();
  $websiteHelper = new WebsiteHelper();
  WebsiteHelper::renderHead();
?>
<body>

  <?php $websiteHelper->renderNavbarGeneral(); ?>

  <?php $websiteHelper->renderCarousel('home'); ?>

  <hr class="border border-dark border-3 opacity-75">

  <?php $websiteHelper->pozdrav(); ?>

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
        <label for="login" class="form-label">Vaš login:</label>
        <input type="text" id="login" name="login" class="form-control border border-2 border-dark" style="background: rgb(250, 247, 240);" placeholder="Zadajte login...">
        <div id="loginError" class="text-danger" style="display:none;">Prosím, zadajte vaš login.</div>
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

  <div class="container-fluid">
    <h3 class="logolist">Pripravení na nové dobrodružstvá?</h3>
    <p class="logotext">
      Podeľte sa s nami o vaše cestovateľské sny a my vám pomôžeme ich premeniť na realitu...
    </p>
    <a class="zdroj cards" href="katalog.php">
      <h4 class="text-decoration-underline logotext link-offset-2 link-underline link-underline-opacity-0">Vaša cesta začína u nás</h4>
    </a>
    <img src="img/send.svg" class="rounded mx-auto d-block mb-5" alt="">
  </div>

  <?php WebsiteHelper::renderFooter(); ?>
</body>
</html>
