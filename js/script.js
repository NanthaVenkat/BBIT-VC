jQuery(document).ready(function () {
    jQuery("#hav-search-btn").click(function () {
        jQuery(".nav-search-bar").toggleClass("active");
    });
});

document.addEventListener("DOMContentLoaded", () => {
    const inputField = document.querySelector(".nav-search-bar input");
    const placeholders = ["Search Doctors", "Search Services", "Search Categories"];
    let index = 0;

    if (inputField) {
        setInterval(() => {
            inputField.placeholder = placeholders[index];
            index = (index + 1) % placeholders.length;
        
        }, 1000);
        
    }
});

