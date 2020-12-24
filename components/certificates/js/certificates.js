let rotation = 0;
let cogWhite = document.querySelector('.certificates__cog');
let cogLarge = document.querySelector('.production__cog_large');
let cogSmall = document.querySelector('.production__cog_small');

window.addEventListener('load', function () {
    window.addEventListener('scroll', function () {
        rotation = pageYOffset / 3;
        cogWhite.style.transform = `translate(18%, -29%) rotate(${rotation}deg)`;
        cogSmall.style.transform = `translate(37%, 34%) rotate(-${rotation}deg)`;
        cogLarge.style.transform = `translate(-50%, 16%) rotate(${rotation}deg)`;
    })
})