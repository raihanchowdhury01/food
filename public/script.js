
const open_btn = document.querySelector(".open_btn");
const close_btn = document.querySelector(".close_btn");
const menu_list = document.querySelector(".menu_list");

open_btn.addEventListener("click", ()=>{
    menu_list.classList.remove('d-none');
})

close_btn.addEventListener("click", ()=>{
    menu_list.classList.add('d-none');
})