const overallProgressBar = document.getElementById("overall-progress-bar")
const overallPercentage = document.getElementById("overall-percentage")
const max = 114
let title = document.getElementById("user-title")

function setOverallProgress(progressValue){
    overallProgressBar.setAttribute("value", progressValue)
    overallPercentage.innerText = `${Math.ceil(progressValue / max * 100)}%`
    if(progressValue < 20){
        title.innerText = "Nusantara Explorer"
    }
    else if(progressValue >= 20 && progressValue < 50){
        title.innerText = "Nusantara Enthusiast"
    }
    else if(progressValue >= 50){
        title.innerText = "Nusantara Master"
    }
}