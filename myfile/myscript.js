let mybody = document.getElementById('mybody');

let dark = document.getElementById('dark');
let light = document.getElementById('light');
let circle = document.getElementById('circle');
let change = document.getElementById('change');
let mydiv = document.getElementById('mydiv');

let weeks = document.querySelectorAll('.weeks');

dark.addEventListener('click', function () {
    // for (let i = 0; i < weeks.length; i++) {

    //     weeks[i].style.backgroundColor = "#ff0000";

    // }

    for (const week of weeks) {
        week.style.backgroundColor = "#0000ff";
    }

    for (const week in weeks) {
        console.log(week);
    }
    mybody.style.backgroundColor = "#0F0404"

});
// function mylight(){

// }


light.addEventListener('click', function () {
    // mydiv.classList.add('circle');
    // mydiv.classList.remove('circle');
    mydiv.classList.toggle('circle');
})
// change.addEventListener('mouseover', function () {
//     circle.style.borderRadius = '50%';
//     circle.style.opacity = '0.6';
// });

change.addEventListener('mouseleave', function () {
    square.style.borderRadius = '0px';
    square.style.opacity = '1';
});