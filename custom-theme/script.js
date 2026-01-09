document.addEventListener("DOMContentLoaded", () => {
    const heading = document.getElementById("greeting");
    const clickMeBtn = document.getElementById("clickMe");
    const toggleBtn = document.getElementById("toggleTheme");

    // Dynamic heading color change
    heading.addEventListener("click", () => {
        heading.style.color = "#e67e22";
        heading.innerText += " 👋";
    });

    // Button click alert
    clickMeBtn.addEventListener("click", () => {
        alert("Button clicked! JS is working.");
    });

    // Toggle dark mode
    toggleBtn.addEventListener("click", () => {
        document.body.classList.toggle("dark-mode");
    });
});

