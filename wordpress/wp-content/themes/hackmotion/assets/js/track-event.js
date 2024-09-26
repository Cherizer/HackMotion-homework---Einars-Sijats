document.addEventListener('DOMContentLoaded', function () {

    const video = document.getElementById('lesson-video');

    fetch('/wp-json/page-view/v1/submit-data/', {
        method: 'POST'
    })
    .then(response => response.json())
    .then(data => {
        console.log('Success:', data);
    })
    .catch((error) => {
        console.error('Error:', error);
    });


    function trackFullVideoWatch() {
        const pageUrl = window.location.href;
        const userId = getCookie('user_id');

        const eventData = {
            user_id: userId,
            event_type: 'full_video_watch',
            page_url: pageUrl,
        };

        fetch('/wp-json/data-tracking/v1/submit-data/', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
            },
            body: JSON.stringify({
                data: eventData
            })
        })
        .then(response => response.json())
        .then(data => {
            console.log('Success:', data);
        })
        .catch((error) => {
            console.error('Error:', error);
        });
    }

    video.addEventListener('ended', function () {
        trackFullVideoWatch();
    });

    function getCookie(name) {
        let match = document.cookie.match(new RegExp('(^| )' + name + '=([^;]+)'));
        if (match) return match[2];
        return null;
    }
});