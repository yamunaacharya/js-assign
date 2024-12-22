document.addEventListener("DOMContentLoaded", () => {
    const form = document.getElementById("dateForm");
    const startDateInput = document.getElementById("startDate");
    const endDateInput = document.getElementById("endDate");
    const messageDiv = document.getElementById("message");
    const resultDiv = document.getElementById("result");

    const savedStartDate = getCookie("startDate");
    const savedEndDate = getCookie("endDate");
    if (savedStartDate) startDateInput.value = savedStartDate;
    if (savedEndDate) endDateInput.value = savedEndDate;

    const validateDate = (date) => /^\d{4}-\d{2}-\d{2}$/.test(date);

    const calculateDifference = (startDate, endDate) => {
        const start = new Date(startDate);
        const end = new Date(endDate);
        const differenceInTime = Math.abs(end - start);
        return Math.ceil(differenceInTime / (1000 * 60 * 60 * 24));
    };

    form.addEventListener("submit", (e) => {
        e.preventDefault();

        const startDate = startDateInput.value;
        const endDate = endDateInput.value;

        if (!validateDate(startDate) || !validateDate(endDate)) {
            messageDiv.textContent = "Please enter valid dates in YYYY-MM-DD format.";
            messageDiv.style.color = "red";
            return;
        }

        messageDiv.innerHTML = "Calculating... <span class='spinner'></span>";

        const difference = calculateDifference(startDate, endDate);
        resultDiv.textContent = `The difference is ${difference} day(s).`;

        setCookie("startDate", startDate, 7);
        setCookie("endDate", endDate, 7);

        messageDiv.textContent = "Calculation complete!";
        messageDiv.style.color = "green";
    });

    form.addEventListener("reset", () => {
        messageDiv.textContent = "";
        resultDiv.textContent = "";
    });

    function setCookie(name, value, days) {
        const date = new Date();
        date.setTime(date.getTime() + days * 24 * 60 * 60 * 1000);
        document.cookie = `${name}=${value};expires=${date.toUTCString()};path=/`;
    }

    function getCookie(name) {
        const cookies = document.cookie.split("; ");
        for (let cookie of cookies) {
            const [key, value] = cookie.split("=");
            if (key === name) return value;
        }
        return null;
    }
});
const lastCalculations = [];
if (difference !== null) {
    lastCalculations.push(difference);
    if (lastCalculations.length > 5) lastCalculations.shift();

    const lastCalculationsDiv = document.getElementById("lastCalculations");
    lastCalculationsDiv.innerHTML = "<h3>Last 5 Calculations:</h3>";
    lastCalculations.forEach((calc, index) => {
        lastCalculationsDiv.innerHTML += `<p>${index + 1}. ${calc} day(s)</p>`;
    });
}

