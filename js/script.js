jQuery(document).ready(function () {
    jQuery("#hav-search-btn").click(function () {
        jQuery(".nav-search-bar").toggleClass("active");
    });
});

// search bar apear code
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

// toggle button Script
document.addEventListener("DOMContentLoaded", () => {
    let drStatusBtn = document.getElementById("dr-status-btn");

    if (drStatusBtn) {
        drStatusBtn.classList.add("disable");

        drStatusBtn.addEventListener("click", () => {
            drStatusBtn.classList.toggle("disable");
            drStatusBtn.classList.toggle("enable");
        });
    } else {
        console.error("Element with ID 'dr-status-btn' not found!");
    }
});

