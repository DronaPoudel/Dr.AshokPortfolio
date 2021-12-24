// var heightCheck = document.querySelector('#height-check');
var heightCheck1 = document.querySelector('#height-check1');
var heightFixer = document.querySelectorAll('.height-fixer');
var descText    = document.querySelectorAll('.ps-exerpt-text');
var quote       = document.querySelector('#ashok-quote');


heightFontAdjuster(heightCheck, 185, '4.8rem');
heightFontAdjuster(heightCheck1, 60, '2.1rem');
heightFontAdjuster(quote, 60, '2rem');

function heightFontAdjuster (selector, height, fontSize){
    if ( selector.offsetHeight > height){
        selector.fontSize = fontSize;
    };
}
// if (heightCheck.offsetHeight > 185){
//     heightCheck.style.fontSize = '4.8rem';
// };

if (quote.offsetHeight > 60){
    quote.style.fontSize = '2rem';
};
if (heightFixer[2].offsetHeight > 40){
    descText[2].style.Height = '20px';
}