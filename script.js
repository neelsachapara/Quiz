// ===== Timer (in seconds) =====
let timeLeft = 60; // 1 minute

const timerDisplay = document.createElement("h3");
timerDisplay.style.textAlign = "center";
timerDisplay.style.color = "red";
document.body.prepend(timerDisplay);

const form = document.querySelector("form");

// Countdown function
const countdown = setInterval(() => {
    timerDisplay.textContent = "Time Left: " + timeLeft + " sec";

    timeLeft--;

    if (timeLeft < 0) {
        clearInterval(countdown);
        alert("Time's up! Quiz will be submitted.");
        form.submit(); // auto submit
    }
}, 1000);

// ===== Validation before submit =====
form.addEventListener("submit", function (e) {
    const totalQuestions = document.querySelectorAll("input[type='radio']").length / 4;
    const checkedAnswers = document.querySelectorAll("input[type='radio']:checked").length;

    if (checkedAnswers < totalQuestions) {
        e.preventDefault();
        alert("Please answer all questions before submitting!");
    }
});
