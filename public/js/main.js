const que1 = document.getElementById("que_1")
const que2 = document.getElementById("que_2")
const que3 = document.getElementById("que_3")

que1.addEventListener("click", () => {
    que1.classList.add("active-q")
    que2.classList.remove("active-q")
    que3.classList.remove("active-q")
})
que2.addEventListener("click", () => {
    que2.classList.add("active-q")
    que1.classList.remove("active-q")
    que3.classList.remove("active-q")
})
que3.addEventListener("click", () => {
    que3.classList.add("active-q")
    que2.classList.remove("active-q")
    que1.classList.remove("active-q")
})

let img = document.querySelectorAll('.bg-img');
for (let i = 0; i < img.length; i++){
    window.addEventListener('mousemove', function(e) { 
        let x = e.clientX / window.innerWidth;
        let y = e.clientY / window.innerHeight;     
        img[i].style.transform = 'translate(-' + x * 50 + 'px, -' + y * 50 + 'px)';
    });    
}
/* particlesJS.load(@dom-id, @path-json, @callback (optional)); */
particlesJS.load('particles', '/js/particles.json', function() {
});