function validateForm () {   //Funktionen kollar om fälten är ifyllda

  var Fnamn = document.forms['KommentarsFormular']['Fnamn'].value;
  var Lnamn = document.forms['KommentarsFormular']['Lnamn'].value;
  var Email = document.forms['KommentarsFormular']['Email'].value;

  var TFnamn = Fnamn.replace(/^\s+|\s+$/g,'');
  var TLnamn = Lnamn.replace(/^\s+|\s+$/g,'');
  var TEmail = Email.replace(/^\s+|\s+$/g,'');

    if (TFnamn == '' || TLnamn == '' || TEmail == '') {
      alert('Du har tomma fällt');
      return false;
  }
  var snabelApos = TEmail.indexOf("@"); //här kollar vi om Emailen är giltig
  var punktPos = TEmail.lastIndexOf(".");
  if (snabelApos<1 || punktPos<snabelApos+2 || punktPos+2>=x.length) {
        alert("Ogiltig Email");
        return false;
      }
}
