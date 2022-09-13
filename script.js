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
const open_HFL = document.getElementById('open_HFL');
const modal_container_HFL = document.getElementById('modal_container_HFL');
const close_HFL = document.getElementById('close_HFL');

open_HFL.addEventListener('click', () =>{
    modal_container_HFL.classList.add('show');
})

close_HFL.addEventListener('click', () =>{
    modal_container_HFL.classList.remove('show');
})
//ES
const open_ES = document.getElementById('open_ES');
const modal_container_ES = document.getElementById('modal_container_ES');
const close_ES = document.getElementById('close_ES');

open_ES.addEventListener('click', () =>{
    modal_container_ES.classList.add('show');
})

close_ES.addEventListener('click', () =>{
    modal_container_ES.classList.remove('show');
})
//TC
const open_TC = document.getElementById('open_TC');
const modal_container_TC = document.getElementById('modal_container_TC');
const close_TC = document.getElementById('close_TC');

open_TC.addEventListener('click', () =>{
    modal_container_TC.classList.add('show');
})

close_TC.addEventListener('click', () =>{
    modal_container_TC.classList.remove('show');
})
//SM
const open_SM = document.getElementById('open_SM');
const modal_container_SM = document.getElementById('modal_container_SM');
const close_SM = document.getElementById('close_SM');

open_SM.addEventListener('click', () =>{
    modal_container_SM.classList.add('show');
})

close_SM.addEventListener('click', () =>{
    modal_container_SM.classList.remove('show');
})