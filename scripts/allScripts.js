//Index
$('#alternate_css').click(function() {
    $.cookie("styleC", "/newUniverse/styles/alternate.css", {path:'/'});
    $.cookie("altS", "1px", {path:'/'});
    $.cookie("defS", "24px", {path:'/'});
    $.cookie("standS", "24px", {path:'/'});
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
    $('.defaultStyle').attr("href", "/newUniverse/styles/standard.css");
    $('#a').css('right', '24px');
    $('#d').css('right', '24px');
    $('#s').css('right', '1px');
});
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
function langChange() {
    var $hiddenLang = $.cookie('currentLang'),
        $ukrLink = $('.ukr_link'),
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
function showHideNav() {
    var $showBtn = $('#navShowBtn'),
        $closeBtn = $('#navCloseBtn'),
        $hiddenNav2 = $('.hiddenNav'),
        $bodyStyle = $('body');
    $showBtn.click(function () {
        $(this).hide();
        $closeBtn.show();
        $hiddenNav2.slideDown('normal');
        // $bodyStyle.addClass('bodyStyle');
    });
    $closeBtn.click(function () {
        $(this).hide();
        $showBtn.show();
        $hiddenNav2.slideUp('normal');
        // $bodyStyle.removeClass('bodyStyle');
    });
}
$('.t-u-button').click(function () {
    $('.u-terms').css('width', '20%');
    $('.u-information').css('width', '60%');
    $('.u-universe').css('width', '20%');
});
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
function scrollNav(){
    var $h = $('.hiddenNav'),
        $tUpper = $('.t_upper');
    if($(this).scrollTop() > 200) {
        if($(window).width() > 800) {
            $h.fadeIn('normal');
        }
        else{}
    }
    else{
        $h.fadeOut('normal');
    }
    if(($(this).scrollTop() > 200) && ($(window).width() <= 800)){
        $tUpper.addClass('t_upperFixed');
    }
    else{
        $tUpper.removeClass('t_upperFixed');
    }
}
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
//Object
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
//Information
function allObjTabs()
{
    var $infoObjectTabs = $('.infoObjectTabs'),
        $infoObjectTabsAll = $('.infoObjectTabsAll'),
        $n = $('.inputCheckbox').length,
        clicks = 0,
        s = 1;
    $('#allBoxes').click(function() {
        if($(this).prop("checked"))
        {
            $(this).prop("checked", true);
            $(this).siblings().prop("checked", true);
            clicks = $n;
        }
        else
        {
            $(this).prop("checked", false);
            $(this).siblings().prop("checked", false);
            clicks = 0;
        }
    });
    $('.iCheckboxLabel').click(function () {
        if ($(this).children().hasClass('infoObjectTabsActive'))
        {
            $(this).children().removeClass('infoObjectTabsActive');
            clicks--;
        }
        else
        {
            $(this).children().addClass('infoObjectTabsActive');
            clicks++;
        }
        if(clicks === $n)
        {
            $infoObjectTabsAll.addClass('infoObjectTabsActive');
        }
        else if(clicks < $n)
        {
            $infoObjectTabsAll.removeClass('infoObjectTabsActive');
        }
    });
    $('.allSelect').click(function () {
        if (s === 1)
        {
            $infoObjectTabs.addClass('infoObjectTabsActive');
            s = 2;
        }
        else
        {
            $infoObjectTabs.removeClass('infoObjectTabsActive');
            s = 1;
        }
    });
}
function informationSlider() {
    var $htmlStyle = $('html'),
        $bodyStyle = $('body');
    $('.infoSlider').click(function () {
        $(this).parents().next().fadeIn('normal');
        $htmlStyle.animate({scrollTop: 0}, 500);
        $(this).parents().next().css('overflow', 'auto');
        $bodyStyle.addClass('bodyStyle');
    });
    $('.infoObjClose').click(function () {
        $(this).parent().parent().fadeOut('normal');
        $bodyStyle.removeClass('bodyStyle');
    });
}
function objSlider() {
    var $objectButton = $('.objectsButton');
    $objectButton.click(function() {
        var $thisTypeObjects = $('.thisTypeObjects'),
            $b = $('body');
        if($thisTypeObjects.is(':visible'))
        {
            $thisTypeObjects.slideUp(300);
            $b.removeClass('bodyStyle');
            $(this).children().text('\u25BC\u25BC\u25BC');
        }
        else
        {
            $thisTypeObjects.slideDown(300);
            $b.addClass('bodyStyle');
            $(this).children().text('\u25B2\u25B2\u25B2');
        }
    });
}
function escapeBtn() {
    $(this).keydown(function (key_obj) {
        var $bodyStyle = $('body'),
            $objectButton = $('.objectsButton'),
            $thisTypeObjects = $('.thisTypeObjects');
        if(key_obj.which === 27){
            $('.infoObjHiddenBox').fadeOut('normal');
            $bodyStyle.removeClass('bodyStyle');
            $thisTypeObjects.slideUp(300);
            $objectButton.children().text('\u25BC\u25BC\u25BC');
        }
    });
}
//Tables
function tablesSortSelector() {
    var $sortOption = $('.sortOptions > label');
    $sortOption.click(function () {
        $(this).children().children().css('right', '1px');
        $(this).siblings('label').children().children().css('right', '24px');
    });
}
$(window).load(function() {
    langChange();
});
$(document).ready(function(){
    $('.thisObjectTitle').animate({marginLeft:"0"},550);
    checkStyle();
    slider();
    fontSizeSelect();
    showHideNav();
    colorChanger();
    sliderObj();
    readMode();
    tablesSortSelector();
    informationSlider();
    objSlider();
    escapeBtn();
    allObjTabs();
});
$(window).scroll(function() {
    scrollNav();
});