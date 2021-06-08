if (window.location.href === "http://localhost:8080/coffee-cake/index.php") {
    // có đến 2 cái đường link index.php là tấm hình với chữ trang chủ, nên phải lấy phần thử thứ 1 -> là chữ "Trang chủ"
    const current = document.querySelectorAll("[href='http://localhost:8080/coffee-cake/index.php']")[1];
    current.setAttribute("class", "highlight");
} else if (window.location.href === "http://localhost:8080/coffee-cake/products.php") {
    const current = document.querySelector("[href='http://localhost:8080/coffee-cake/products.php']")
    current.setAttribute("class", "highlight");
} else if (window.location.href === "http://localhost:8080/coffee-cake/about.php") {
    const current = document.querySelector("[href='http://localhost:8080/coffee-cake/about.php']");
    current.setAttribute("class", "highlight");
}
else {
    // idle
}