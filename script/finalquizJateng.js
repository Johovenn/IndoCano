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
const minimumScore = 75
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
        xhr.open("POST", "../../../script/updateFinalQuiz.php", false)
        xhr.send()
    }
}

const questions=[
    {
        question: "Salah satu Taman Nasional di Jawa Tengah",
        answers: [
            {text: 'Taman Nasional Bunaken', correct: false},
            {text: 'Taman Nasional Bali', correct: true},
            {text: 'Taman Nasional Komodo', correct: false},
            {text: 'Taman Nasional Gunung Merbabu ', correct: false}
        ]
    },
    {
        question: "Apa Dataran Tinggi yang terletak di Jawa Tengah",
        answers: [
            {text: 'Dataran Tinggi Gayo', correct: false},
            {text: 'Dataran Tinggi Dieng', correct: true},
            {text: 'Dataran Tinggi Bukit Barisan', correct: false},
            {text: 'Dataran Tinggi Kapuas Hulu ', correct: false}
        ]
    },
    {
        question: "Salah satu tempat kediaman Presiden Indonesia ke-8 Joko Widodo, terletak di Jawa Tengah. Dimanakah itu?",
        answers: [
            {text: 'Bengkalis', correct: false},
            {text: 'Semarang', correct: false},
            {text: 'Megelang', correct: false},
            {text: 'Solo ', correct: true}
        ]
    },
    {
        question: "Beberapa museum berikut terletak di Jawa Tengah. Salah satu museum di Sragen bernama",
        answers: [
            {text: 'Museum Karst Indonesia', correct: false},
            {text: 'Museum Kereta Api', correct: false},
            {text: 'Museum Purbakala Sangiran', correct: true},
            {text: 'Museum RA Kartini ', correct: false}
        ]
    },
    {
        question: "Berikut adalah beberapa gua yang terkenal di Jawa Tengah, kecuali",
        answers: [
            {text: 'Gua Petruk', correct: false},
            {text: 'Gua Purbalingga', correct: false},
            {text: 'Gua Pancoran', correct: true},
            {text: 'Gua Kebumen ', correct: false}
        ]
    },
    {
        question: "Berikut pilihan yang tepat mengenai nama keraton yang ada di Jawa Tengah",
        answers: [
            {text: 'Keraton Ngayogyakarta', correct: false},
            {text: 'Keraton Sumedang Larang', correct: false},
            {text: 'Keraton Kesepuhan', correct: false},
            {text: 'Keraton Surakarta Hadiningrat ', correct: true}
        ]
    },
    {
        question: "Salah satu julukan kota di Jawa Tengah, Jepara ",
        answers: [
            {text: 'Ukir', correct: true},
            {text: 'Gotong', correct: false},
            {text: 'Pencak Silat', correct: false},
            {text: 'Si Jago Merah ', correct: false}
        ]
    },{
        question: "Alat musik khas Jawa Tengah",
        answers: [
            {text: 'Gitar Kuno', correct: false},
            {text: 'Gamelan', correct: true},
            {text: 'Gong', correct: false},
            {text: 'Angklung', correct: false}
        ]
    },
    {
        question: "Tradisi upacara di Jawa Tengah",
        answers: [
            {text: 'Selametan', correct: false},
            {text: 'Ngaben', correct: false},
            {text: 'Ruwatan', correct: true},
            {text: 'Bakar Batu', correct: false}
        ]
    },
    {
        question: "Pakaian Adat khas Jawa Tengah",
        answers: [
            {text: 'Ulos', correct: false},
            {text: 'Kebaya', correct: true},
            {text: 'Aesan Gede', correct: false},
            {text: 'Ulee Balang', correct: false}
        ]
    },
    {
        question: "Gunung terkenal yang ada di Jawa Tengah",
        answers: [
            {text: 'Semeru', correct: false},
            {text: 'Merapi', correct: true},
            {text: 'Kelud', correct: false},
            {text: 'Sumbing', correct: false}
        ]
    },
    {
        question: "Bandara Internasional yang terletak di Jawa Tengah",
        answers: [
            {text: 'Soekarno - Hatta', correct: false},
            {text: 'Frans Kaisiepo', correct: false},
            {text: 'Bandara Jendral Ahmad Yani', correct: true},
            {text: 'Adisutjipto', correct: false}
        ]
    },
    {
        question: "Festival terkenal yang sering diadakan di Jawa Tengah",
        answers: [
            {text: 'Dieng Culture Festival', correct: true},
            {text: 'Festival Jazz Gunung', correct: false},
            {text: 'Festival Pacu Jawi', correct: false},
            {text: 'Festival Rambu Solo', correct: false}
        ]
    },
    {
        question: "Salah satu kerajinan yang terbaik di Jawa Tengah",
        answers: [
            {text: 'Wayang Kulit', correct: false},
            {text: 'Anyaman Pandan', correct: false},
            {text: 'Kipas Kayu Cendana', correct: false},
            {text: 'Mebel', correct: true}
        ]
    },
    {
        question: "Mayoritas agama di Jawa Tengah",
        answers: [
            {text: 'Islam', correct: true},
            {text: 'Buddha', correct: false},
            {text: 'Hindu', correct: false},
            {text: 'Konghucu', correct: false}
        ]
    },
    {
        question: "Pantai terbaik di Jawa Tengah",
        answers: [
            {text: 'Pantai Nampu', correct: true},
            {text: 'Pantai Indah Kapuk', correct: false},
            {text: 'Pantai Selatan', correct: false},
            {text: 'Pantai Kuta', correct: false}
        ]
    },
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
]