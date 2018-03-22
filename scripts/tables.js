// Перемикачі із опціями вибору інформації для формування таблиці
function tablesSortSelector() {
    var $sortOption = $('.sortOptions > label');
    $sortOption.click(function () {
       $(this).children().children().css('right', '1px');
       $(this).siblings('label').children().children().css('right', '24px');
    });
}
$(document).ready(function () {
   tablesSortSelector();
});