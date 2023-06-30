const baliBtn = document.getElementById("button-1")
const jatengBtn = document.getElementById("button-2")

baliBtn.addEventListener("click", function(){
    setProvinceId(1)
})
jatengBtn.addEventListener("click", function(){
    setProvinceId(2)
})

function setProvinceId(buttonId){
    console.log(`masuk function setProvince dgn id ${buttonId}`)

    let xhr = new XMLHttpRequest()
    let param = 0

    if(buttonId == 1){
        param = 1
    }
    else if(buttonId == 2){
        param = 2
    }
    else{
        param = 1
    }

    let url = "../../script/setProvinceId.php?param=" + encodeURIComponent(param)
    xhr.open("GET", url, true)

    xhr.onreadystatechange = function() {
        if(xhr.readyState === XMLHttpRequest.DONE){
            if(xhr.status === 200){
                //berhasil
                console.log(xhr.status)
            }
            else{
                //gagal
            }
        }
    }

    xhr.send()
    window.location.href = "learn/learnPage.php"
}