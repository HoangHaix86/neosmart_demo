const btnMenuBar = document.getElementById("btnMenuBar");
const menuBar = document.getElementById("menuBar");

btnMenuBar.onclick = (e) => {
    if (menuBar.style.maxHeight) {
        menuBar.style.maxHeight = null;
    } else {
        menuBar.style.maxHeight = menuBar.scrollHeight + "px";
    }
    menuBar.classList.toggle("invisible");
};
