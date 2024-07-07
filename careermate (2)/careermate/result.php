<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CareerMate - Result/Admit Card</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="icon" href="images/favicon-white.png" type="image/x-icon">
    <script src="loadComponents.js" defer></script>
</head>
<body>
    <div id="header-container"></div>
    <main>
        <h1>Imporatant Links</h1>
        <section class="content-blocks">
            <div class="block">
                <h2>Result</h2>
                <ul>
                    <li><a href="#">Result Link 1</a></li>
                    <li><a href="#">Result Link 2</a></li>
                    <li><a href="#">Result Link 3</a></li>
                    <li><a href="#">Result Link 4</a></li>
                    <li><a href="#">Result Link 5</a></li>
                </ul>
            </div>
            <div class="block">
                <h2>Admit Card</h2>
                <ul>
                    <li><a href="#">Admit Card Link 1</a></li>
                    <li><a href="#">Admit Card Link 2</a></li>
                    <li><a href="#">Admit Card Link 3</a></li>
                    <li><a href="#">Admit Card Link 4</a></li>
                    <li><a href="#">Admit Card Link 5</a></li>
                </ul>
            </div>
            <div class="block">
                <h2>Answer Key</h2>
                <ul>
                    <li><a href="#">Answer Key Link 1</a></li>
                    <li><a href="#">Answer Key Link 2</a></li>
                    <li><a href="#">Answer Key Link 3</a></li>
                    <li><a href="#">Answer Key Link 4</a></li>
                    <li><a href="#">Answer Key Link 5</a></li>
                </ul>
            </div>
            <div class="block">
                <h2>Admissions</h2>
                <ul>
                    <li><a href="#">Admissions Link 1</a></li>
                    <li><a href="#">Admissions Link 2</a></li>
                    <li><a href="#">Admissions Link 3</a></li>
                    <li><a href="#">Admissions Link 4</a></li>
                    <li><a href="#">Admissions Link 5</a></li>
                </ul>
            </div>
            <div class="block">
                <h2>Certificate Verifications</h2>
                <ul>
                    <li><a href="#">Certificate Verification Link 1</a></li>
                    <li><a href="#">Certificate Verification Link 2</a></li>
                    <li><a href="#">Certificate Verification Link 3</a></li>
                    <li><a href="#">Certificate Verification Link 4</a></li>
                    <li><a href="#">Certificate Verification Link 5</a></li>
                </ul>
            </div>
            <section>
                <div class="container">
                    <h1>Ace Your Exam Preparation with Progress Trackers</h1>
                    <div class="tracker">
                        <div class="topic">
                            <input type="checkbox" id="topic1" onchange="updateProgress()">
                            <label for="topic1">Topic 1: Introduction to constitution</label>
                        </div>
                        <div class="topic">
                            <input type="checkbox" id="topic2" onchange="updateProgress()">
                            <label for="topic2">Topic 2: Preamble of the constitution</label>
                        </div>
                        <div class="topic">
                            <input type="checkbox" id="topic3" onchange="updateProgress()">
                            <label for="topic3">Topic 3: Fundamentals of constitution</label>
                        </div>
                        <div class="topic">
                            <input type="checkbox" id="topic4" onchange="updateProgress()">
                            <label for="topic4">Topic 4: Fundamental Rights of citizens</label>
                        </div>
                    </div>
                    <div class="progress">
                        <svg viewBox="0 0 36 36" class="circular-chart">
                            <path class="circle-bg"
                                d="M18 2.0845
                                    a 15.9155 15.9155 0 0 1 0 31.831
                                    a 15.9155 15.9155 0 0 1 0 -31.831"
                            />
                            <path id="circle" class="circle"
                                stroke-dasharray="0, 100"
                                d="M18 2.0845
                                    a 15.9155 15.9155 0 0 1 0 31.831
                                    a 15.9155 15.9155 0 0 1 0 -31.831"
                            />
                            <text x="18" y="20.35" class="percentage" id="percentage">0%</text>
                        </svg>
                    </div>
                    <p class="description">
                      CareerMate's progress tracker is an invaluable tool for government job aspirants. It offers a clear and visual representation of your preparation journey, enabling you to set specific goals, monitor achievements, and identify areas needing improvement. By regularly updating your tracker, you stay motivated and focused, ensuring you remain on track to meet your objectives. This continuous feedback loop helps maintain a steady learning pace and boosts self-confidence as you witness your progress over time. The progress tracker also fosters accountability and discipline, essential for your success.
                  </p>
                  <div class="cta">
                    <p>Ready to take control of your preparation?</p>
                    <button onclick="window.location.href='signup.html'">Sign Up</button>
                  </div>
              </div>
            <div class="container">
                <h1>Evaluate Your Readiness: Take the Quick Quiz to Analyze Your Preparation! </h1>
                <div id="quiz">
                    <div class="question" id="question-1">
                        <h2>1. What is the capital of France?</h2>
                        <div>
                            <input type="radio" id="q1a" name="q1" value="0">
                            <label for="q1a">Berlin</label>
                        </div>
                        <div>
                            <input type="radio" id="q1b" name="q1" value="0">
                            <label for="q1b">Madrid</label>
                        </div>
                        <div>
                            <input type="radio" id="q1c" name="q1" value="2">
                            <label for="q1c">Paris</label>
                        </div>
                        <div>
                            <input type="radio" id="q1d" name="q1" value="0">
                            <label for="q1d">Lisbon</label>
                        </div>
                    </div>
                    <div class="question hidden" id="question-2">
                        <h2>2. Which planet is known as the Red Planet?</h2>
                        <div>
                            <input type="radio" id="q2a" name="q2" value="2">
                            <label for="q2a">Mars</label>
                        </div>
                        <div>
                            <input type="radio" id="q2b" name="q2" value="0">
                            <label for="q2b">Earth</label>
                        </div>
                        <div>
                            <input type="radio" id="q2c" name="q2" value="0">
                            <label for="q2c">Jupiter</label>
                        </div>
                        <div>
                            <input type="radio" id="q2d" name="q2" value="0">
                            <label for="q2d">Saturn</label>
                        </div>
                    </div>
                    <div class="question hidden" id="question-3">
                        <h2>3. Who wrote 'To Kill a Mockingbird'?</h2>
                        <div>
                            <input type="radio" id="q3a" name="q3" value="2">
                            <label for="q3a">Harper Lee</label>
                        </div>
                        <div>
                            <input type="radio" id="q3b" name="q3" value="0">
                            <label for="q3b">Mark Twain</label>
                        </div>
                        <div>
                            <input type="radio" id="q3c" name="q3" value="0">
                            <label for="q3c">Ernest Hemingway</label>
                        </div>
                        <div>
                            <input type="radio" id="q3d" name="q3" value="0">
                            <label for="q3d">F. Scott Fitzgerald</label>
                        </div>
                    </div>
                    <div class="question hidden" id="question-4">
                        <h2>4. What is the largest ocean on Earth?</h2>
                        <div>
                            <input type="radio" id="q4a" name="q4" value="2">
                            <label for="q4a">Pacific Ocean</label>
                        </div>
                        <div>
                            <input type="radio" id="q4b" name="q4" value="0">
                            <label for="q4b">Atlantic Ocean</label>
                        </div>
                        <div>
                            <input type="radio" id="q4c" name="q4" value="0">
                            <label for="q4c">Indian Ocean</label>
                        </div>
                        <div>
                            <input type="radio" id="q4d" name="q4" value="0">
                            <label for="q4d">Arctic Ocean</label>
                        </div>
                    </div>
                    <div class="question hidden" id="question-5">
                        <h2>5. What is the tallest mountain in the world?</h2>
                        <div>
                            <input type="radio" id="q5a" name="q5" value="2">
                            <label for="q5a">Mount Everest</label>
                        </div>
                        <div>
                            <input type="radio" id="q5b" name="q5" value="0">
                            <label for="q5b">K2</label>
                        </div>
                        <div>
                            <input type="radio" id="q5c" name="q5" value="0">
                            <label for="q5c">Kangchenjunga</label>
                        </div>
                        <div>
                            <input type="radio" id="q5d" name="q5" value="0">
                            <label for="q5d">Lhotse</label>
                        </div>
                    </div>
                    <div class="navigation-buttons">
                        <button id="prev" onclick="prevQuestion()" class="hidden">Previous</button>
                        <button id="next" onclick="nextQuestion()">Next</button>
                        <button id="submit" onclick="calculateScore()" class="hidden">Submit</button>
                    </div>
                </div>
                <div id="result" class="hidden">
                    <h2>Your Score: <span id="score"></span>/10</h2>
                    <p>Want to score better in exams? Sign up or log in now!</p>
                    <button onclick="window.location.href='signup.html'" class="signup-btn">Sign Up</button>
                </div>
            </div>
          </section>    
        </section>
    </main>
    <div id="footer-container"></div>

    <script src="./main.js"></script>
</body>
</html>
