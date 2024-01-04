document.querySelector('form').addEventListener('submit', function(e) {
    let ime = document.getElementById('ime').value;
    let email = document.getElementById('email').value;
    let telefon = document.getElementById('telefon').value;
    let datum = document.getElementById('datum').value;
    let vrijeme = document.getElementById('vrijeme').value;
    let broj_stola = document.querySelector('select[name="broj_stola"]').value;

    if (!ime || !email || !telefon || !datum || !vrijeme || broj_stola === '0') {
        e.preventDefault();
        alert('Molimo vas da unesete sve potrebne podatke.');
    }
});

document.querySelector('form').addEventListener('submit', function(e) {
    let ime = document.getElementById('ime').value;
    let email = document.getElementById('email').value;
    let telefon = document.getElementById('telefon').value;
    let datum = document.getElementById('datum').value;
    let vrijeme = document.getElementById('vrijeme').value;
    let broj_stola = document.querySelector('select[name="broj_stola"]').value;

    let telefonRegex = /^(?:\+387|06)\d{6,}$/; 
    if (!telefon.match(telefonRegex)) {
        e.preventDefault();
        alert('Molimo vas da unesete ispravan broj telefona u obliku +387XXXXXX ili 06XXXXXX.');
        return; 
    }


    if (!ime || !email || !datum || !vrijeme || broj_stola === '0') {
        e.preventDefault();
        alert('Molimo vas da unesete sve potrebne podatke.');
    }
});

document.querySelector('form').addEventListener('submit', function(e) {

    let telefonRegex = /^(?:\+387|06)\d{6,}$/; 
    let cistiBroj = telefon.replace(/\D/g, ''); 
    if (!telefon.match(telefonRegex) || cistiBroj.length < 8 || cistiBroj.length > 15) {
        e.preventDefault();
        alert('Molimo vas da unesete ispravan broj telefona u obliku +387XXXXXX ili 06XXXXXX s duljinom od 8 do 15 znamenki.');
        return; 
    }


});

document.getElementById("prikaziFormu").addEventListener("click", function() {
    document.getElementById("rezervacijaForma").style.display = "block";
});
document.getElementById("prikaziFormu").addEventListener("click", function() {
    document.getElementById("prikaziFormu").style.display = "none";
    document.getElementById("rezervacijaForma").style.display = "block";
});


document.addEventListener("DOMContentLoaded", function() {

    let icon = document.querySelector('.info-icon');

    icon.addEventListener('click', function() {
        let imagePath = icon.getAttribute('data-image');

        let modal = document.createElement('div');
        modal.style.position = 'fixed';
        modal.style.top = '0';
        modal.style.left = '0';
        modal.style.width = '100%';
        modal.style.height = '100%';
        modal.style.backgroundColor = 'rgba(0,0,0,0.8)';
        modal.style.display = 'flex';
        modal.style.justifyContent = 'center';
        modal.style.alignItems = 'center';
        modal.addEventListener('click', function() {
            modal.remove(); 
        });


        let img = document.createElement('img');
        img.src = imagePath;
        img.style.maxWidth = '80%';
        img.style.maxHeight = '80%';
        modal.appendChild(img);

        document.body.appendChild(modal);
    });
});

document.querySelector('form').addEventListener('submit', function(e) {

    if (responseText.includes("Greška:")) {
        e.preventDefault();
        alert(responseText);
    }

});
document.getElementById("prikaziAdminLogin").addEventListener("click", function() {
    document.getElementById("adminLoginForm").style.display = "block";
    document.getElementById("prikaziAdminLogin").style.display = "none";
});

