/* When the user clicks on the button,
        toggle between hiding and showing the dropdown content */
function openDropdown() {
    document.getElementById("dropdown-content").classList.toggle("show");
}
function forwardDropdown() {
    document.getElementById("forwardDropdown").classList.toggle("show");
}
/*function markDropdown() {
    document.getElementById("markDropdown").classList.toggle("show");
}*/
// Close the dropdown if the user clicks outside of it

window.onclick = function(e) {
    if (!e.target.matches('.open-dropdown')) {
        var myDropdown = document.getElementById("dropdownContent");
        if (myDropdown.classList.contains('show')) {
            myDropdown.classList.remove('show');
        }
    }
};
