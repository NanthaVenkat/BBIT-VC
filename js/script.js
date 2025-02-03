let navSearchBtn = document.getElementById("hav-search-btn");
let searchWrapper = document.querySelector(".nav-search-bar");

navSearchBtn.addEventListener("click", () => {
    searchWrapper.classList.add("active");
});
