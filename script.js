//Contact
const hamburger = document.querySelector(".hamburger");
const navMenu = document.querySelector(".nav-menu");

hamburger.addEventListener("click", () => {
    hamburger.classList.toggle("active");
    navMenu.classList.toggle("active");
})

document.querySelectorAll(".nav-link").forEach(n => n.addEventListener("click", () => {
    hamburger.classList.remove("active");
    navMenu.classList.remove("active");
}))

//Modal

//TSO
const open_TSO = document.getElementById('open_TSO');
const modal_container_TSO = document.getElementById('modal_container_TSO');
const close_TSO = document.getElementById('close_TSO');

open_TSO.addEventListener('click', () =>{
    modal_container_TSO.classList.add('show');
})

close_TSO.addEventListener('click', () =>{
    modal_container_TSO.classList.remove('show');
})


//LAM
const open_LAM = document.getElementById('open_LAM');
const modal_container_LAM = document.getElementById('modal_container_LAM');
const close_LAM = document.getElementById('close_LAM');

open_LAM.addEventListener('click', () =>{
    modal_container_LAM.classList.add('show');
})

close_LAM.addEventListener('click', () =>{
    modal_container_LAM.classList.remove('show');
})
//HFL