const startButton = document.getElementById('start-btn')
const nextButton = document.getElementById('next-btn')
const questionContainerElement = document.getElementById('question-container')
const questionElement = document.getElementById('question')
const answerButtonsElement = document.getElementById('answer-buttons')
const wrongSound = document.getElementById("wrong-sound")
const correctSound = document.getElementById("correct-sound")
const quizResult = document.getElementById("result")
const resultScore = document.getElementById("score")
const resultMessage = document.getElementById("message")
const continueButton = document.getElementById("continue-btn")
const ready = document.getElementById('ready')
const minimumScore = 60
const progressBar = document.getElementById("progress-bar")

wrongSound.volume = 0.2
correctSound.volume = 0.2

let shuffledQuestions, currentQuestionIndex
let clicked = false
let correctCount = 0

startButton.addEventListener("click", startGame)
nextButton.addEventListener("click", () => {
    currentQuestionIndex++
    setNextQuestion()
})
continueButton.addEventListener("click", function(){
    window.location.href = "quizPage.php"
})

function startGame(){
    correctCount = 0
    progressBar.value = 0
    quizResult.classList.add("hide")
    continueButton.classList.add("hide")
    ready.classList.add("hide")
    startButton.classList.add("hide") // hide start button
    shuffledQuestions = questions.sort(() => Math.random - 0.5) //acak urutan soal
    currentQuestionIndex = 0
    progressBar.setAttribute("max", shuffledQuestions.length)
    questionContainerElement.classList.remove("hide") // show question
    setNextQuestion()
}

function setNextQuestion(){
    resetState() //ilangin semua warna yang sblmnya ada
    answered = false
    showQuestion(shuffledQuestions[currentQuestionIndex]) //ganti text pertanyaan sama pilihan jawabannya
}

function showQuestion(question){
    questionElement.innerText = question.question //ganti pertanyaan sesuai pertanyaan
    question.answers.forEach(answer => { //loop through each answer
        const button = document.createElement('button') // bikin button
        button.innerText = answer.text //ganti each button punya text jadi jawaban
        button.classList.add('btn')
        button.classList.add('answer-btn') //kasih class btn
        if(answer.correct){ //kalo value correctnya = true
            button.dataset.correct = answer.correct //kasih value correct
        }
        button.addEventListener("click", selectAnswer) //kalo buttonnya dipencet
        answerButtonsElement.appendChild(button)
    });
}

function resetState(){ //function buat reset warna dari background sama button"
    clearStatusClass(document.body) //ilangin class correct sama wrong biar background nya balik putih
    nextButton.classList.add("hide") // hide next button
    while(answerButtonsElement.firstChild){ //hilangin semua answer button yang ada
        answerButtonsElement.removeChild(answerButtonsElement.firstChild)
    }
}

function selectAnswer(e){
    if(answered) return
    answered = true

    progressBar.value = progressBar.value + 1

    const selectedButton = e.target //masukin tombol yang dipencet dlm variable
    const correct = selectedButton.dataset.correct //buat cek dia punya value bener apa ga
    setStatusClass(document.body, correct) //ubah warna background sesuai bener ato salah
    Array.from(answerButtonsElement.children).forEach(button => {
        setStatusClass(button, button.dataset.correct)
        button.disabled = true;
    })

    if(correct){ //play sfx correct kalo bener
        correctSound.play()
        correctCount++
    }
    else{ //play sfx salah kalo salah
        wrongSound.play()
    }

    if(shuffledQuestions.length > currentQuestionIndex + 1){
        nextButton.classList.remove("hide")
    }
    else{
        questionContainerElement.classList.add("hide")
        showResult()
    }
}

function setStatusClass(element, correct){
    clearStatusClass(element)
    if(correct){
        element.classList.add("correct")
    }
    else{
        element.classList.add("wrong")
    }
}

function clearStatusClass(element){
    element.classList.remove("correct")
    element.classList.remove("wrong")
}

function showResult(){
    quizResult.classList.remove("hide")
    startButton.innerText = "Review Lesson"
    startButton.classList.remove("hide")
    startButton.classList.remove("restart-btn")
    continueButton.classList.remove("hide")

    let score = correctCount/shuffledQuestions.length * 100

    resultScore.innerText = `Score : ${score}`
    if(score < minimumScore){
        resultMessage.innerText = `Aww, nice try. You got ${correctCount} out of ${shuffledQuestions.length} questions correct.`
    }
    else{
        resultMessage.innerText = `Well done! You got ${correctCount} out of ${shuffledQuestions.length} questions correct.`
        
        let xhr = new XMLHttpRequest()
        xhr.open("POST", "../../../script/updatequiz1.php", false)
        xhr.send()
    }
}

const questions= [
    {
        question: "Ibukota Jawa Tengah",
        answers: [
            {text: 'Pontianak', correct: false},
            {text: 'Bengkulu', correct: false},
            {text: 'DKI Jakarta', correct: false},
            {text: 'Semarang', correct: true}
        ]
    },
    {
        question: "Salah satu tempat wisata Jawa Tengah",
        answers: [
            {text: 'Pontianak', correct: false},
            {text: 'Borobudur', correct: true},
            {text: 'Monas', correct: false},
            {text: 'Kebun Binatang Bogor', correct: false}
        ]
    },
    {
        question: "Salah satu makanan khas Jawa Tengah",
        answers: [
            {text: 'Soto Betawi', correct: false},
            {text: 'Soto Kudus', correct: true},
            {text: 'Martabak', correct: false},
            {text: 'Kerak Telor', correct: false}
        ]
    },
    {
        question: "Rumah Adat khas Jawa Tengah",
        answers: [
            {text: 'Krong Bade', correct: false},
            {text: 'Bolon', correct: false},
            {text: 'Joglo', correct: true},
            {text: 'Gadang', correct: false}
        ]
    },
    {
        question: "Peninggalan sejarah Jawa Tengah",
        answers: [
            {text: 'Punden', correct: false},
            {text: 'Candi Sewu', correct: false},
            {text: 'Prasasti Ciaruteun', correct: false},
            {text: 'Candi Prambanan', correct: true}
        ]
    },
    {
        question: "Jawa Tengah terkenal dengan tariannya, yaitu",
        answers: [
            {text: 'Gambyong', correct: true},
            {text: 'Kecak', correct: false},
            {text: 'Piring', correct: false},
            {text: 'Tor-tor', correct: false}
        ]
    },
    {
        question: "Peninggalan sejarah Jawa Tengah",
        answers: [
            {text: 'Punden', correct: false},
            {text: 'Candi Sewu', correct: false},
            {text: 'Prasasti Ciaruteun', correct: false},
            {text: 'Candi Prambanan', correct: true}
        ]
    },
    {
        question: "Salah satu julukan kota di Jawa Tengah, Jepara",
        answers: [
            {text: 'Ukir', correct: true},
            {text: 'Gotong', correct: false},
            {text: 'Pencak Silat', correct: false},
            {text: 'Si Jago Merah', correct: false}
        ]
    },
    {
        question: "Senjata tradisional adat Jawa Tengah",
        answers: [
            {text: 'Pedang', correct: false},
            {text: 'Keris', correct: true},
            {text: 'Arit', correct: false},
            {text: 'Busur dan Panah', correct: false}
        ]
    },
    {
        question: "Mayoritas mata pencaharian atau pekerjaan penduduk di Jawa Tengah adalah",
        answers: [
            {text: 'Karyawan', correct: false},
            {text: 'Kuli', correct: false},
            {text: 'Pedagang', correct: false},
            {text: 'Pertanian', correct: true}
        ]
    }
]