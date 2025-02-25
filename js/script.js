// <!-- Header searechbar -->
jQuery(document).ready(function () {
    let timeout; // Store timeout ID

    // Add 'active' class on mouseover
    jQuery("#nav-search-btn").mouseover(function () {
        jQuery(".nav-search-bar").addClass("active");
    });

    // Remove 'active' class when mouse leaves the search bar
    jQuery(".nav-search-bar").mouseleave(function () {
        let searchInput = jQuery(".nav-search-bar input[type='search']").val(); // Get input value

        if (searchInput === "" || searchInput === null) {
            timeout = setTimeout(() => {
                jQuery(".nav-search-bar").removeClass("active");
            }, 3000); // Delay removal by 3 seconds
        }
    });

    // Cancel timeout if user re-enters the search bar
    jQuery(".nav-search-bar").mouseenter(function () {
        clearTimeout(timeout);
    });
});

// <!-- / Header searechbar -->


// <!-- search bar apear code -->
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
// <!-- / search bar apear code -->


// <!-- toggle button Script -->
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
// <!-- / toggle button Script -->


// <!-- Copy Writes -->
let thisYear = new Date();
let copywriteYear = document.getElementById("this-year");
copywriteYear.innerHTML = thisYear.getFullYear();
// <!-- Copy Writes -->


// Doctors page 
// <!-- display the coresponded doctors tiles -->
$(document).ready(function () {

    // Correct element selection
    let doctorsCard = $('[data-location="doctors-page"]');

    // Click event
    doctorsCard.click(() => {
        window.location.href = "/bbit-vc/individual-doctors.php";
    });

    // Filter functionality
    $('.doctors-fliter a').click(function (e) {
        e.preventDefault();

        // Remove active class from all buttons and add to the clicked one
        $('.doctors-fliter a').removeClass('active');
        $(this).addClass('active');

        let category = $(this).data('category');

        if (category === 'all-doctor') {
            // Show all doctor categories
            $('.row > .col-of-docs').fadeIn(500);
        } else {
            // Hide all and show only the selected category
            $('.row > .col-of-docs').fadeOut(500, function () {
                $('.row > .col-of-docs[data-category="' + category + '"]').fadeIn(500);
            });
        }
    });
});

// <!-- / Doctors Category -->
