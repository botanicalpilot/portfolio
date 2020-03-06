// modal
let modal = document.querySelector(".modal");
let openButton = document.getElementById("mailLink");
let closeButton = document.querySelector(".close-button");

function toggleModal() {
  modal.classList.toggle("show-modal");
}

function WindowOnClick(event) {
  if (event.target === modal) {
    toggleModal();
  }
}

openButton.addEventListener("click", toggleModal);
closeButton.addEventListener("click", toggleModal);
window.addEventListener("click", WindowOnClick);