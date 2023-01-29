var btn = document.querySelector('.icon');
var body = document.querySelector('html');

window.addEventListener("scroll", () => {
    if (body.scrollTop >= 500) {
        btn.style.display = "block";
        btn.addEventListener('click', () => {
            window.scrollTo(0, 0);
        })
    } else {
        btn.style.display = "none";
    }

})




// document.addEventListener("DOMContentLoaded", function (event) {
//     var scrollpos = localStorage.getItem('scrollpos');
//     if (scrollpos) window.scrollTo(0, scrollpos);
// });

// window.onbeforeunload = function (e) {
//     localStorage.setItem('scrollpos', window.scrollY);
// };