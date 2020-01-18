<!DOCTYPE HTML>
<html><head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>Поиск по магазинам</title>
<link rel="shortcut icon" type="image/ico" href="favicon.ico">
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="style.css">
    <link href="https://fonts.googleapis.com/css?family=Merriweather&display=swap" rel="stylesheet">
    <script src="help.js"></script>
    <script src="dropdown-checkboxes.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
</head>
<?php
$servername = 'localhost';   //  либо   '127.0.0.1' 
$username =  'admin';
$password = 'admin' ;
$db_name = 'findsale';


$opt = array(
    PDO::ATTR_ERRMODE  => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
);

$connection = new PDO("mysql:host=$servername; dbname=$db_name; charset=utf8", $username, $password, $opt);
$result = $connection->prepare("SELECT `ADRESS` FROM `shops`");
$result->execute();
echo "<body>";
    echo '<div class="linksContainer">';
        /*echo '<button class="openAll">Открыть все</button>';*/
        $query = $_POST['query'];
        /*echo $query;*/
        echo ('<h1>Поиск: '.$query.'</h1>
            <p class="warning"><br>Не открываются вкладки?<br>Ваш браузер заблокировал открытие всплывающих окон.<br>Снимите ограничение в правом верхнем углу интерфейса</p>'
            );
            echo ('<script type="text/javascript">
            window.onload=function(e){
                    window.open("https://www.lamoda.ru/catalogsearch/result/?q='.$query.'");
                    window.open("https://sneakerhead.ru/search/?q='.$query.'");
                    window.open("https://street-beat.ru/cat/?q='.$query.'");
                    window.open("https://www.asos.com/ru/search/?q='.$query.'");
                    window.open("https://www.size.co.uk/search/'.$query.'");
                    window.open("https://www.endclothing.com/ru/catalogsearch/result/?q='.$query.'");
                    window.open("https://www.farfetch.com/ru/shopping/search/items.aspx?q='.$query.'");
                    window.open("https://www.luisaviaroma.com/ru-ru/shop/%D0%BF%D0%BE%D0%B8%D1%81%D0%BA?lvrid=_gm_f&noredirect=1&search='.$query.'");
                    window.open("https://www.luisaviaroma.com/ru-ru/shop/%D0%B6%D0%B5%D0%BD%D1%89%D0%B8%D0%BD%D1%8B/%D0%BF%D0%BE%D0%B8%D1%81%D0%BA?lvrid=_gw_f&noredirect=1&search='.$query.'");
                    window.open("https://www.prodirectselect.com/search.aspx?q='.$query.'");
                    window.open("https://www.footpatrol.com/search/'.$query.'");
                    window.open("https://www.allikestore.com/default/catalogsearch/result/?q='.$query.'");
                    window.open("https://www.jdsports.co.uk/search/'.$query.'");
                    window.open("https://www.basketshop.ru/catalog/search/?s%5Bq%5D='.$query.'");
                    window.open("https://www.mrporter.com/en-ru/mens/search/'.$query.'");
                    window.open("https://www.slamdunk.su/catalogue/search?q='.$query.'");
                    window.open("https://frihet.ru/catalog/search.php?q='.$query.'");
                    window.open("https://www.sneakersnstuff.com/en/search/searchbytext?key='.$query.'");
                    window.open("https://www.aphrodite1994.com/search/?q='.$query.'");
                    window.open("https://www.stuartslondon.com/search/'.$query.'");
                    window.open("https://www.itkkit.ru/search/?q='.$query.'");
            }
            </script>');

        /*echo('<script type="text/javascript">
        window.onload=function(e)
        {window.open("")}
        </script>');*/
            /*foreach($_POST as $row){
                if($row){
                        echo '<a href="#"><button class="linkButton"><label>'.$row.'</label></button></a>';
                }else{
                    echo 'Выберите хотя бы один магазин';
                }
            }*/
    echo '</div>';
echo '</body>';
?>
</html>
</body></html>