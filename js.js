
	/*Validare formular pagina Contact */
	
	function ValidareFormular() {
    var nume = document.forms["Formular"]["Nume"];
    var email = document.forms["Formular"]["Email"];
    var telefon = document.forms["Formular"]["Telefon"];
    var prenume = document.forms["Formular"]["Prenume"];

    if (nume.value == "") {
      window.alert("Va rugam introduceti numele.");
      nume.focus();
      return false;
    }
    if (prenume.value == "") {
      window.alert("Va rugam introduceti prenumele.");
      prenume.focus();
      return false;
    }
    if (email.value == "") {
      window.alert("Va rugam introduceti o adresa de email.");
      email.focus();
      return false;
    }
    if (email.value.indexOf("@", 0) < 0) {
      window.alert("Va rugam introduceti o adresa de email valida.");
      email.focus();
      return false;
    }
    if (email.value.indexOf(".", 0) < 0) {
      window.alert("Va rugam introduceti o adresa de email valida.");
      email.focus();
      return false;
    }
    if (telefon.value == "") {
      window.alert("Va rugam introduceti numarul de telefon.");
      telefon.focus();
      return false;
    }

    return true;
  }








