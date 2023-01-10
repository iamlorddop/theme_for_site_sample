let btn = document.getElementById("theme-button");
let link = document.getElementById("theme-link");

btn.addEventListener("click", function () { ChangeTheme(); });

function ChangeTheme() {
    let lightTheme = "styles/light.css";
    let darkTheme = "styles/dark.css";

    let currTheme = link.getAttribute("href");
    let theme = "";

    if(currTheme == lightTheme) {
   	 currTheme = darkTheme;
   	 theme = "dark";
    }
    else {    
   	 currTheme = lightTheme;
   	 theme = "light";
    }

    link.setAttribute("href", currTheme);

    Save(theme);
}

function Save(theme) {
    let Request = new XMLHttpRequest();
    Request.open("GET", "./index.php?theme=" + theme, true); //У вас путь может отличаться
    Request.send();
}