const modal_pane = document.querySelector('#modal_pane');
const shopping_cart = document.querySelector('.shopping_cart');
const pane = document.querySelector('.pane');

shopping_cart.addEventListener('click', () => {
    modal_pane.style.display = "block";
    pane.style.right = "0";
});

window.addEventListener("click", (event) => {
    if (event.target === modal_pane)
        modal_pane.style.display = "none";
});