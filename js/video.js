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
document.onreadystatechange = function () {
    if (document.readyState !== "complete") {
        document.querySelector(".loader_bg").style.display = "flex";
    } else {
        document.querySelector(".loader_bg").style.display = "none";
    }
};


// END LOADER JS



// Automatic date 
    document.getElementById("currentYear").textContent = new Date().getFullYear();

// End Automatic date 



// Donation Amount selector 
document.addEventListener("DOMContentLoaded", function() {
    const donateAmounts = document.querySelectorAll('.donate-amount');

    donateAmounts.forEach(amount => {
        amount.addEventListener('click', function() {
            // Remove 'selected' class from all amounts
            donateAmounts.forEach(a => {
                a.classList.remove('selected');
            });

            // A 'selected' class to the clicked amount
            this.classList.add('selected');

            // Update selected amount
            const selectedAmount = this.getAttribute('data-amount');
            console.log("Selected amount:", selectedAmount);
        });
    });
});
//End  Donation Amount selector 