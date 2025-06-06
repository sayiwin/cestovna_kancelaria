<?php 
  include_once "./classes/WebsiteHelper.php";
  WebsiteHelper::renderHead();
?>
<body>

  <div class="container logotext mt-5">
    <div class="thank-you-message">
      <h3>Ďakujeme za registráciu!</h3>
      <p>Úspešne ste sa zaregistrovali. Vitajte!</p>
    </div>
    <button class="btn btn-dark btn-return" onclick="window.location.href='registracia.php'">Späť na hlavnú stránku</button>
  </div>

  <!-- Skripty pre Bootstrap a ďalšie funkcie -->
  <script src="js/app.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</php>
