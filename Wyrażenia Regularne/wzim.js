function Checking(){

	var imie=document.getElementById("Imie").value;
  var imieinput = document.getElementById('Imie');
  var testimie = /^[A-ZĄĆĘŁŃÓŚŹŻ][a-ząćęłńóśźż]{1,57}$/g;

	if(!testimie.test(imie))
	{
		imieinput.style.border = "3px solid red";
	}
	else{
		imieinput.style.border = "1px solid #fff";
	}

  var nazwisko = document.getElementById("Nazwisko").value;
  var nazwiskoinput = document.getElementById("Nazwisko");
	var testnazwisko = /^[A-ZĄĆĘŁŃÓŚŹŻ'][a-ząćęłńóśźż']{1,57}$/g;
  var testnazwisko2 = /^[A-ZĄĆĘŁŃÓŚŹŻ][a-ząćęłńóśźż]{1,57}(-| |')[A-ZĄĆĘŁŃÓŚŹŻ][a-ząćęłńóśźż]{1,57}$/g;
  var testnazwisko3 = /^[A-ZĄĆĘŁŃÓŚŹŻ][a-ząćęłńóśźż]{1,57}(-| |')[A-ZĄĆĘŁŃÓŚŹŻ][a-ząćęłńóśźż]{1,57}(-| |')[A-ZĄĆĘŁŃÓŚŹŻ][a-ząćęłńóśźż]{1,57}$/g;
	var testnazwisko4 = /^[a-ząćęłńóśźż]{1,57}(-| |')[a-ząćęłńóśźż]{1,57}(-| |')[A-ZĄĆĘŁŃÓŚŹŻ][a-ząćęłńóśźż]{1,57}$/g;
	var testnazwisko5 = /^[a-ząćęłńóśźż]{1,57}(-| |')[A-ZĄĆĘŁŃÓŚŹŻ][a-ząćęłńóśźż]{1,57}$/g;


	if(!testnazwisko.test(nazwisko) && !testnazwisko2.test(nazwisko) && !testnazwisko3.test(nazwisko) && !testnazwisko4.test(nazwisko) && !testnazwisko5.test(nazwisko) )
	{
		nazwiskoinput.style.border = "3px solid red";
	}
	else{
		nazwiskoinput.style.border = "1px solid #fff";
	}

  var datauro = document.getElementById("Data").value;
	var testdata = /^((202[0-2])|(20[0-1][0-9])|(19[2-9][0-9]))-((02-(([1-2][0-9])|(0[1-9])))|(((0[3-9])|(1[0-2])|(01))-((0[1-9])|([1-2][0-9])|(3[0-1]))))$/g;
  var datainput = document.getElementById("Data");

  if(!testdata.test(datauro))
	{
		datainput.style.border = "3px solid red";
	}
	else{
		datainput.style.border = "1px solid #fff";
	}

  var miasto = document.getElementById("Miasto").value;
	var testmiasto = /^[A-ZĄĆĘŁŃÓŚŹŻ][a-ząćęłńóśźż]{2,120}$/g;
  var testmiasto1 = /^[A-ZĄĆĘŁŃÓŚŹŻ][a-ząćęłńóśźż]{2,60}( |'|-)[A-ZĄĆĘŁŃÓŚŹŻ][a-ząćęłńóśźż]{2,60}$/g;
	var testmiasto2 = /^[A-ZĄĆĘŁŃÓŚŹŻ][a-ząćęłńóśźż]{2,60}( |'|-)[A-ZĄĆĘŁŃÓŚŹŻ][a-ząćęłńóśźż]{2,60}( |'|-)[A-ZĄĆĘŁŃÓŚŹŻ][a-ząćęłńóśźż]{2,60}$/g;
  var miastoinput = document.getElementById("Miasto");

  if(!testmiasto.test(miasto) && !testmiasto1.test(miasto) && !testmiasto2.test(miasto))
	{
		miastoinput.style.border = "3px solid red";
	}
	else{
		miastoinput.style.border = "1px solid #fff";
	}

  var ulica = document.getElementById("Ulica").value;
	var testulica = /^[A-ZĄĆĘŁŃÓŚŹŻ][a-ząćęłńóśźż]{1,60}$/g;
  var testulica1 = /^[A-ZĄĆĘŁŃÓŚŹŻ][a-ząćęłńóśźż]{1,60}( |-|')[A-ZĄĆĘŁŃÓŚŹŻ][a-ząćęłńóśźż]{1,60}$/g;
	var testulica2 = /^[A-ZĄĆĘŁŃÓŚŹŻ][a-ząćęłńóśźż]{1,60}( |-|')[A-ZĄĆĘŁŃÓŚŹŻ][a-ząćęłńóśźż]{1,60}( |-|')[A-ZĄĆĘŁŃÓŚŹŻ][a-ząćęłńóśźż]{1,60}$/g;
	var testulica3 = /^[A-ZĄĆĘŁŃÓŚŹŻ][a-ząćęłńóśźż]{1,60}( |-|')[A-ZĄĆĘŁŃÓŚŹŻ][a-ząćęłńóśźż]{1,60}( |-|')[A-ZĄĆĘŁŃÓŚŹŻ][a-ząćęłńóśźż]{1,60}( |-|')[A-ZĄĆĘŁŃÓŚŹŻ][a-ząćęłńóśźż]{1,60}$/g;
	var testulica4 = /^[A-ZĄĆĘŁŃÓŚŹŻ][a-ząćęłńóśźż]{1,60}( |-|')[A-ZĄĆĘŁŃÓŚŹŻ][a-ząćęłńóśźż]{1,60}( |-|')[A-ZĄĆĘŁŃÓŚŹŻ][a-ząćęłńóśźż]{1,60}( |-|')[A-ZĄĆĘŁŃÓŚŹŻ][a-ząćęłńóśźż]{1,60}( |-|')[A-ZĄĆĘŁŃÓŚŹŻ][a-ząćęłńóśźż]{1,60}$/g;
  var testulica5 = /^[A-ZĄĆĘŁŃÓŚŹŻ][a-ząćęłńóśźż]{1,60}( |-|')[A-ZĄĆĘŁŃÓŚŹŻa-ząćęłńóśźż][a-ząćęłńóśźż]{0,60}( |-|')[A-ZĄĆĘŁŃÓŚŹŻ][a-ząćęłńóśźż]{1,60}$/g;
  var testulica6 = /^[A-ZĄĆĘŁŃÓŚŹŻ][a-ząćęłńóśźż]{1,60}( |-|')[0-9]{0,5}( |-|')[A-ZĄĆĘŁŃÓŚŹŻ][a-ząćęłńóśźż]{1,60}$/g;
	var testulica7 = /^[A-ZĄĆĘŁŃÓŚŹŻ][a-ząćęłńóśźż]{1,60}( |-|')[0-9]{0,5}$/g;
	var testulica8 = /^[a-ząćęłńóśźż.]{1,60}( |-|')[A-ZĄĆĘŁŃÓŚŹŻ][a-ząćęłńóśźż]{1,60}$/g;
	var testulica9 = /^[a-ząćęłńóśźż.]{1,60}( |-|')[A-ZĄĆĘŁŃÓŚŹŻ][a-ząćęłńóśźż]{1,60}( |-|')[A-ZĄĆĘŁŃÓŚŹŻ][a-ząćęłńóśźż]{1,60}$/g;
	var testulica10 = /^[A-ZĄĆĘŁŃÓŚŹŻ][a-ząćęłńóśźż]{1,60}( |-|')[A-ZĄĆĘŁŃÓŚŹŻ][a-ząćęłńóśźż]{1,60}( |-|')[A-ZĄĆĘŁŃÓŚŹŻ]{1,60}$/g;
  var ulicainput = document.getElementById('Ulica');

  if(!testulica.test(ulica) && !testulica1.test(ulica) && !testulica2.test(ulica) && !testulica3.test(ulica) && !testulica4.test(ulica) && !testulica5.test(ulica) && !testulica6.test(ulica) && !testulica7.test(ulica) && !testulica8.test(ulica) && !testulica9.test(ulica) && !testulica10.test(ulica))
	{
		ulicainput.style.border = "3px solid red";
	}
	else{
		ulicainput.style.border = "1px solid #fff";
	}

  var nrbudynku = document.getElementById("Numer_budynku").value;
  var testbudynek = /^[0-9]{1,5}$/g;
  var testbudynek1 = /^[0-9]{1,5}[A-ZĄĆĘŁŃÓŚŹŻ]{1,5}$/g;
  var testbudynek2 = /^[0-9]{1,5}[a-ząćęłńóśźż]{1,5}$/g;
  var nrbudynkuinput = document.getElementById("Numer_budynku");

  if(!testbudynek.test(nrbudynku) && !testbudynek1.test(nrbudynku) && !testbudynek2.test(nrbudynku))
	{
		nrbudynkuinput.style.border = "3px solid red";
	}
	else{
		nrbudynkuinput.style.border = "1px solid #fff";
	}

  var nrlokalu = document.getElementById("Numer_lokalu").value;
  var testlokal = /^[0-9]{1,5}$/g;
	var testlokal1 = /^[0-9]{1,5}[A-ZĄĆĘŁŃÓŚŹŻ]{1}$/g;
  var nrlokaluinput = document.getElementById("Numer_lokalu");

  if(!testlokal.test(nrlokalu) && !testlokal1.test(nrlokalu) )
	{
		nrlokaluinput.style.border = "3px solid red";
	}
	else{
		nrlokaluinput.style.border = "1px solid #fff";
	}

  var kodpocz = document.getElementById("Postal_Code").value;
  var testkodpoczt = /^[0-9]{2}-[0-9]{3}$/g;
	var testkodpoczt1 = /^[0-9]{5}$/g;        //90011 Los Angeles CA
  var kodpoczinput = document.getElementById("Postal_Code")

  if(!testkodpoczt.test(kodpocz) && !testkodpoczt1.test(kodpocz))
	{
		kodpoczinput.style.border = "3px solid red";
	}
	else{
		kodpoczinput.style.border = "1px solid #fff";
	}

  var woj = document.getElementById("Woj").value;
  var testwoj = /^[a-ząćęłńóśźż]{1,60}$/g;
	var testwoj1 = /^[a-ząćęłńóśźż]{1,60}-[a-ząćęłńóśźż]{1,60}$/g;
  var wojinput = document.getElementById("Woj")

  if(!testwoj.test(woj) && !testwoj1.test(woj))
	{
		wojinput.style.border = "3px solid red";
	}
	else{
		wojinput.style.border = "1px solid #fff";
	}

  var nrtel = document.getElementById("phone_number").value;
	var testnrtel = /^\+[0-9]{1,4}( )[0-9]{3}-[0-9]{3}-[0-9]{3}$/g;
  var nrtelinput = document.getElementById("phone_number");

  if(!testnrtel.test(nrtel))
	{
		nrtelinput.style.border = "3px solid red";
	}
	else{
		nrtelinput.style.border = "1px solid #fff";
	}

  var kob = document.getElementById("Kobieta");
  var mez = document.getElementById("Mezczyzna");

  if(!kob.checked && !mez.checked)
	{
    document.getElementById("przerwa").innerHTML = "Musisz zaznaczyć płeć";
	}
	else
  {
		document.getElementById("przerwa").innerHTML = "";
	}

}
