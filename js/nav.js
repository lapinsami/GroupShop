function mobileNav() {
    let x = document.getElementById("responsive-nav");
    if (x.className === "topnav") {
        x.className += " responsive";
    } else {
        x.className = "topnav";
    }
}