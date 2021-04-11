

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


// Animation circle-arrow
let circle = document.getElementById('circle-arrow');
let arrow = document.getElementById('arrow-of-circle');

circle.addEventListener("mousemove", (event) => {

    let xPosition = (event.clientX + window.pageXOffset) - circle.offsetTop
    let yPosition = (event.clientY + window.pageYOffset) - circle.offsetLeft

    arrow.style.top = yPosition - 50 + "px"
    arrow.style.left = xPosition - 40 + "px"

})

circle.addEventListener("mouseleave", () => {
    arrow.style.top = (150 - 125) + "px"
    arrow.style.left = (150 - 125)+ "px"
})


// animation images
let projects = [
    {
        link: document.getElementById("vln"),
        img: document.getElementById("img-vln")
    },
    {
        link: document.getElementById("outline"),
        img: document.getElementById("img-outline")
    },
    {
        link: document.getElementById("latitude"),
        img: document.getElementById("img-latitude")
    },
    {
        link: document.getElementById("census-branding"),
        img: document.getElementById("img-census-branding")
    },
    {
        link: document.getElementById("washable"),
        img: document.getElementById("img-washable")
    },
    {
        link: document.getElementById("partage"),
        img: document.getElementById("img-partage")
    },
    {
        link: document.getElementById("toinztype"),
        img: document.getElementById("img-toinztype")
    },
    {
        link: document.getElementById("organik"),
        img: document.getElementById("img-organik")
    },
    {
        link: document.getElementById("sade"),
        img: document.getElementById("img-sade")
    },
    {
        link: document.getElementById("discofont"),
        img: document.getElementById("img-discofont")
    },
    {
        link: document.getElementById("pirate"),
        img: document.getElementById("img-pirate")
    },
    {
        link: document.getElementById("shade"),
        img: document.getElementById("img-shade")
    },
    {
        link: document.getElementById("cartier"),
        img: document.getElementById("img-cartier")
    },
    {
        link: document.getElementById("personnal"),
        img: document.getElementById("img-personnal")
    },
    {
        link: document.getElementById("nyx"),
        img: document.getElementById("img-nyx")
    },
    {
        link: document.getElementById("amours"),
        img: document.getElementById("img-amours")
    },
    {
        link: document.getElementById("webdesign"),
        img: document.getElementById("img-webdesign")
    },
    {
        link: document.getElementById("illu"),
        img: document.getElementById("img-illu")
    },
    {
        link: document.getElementById("photo"),
        img: document.getElementById("img-photo")
    }
]

const tabContainer = document.getElementById("container-tab")
projects.forEach( (element) => {

    element.link.addEventListener('mousemove', (event) => {

        let xPosition = event.clientX
        let yPosition = event.clientY

        let heightContainer = tabContainer.offsetHeight / 2

        element.img.style.opacity = "1"
        element.img.style.transition = "0ms"
        element.img.style.top = (heightContainer * 0.5) - (yPosition * 0.09)  + "px"
        element.img.style.right = xPosition * 0.5 + "px"

    })

    element.link.addEventListener('mouseleave', () => {
        element.img.style.transition = "200ms"
        element.img.style.opacity = "0"
    })

})
