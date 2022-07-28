let wynik = document.getElementById('result');
let buttons = Array.from(document.getElementsByClassName('button'));

buttons.map( button => {
    button.addEventListener('click', (a) => {
        switch(a.target.innerText){
            case 'AC':
                wynik.innerText = '';
                break;
            case '=':
                try{
                    wynik.innerText = eval(wynik.innerText);
                } catch {
                    wynik.innerText = "Błąd"
                }
                break;
            case '←':
                if (wynik.innerText){
                  wynik.innerText = wynik.innerText.slice(0, -1);}
                break;
            default:
                wynik.innerText += a.target.innerText;
        }
    });
});