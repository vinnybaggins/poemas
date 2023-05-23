const header = document.querySelector("header");
const main = document.querySelector("main");
const poemasTitle = document.querySelector("#poemas-title");

window.addEventListener("resize", function(){
    let headerHeight = window.getComputedStyle(header).getPropertyValue("height");
    main.style.marginTop = headerHeight;
})