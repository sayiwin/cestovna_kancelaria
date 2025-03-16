function validateForms(event) {
    // Skryjeme predchádzajúce chyby
    document.getElementById('nameError').style.display = 'none';
    document.getElementById('emailError').style.display = 'none';
    document.getElementById('questionError').style.display = 'none';
    document.getElementById('termsError').style.display = 'none';
    
    // Zhromažďovanie hodnôt
    var name = document.getElementById('name').value;
    var email = document.getElementById('email').value;
    var question = document.getElementById('question').value;
    var terms = document.getElementById('terms').checked;
    
    var isValid = true;
  
    // Kontrola, či je pole 'name' prázdne
    if (name.trim() === "") {
      document.getElementById('nameError').style.display = 'block';
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
        event.preventDefault();
        window.location.href = "otazka.html";
      }
  
    return isValid;
}

function validateForm(event) {

  // Skryjeme predchádzajúce chyby
    document.getElementById('nameError').style.display = 'none';
    document.getElementById('emailError').style.display = 'none';
    document.getElementById('phoneError').style.display = 'none';
    document.getElementById('mestoError').style.display = 'none';
    document.getElementById('tourError').style.display = 'none';
    document.getElementById('termsError').style.display = 'none';

    // Zhromažďovanie hodnôt
    var name = document.getElementById('name').value;
    var email = document.getElementById('email').value;
    var phone = document.getElementById('phone').value;
    var mesto = document.getElementById('mesto').value;
    var tour = document.querySelector('input[name="tour"]:checked');
    var terms = document.getElementById('terms').checked;
  
    var isValid = true;

    // Kontrola, či je pole 'name' prázdne
    if (name.trim() === "") {
      document.getElementById('nameError').style.display = 'block';
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

    // Kontrola, či je vybrané mesto
    if (mesto === "") {
      document.getElementById('mestoError').style.display = 'block';
      isValid = false;
    }

    // Kontrola, či je vybraný typ zájazdu
    if (!tour) {
      document.getElementById('tourError').style.display = 'block';
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
      window.location.href = "end.html";
    }

    return isValid;
  }
  