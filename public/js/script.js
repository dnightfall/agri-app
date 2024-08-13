document.addEventListener("DOMContentLoaded", function() {
    let lastScrollTop = 0;
    const topElement = document.querySelector(".header");

    window.addEventListener("scroll", function() {
        let currentScroll = window.pageYOffset || document.documentElement.scrollTop;
        if (currentScroll > lastScrollTop) {
            // Scroll down
            topElement.style.top = '-100px'; // Sesuaikan nilai dengan tinggi elemen top jika berbeda
        } else {
            // Scroll up
            topElement.style.top = '0';
        }
        lastScrollTop = currentScroll <= 0 ? 0 : currentScroll; // Avoid negative scroll values
    });
});
