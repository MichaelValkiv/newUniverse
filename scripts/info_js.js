// Вкладки об'єктів
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
// Докладна інформація про об'єкт (загальна інформація), при кліку на зображення
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
// Поле з переліком всіх об'єктів даного типу
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
// Дії при натисканні кнопки Escape
function escapeBtn() {
    $(this).keydown(function (key_obj) {
        var $bodyStyle = $('body'),
            $objectButton = $('.objectsButton'),
            $thisTypeObjects = $('.thisTypeObjects');
        if(key_obj.which === 27){
            $('.infoObjHiddenBox').fadeOut('normal');
            $bodyStyle.removeClass('bodyStyle');
            $thisTypeObjects.slideUp(300);
            $objectButton.children().text('Objects \u2B9F');
        }
    });
}
$(document).ready(function(){
    informationSlider();
    objSlider();
    escapeBtn();
    allObjTabs();
});