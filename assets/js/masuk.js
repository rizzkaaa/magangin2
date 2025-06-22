document.addEventListener("DOMContentLoaded", () => {
    if (window.location.hash !== "#masuk" && window.location.hash !== "#daftar") {
        window.location.hash = "masuk";
    }
});
const wrapper = document.querySelector(".wrapper");
const roles = document.querySelectorAll(".peran");

roles.forEach(role => {
    role.addEventListener("click", () => {
        wrapper.style.transform = "translateY(-600px)";
    })
})

const bigLabel = document.querySelector(".bigLabel");
const swipeBtn = document.querySelectorAll(".swipe-btn");
const greatingContent = document.querySelectorAll(".wrap-greating");

const [dropLeft, dropRight] = [...swipeBtn];
const [greatingLeft, greatingRight] = [...greatingContent];
const swipeLeft = [dropLeft, greatingRight];
const swipeRight = [dropRight, greatingLeft];

const newArray = [...swipeLeft, ...swipeRight]

newArray.forEach(array => {
    array.addEventListener("click", () => handleClick())
})

function handleClick() {
    swipeLeft.forEach(e => {
        e.style.animation = "swipeLeft 2s";
    })

    swipeRight.forEach(e => {
        e.style.animation = "swipeRight 2s";
    })

    setTimeout(() => {
        newArray.forEach(array => array.style.animation = "")
    }, 2000);
}

// const alert = document.querySelector('.alert');
// alert.