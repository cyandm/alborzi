    let images = document.querySelectorAll(".preload-image");
    let currentIndex = 0;

    function fadeImages() {
        images.forEach(img => img.classList.add("opacity-0"));
        images[currentIndex].classList.remove("opacity-0");
        images[currentIndex].classList.add("opacity-100");

        currentIndex = (currentIndex + 1) % images.length;
    }

    let interval = setInterval(fadeImages, 1000);

    setTimeout(() => {
            clearInterval(interval);
            document.getElementById("preloader").classList.add("hidden");
        }, 5000); // نمایش حداقل ۲ ثانیه پریلودر قبل از مخفی شدن
