<?php 
  include_once "./classes/WebsiteHelper.php";
  $websiteHelper = new WebsiteHelper();
  WebsiteHelper::renderHead();
?>

<body>

  <?php $websiteHelper->renderNavbarLogin(); ?>

  <?php $websiteHelper->renderCarousel('others'); ?>
    
  <hr class="border border-dark border-3 opacity-75">

    <!-- Kontaktný formulár pre otázky -->
    <div class="container">
    <h3 class="logolist">Ak máte akékoľvek otázky - napíšte nám</h3>
    <form id="contactForm" method="POST" action="db/control_otazky.php"  onsubmit="return validateForms(event)">
      <div class="mb-3 otazka">
        <label for="names" class="form-label">Vaše meno:</label>
        <input type="text" id="names" name="names" class="form-control border border-2 border-dark" style="background: rgb(250, 247, 240);" placeholder="Zadajte meno...">
        <div id="namesError" class="text-danger" style="display:none;">Prosím, zadajte vaše meno.</div>
      </div>
      <div class="mb-3 otazka">
        <label for="email" class="form-label">Email address:</label>
        <input type="email" id="email" name="email" class="form-control border border-2 border-dark" style="background: rgb(250, 247, 240);" placeholder="Zadajte svoj email...">
        <div id="emailError" class="text-danger" style="display:none;">Prosím, zadajte platnú emailovú adresu.</div>
      </div>
      <div class="mb-3 otazka">
        <label for="question" class="form-label">Vaša otázka:</label>
        <textarea id="question" name="question" class="form-control border border-2 border-dark" style="background: rgb(250, 247, 240);" placeholder="Zadajte svoju otázku..."></textarea>
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
  <?php WebsiteHelper::renderFooter(); ?>
</body>
</php>