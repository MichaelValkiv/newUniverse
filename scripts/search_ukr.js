// Пошук по сайту (українська версія)
function searchOnSite() {
    // Змінна в якій буде зберігатися кількість результатів пошуку
    var $nRes = 0;
    // Змінна "накопичувач" для переходів по результатах пошуку
    var res = 0;
    // Змінні для зберігання введеної користувачем фрази, змінна з об'єктами DOM поля для введення фрази пошуку,
    // кнопки пошуку і поля результатів відповідно
    var $userVal = '',
        $sField = $('.sField'),
        $sRes = $('.sRes'),
        $sBtn = $('.sBtn');
    // Функція обробки введеної інформації і виведення її на екран
    $(function () {
        $sField.on('keyup', function (i) {
            switch(i.keyCode)
            {
                case 13:
                case 27:
                case 38:
                case 40:
                    break;
                default:
                    $userVal = $(this).val();
                    if(this.value.length >= 2)
                    {
                        $.ajax({
                            type: "POST",
                            url: "/newUniverse/blocks/searcher_ukr.php",
                            data: {'searchField':this.value},
                            response: "text",
                            success: function (data) {
                                $sRes.html(data).slideDown('normal');
                                $nRes = $('.sRes li').size();
                            }
                        })
                    }
                    break;
            }
        });
        // Обробка натискань кнопок на клавіатурі
        $sField.on('keydown', function (i) {
            switch (i.keyCode)
            {
                // Enter
                case 13:
                    $sRes.slideUp('normal');
                    $sBtn.focus();
                    return false;
                // Escape
                case 27:
                    $sRes.slideUp('normal');
                    return false;
                    break;
                // Up & Down Arrows
                case 38:
                case 40:
                    i.preventDefault();
                    if($nRes)
                    {
                        whichBtn(i.keyCode);
                    }
                    break;
            }
        });
        // Клік мишкою у будь-якому місці сайту (крім поля результатів), призовує поле результатів пошуку
        $('html').click(function () {
            $sRes.slideUp('normal');
        });
        $('.sRes li').on('click', function () {
            $sField.val($(this).text());
        });
        $sField.click(function (e) {
            if($nRes)
            {
                $sRes.slideDown('normal');
                e.stopPropagation();
            }
        });
    });
    // Перехід між результатами пошуку за допомогою стрілок вверх і вниз
    function whichBtn(btnKey) {
        $('.sRes li').eq(res-1).removeClass('activeRes');
        if(btnKey === 40 && res < $nRes)
        {
            res++;
        }
        else if(btnKey === 38 && res > 0)
        {
            res--;
        }
        if(res > 0)
        {
            $('.sRes li').eq(res-1).addClass('activeRes');
            $sField.val($('.sRes li').eq(res-1).text());
            $sBtn.attr('href', $('.sRes li.activeRes a').attr('href'));
        }
        else
        {
            $sField.val($userVal);
        }
    }
}
$(window).load(function() {
    searchOnSite();
});