//Create a function to change the background color of the page when the user hovers over
//the registration form.

function changeBackgroundColorOnHover() {
    const registrationForm = document.getElementById("registrationForm");

    if (registrationForm) {
        registrationForm.addEventListener("mouseenter", () => {
            document.body.style.backgroundColor = "red"; 
        });

        registrationForm.addEventListener("mouseleave", () => {
            document.body.style.backgroundColor = ""; 
        });
    } else {
        console.error("Registration form not found.");
    }
}

document.addEventListener("DOMContentLoaded", changeBackgroundColorOnHover);