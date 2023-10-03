document.addEventListener("DOMContentLoaded", function() {
    const audioPlayer = document.getElementById('audioPlayer');
    const playButton = document.getElementById('playButton');
    const descriptionElement = document.querySelector('.description');

    if (!descriptionElement) {
        return;
    }

    playButton.addEventListener('click', function() {
        const textToSpeak = descriptionElement.textContent;

        const speechSynthesis = window.speechSynthesis;
        const utterance = new SpeechSynthesisUtterance(textToSpeak);

        utterance.lang = 'it-IT';

        utterance.onend = function() {
            audioPlayer.pause();
        };

        speechSynthesis.speak(utterance);

        audioPlayer.src = URL.createObjectURL(new Blob([textToSpeak], { type: 'audio/mpeg' }));
        audioPlayer.play();
    });
});

