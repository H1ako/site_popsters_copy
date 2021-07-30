var step = 0;
var slides = $('.slider__slides__slide');
var radio_btns = $('.slide_radio');
var left_arrow = $("#slider-left-arrow");
var right_arrow = $("#slider-right-arrow");
$(document).ready(function(){
    slides.eq(step).addClass('active');
    radio_btns.eq(step).attr('checked', '');
});
function show_slide(){
    if (step >= slides.length){
        step = 0;
    }
    else if (step <= -1){
        step = slides.length-1;
    }
    for (let i = 0; i < slides.length; i++){
        slides.eq(i).removeClass('active');
        radio_btns.eq(i).removeAttr("checked");
    }
    radio_btns.eq(step).attr('checked', 'checked');
    slides.eq(step).addClass('active');
}
left_arrow.on('click', function () {
    step--;
    show_slide();
})
right_arrow.on('click', function () {
    step++;
    show_slide();
})
radio_btns.change(function () {
    step = $(this).index();
    show_slide();
})
