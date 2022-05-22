var openBtn = document.getElementById("openBtn");
var ulNav = document.getElementById("UlNav");


openBtn.addEventListener("click", function openNav(event) {
    event.preventDefault();
    if (ulNav.classList.contains("disable")) {

        ulNav.classList.add("enable");
        ulNav.classList.remove("disable");
    } else {

        (ulNav.classList.contains("enable"))
        ulNav.classList.remove("enable");
        ulNav.classList.add("disable");
        // 
    }
});