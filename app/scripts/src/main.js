

// Animation circle

let blue = document.getElementById('blue-cicle')
let red = document.getElementById('blue-red')
let green = document.getElementById('blue-green')

document.addEventListener('mousemove', (event) => {

    let xPosition = event.clientX
    let yPosition = event.clientY

    blue.style.right = xPosition * 0.3 + "px"
    blue.style.top = yPosition * 0.2 + "px"

    red.style.left = xPosition * 0.1 + "px"
    red.style.top = yPosition * 0.3 + "px"

    green.style.left = xPosition * 0.4 + "px"
    green.style.top = yPosition * 0.5 + "px"

})