let arrowBlocks = document.querySelectorAll('.faq-item__arrow-block');

window.addEventListener('load', function () {
    arrowBlocks.forEach(function (arrowBlock) {
        arrowBlock.addEventListener('click', function () {
            arrowBlock.classList.toggle('active');
            arrowBlock.parentElement.nextElementSibling.classList.toggle('active');
        })
    })
})