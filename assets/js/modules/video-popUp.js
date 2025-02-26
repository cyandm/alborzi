document.addEventListener('DOMContentLoaded', function () {
    const videoCoverAll = document.querySelectorAll('.video-cover');

    if (videoCoverAll) {
        videoCoverAll.forEach((videoCover) => {
            const popupContainer = videoCover.querySelector('#popup-container');
            const popupVideo = videoCover.querySelector('#popup-video');
            const closePopup = videoCover.querySelector('#close-popup');
            const popupContent = videoCover.querySelector('#popup-content');

            videoCover.addEventListener('click', function () {
                popupContainer.classList.remove('hidden');
                popupContainer.offsetHeight;
                popupContainer.classList.add('opacity-100');
                popupContent.classList.remove('scale-95');
                popupVideo.play();
            });

            closePopup.addEventListener('click', function () {
                popupVideo.pause();
                popupVideo.currentTime = 0;
                popupContainer.classList.add('opacity-0');
                popupContent.classList.add('scale-95');
                setTimeout(function () {
                    popupContainer.classList.add('hidden');
                    popupVideo.pause();
                }, 300);
            });

            popupContainer.addEventListener('click', function (e) {
                if (e.target === popupContainer) {
                    closePopup.click();
                }
            });
        });
    } else {
        console.warn('Video cover not found');
    }
});