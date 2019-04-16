<div class="sorting">
    <ul>
        <li class="sortDefault"><a
                    href="#"><?php if (isset ($_SESSION['default'])) echo $_SESSION['default']; else echo "Категория по умолчанию" ?></a>
        </li>
        <ul class="second">
            <li class="cheap"><a href="?show=cheap">Цена, сверху дешевле</a></li>
            <li class="expensive"><a href="?show=expensive">Цена, сверху дороже</a></li>
            <li class="cheap"><a href="#">Новинки</a></li>

        </ul>
</div>

<?php

 if ($_GET['show'] != 'expensive' and $_GET['show'] != 'cheap' and !isset($_GET['pag'])  ){
     $_SESSION['order'] = "";

 }
 echo $order = $_SESSION['order'];

$notePages = 12;

if (isset($_GET ['show'])) {

    if (isset($_GET['pag'])) {
        $page = $_GET['pag'];
    } else {
        $page = 1;
    }

    $table = $_SESSION['table'];
    $next = $page + 1;
    $prev = $page - 1;
    $from = ($page - 1) * $notePages;
    $return = $db->select($table, $from,$notePages,$order);
    $row = $return[0];
    $count = $return[1];
    $pageCount = ceil($count / $notePages);

}
$content = "";
$content .= "<div class='wrappleSee'>";
foreach ($row as $elem) {
    $date = date('d.m.Y', $elem['date']);
    $content .= " 
 
    <div class=\"seePhones\">
    <div class=\"seePhoto\"><img src= \"$elem[photoUrl]\" width=\"200\"height=\"180\"> </div>
    <div class=\"seePrise\"><p>$elem[price] 	&#x584;</p> <p class=\"date\">$date </p >   </div>
    <div class=\"seeDiscription\">$elem[description]</div>
    <div class='control'>
        <div class='delete'><a href=\"?delete=$elem[id]\">delete</a></div>
        <div class='update'><a href=\"?update=$elem[id]\">update</a></div>
    </div>

    </div>";
}
$content .= "</div>";
$content .= "<nav class=\"pagination\">";
if ($page != 1) {

    $content .= "<a href=\"?show=$table&pag=$prev\"><<  </a>";
}
for ($i = 1; $i <= $pageCount; $i++) {

    if ($page == $i) {
        $class = "class=\"activePagin\"";
    } else {

        $class = "";
    }
    $content .= "<a $class href=\"?show=$table&pag=$i\">$i </a>";
}
$class = "";
if ($page != $pageCount) {
    $content .= "<a  href=\"?show=$table&pag=$next\">  >></a>";
}
$content .= "</nav>";
echo $content;
?>





