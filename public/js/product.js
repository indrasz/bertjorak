const optionMenu = document.querySelector(".select-menu-sort-wrap");
const selectBtn = optionMenu.querySelector(".select-button-sort");
const options = optionMenu.querySelectorAll(".option");
const sbutton_list = optionMenu.querySelector(".sbutton-list");

selectBtn.addEventListener("click", () => optionMenu.classList.toggle("active"));

options.forEach(option => {
    option.addEventListener("click", (event) => {
        event.preventDefault(); // Prevent the default link behavior

        let href = option.querySelector(".option-text").getAttribute("href");
        let selectedOption = decodeURIComponent(href.split("=")[1]);
        sbutton_list.textContent = selectedOption;

        // Remove the 'selected' class from all options
        options.forEach(option => {
            option.classList.remove("selected");
        });

        // Add the 'selected' class to the clicked option
        option.classList.add("selected");

        // Update the URL with the selected option as a parameter
        const url = new URL(window.location.href);
        url.searchParams.set("sort", encodeURIComponent(selectedOption));
        window.location.href = url; // Redirect to the updated URL
    });
});


// Retrieve the selected option from the URL parameter on page load
document.addEventListener("DOMContentLoaded", () => {
    const url = new URL(window.location.href);
    const searchParams = new URLSearchParams(url.search);
    const selectedOption = searchParams.get("sort");

    if (selectedOption) {
        const formattedOption = decodeURIComponent(selectedOption);
        sbutton_list.textContent = formattedOption;

        // Add the 'selected' class to the corresponding option
        options.forEach(option => {
            const optionText = option.querySelector(".option-text").innerText;
            if (optionText === formattedOption) {
                option.classList.add("selected");
            }
        });
    } else {
        sbutton_list.textContent = "Sort Products By"; // Set the default value
    }
});
