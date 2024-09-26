const themeDirectory = "<?php echo esc_url(get_template_directory_uri()); ?>";

const video = document.getElementById('lesson-video');
const progressIndicator = document.getElementById('progress-indicator');

const card1 = document.getElementById('card1');
const card2 = document.getElementById('card2');
const card3 = document.getElementById('card3');

const icon1 = document.getElementById('icon1');
const icon2 = document.getElementById('icon2');
const icon3 = document.getElementById('icon3');

const timestamps = {
    card1: 5,
    card2: 14,
    card3: 24
};

function isSmallScreen() {
    return window.matchMedia("(max-width: 768px)").matches;
}

video.addEventListener('timeupdate', function() {
    const progress = (video.currentTime / video.duration) * 100;

    if(isSmallScreen()) {
        progressIndicator.style.width = progress + '%';
        progressIndicator.style.height = '5px';
    } else {
        progressIndicator.style.height = progress + '%';
        progressIndicator.style.width = '5px';
    }
    

    if (video.currentTime >= timestamps.card1 && video.currentTime < timestamps.card2) {
        openCard(1);
    } else if (video.currentTime >= timestamps.card2 && video.currentTime < timestamps.card3) {
        openCard(2);
    } else if (video.currentTime >= timestamps.card3) {
        openCard(3);
    }
});

function toggleCard(cardNumber) {
    const cardContent = document.getElementById('content' + cardNumber);
    const iconExpand = document.getElementById('icon' + cardNumber + '-expand');
    const iconCollapse = document.getElementById('icon' + cardNumber + '-collapse');

    if (cardContent.style.display === 'block') {
        cardContent.style.display = 'none';
        iconExpand.style.display = 'inline';
        iconCollapse.style.display = 'none';
    } else {
        cardContent.style.display = 'block';
        iconExpand.style.display = 'none';
        iconCollapse.style.display = 'inline';
    }
}

function openCard(cardNumber) {
    
    document.querySelectorAll('.card-content').forEach(function(content) {
        content.style.display = 'none';
    });
    document.querySelectorAll('.toggle-icon').forEach(function(icon) {
        icon.style.display = 'inline'; 
    });
    document.querySelectorAll('.toggle-icon[alt="Expand Less"]').forEach(function(icon) {
        icon.style.display = 'none';
    });

    const cardContent = document.getElementById('content' + cardNumber);
    const iconExpand = document.getElementById('icon' + cardNumber + '-expand');
    const iconCollapse = document.getElementById('icon' + cardNumber + '-collapse');

    cardContent.style.display = 'block';
    iconExpand.style.display = 'none';
    iconCollapse.style.display = 'inline';
}