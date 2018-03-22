// При кліку на назві характеристики об'єктів, розгортається розширена інформація про характеристику
$('.ch_title').click(function () {
    $(this).next().slideToggle('normal');
    if($(this).hasClass('ch_title_active'))
    {
        $(this).removeClass('ch_title_active');
    }
    else
    {
        $(this).addClass('ch_title_active');
    }
});
// Функція горизонтальної прокрутки об'єктів, які відносяться до того ж типу, що і головний об'якт на сторінці
// Тут і прокрутка при натисканні на стрілку відповідного напрямку і при натисканні на одну з 3-х кнопок внизу,
// кожна з яких відповідає порядковому блоку з 5-ти елементів
function sliderObj()
{
    var rClick = 0, lClick = 0,
        $sTO = $('.sTO'),
        $sTO_right = $('.sTO_right'),
        $sTO_left = $('.sTO_left'),
        $fRadio1 = $('.fRadio1'),
        $fRadio2 = $('.fRadio2'),
        $fRadio3 = $('.fRadio3'),
        $fr1 = $('.fr1'),
        $fr2 = $('.fr2'),
        $fr3 = $('.fr3');
    $sTO_right.click(function() {
        if (rClick < 10){
            $sTO.animate({marginLeft:"-=20%"}, 550);
            if(rClick === 4){
                $fr1.css('opacity', '0');
                $fr2.css('opacity', '1');
                $fr3.css('opacity', '0');
            }
            else if(rClick === 9){
                $fr1.css('opacity', '0');
                $fr2.css('opacity', '0');
                $fr3.css('opacity', '1');
            }
            else{}
            rClick += 1;
            lClick += 1;
        }
        else{
            $sTO.animate({marginLeft:"0"}, 550);
            if(rClick === 10){
                $fr1.css('opacity', '1');
                $fr2.css('opacity', '0');
                $fr3.css('opacity', '0');
            }
            else{}
            rClick = 0;
            lClick = 0;
        }
    });
    $sTO_left.click(function() {
        if (lClick > 0){
            $sTO.animate({marginLeft:"+=20%"}, 550);
            if(lClick === 1){
                $fr1.css('opacity', '1');
                $fr2.css('opacity', '0');
                $fr3.css('opacity', '0');
            }
            else if(lClick === 6){
                $fr1.css('opacity', '0');
                $fr2.css('opacity', '1');
                $fr3.css('opacity', '0');
            }
            lClick -= 1;
            rClick -= 1;
        }
        else{
            $sTO.animate({marginLeft:"-200%"}, 550);
            if(rClick === 0){
                $fr1.css('opacity', '0');
                $fr2.css('opacity', '0');
                $fr3.css('opacity', '1');
            }
            else{}
            lClick = 10;
            rClick = 10;
        }
    });
    $fRadio1.click(function () {
        $sTO.animate({marginLeft:"0"}, 550);
        rClick = 0;
        lClick = 0;
        $fr1.css('opacity', '1');
        $fr2.css('opacity', '0');
        $fr3.css('opacity', '0');
    });
    $fRadio2.click(function () {
        $sTO.animate({marginLeft:"-100%"}, 550);
        lClick = 5;
        rClick = 5;
        $fr2.css('opacity', '1');
        $fr1.css('opacity', '0');
        $fr3.css('opacity', '0');
    });
    $fRadio3.click(function () {
        $sTO.animate({marginLeft:"-200%"}, 550);
        lClick = 10;
        rClick = 10;
        $fr3.css('opacity', '1');
        $fr1.css('opacity', '0');
        $fr2.css('opacity', '0');
    });
}
// Зручніший режим читання для опису характеристик об'єктів
function readMode() {
    $('.bodyStyleButton').click(function () {
        var $b = $('body'),
            $hiddenNav = $('.hiddenNav'),
            targetElement = $(this).attr('href'),
            scrollElement = $(targetElement).offset().top;
        $('html').animate({scrollTop: scrollElement}, 500);
        if($b.hasClass('bodyStyle'))
        {
            $b.removeClass('bodyStyle');
            $hiddenNav.css('position','fixed');
        }
        else
        {
            $b.addClass('bodyStyle');
            $hiddenNav.css('position','absolute');
        }
        $(this).keydown(function (exitReading) {
            if(exitReading.which === 27){
                $b.removeClass('bodyStyle');
                $hiddenNav.css('position','fixed');
            }
        });
    });
}
$(document).ready(function(){
    $('.thisObjectTitle').animate({marginLeft:"0"},550);
    sliderObj();
    readMode();
});
$(window).load(function() {

});