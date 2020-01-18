<!DOCTYPE html>
<html>
<head>
    <title>Найди свою скидку</title>
    <link rel="shortcut icon" type="image/ico" href="favicon.ico">
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="style.css">
    <link href="https://fonts.googleapis.com/css?family=Merriweather&display=swap" rel="stylesheet">
    <script src="help.js"></script>
    <script src="dropdown-checkboxes.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
</head>
<body>
    <div class="guide">
        <a data-tooltip='Введите название товара, выберите
        <br>магазины, по которым производиться поиск и
        <br>нажмите кнопку "Поиск", после чего от каждого
        <br>магазина откроется вкладка с предложениями по
        <br>интересующему вас товару.'>Помощь</a>
    </div>
    <div class="search">
        <h1>Введите название товара:</h1>
        <form method="POST" action="action.php" enctype="multipart/form-data">
            <input type="text" name="query" class="query">

            <script type="text/javascript">
                $(document).on('click', '.tree label', function(e) {
                $(this).next('ul').fadeToggle();
                e.stopPropagation();
            });
            
            $(document).on('change', '.tree input[type=checkbox]', function(e) {
                $(this).siblings('ul').find("input[type='checkbox']").prop('checked', this.checked);
                $(this).parentsUntil('.tree').children("input[type='checkbox']").prop('checked', this.checked);
                e.stopPropagation();
            });
            
            $(document).on('click', 'button', function(e) {
                switch ($(this).text()) {
                case 'Collepsed':
                    $('.tree ul').fadeOut();
                    break;
                case 'Expanded':
                    $('.tree ul').fadeIn();
                    break;
                case 'Checked All':
                    $(".tree input[type='checkbox']").prop('checked', true);
                    break;
                case 'Unchek All':
                    $(".tree input[type='checkbox']").prop('checked', false);
                    break;
                default:
                }
            });
            </script>
        <div class="dropdown">
            <ul class="tree">
                <li class="has">
                  <input type="checkbox" name="domain[]" value="Все магазины">
                  <label><b>Все магазины</b><span class="total">(26)</span></label>
                  <ul>
                    <li class="">
                      <input type="checkbox" name="lamoda.ru" value="Lamoda">
                      <label>lamoda.ru</label>
                    </li>
                    <li class="">
                      <input type="checkbox" name="size.co.uk">
                      <label>size.co.uk</label>
                    </li>
                    <li class="">
                      <input type="checkbox" name="endclothing.com" value="END">
                      <label>endclothing.com</label>
                    </li>
                    <li class="">
                      <input type="checkbox" name="farfetch.com">
                      <label>farfetch.com</label>
                    </li>
                    <li class="">
                      <input type="checkbox" name="yoox.com">
                      <label>yoox.com</label>
                    </li>
                    <li class="">
                      <input type="checkbox" name="prodirectselect.com">
                      <label>prodirectselect.com</label>
                    </li>
                    <li class="">
                      <input type="checkbox" name="allikestore.com">
                      <label>allikestore.com</label>
                    </li>
                    <li class="">
                      <input type="checkbox" ame="sneakerhead.ru">
                      <label>sneakerhead.ru</label>
                    </li>
                    <li class="">
                      <input type="checkbox" name="street-beat.ru">
                      <label>street-beat.ru</label>
                    </li>
                    <li class="">
                      <input type="checkbox" name="asos.com">
                      <label>asos.com</label>
                    </li>
                    <li class="">
                      <input type="checkbox" name="slamjam.com">
                      <label>slamjam.com</label>
                    </li>
                    <li class="">
                      <input type="checkbox" name="slamdunk.su">
                      <label>slamdunk.su</label>
                    </li>                    
                    <li class="">
                        <input type="checkbox" name="mrporter.com">
                        <label>mrporter.com</label>
                    </li>
                    <li class="">
                      <input type="checkbox" name="footpatrol.com">
                      <label>footpatrol.com</label>
                    </li>
                    <li class="">
                      <input type="checkbox" name="jdsports.co.uk">
                      <label>jdsports.co.uk</label>
                    </li>
                    <li class="">
                      <input type="checkbox" name="aphrodite1994.com">
                      <label>aphrodite1994.com</label>
                    </li>
                    <li class="">
                        <input type="checkbox" name="eastdane.com">
                        <label>eastdane.com</label>
                    </li>
                    <li class="">
                        <input type="checkbox" name="kixbox.ru">
                        <label>kixbox.ru</label>
                    </li>
                    <li class="">
                        <input type="checkbox" name="itkkit.com">
                        <label>itkkit.com</label>
                    </li>
                    <li class="">
                        <input type="checkbox" name="fwrd.com">
                        <label>fwrd.com</label>
                    </li>
                    <li class="">
                        <input type="checkbox" name="butik.ru">
                        <label>butik.ru</label>
                    </li>
                    <li class="">
                        <input type="checkbox" name="frihet.ru">
                        <label>frihet.ru</label>
                    </li>
                    <li class="">
                        <input type="checkbox" name="basketshop.ru">
                        <label>basketshop.ru</label>
                    </li>
                    <li class="">
                        <input type="checkbox" name="sneakersnstuff.com">
                        <label>sneakersnstuff.com</label>
                    </li>
                    <li class="">
                        <input type="checkbox" name="stuartslondon.com">
                        <label>stuartslondon.com</label>
                    </li>
                    <li class="">
                        <input type="checkbox" name="coggles.com">
                        <label>coggles.com</label>
                    </li>

                  </ul>
                </li>
              </ul>
            </div>
            <div class="as-console-wrapper"><div class="as-console"></div></div>
            <br><button type="submit">Поиск</button>
        </form>
    </div>
</body>
</html>