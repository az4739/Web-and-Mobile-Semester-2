function updatemenu() {
    if (document.getElementById('responsive-menu').checked == true) {
        document.getElementById('menu').style.borderBottomRightRadius = '0';
        document.getElementById('menu').style.borderBottomLeftRadius = '0';
    } else {
        document.getElementById('menu').style.borderRadius = '10px';
    }
}

function validateForm() {
    let x = document.forms["myForm"]["fname"].value;

    let y = document.forms["myForm"]["lname"].value;

    let z = document.forms["myForm"]["subject"].value;


    if (x == "") {
        alert("First Name must be filled out");
        return false;
    } else if (y == "") {
        alert("Last Name must be filled out");
        return false;
    } else if (z == "") {
        alert("Comment section must be filled out");
        return false;
    }
}
// slideshow part
let slide = document.getElementsByClassName("graffiti2");
let dugme = document.getElementsByClassName("slideshow_dugme");
let counter = 0;

// AAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAA

function slideshow() {

    document.getElementById("slideshow_dugme_left").addEventListener("click", () => {
        change(counter + 1)
    });


    document.getElementById("slideshow_dugme_right").addEventListener("click", () => {
        change(counter - 1)
    });

    document.querySelectorAll('.slideshow_dugme').forEach((bullet, bulletIndex) => {
        bullet.addEventListener('click', () => {
            if (counter !== bulletIndex) {
                change(bulletIndex);
            }
        })
    })

    function change(move) {
        if (move >= slide.length) { move = 0; }
        if (move < 0) { move = slide.length - 1; }

        slide[counter].classList.toggle("active");
        dugme[counter].classList.toggle("active");
        slide[move].classList.toggle("active");
        dugme[move].classList.toggle("active");

        counter = move;
    }


}