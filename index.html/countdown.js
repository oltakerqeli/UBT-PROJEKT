const concertDates = [
    { city: "Edinburgh", date: "Dec 9, 2024 19:00:00" },
    { city: "Washington DC", date: "Jan 21, 2025 20:00:00" },
    { city: "New Yourk", date: "Jan 24, 2025 18:00:00" }
];

let currentConcert = 0;

function updateConcertInfo() {
    const countdownDate = new Date(concertDates[currentConcert].date).getTime();
    document.getElementById("concert-city").innerText = concertDates[currentConcert].city;

    const countdownFunction = setInterval(() => {
        const now = new Date().getTime();
        const timeLeft = countdownDate - now;

        const days = Math.floor(timeLeft / (1000 * 60 * 60 * 24));
        const hours = Math.floor((timeLeft % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
        const minutes = Math.floor((timeLeft % (1000 * 60 * 60)) / (1000 * 60));
        const seconds = Math.floor((timeLeft % (1000 * 60)) / 1000);

        document.getElementById("days").innerText = days;
        document.getElementById("hours").innerText = hours;
        document.getElementById("minutes").innerText = minutes;
        document.getElementById("seconds").innerText = seconds;

        if (timeLeft < 0) {
            clearInterval(countdownFunction);
            document.querySelector(".countdown").innerText = "Event Started!";
        }
    }, 1000);
}

updateConcertInfo();
