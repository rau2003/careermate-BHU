document.addEventListener("DOMContentLoaded", function() {
    loadHTML('header.php', 'header-container');
    loadHTML('footer.php', 'footer-container');
});

function loadHTML(file, elementId) {
    fetch(file)
        .then(response => response.text())
        .then(data => {
            document.getElementById(elementId).innerHTML = data;
        })
        .catch(error => console.error('Error loading HTML:', error));
}

/*progress tracker*/
function updateProgress() {
    const topics = document.querySelectorAll('.topic input[type="checkbox"]');
    let completed = 0;

    topics.forEach(topic => {
        if (topic.checked) {
            completed++;
        }
    });

    const progress = (completed / topics.length) * 100;
    const progressText = document.getElementById('percentage');
    const circle = document.getElementById('circle');

    progressText.textContent = `${Math.round(progress)}%`;
    circle.style.strokeDasharray = `${progress}, 100`;
}
/*carousel*/
let currentSlide = 0;
const slides = document.querySelectorAll('.carousel-slide');

function showSlide(index) {
  slides[currentSlide].classList.remove('active');
  currentSlide = (index + slides.length) % slides.length;
  slides[currentSlide].classList.add('active');
}

function changeSlide(direction) {
  showSlide(currentSlide + direction);
}

// Automatically change slides every 7 seconds
setInterval(() => {
  changeSlide(1);
}, 7000);

/*mcq*/
let currentQuestion = 1;
const totalQuestions = 5;

function showQuestion(questionNumber) {
    for (let i = 1; i <= totalQuestions; i++) {
        document.getElementById(`question-${i}`).classList.add('hidden');
    }
    document.getElementById(`question-${questionNumber}`).classList.remove('hidden');

    document.getElementById('prev').classList.toggle('hidden', questionNumber === 1);
    document.getElementById('next').classList.toggle('hidden', questionNumber === totalQuestions);
    document.getElementById('submit').classList.toggle('hidden', questionNumber !== totalQuestions);
}

function nextQuestion() {
    if (currentQuestion < totalQuestions) {
        currentQuestion++;
        showQuestion(currentQuestion);
    }
}

function prevQuestion() {
    if (currentQuestion > 1) {
        currentQuestion--;
        showQuestion(currentQuestion);
    }
}

function calculateScore() {
    let score = 0;
    const questions = document.querySelectorAll('.question');

    questions.forEach((question) => {
        const selected = question.querySelector('input[type="radio"]:checked');
        if (selected) {
            score += parseInt(selected.value);
        }
    });

    document.getElementById('score').textContent = score;
    document.getElementById('quiz').classList.add('hidden');
    document.getElementById('result').classList.remove('hidden');
}

// Initialize the quiz by showing the first question
showQuestion(currentQuestion);

//contact js
// JavaScript file for contact page functionalities

function sendOTP() {
  // Simulate OTP sending process
  document.getElementById('otpSection').style.display = 'block';
  document.getElementById('submitButton').style.display = 'inline-block';
  alert('OTP sent successfully!');
}

function verifyOTP() {
  // Simulate OTP verification process
  alert('OTP verified successfully!');
  document.getElementById('submitButton').disabled = false;
}

function toggleFAQ(id) {
  var faqItem = document.getElementById(id);
  faqItem.style.display = (faqItem.style.display == 'block') ? 'none' : 'block';
}

/* js for contact*/
document.getElementById('contactForm-contact').addEventListener('submit', function(event) {
    event.preventDefault();
    alert('Form submitted successfully!');
    // Add your form submission code here (e.g., AJAX request)
});
