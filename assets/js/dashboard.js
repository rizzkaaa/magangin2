document.addEventListener("DOMContentLoaded", () => {
    if (!window.location.hash) {
        window.location.hash = "#dashboard";
    }
    activeSection();
});


const toggleMenu = document.getElementById("toggle-menu");
toggleMenu.addEventListener("click", () => {
    console.log(1);
    
    document.getElementById("sidebar").classList.toggle("w-350px");
    document.getElementById("sidebar").classList.toggle("w-0");
    document.getElementById("sidebar").classList.toggle("p-[15px]");
    
})

const navs = document.querySelectorAll("aside ul li a");
function activeSection(){
    navs.forEach(nav => {
        const link = nav.getAttribute("href");
       
        if(window.location.hash == link){
            navs.forEach(nav => {
                nav.classList.remove("bg-[#455bd4]")
                nav.classList.remove("text-white")
                nav.classList.add("border-y")
            })
            nav.classList.add("bg-[#455bd4]")
            nav.classList.add("text-white")
            nav.classList.remove("border-y")
    
        }
    })
}

window.addEventListener("hashchange", activeSection);
