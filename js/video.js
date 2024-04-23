document.addEventListener("DOMContentLoaded", function () {
    const video = document.getElementById('myVideo');
    const playButton = document.getElementById('playButton');
    const gifOverlay = document.getElementById('gifOverlay');

    // Pause the video by default
    video.pause();

    // Toggle video play/pause when clicking the GIF overlay
    gifOverlay.addEventListener('click', function () {
        if (video.paused) {
            video.play();
            gifOverlay.style.display = 'none';
        } else {
            video.pause();
            gifOverlay.style.display = 'block';
        }
    });

    // Toggle video play/pause when clicking the play button
    playButton.addEventListener('click', function () {
        if (video.paused) {
            video.play();
            gifOverlay.style.display = 'none';
        } else {
            video.pause();
            gifOverlay.style.display = 'block';
        }
    });

    // Toggle video play/pause when clicking the video
    video.addEventListener('click', function () {
        if (video.paused) {
            video.play();
            gifOverlay.style.display = 'none';
        } else {
            video.pause();
            gifOverlay.style.display = 'block';
        }
    });
});








// LOADER JS 
document.addEventListener("DOMContentLoaded", function() {
    const loader = document.getElementById("loading");

    window.addEventListener("load", function() {
        // Wait for 2 seconds (2000 milliseconds) before hiding the preloader
        setTimeout(function() {
            loader.style.display = "none";
        }, 2000);
    });
});

// END LOADER JS