const input = document.getElementsByClassName('option')
const result = document.getElementById('result')

function setPercent() {
    let percent = 0
    Object.values(input).forEach(element => {
        if(element.value.toLowerCase() == 'si') percent += 100 / input.length
        result.value = Math.floor(percent)
    });
}

setPercent()

Object.values(input).forEach(element => {
    element.addEventListener('change', setPercent)
})