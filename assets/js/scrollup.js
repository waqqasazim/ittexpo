// script.js

// Calculate circle circumference and set initial offset
const progressCircle = document.querySelector('.progress-ring__circle');
const radius = progressCircle.r.baseVal.value;
const circumference = 2 * Math.PI * radius;
progressCircle.style.strokeDasharray = `${circumference}`;
progressCircle.style.strokeDashoffset = `${circumference}`;

// Update progress based on scroll
window.addEventListener('scroll', () => {
    const scrollPercent = getScrollPercentage();
    const offset = circumference - (scrollPercent / 100) * circumference;
    progressCircle.style.strokeDashoffset = offset;

    // Update the text inside the circle
    document.getElementById('progressText').innerText = `${Math.round(scrollPercent)}%`;
});

// Scroll to top when progress ring is clicked
document.getElementById('progressContainer').addEventListener('click', () => {
    window.scrollTo({
        top: 0,
        behavior: 'smooth'
    });
});

// Helper function to calculate scroll percentage
function getScrollPercentage() {
    const scrollTop = window.scrollY;
    const docHeight = document.documentElement.scrollHeight - window.innerHeight;
    return (scrollTop / docHeight) * 100;
}
