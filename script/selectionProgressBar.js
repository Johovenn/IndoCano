const baliProgressBar = document.getElementById("progress-bar-bali")
const jatengProgressBar = document.getElementById("progress-bar-jateng")
const baliPercentage = document.getElementById("bali-percentage")
const jatengPercentage = document.getElementById("jateng-percentage")

function setBaliProgress(baliValue){
    baliProgressBar.value = baliValue
    baliPercentage.innerText = `${Math.ceil(baliValue / 3 * 100)}%`
}

function setJatengProgress(jatengValue){
    jatengProgressBar.value = jatengValue
    jatengPercentage.innerText = `${Math.ceil(jatengValue / 3 * 100)}%`
}