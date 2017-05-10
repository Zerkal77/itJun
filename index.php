<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Сайт для разработчиков</title>
        <link rel="stylesheet" href="css/main.css" type="text/css">
        <link rel="stylesheet" href="css/main_page.css" type="text/css">
        <link href="https://fonts.googleapis.com/css?family=Roboto+Slab|Suez+One" rel="stylesheet">
        <meta name="description" content="Информационно развлекательный портал для программистов. Обучающие курсы, новости в сфери IT и многое другое">
        <meta name="keywords" content="it, курсы, новости, уроки">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="img/favicon.ico" rel="shortcut icon" type="image/x-icon">
        <link rel="stylesheet" href="css/font-awesome.min.css">
    </head>
    <body>
    <div id="wrapper">
        <div id="content">
            <header>
                <div id="logo">
                    <a href="index.php" title="На главную">
                        <img src="img/logo.png" title="itJun" alt="itJun">
                        <span>itJun</span>
                    </a>
                </div>
                <div id="about">
                    <a href="" title="Узнать детально об рекламе">Рекламе</a>
                    <a href="" title="Написать нам письмо">Обратная связь</a>
                </div>
                <div id="reg_auth">
                    <a href="" title="Войти в личный кабинет">
                        <div class="btn">
                            Вход
                        </div>
                    </a>
                    <a href="" title="Зарегистрироваться на сайте">
                        <div class="btn">
                            Регистрация
                        </div>
                    </a>
                </div>
            </header>
            <nav>
                <div id="showMenu"><i class="fa fa-bars" aria-hidden="true"></i></div>
                <div id="hideMenu">
                    <a href="">IT новости</a>
                    <a href="">Видеокурсы</a>
                    <a href="">Сайты на заказ</a>
                    <a href="">Форум</a>
                    <a href="">IT задачи</a>
                </div>
                <div id="search">
                    <span>Поиск</span>
                    <i class="fa fa-search" aria-hidden="true"></i>
                </div>
                <div id="mobileMenu">
                    <a href="">IT новости</a><br>
                    <a href="">Видеокурсы</a><br>
                    <a href="">Сайты на заказ</a><br>
                    <a href="">Форум</a><br>
                    <a href="">IT задачи</a>
                    <hr>
                    <a href="">Регистрация</a>
                    <a href="">Войти</a>
                </div>
            </nav>

            <div id="main">
                <div id="news">
                    <h2 class="heading">IT новости</h2>
                    <div style="clear: both"><br></div>

                    <!--Статья-->
                    <?php
                        for ($i=0; $i<6; $i++){
                            echo '
                                <div class="article">
                                    <img src="http://minionomaniya.ru/wp-content/uploads/2015/09/%D0%9A%D0%B0%D1%80%D1%82%D0%B8%D0%BD%D0%BA%D0%B8-%D0%BC%D0%B8%D0%BD%D1%8C%D0%BE%D0%BD%D0%BE%D0%B2.jpg" alt="test" title="test">
                                    <span>
                                        В нашем разделе Вы можете не только скачать картинки миньонов,
                                        но и скачать обои или аватарки с миньонами.                        
                                    </span>
                                </div>';
                        }
                    ?>



                    <a href="" title="Посмотреть больше статей">
                        <div class="btn">
                            Посмотреть больше
                        </div>
                    </a>

                </div>
            </div>
            <aside>
                <div id="courses">
                    <h2 class="heading">Видеокурсы</h2>
                    <div style="clear: both"><br></div>
                    <!--Курс-->
                    <?php
                    for ($i=0; $i<4; $i++){
                        echo '
                                <div class="course">
                                    <img src="https://encrypted-tbn1.gstatic.com/images?q=tbn:ANd9GcTY8uEHGI31YpfCRuME_phn7JVzM7X2UjcGg8lai5z5GK6cdbKSLw" alt="test" title="test">
                                    Создание <em>IOS</em> игры на Unity
                                    <span>25 уроков</span>
                                </div>
                                <div style="clear: both"><br></div>
                                ';
                    }
                    ?>
                    <a href="" title="Посмотреть все видеокурсы">
                        <div class="btn">
                            Все видеокурсы
                        </div>
                    </a>
                </div>
                <div id="one_curse">
                    <h2 class="heading">Как сделать IOS игру</h2>
                    <div style="clear: both"><br></div>
                    <img src="https://encrypted-tbn1.gstatic.com/images?q=tbn:ANd9GcTY8uEHGI31YpfCRuME_phn7JVzM7X2UjcGg8lai5z5GK6cdbKSLw" alt="test" title="test">
                </div>
            </aside>
            <div style="clear: both"><br></div>

            <div id="subscribe">
                <span> Подпишитесь что бы быть в курсе новвостей </span>
                <div style="clear: both"><br></div>
                <iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2Ffacebook&tabs=timeline&width=300&height=300&small_header=false&adapt_container_width=true&hide_cover=false&show_facepile=true&appId" width="300" height="300" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true"></iframe>
            </div>

        </div>
        <footer>
            <div id="site_name">
                <span>itJun - </span>сообщество начинающих программистов
            </div>
            <div id="clear"></div>
            <div id="footer_menu">
                <a href="" title="Узнать деталбно о рекламе">Реклама</a>
                <a href="" title="Поддержка проекта">Поддержка проекта</a>
                <a href="" title="Отправить нам сообщение">Обратная связь</a>
            </div>
            <div style="clear: both"></div>
            <div id="rights">
                <a href="">Все прова защищены &copy<?=date('Y')?></a>
            </div>
            <div id="social">
                <a href="" title="VK"><i class="fa fa-vk" aria-hidden="true"></i></a>
                <a href="" title="FB"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                <a href="" title="Twitter"><i class="fa fa-twitter" aria-hidden="true"></i></a>
            </div>
        </footer>
    </div>
    <!--JQuery-->
    <script src="//ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <script>
        $('#showMenu').click(function () {
            if($('#mobileMenu').is(':visible'))
                $('#mobileMenu').hide();
            else
                $('#mobileMenu').show();
        });

        $(document).scroll (function () {
            if ($(document).width() > 785){
                if ($(document).scrollTop() > $('header').height()+10)
                    $('nav').addClass ('fixed');
                else
                    $('nav').removeClass('fixed');
            }
        });

        window.onresize = function (event) {
            $('#mobileMenu').hide();
        };
    </script>
    </body>
</html>