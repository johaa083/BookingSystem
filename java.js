//Get the button:
mybutton = document.getElementById("myBtn");


// When the user clicks on the button, scroll to the top of the document
function topFunction() {
    document.body.scrollDown = 0; // For Safari
    document.documentElement.scrolldown = 0; // For Chrome, Firefox, IE and Opera
}

function togglePopup() {
    document.getElementById("popup-1").classList.toggle("active");
}