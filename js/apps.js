function validateForms(event) {
    // Skryjeme predchádzajúce chyby
    document.getElementById('namesError').style.display = 'none';
    document.getElementById('emailError').style.display = 'none';
    document.getElementById('questionError').style.display = 'none';
    document.getElementById('termsError').style.display = 'none';
    
    // Zhromažďovanie hodnôt
    var names = document.getElementById('names').value;
    var email = document.getElementById('email').value;
    var question = document.getElementById('question').value;
    var terms = document.getElementById('terms').checked;
    
    var isValid = true;
  
    // Kontrola, či je pole 'name' prázdne
    if (names.trim() === "") {
      document.getElementById('namesError').style.display = 'block';
      isValid = false;
    }

    // Kontrola platnosti emailu
    if (!email.includes('@')) {
      document.getElementById('emailError').style.display = 'block';
      isValid = false;
    }

    // Kontrola, či je otázka prázdna
    if (question.trim() === "") {
      document.getElementById('questionError').style.display = 'block';
      isValid = false;
    }

    // Kontrola, či používateľ súhlasil s podmienkami
    if (!terms) {
      document.getElementById('termsError').style.display = 'block';
      isValid = false;
    }
  
    // Zabránime odoslanie formulára
    if (!isValid) {
      event.preventDefault();
      alert("Vyplňte povinné polia.");
    }

    // Presmerovanie na inú stránku po úspešnej validáci
    if (isValid) {
        window.location.href = "http://localhost/cestovna_kancelaria/otazka.php";
      }
  
    return isValid;
}

function validateForm(event) {

  // Skryjeme predchádzajúce chyby
    document.getElementById('countError').style.display = 'none';
    document.getElementById('mestoError').style.display = 'none';
    document.getElementById('typesError').style.display = 'none';
    document.getElementById('termsError').style.display = 'none';

    // Zhromažďovanie hodnôt
    var count = document.getElementById('count').value;
    var city = document.getElementById('city').value;
    var types = document.querySelector('input[name="types"]:checked');
    var terms = document.getElementById('terms').checked;
  
    var isValid = true;

    // Kontrola platnosti pocetu
    if (count === "") {
      document.getElementById('countError').style.display = 'block';
      isValid = false;
    }

    // Kontrola, či je vybrané mesto
    if (city === "") {
      document.getElementById('cityError').style.display = 'block';
      isValid = false;
    }

    // Kontrola, či je vybraný typ zájazdu
    if (!types) {
      document.getElementById('typesError').style.display = 'block';
      isValid = false;
    }

    // Kontrola, či používateľ súhlasil s podmienkami
    if (!terms) {
      document.getElementById('termsError').style.display = 'block';
      isValid = false;
    }

    // Zabránime odoslanie formulára
    if (!isValid) {
      event.preventDefault();
      alert("Vyplňte povinné polia.");
    }

    // Presmerovanie na koncovú stránku po úspešnej validácii
    if (isValid) {
      event.preventDefault();
      window.location.href = "http://localhost/cestovna_kancelaria/end.php";
    }

    return isValid;
  }

function validateRegistr(event) {

    // Skryjeme predchádzajúce chyby
    document.getElementById('nameError').style.display = 'none';
    document.getElementById('priezvError').style.display = 'none';
    document.getElementById('loginError').style.display = 'none';
    document.getElementById('hesloError').style.display = 'none';
    document.getElementById('emailError').style.display = 'none';
    document.getElementById('phoneError').style.display = 'none';
    document.getElementById('pohlavieError').style.display = 'none';
    document.getElementById('termsError').style.display = 'none';

    // Zhromažďovanie hodnôt
    var name = document.getElementById('name').value;
    var priezv = document.getElementById('priezv').value;
    var login = document.getElementById('login').value;
    var heslo = document.getElementById('heslo').value;
    var email = document.getElementById('email').value;
    var phone = document.getElementById('phone').value;
    var pohlavie = document.getElementById('pohlavie').value;
    var terms = document.getElementById('terms').checked;

    var isValid = true;

    // Kontrola, či je pole 'name' prázdne
    if (name.trim() === "") {
        document.getElementById('nameError').style.display = 'block';
        isValid = false;
    }

    // Kontrola, či je pole 'priezvisko' prázdne
    if (priezv.trim() === "") {
        document.getElementById('priezvError').style.display = 'block';
        isValid = false;
    }
    
    // Kontrola, či je pole 'login' prázdne
    if (login.trim() === "") {
        document.getElementById('loginError').style.display = 'block';
        isValid = false;
    }

    // Kontrola, či je pole 'heslo' prázdne
    if (heslo.trim() === "") {
        document.getElementById('hesloError').style.display = 'block';
        isValid = false;
    }

    // Kontrola platnosti emailu
    if (!email.includes('@')) {
        document.getElementById('emailError').style.display = 'block';
        isValid = false;
    }

    // Kontrola platnosti telefónneho čísla
    if (phone === "") {
        document.getElementById('phoneError').style.display = 'block';
        isValid = false;
    }

    // Kontrola, či je vybrané pohlavie
    if (pohlavie === "") {
        document.getElementById('pohlavieError').style.display = 'block';
        isValid = false;
    }

    // Kontrola, či používateľ súhlasil s podmienkami
    if (!terms) {
        document.getElementById('termsError').style.display = 'block';
        isValid = false;
    }

    // Zabránime odoslanie formulára
    if (!isValid) {
        event.preventDefault();
        alert("Vyplňte povinné polia.");
    }

    // Presmerovanie na koncovú stránku po úspešnej validácii
    if (isValid) {
        event.preventDefault();
        window.location.href = "http://localhost/cestovna_kancelaria/home.php";
    }
    return isValid;
}

function validateLogin(event) {
  // Skryjeme predchádzajúce chyby
  document.getElementById('loginsError').style.display = 'none';
  document.getElementById('heslosError').style.display = 'none';
  document.getElementById('termssError').style.display = 'none';

  // Zhromažďovanie hodnôt
  var login = document.getElementById('logins').value;
  var heslo = document.getElementById('heslos').value;
  var terms = document.getElementById('termss').checked;

  var isValid = true;

  // Kontrola, či je pole 'login' prázdne
  if (login.trim() === "") {
      document.getElementById('loginsError').style.display = 'block';
      isValid = false;
  }

  // Kontrola, či je pole 'heslo' prázdne
  if (heslo.trim() === "") {
      document.getElementById('heslosError').style.display = 'block';
      isValid = false;
  }

  // Zabránime odoslanie formulára
  if (!isValid) {
      event.preventDefault();
      alert("Vyplňte povinné polia.");
  }

  // Presmerovanie na koncovú stránku po úspešnej validácii
  if (isValid) {
      event.preventDefault();
      window.location.href = "http://localhost/cestovna_kancelaria/home.php";
  }
  return isValid;
}
