const cookieContainer = document.querySelector(".cookiescontainer");
const cookieBtn = document.querySelector(".cookiesbtnaccept");
const cookieBtnPerso = document.querySelector(".footer-btn");
const cookieBtnRefuse = document.querySelector(".cookiesbtnrefuse");

cookieBtn.addEventListener("click", () => {
    cookieContainer.classList.remove("activeBnr");
    localStorage.setItem("cookieBannerDisplayed", "cookie accepted");
});

cookieBtnRefuse.addEventListener("click", () => {
    cookieContainer.classList.remove("activeBnr");
    localStorage.setItem("cookieBannerDisplayed", "cookie refused");
});
cookieBtnPerso.addEventListener("click", () => {
    cookieContainer.classList.remove("activeBnr");
    localStorage.setItem("cookieBannerDisplayed", "cookie accepted");
});

setTimeout(() => {
    if (!localStorage.getItem("cookieBannerDisplayed")) {
        cookieContainer.classList.add("activeBnr");
    }
}, 2000);