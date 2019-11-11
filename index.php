<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style/style.css">
    <title>KIA</title>
</head>
<body>
    <header></header>
    <main>
        <div class="info">
            <div class="info-left">
                <div class="info-left-header wrapper">
                    <a href="#" class="logo-avtoholding"></a>
                    <p class="address">Краснодар,<br>Тургеневское шоссе, 25</p>
                    <nav>
                        <a href="#">Picanto</a>
                        <a href="#">Rio</a>
                        <a href="#X-Line">Rio X-Line</a>
                        <a href="#Ceed">Ceed SW</a>
                        <a href="#">Cerato NEW</a>
                        <a href="#">Optima NEW</a>
                        <a href="#">Stinger</a>
                        <a href="#">Quoris</a>
                        <a href="#">Soul</a>
                        <a href="#">Sportage</a>
                        <a href="#">Sorento</a>
                        <a href="#">Sorento Prime</a>
                        <a href="#">Mohave</a>
                    </nav>
                    <div class="burger">
                        <div class="burger-line"></div>
                    </div>
                </div>
                <div class="info-left-box">
                    <p>Только до конца октября <span>маштабные выгоды</span> на весь модельный ряд!</p>
                    <button id="benefits">Забрать выгоду</button>
                </div>
                <div class="info-left-car">
                    <h2>Подберите свой KIA</h2>
                    <div class="info-left-car-box">
                        <div class="info-left-car-box-container">
                        <ul>
                            <li>
                                <a href="#">Picanto</a>
                            </li>
                            <li>
                                <a href="#">Rio</a>
                            </li>
                            <li>
                                <a href="#X-Line">Rio X-Line</a>
                            </li>
                            <li>
                                <a href="#Ceed">Ceed SW</a>
                            </li>
                            <li>
                                <a href="#">Cerato NEW</a>
                            </li>
                        </ul>
                        <ul>
                            <li>
                                <a href="#">Optima NEW</a>
                            </li>
                            <li>
                                <a href="#">Stinger</a>
                            </li>
                            <li>
                                <a href="#">Quoris</a>
                            </li>
                            <li>
                                <a href="#">Soul</a>
                            </li>
                            <li>
                                <a href="#">Sportage</a>
                            </li>
                        </ul>
                        <ul>
                            <li>
                                <a href="#">Sorento</a>
                            </li>
                            <li>
                                <a href="#">Sorento Prime</a>
                            </li>
                            <li>
                                <a href="#">Mohave</a>
                            </li>
                        </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="info-right">
                <div class="info-right-header">
                    <button id="call">Заказать звонок</button>
                    <a href="#" class="logo-kia"></a>
                </div>
                <div class="info-right-discount">
                    <h1>Супер скидка 0,1%</h1>
                    <p>на KIA SORTAGE, STINGER, SORENTO, SORENTO PRIME</p>
                    <form action="" method="POST">
                        <input type="tel" name="phone" placeholder="Введите телефон" required>
                        <input type="submit" class="sub-discount" value="Получить кредит">
                    </form>
                </div>
            </div>
            <div class="info-picture"></div>
        </div>
    </main>
    <section>
        <div class="car">
            <div class="car-box wrapper">
                <div class="car-box-rio">
                    <div class="car-box-rio-container">
                        <h1 id="X-Line">KIA Rio X-Line</h1>
                        <div class="car-box-rio-container-picture"></div>
                    </div>
                    <div class="car-box-rio-pay">
                        <article>
                            <img src="L0001.png" alt="">
                            <p>Зимняя резина<br>в подарок</p>
                        </article>
                        <h3>Выгода до 60 000 руб.</h3>
                        <button class="credit">В кредит за 3 500 руб.</button>
                        <button class="benefit">Получить выгоду</button>
                        <button class="special">Спецпредложение</button>
                    </div>
                    <div class="car-box-rio-border"></div>
                </div>
                <div class="car-box-ceed">
                    <div class="car-box-ceed-container">
                        <h1 id="Ceed">KIA Ceed<span> New</span></h1>
                        <div class="car-box-ceed-container-picture"></div>
                    </div>
                    <div class="car-box-ceed-pay">
                        <article>
                            <img src="L0001.png" alt="">
                            <p>Зимняя резина<br>в подарок</p>
                        </article>
                        <h3>Выгода до 60 000 руб.</h3>
                        <button class="credit">В кредит за 3 500 руб.</button>
                        <button class="benefit">Получить выгоду</button>
                        <button class="special">Спецпредложение</button>
                    </div>
                    <div class="car-box-ceed-border"></div>
                </div>
            </div>
        </div>
    </section>
    <div class="popup">
        <div class="popup-content">
            <h2>Получите все выгоды!</h2>
            <form action="benefits" method="POST">
                <input type="tel" name="phone" placeholder="Введите номер" required>
                <button type="submit"> Получите все выгоды</button>
                <p>Нажав на кнопку "Отправить заявку", я даю согласие на обработку моих персональных данных и получение
                    рекламных предложений. С условиями обработки персональных данных и получение предложений  - ознакомлен и согласен</p>
            </form>
            <div class="popup-content-cansel"></div>
        </div>
    </div>
    <footer>
        <div class="map">
            <div class="map-box">
            <iframe src="https://yandex.ru/map-widget/v1/?um=constructor%3Ac637374c79835c331fd440dc610dee3deda9abb849d59e2288f86a0f15777c8e&amp;source=constructor" width="100%" height="373" frameborder="0"></iframe>
            </div>
            <div class="map-contact">
                <div class="map-contact-container">
                    <h1>Контакты</h1>
                    <p>Краснодар Тургеневское шоссе, 25</p>
                    <a href="tel:+7(861)212-34-92">+7(861)212-34-92</a>
                    <form action="telephone-call" method="POST">
                        <input type="tel" name="phone" placeholder="Введите телефон" required>
                        <button type="submit">Заказать звонок</button>
                    </form>
                </div>
            </div>
        </div>
    </footer>
    <script src="js/jquery.js"></script>
    <script src="js/script-jquery.js"></script>
</body>
</html>