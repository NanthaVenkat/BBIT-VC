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
    }
    // else {
    //     console.error("Element with ID 'dr-status-btn' not found!");
    // }
});
// <!-- / toggle button Script -->


// <!-- Copy Writes -->
let thisYear = new Date();
let copywriteYear = document.getElementById("this-year");

if (copywriteYear) {
    copywriteYear.innerHTML = thisYear.getFullYear();
}
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

// Form Validation
// show hide password
let showHideBtn = $(".toggle-pass");
$(document).ready(function () {
    showHideBtn.on("click", function (e) {
        e.preventDefault();

        let passInput = $(this).closest(".password-wr").find("input");
        let showHideImg = $(this).find("i");

        if (passInput.prop("type") === "password") {
            passInput.prop("type", "text");
            showHideImg.removeClass("fa-eye-slash").addClass("fa-eye");
        } else {
            passInput.prop("type", "password");
            showHideImg.removeClass("fa-eye").addClass("fa-eye-slash");
        }
    });
});

// form error hadling 
// $(".signin-form").on("submit", function (e) {
//     e.preventDefault();  // Prevent form submission

//     const userName = $(this).find(".username");
//     const email = $(this).find(".email");
//     const password = $(this).find(".password");
//     const confPassword = $(this).find(".conf-password");

//     let isValid = true;

//     // Username validation
//     if (userName.val().trim() === "") {
//         setError(userName, "Username is required");
//         isValid = false;
//     } else {
//         setSuccess(userName);
//     }

//     // Email validation
//     const emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
//     if (email.val().trim() === "") {
//         setError(email, "Email is required");
//         isValid = false;
//     } else if (!emailPattern.test(email.val().trim())) {
//         setError(email, "Please enter a valid email");
//         isValid = false;
//     } else {
//         setSuccess(email);
//     }

//     // Password validation
//     if (password.val().trim() === "") {
//         setError(password, "Password is required");
//         isValid = false;
//     } else if (password.val().trim().length < 5) {
//         setError(password, "Password must have more than 5 characters");
//         isValid = false;
//     } else {
//         setSuccess(password);
//     }

//     // Confirm password validation
//     if (confPassword.val().trim() === "") {
//         setError(confPassword, "Please confirm your password");
//         isValid = false;
//     } else if (confPassword.val().trim() !== password.val().trim()) {
//         setError(confPassword, "Passwords do not match");
//         isValid = false;
//     } else {
//         setSuccess(confPassword);
//     }

//     // Submit form if all validations pass
//     if (isValid) {
//         this.submit();
//     }
// });

// // Set error function
// const setError = (element, message) => {
//     // element.next(".error").text(message).show();
//     element.removeClass("success").addClass("error");
// };

// // Set success function
// const setSuccess = (element) => {
//     // element.next(".error").hide();
//     element.removeClass("error").addClass("success");
// };

$(".signin-form").on("submit", function (e) {
    e.preventDefault();  // Prevent form submission

    const userName = $(this).find(".username");
    const email = $(this).find(".email");
    const phone = $(this).find(".phone");
    const password = $(this).find(".password");
    const confPassword = $(this).find(".conf-password");
    const inputWrr = $(this).find(".inr-input");

    let isValid = true;

    // Username validation
    if (userName.val().trim() === "") {
        setError(userName, "Username is required");
        isValid = false;
    } else {
        setSuccess(userName);
    }

    // Email validation
    const emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    if (email.val().trim() === "") {
        setError(email, "Email is required");
        isValid = false;
    } else if (!emailPattern.test(email.val().trim())) {
        setError(email, "Enter a valid email");
        isValid = false;
    } else {
        setSuccess(email);
    }

    // Phone number validation (10 digits only)
    const phonePattern = /^\d{10}$/;
    if (phone.val().trim() === "") {
        setError(phone, "Phone number is required");
        isValid = false;
    } else if (!phonePattern.test(phone.val().trim())) {
        setError(phone, "Enter a valid 10-digit phone number");
        isValid = false;
    } else {
        setSuccess(phone);
    }

    // Password validation
    if (password.val().trim() === "") {
        setError(password, "Password is required");
        isValid = false;
    } else if (password.val().trim().length < 5) {
        setError(password, "At least 5 characters");
        isValid = false;
    } else {
        setSuccess(password);
    }

    // Confirm password validation
    if (confPassword.val().trim() === "") {
        setError(confPassword, "Confirm your password");
        isValid = false;
    } else if (confPassword.val().trim() !== password.val().trim()) {
        setError(confPassword, "Passwords do not match");
        isValid = false;
    } else {
        setSuccess(confPassword);
    }

    // Submit form if all validations pass
    if (isValid) {
        this.submit();
    }
});

// Set error: Red border & placeholder
const setError = (element, message) => {
    // element.css({
    //     "border-color": "red",
    //     "color": "red"
    // }).val("").attr("placeholder", message);
    element.addClass("error").removeClass("success").val("").attr("placeholder", message);
};

// Set success: Green border & reset placeholder
const setSuccess = (element) => {
    // element.css({
    //     "border-color": "green",
    //     "color": "white"
    // })
    
    element.addClass("success").removeClass("error").attr("placeholder", "");
};

// Toggle password visibility
// $(".toggle-pass").on("click", function (e) {
//     e.preventDefault();
//     const input = $(this).siblings("input");
//     const icon = $(this).find("i");

//     if (input.attr("type") === "password") {
//         input.attr("type", "text");
//         icon.removeClass("fa-eye-slash").addClass("fa-eye");
//     } else {
//         input.attr("type", "password");
//         icon.removeClass("fa-eye").addClass("fa-eye-slash");
//     }
// });


