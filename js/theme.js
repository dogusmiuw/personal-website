const themeBtn = document.querySelector(".theme-btn");
const rootDOM = document.querySelector(":root");
const themeIcon = document.querySelector("#theme-icon");

if(localStorage.getItem("theme") == "dark") {
    rootDOM.style.setProperty("--primary","white");
    rootDOM.style.setProperty("--secondary","black");
    themeIcon.classList = "fa-solid fa-sun theme-btn";
} else {
    rootDOM.style.setProperty("--primary","black");
    rootDOM.style.setProperty("--secondary","white");
    themeIcon.classList = "fa-solid fa-moon theme-btn";
}

themeSwap = () => {
    if(localStorage.getItem("theme") == "dark") {
        localStorage.setItem("theme", "light");
        location.reload();
    } else {
        localStorage.setItem("theme", "dark");
        location.reload();
    }
}
