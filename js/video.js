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
