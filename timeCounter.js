let hours = 0;
let minutes = 0;
let seconds = 0;
let timer;

function startTimer() {
    timer = setInterval(updateTimer, 1000);
}

function stopTimer() {
    clearInterval(timer);
}

function resetTimer() {
    clearInterval(timer);
    hours = 0;
    minutes = 0;
    seconds = 0;
    updateDisplay();
}

function updateTimer() {
    seconds++;
    if (seconds === 60) {
        seconds = 0;
        minutes++;
        if (minutes === 60) {
            minutes = 0;
            hours++;
        }
    }
    updateDisplay();
}

function updateDisplay() {
    const hoursDisplay = String(hours).padStart(2, "0");
    const minutesDisplay = String(minutes).padStart(2, "0");
    const secondsDisplay = String(seconds).padStart(2, "0");

    stTimer = hoursDisplay + ":" + minutesDisplay + ":" + secondsDisplay;
}

