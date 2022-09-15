const form = document.getElementById("my-form");
const nameUser = document.querySelector('#name');
const hvPhoneBx = document.querySelector('.have-phone-box');
const mnPetBx = document.querySelector('.many-pet-box');
const kndPetBx = document.querySelector('.kind-pet-box');
const phnBrandBx = document.querySelector('.phone-brand-box');
const ptNameBx = document.querySelector('.pet-name-box');
const bstPhoneBx = document.querySelector('.best-phone-box');

const hvPetYes = document.querySelector('#have-pet-yes');
const hvPetNo = document.querySelector('#have-pet-no');
const mnPetIn = document.querySelector('#how-many-pet');
const petCheck = document.querySelectorAll('.pet-check');
const kndOfPet = document.querySelector('#kind-of-pet');
const kndOfPetIn = document.querySelector('#kind-of-pet-opt');
const petName = document.querySelector('#pet-name');

const hvPhYes = document.querySelector('#have-phone-yes');
const hvPhNo = document.querySelector('#have-phone-no');
const phCheck = document.querySelectorAll('.phone-check');
const phBrand = document.querySelector('#phone-brand');
const phBrandIn = document.querySelector('#phone-brand-opt');
const bstPhone = document.querySelector('#best-phone-brand');

const btSubmit = document.querySelector('.bt-submit');

hvPetYes.addEventListener('change', () => {
    mnPetBx.style.display = 'block';
    mnPetIn.setAttribute('required', '');
    hvPhoneBx.style.display = 'none';
    hvPhYes.checked = false;
    hvPhNo.checked = false;
    phnBrandBx.style.display = 'none';
    for (let i = 0; i < phCheck.length; i++) {
        phCheck[i].checked = false;
    }
    phCheck.value = '';
    phBrand.value = '';
    phBrandIn.value = '';
    bstPhoneBx.style.display = 'none';
    bstPhone.value = '';
    bstPhone.removeAttribute('required');
    btSubmit.style.display = 'none';
});

hvPetNo.addEventListener('change', () => {
    hvPhoneBx.style.display = 'block';
    mnPetBx.style.display = 'none';
    mnPetIn.removeAttribute('required');
    mnPetIn.value = '';
    kndPetBx.style.display = 'none';
    for (let i = 0; i < petCheck.length; i++) {
        petCheck[i].checked = false;
    }
    petCheck.value = '';
    kndOfPetIn.value = '';
    kndOfPet.value = '';
    ptNameBx.style.display = 'none';
    petName.value = '';
    petName.removeAttribute('required');
    btSubmit.style.display = 'none';
});

mnPetIn.addEventListener('input', () => {
    kndPetBx.style.display = 'block';
});

petCheck.forEach(element => {
    element.addEventListener('change', () => {
        ptNameBx.style.display = 'block';
        petName.setAttribute('required', '');
        if (petCheck[3].checked) {
            kndOfPetIn.setAttribute('type', 'text');
        }
    })
});

petName.addEventListener('input', () => {
    let pets = '';
    for (let i = 0; i < (petCheck.length) - 1; i++) {
        if (petCheck[i].checked) {
            pets = pets + petCheck[i].value + ',';
        }
    }
    if (kndOfPetIn.value === '') {
        pets = pets.slice(0, -1);
    }
    pets += kndOfPetIn.value;
    kndOfPet.setAttribute('value', pets);
    btSubmit.style.display = 'block';
});

hvPhYes.addEventListener('change', () => {
    phnBrandBx.style.display = 'block';
    btSubmit.style.display = 'none';
});
hvPhNo.addEventListener('change', () => {
    btSubmit.style.display = 'block';
    phnBrandBx.style.display = 'none';
    for (let i = 0; i < phCheck.length; i++) {
        phCheck[i].checked = false;
    }
    phCheck.value = '';
    phBrand.value = '';
    phBrandIn.value = '';
    bstPhoneBx.style.display = 'none';
    bstPhone.value = '';
    bstPhone.removeAttribute('required');
});

phCheck.forEach(element => {
    element.addEventListener('change', () => {
        bstPhoneBx.style.display = 'block';
        bstPhone.setAttribute('required', '');
        if (phCheck[3].checked) {
            phBrandIn.setAttribute('type', 'text');
        }
    });
});

bstPhone.addEventListener('input', () => {
    let phones = '';
    for (let i = 0; i < (phCheck.length) - 1; i++) {
        if (phCheck[i].checked) {
            phones = phones + phCheck[i].value + ',';
        }
    }
    if (phBrandIn.value === '') {
        phones = phones.slice(0, -1);
    }
    phones += phBrandIn.value;
    phBrand.setAttribute('value', phones);
    btSubmit.style.display = 'block';
});

form.addEventListener("submit", function (e) {
    if ((nameUser.getAttribute('required') == '' && nameUser.value.length == 0) || (mnPetIn.getAttribute('required') == '' && mnPetIn.value.length == 0) || (petName.getAttribute('required') == '' && petName.value.length == 0) || (bstPhone.getAttribute('required') == '' && bstPhone.value.length == 0)) {
        return false;
    }
    btSubmit.innerHTML = '<img src="reload.png" alt="" class="rel">';
    btSubmit.setAttribute('disabled', '');
    e.preventDefault();
    const data = new FormData(form);
    const action = e.target.action;
    fetch(action, {
        method: "POST",
        body: data,
    }).then(() => {
        location.assign('submit.php');
    });
});