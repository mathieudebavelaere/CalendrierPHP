const todayMen = document.getElementById('todayMen');
const enterTouch = document.getElementById('todayAnime');
console.log(enterTouch);
enterTouch.addEventListener('mouseover', ()=>{
    if (todayMen){
    setTimeout(() => {
        todayMen.style.top = "40vw"
    }, 0)
    setTimeout(() => {
        todayMen.style.top= "-5vw"
    }, 1500)
    }
}); 