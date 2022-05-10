const hamburger = document.querySelector(".hamburger");
const navBurger = document.querySelector(".nav-burger");

hamburger.addEventListener("click", () => {
    hamburger.classList.toggle("active-hamburger");
    navBurger.classList.toggle("active-hamburger");
});

document.querySelectorAll(".nav-link").forEach((element) =>
    element.addEventListener("click", () => {
        hamburger.classList.remove("active-hamburger");
        navBurger.classList.remove("active-hamburger");
    })
);
