function setProvinceProgress(progressBarId, percentageId, value){
    console.log("masuk function set progress bar")
    const progressBar = document.getElementById(progressBarId)
    const percentage = document.getElementById(percentageId)

    progressBar.setAttribute("value", value)
    percentage.innerText = `${Math.ceil(value / 3 * 100)}%`
}

