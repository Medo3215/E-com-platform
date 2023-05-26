const bar = document.getElementById('bar');
const close = document.getElementById('close');
const nav = document.getElementById('navbar');
/* this one for opning the bar */
if (bar) {
    bar.addEventListener('click', () => {
        nav.classList.add('active');
    })
}
/* this one for closing the bar */
if (close) {
    close.addEventListener('click', () => {
        nav.classList.remove('active');
    })
}



/*product page script for choosing&shown product image */

var MainImg = document.getElementById("MainImg");
        var smallimg = document.getElementsByClassName("small-img");

        smallimg[0].onclick = function() {
            MainImg.src = smallimg[0].src;
        }
        smallimg[1].onclick = function() {
            MainImg.src = smallimg[1].src;
        }
        smallimg[2].onclick = function() {
            MainImg.src = smallimg[2].src;
        }
        smallimg[3].onclick = function() {
            MainImg.src = smallimg[3].src;
        }
