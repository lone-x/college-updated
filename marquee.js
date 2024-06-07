document.addEventListener("DOMContentLoaded", function() {
    const scrollingText = document.querySelector(".scrolling-text");
    const items = scrollingText.querySelectorAll(".scrolling-text-item");

    let totalWidth = Array.from(items).reduce((acc, item) => acc + item.offsetWidth, 0);
    scrollingText.style.width = totalWidth + "px";

    const innerHTML = scrollingText.innerHTML;
    scrollingText.innerHTML += innerHTML;
});
