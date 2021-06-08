if(window.location.href === "http://localhost:8080/coffee-cake/products.php") {
    const current = document.querySelectorAll("[href='http://localhost:8080/coffee-cake/products.php']")[1];
    current.firstChild.setAttribute("class", "highlight-menu");
} else if(window.location.href ==="http://localhost:8080/coffee-cake/products/milktea.php"){
    const current = document.querySelector("[href='http://localhost:8080/coffee-cake/products/milktea.php']")
    current.firstChild.setAttribute("class", "highlight-menu");
} else if(window.location.href ==="http://localhost:8080/coffee-cake/products/cafe.php") {
    const current = document.querySelector("[href='http://localhost:8080/coffee-cake/products/cafe.php']")
    current.firstChild.setAttribute("class", "highlight-menu");
} else if(window.location.href ==="http://localhost:8080/coffee-cake/products/cake.php") {
    const current = document.querySelector("[href='http://localhost:8080/coffee-cake/products/cake.php']")
    current.firstChild.setAttribute("class", "highlight-menu");
} else {
    const current = document.querySelector("[href='http://localhost:8080/coffee-cake/products/topping.php']");
    current.firstChild.setAttribute("class", "highlight-menu");
}