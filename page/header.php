<div class="headerInfo">

    <div class="infoNav">

        <ul class="ulInfoNav">
            <li class="ulInfoNavLocal"><img src="img/location.png "
                                            width="15" height="15" alt="local">
                <a class="linkInfoNav" href="#">
                    <string>Москва</string>
                </a></li>
            <li class="ulInfoNav"><a class="linkInfoNav" href="#">
                    <p>Пункты Выдычи заказов</p></a></li>
            <li class="ulInfoNav"><a class="linkInfoNav" href="#">
                    <p>Условие доставки</p></a></li>
            <li class="ulInfoNav"><a class="linkInfoNav" href="#">
                    <p> Условие оплаты</p></a></li>
            <li class="ulInfoNav"><a class="linkInfoNav" href="#">
                    <p>Условие Возврата</p></a>
            </li>
            <li class="ulInfoNav"><a class="linkInfoNav" href="#">
                    <p><a class="linkAdmin" href="admin/admin.php">admin login</a></a></p></a>
            </li>
            <?php if (isset($_SESSION['auth'])) { ?>
                <li class="ulInfoNavLogin">
                <p>логин:<?= $_SESSION['login']; ?> <span>в корзине:
                        <?php if (isset($_SESSION['countCart'])){
                            echo $_SESSION['countCart'] + 1;}
                            else {echo "0";}?>
                    </span> <span><a href="?logout">  exit</a></span>
                </p>
                </li><?php } ?>
            <li class="ulInfoNavCon"><img src="img/24.png" width="25" height="25">
                <p>+ 7-000-000-00-00</p>
            </li>


        </ul>


    </div>

</div>

<div class="headerSearch">
    <div class="label "><a href="index.php">TOZON</a>
    </div>

    <div class="search ">
        <input class="searchString" type="search" name="q" placeholder="Поиск по сайту">
        <input type="submit" class="searchSubmit" name="send" value="Отправить">
    </div>

    <div class="headerLogin ">
        <li class=""><a href="?show=signIn"><img src="img/profle.png" width="40" height="40" alt="login">
                <p>sign</p></a></li>
        <li class=""><a href="#"><img src="img/frames.png" width="40" height="40" alt="login">
                <p>orders</p></a></li>
        <li class=""><a href="#"><img src="img/heart.png" width="40" height="40" alt="login">
                <p>favorites</p></a></li>
        <li class=""><a href="#"><img src="img/empty.png" width="40" height="40" alt="login">
                <p>basket</p></a></li>

    </div>
</div>

<div class="headerCategory ">


    <ul class="ulHeaderCategory">
        <li class="section"><a href="#">Все разделы</a>

            <ul class="gemor">
                <li><a href="?show=sale">Скидки</a></li>
                <li><a href="?show=phones">Телефоны</a></li>
                <li><a href="?show=books">Книги</a></li>
                <li><a href="?show=clothe">Одежда</a></li>
                <li><a href="?show=products">Продукты</a></li>
            </ul></li>


        <li><a class="linkHeadCategory" href="?show=sale">Скидки</a></li>
        <li><a class="linkHeadCategory" href="?show=phones">Телефоны</a></li>
        <li><a class="linkHeadCategory" href="?show=books">Книги</a></li>
        <li><a class="linkHeadCategory" href="?show=clothe">Одежда</a></li>
        <li><a class="linkHeadCategory" href="?show=products">Продукты</a></li>
    </ul>
</div>


