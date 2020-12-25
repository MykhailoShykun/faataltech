let rotation = 0;
let cogWhite = document.querySelector('.certificates__cog');
let cogLarge = document.querySelector('.production__cog_large');
let cogSmall = document.querySelector('.production__cog_small');
// let initialTransform = [[getComputedTranslateX(cogWhite),getComputedTranslateY(cogWhite)], [getComputedTranslateX(cogSmall),getComputedTranslateY(cogSmall)], [getComputedTranslateX(cogLarge),getComputedTranslateY(cogLarge)]];
// let screenWidth = window.screen.width;
//
// function getComputedTranslateX(obj) {
//     var style = window.getComputedStyle(obj);
//     var matrix = new WebKitCSSMatrix(style.transform);
//     return  matrix.m41;
// }
//
// function getComputedTranslateY(obj)
// {
//     if(!window.getComputedStyle) return;
//     var style = getComputedStyle(obj),
//         transform = style.transform || style.webkitTransform || style.mozTransform;
//     var mat = transform.match(/^matrix3d\((.+)\)$/);
//     if(mat) return parseFloat(mat[1].split(', ')[13]);
//     mat = transform.match(/^matrix\((.+)\)$/);
//     return mat ? parseFloat(mat[1].split(', ')[5]) : 0;
// }
//
// window.addEventListener('load', function () {
//     window.addEventListener('resize', function () {
//         screenWidth = window.screen.width;
//         console.log(screenWidth);
//         rotation = pageYOffset / 3;
//         cogWhite.style.transform = `translate(${initialTransform[0][0]}px,${initialTransform[0][1]}px) rotate(${rotation}deg)`;
//         cogSmall.style.transform = `translate(${initialTransform[1][0]}px,${initialTransform[1][1]}px) rotate(-${rotation}deg)`;
//         cogLarge.style.transform = `translate(${initialTransform[2][0]}px,${initialTransform[2][1]}px) rotate(${rotation}deg)`;
//     })
//     initialTransform = [[getComputedTranslateX(cogWhite),getComputedTranslateY(cogWhite)], [getComputedTranslateX(cogSmall),getComputedTranslateY(cogSmall)], [getComputedTranslateX(cogLarge),getComputedTranslateY(cogLarge)]]
//     window.addEventListener('scroll', function () {
//         rotation = pageYOffset / 3;
//         cogWhite.style.transform = `translate(${initialTransform[0][0]}px,${initialTransform[0][1]}px) rotate(${rotation}deg)`;
//         cogSmall.style.transform = `translate(${initialTransform[1][0]}px,${initialTransform[1][1]}px) rotate(-${rotation}deg)`;
//         cogLarge.style.transform = `translate(${initialTransform[2][0]}px,${initialTransform[2][1]}px) rotate(${rotation}deg)`;
//     })
// })
window.addEventListener('load', function () {
    window.addEventListener('scroll', function () {
        rotation = pageYOffset / 3;
        cogWhite.style.transform = `translate(18%, -29%) rotate(${rotation}deg)`;
        cogSmall.style.transform = `translate(37%, 34%) rotate(-${rotation}deg)`;
        cogLarge.style.transform = `translate(-50%, 16%) rotate(${rotation}deg)`;
    })
})