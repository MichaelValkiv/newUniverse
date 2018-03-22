// Файли cookie з інформацією про вибраний стиль і вигляд перемикачів
$('#alternate_css').click(function() {
    $.cookie("styleC", "/newUniverse/styles/alternate.css", {path:'/'});
    $.cookie("altS", "1px", {path:'/'});
    $.cookie("defS", "24px", {path:'/'});
    $.cookie("standS", "24px", {path:'/'});
    // $('.defaultStyle').attr("href", "");
    $('.defaultStyle').attr("href", "/newUniverse/styles/alternate.css");
    $('#a').css('right', '1px');
    $('#d').css('right', '24px');
    $('#s').css('right', '24px');
});
$('#default_css').click(function() {
    $.cookie("styleC", "/newUniverse/styles/default.css", {path:'/'});
    $.cookie("altS", "24px", {path:'/'});
    $.cookie("defS", "1px", {path:'/'});
    $.cookie("standS", "24px", {path:'/'});
    // $('.defaultStyle').attr("href", "");
    $('.defaultStyle').attr("href", "/newUniverse/styles/default.css");
    $('#a').css('right', '24px');
    $('#d').css('right', '1px');
    $('#s').css('right', '24px');
});
$('#standard_css').click(function() {
    $.cookie("styleC", "/newUniverse/styles/standard.css", {path:'/'});
    $.cookie("altS", "24px", {path:'/'});
    $.cookie("defS", "24px", {path:'/'});
    $.cookie("standS", "1px", {path:'/'});
    // $('.defaultStyle').attr("href", "");
    $('.defaultStyle').attr("href", "/newUniverse/styles/standard.css");
    $('#a').css('right', '24px');
    $('#d').css('right', '24px');
    $('#s').css('right', '1px');
});
// Встановлення файлів cookie з мовою сайту і стилем
$('.ukr_default').click(function () {
    $.cookie("styleC", "/newUniverse/styles/default.css", {path:'/'});
    $.cookie('currentLang', 'ukr', {path:'/'});
});
$('.ukr_alternate').click(function () {
    $.cookie("styleC", "/newUniverse/styles/alternate.css", {path:'/'});
    $.cookie('currentLang', 'ukr', {path:'/'});
});
$('.ukr_standard').click(function () {
    $.cookie("styleC", "/newUniverse/styles/standard.css", {path:'/'});
    $.cookie('currentLang', 'ukr', {path:'/'});
});
$('.eng_default').click(function () {
    $.cookie("styleC", "/newUniverse/styles/default.css", {path:'/'});
    $.cookie('currentLang', 'eng', {path:'/'});
});
$('.eng_alternate').click(function () {
    $.cookie("styleC", "/newUniverse/styles/alternate.css", {path:'/'});
    $.cookie('currentLang', 'eng', {path:'/'});
});
$('.eng_standard').click(function () {
    $.cookie("styleC", "/newUniverse/styles/standard.css", {path:'/'});
    $.cookie('currentLang', 'eng', {path:'/'});
});
$('.ukr_link').click(function ()
{
    $.cookie('currentLang', 'ukr', {path:'/'});
});
$('.eng_link').click(function ()
{
    $.cookie('currentLang', 'eng', {path:'/'});
});
// Вибір стилю сайту за вмістом cookie
function checkStyle()
{
    var styleStatus = $.cookie("styleC"),
        defStatus = $.cookie("defS"),
        altStatus = $.cookie("altS"),
        standStatus = $.cookie("standS"),
        $d = $('#d'),
        $a = $('#a'),
        $s = $('#s');
    $('.defaultStyle').attr("href", styleStatus);
    $d.css('right', defStatus);
    $a.css('right', altStatus);
    $s.css('right', standStatus);
    if(styleStatus === '/newUniverse/styles/alternate.css')
    {
        $a.css('right', '1px');
        $d.css('right', '24px');
        $s.css('right', '24px');
    }
    else if(styleStatus === '/newUniverse/styles/default.css')
    {
        $('#a').css('right', '24px');
        $('#d').css('right', '1px');
        $('#s').css('right', '24px');
    }
    else if(styleStatus === '/newUniverse/styles/standard.css')
    {
        $('#a').css('right', '24px');
        $('#d').css('right', '24px');
        $('#s').css('right', '1px');
    }
}
// Функція зміни мови (за значенням cookie) і встановлення вигляду перемикача мови
function langChange() {
    var $hiddenLang = $.cookie('currentLang'),
        $ukrLink = $('.ukr_link'),
        $ukr = $('.ukr'),
        $eng = $('.eng'),
        $engLink = $('.eng_link');
    if($hiddenLang === 'eng')
    {
        var currentLink = document.location.href,
            partedCurrentLink = currentLink.split('.php'),
            newPart = '_ukr.php',
            newLink = partedCurrentLink[0] + newPart + partedCurrentLink[1];
        $ukrLink.attr('href', newLink);
        $engLink.attr('href', currentLink);
        $engLink.addClass('currentLang');
        $engLink.removeClass('langButton');
        $ukrLink.removeClass('currentLang');
    }
    else if($hiddenLang === 'ukr')
    {
        var currentLink = document.location.href,
            partedCurrentLink = currentLink.split('_ukr.php'),
            newPart = '.php',
            newLink = partedCurrentLink[0] + newPart + partedCurrentLink[1];
        $ukrLink.attr('href', currentLink);
        $engLink.attr('href', newLink);
        $ukrLink.addClass('currentLang');
        $ukrLink.removeClass('langButton');
        $engLink.removeClass('currentLang');
    }
}
// Прихована навігація для малих екранів. З'являється при натисканні на кнопку меню, яка з'являється лише при певній ширині дисплею.
function showHideNav() {
    var $showBtn = $('#navShowBtn'),
        $closeBtn = $('#navCloseBtn'),
        $hiddenNav2 = $('.hiddenNav'),
        $bodyStyle = $('body');
    $showBtn.click(function () {
        $(this).hide();
        $closeBtn.show();
        $hiddenNav2.slideDown('normal');
        $bodyStyle.addClass('bodyStyle');
    });
    $closeBtn.click(function () {
        $(this).hide();
        $showBtn.show();
        $hiddenNav2.slideUp('normal');
        $bodyStyle.removeClass('bodyStyle');
    });
}
// Сторінки для якої це було написано, вже не існує)
$('.t-u-button').click(function () {
    $('.u-terms').css('width', '20%');
    $('.u-information').css('width', '60%');
    $('.u-universe').css('width', '20%');
});
// Функція для п'яти перемикачів розміру шрифта в блоках з великим обсягом інформації
function fontSizeSelect() {
    var $fontBox = $('.fontBox');
    $('#font1').click(function () {
        var $label1 = $('.label1');
        $fontBox.css("font-size", "20px");
        $label1.children().children().css('right', '1px');
        $label1.siblings().children().children().css('right', '24px');
    });
    $('#font2').click(function () {
        var $label2 = $('.label2');
        $fontBox.css("font-size", "24px");
        $label2.children().children().css('right', '1px');
        $label2.siblings().children().children().css('right', '24px');
    });
    $('#font3').click(function () {
        var $label3 = $('.label3');
        $fontBox.css("font-size", "28px");
        $label3.children().children().css('right', '1px');
        $label3.siblings().children().children().css('right', '24px');
    });
    $('#font4').click(function () {
        var $label4 = $('.label4');
        $fontBox.css("font-size", "32px");
        $label4.children().children().css('right', '1px');
        $label4.siblings().children().children().css('right', '24px');
    });
    $('#font5').click(function () {
        var $label5 = $('.label5');
        $fontBox.css("font-size", "36px");
        $label5.children().children().css('right', '1px');
        $label5.siblings().children().children().css('right', '24px');
    });
}
// Горизонтальне переміщення інформації на головній сторінці
function slider()
{
    var rightClick = 0, leftClick = 0,
        $rightArrow = $('#rightArrow'),
        $leftArrow = $('#leftArrow');
    $rightArrow.click(function(){
        if (rightClick < 3){
            $(this).prev().animate({left:"-=100%"},550);
            rightClick += 1;
            leftClick += 1;
        }
        else{
            $(this).prev().animate({left:"0"},550);
            rightClick = 0;
            leftClick = 0;
        }
    });
    $leftArrow.click(function(){
        if (leftClick > 0){
            $(this).next().animate({left:"+=100%"},550);
            leftClick -= 1;
            rightClick -= 1;
        }
        else{
            $(this).next().animate({left:"-300%"},550);
            leftClick = 3;
            rightClick = 3;
        }
    });
}
// Навігація, яка з'являяться при прокрутці сторінки вниз
function scrollNav(){
    var $h = $('.hiddenNav'),
        $tUpper = $('.t_upper');
    // var tableHeader = $('.hiddenTable');
    if($(this).scrollTop() > 200) {
        if($(window).width() > 800) {
            $h.fadeIn('normal');
            // tableHeader.fadeIn('normal');
        }
        else{}
    }
    else{
        $h.fadeOut('normal');
        // tableHeader.fadeOut('normal');
    }
    if(($(this).scrollTop() > 200) && ($(window).width() <= 800)){
        $tUpper.addClass('t_upperFixed');
    }
    else{
        $tUpper.removeClass('t_upperFixed');
    }
}
// "Тонування" основних блоків сайту (якщо встановлена прозорість перешкоджає зручному сприйняттю інформації)
function colorChanger()
{
    var $objectPage = $('.thisObjectTitle, .sameTypeObjects, .abbreviationBox, .characteristicsBox, .o_picture, .o_caption, .objectProp, .objectDesc, .objectObjects'),
        $informationPage = $('.infoObjImgLink'),
        $tablesPage = $('.sortOptions, .labelsForTabs, .sortTable tr'),
        $indexPage = $('.i-information, .items'),
        $colorStatus = $('.colorSwitcher > div'),
        $globalPage = $('.searchBox'),
        clickStatus = 1;
    $('.colorSwitcher').click(function () {
        if (clickStatus === 1){
            $objectPage.removeClass('bg_color1');
            $objectPage.addClass('bg_color2');
            $informationPage.removeClass('bg_color1');
            $informationPage.addClass('bg_color2');
            $tablesPage.removeClass('bg_color1');
            $tablesPage.addClass('bg_color2');
            $indexPage.removeClass('bg_color1');
            $indexPage.addClass('bg_color2');
            $globalPage.removeClass('bg_color1');
            $globalPage.addClass('bg_color2');
            $colorStatus.css('right', '1px');
            clickStatus = 2;
        }
        else
        {
            $objectPage.removeClass('bg_color2');
            $objectPage.addClass('bg_color1');
            $informationPage.removeClass('bg_color2');
            $informationPage.addClass('bg_color1');
            $tablesPage.removeClass('bg_color2');
            $tablesPage.addClass('bg_color1');
            $indexPage.removeClass('bg_color2');
            $indexPage.addClass('bg_color1');
            $colorStatus.css('right', '24px');
            $globalPage.removeClass('bg_color2');
            $globalPage.addClass('bg_color1');
            clickStatus = 1;
        }
    });
}
$(document).ready(function(){
    checkStyle();
    slider();
    fontSizeSelect();
    showHideNav();
    colorChanger();
});
$(window).scroll(function() {
    scrollNav();
});
$(window).load(function() {
    langChange();
});
