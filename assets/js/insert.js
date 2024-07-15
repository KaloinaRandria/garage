const insert = document.querySelector('#add');
const section = document.querySelector('#insert');
const annuler = document.querySelector('#annuler');

insert.addEventListener('click', () => {
    section.style.display = 'flex';
});

annuler.addEventListener('click', () => {
    section.style.display = 'none';
});