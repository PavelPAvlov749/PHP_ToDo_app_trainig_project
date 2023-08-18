
// ---------------------------  MODAL WINDOW SCRIPT

let add_task_button = document.querySelector("#add");
let modal_window = document.querySelector("#modal-container");
let close_modal_window_button = document.querySelector("#close");


add_task_button.addEventListener("click",(event) => {
    event.preventDefault();
    modal_window.classList.remove("modal-container--hide");
    console.log("SHOW");
})

close_modal_window_button.addEventListener("click",(event) => {
    event.preventDefault();
    modal_window.classList.add("modal-container--hide");
    console.log("HIDE");
})

