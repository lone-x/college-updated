document.addEventListener("DOMContentLoaded", function() {
    const scrollingText = document.querySelector(".scrolling-text");
    const items = scrollingText.querySelectorAll(".scrolling-text-item");

    const calculateTotalWidth = () => {
        let totalWidth = Array.from(items).reduce((acc, item) => acc + item.offsetWidth, 0);
        scrollingText.style.width = totalWidth + "px";

        const innerHTML = scrollingText.innerHTML;
        scrollingText.innerHTML += innerHTML;
    };

    // Create an observer instance
    const observer = new MutationObserver(() => {
        calculateTotalWidth();
        observer.disconnect(); // We only need to run once
    });

    // Configuration of the observer
    const config = { attributes: true, childList: true, subtree: true };

    // Start observing the target node
    observer.observe(scrollingText, config);

    // Fallback in case the observer doesn't trigger
    setTimeout(calculateTotalWidth, 500);
});
