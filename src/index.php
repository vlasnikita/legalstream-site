<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="verification" content="c0bcaee367d5fe31ef54243e8883e2" />
    <title>cyberlawyer</title>

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Vollkorn&display=swap" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>
<script>
    function scrolltocontacts(){
        document.querySelector(`.Contacts`).scrollIntoView({
            behavior: 'smooth', // smooth scroll
            block: 'start' // the upper border of the element will be aligned at the top of the visible part of the window of the scrollable area.
        })
    }
    function scrolltoservices(){
        document.querySelector(`.Services`).scrollIntoView({
            behavior: 'smooth', // smooth scroll
            block: 'start' // the upper border of the element will be aligned at the top of the visible part of the window of the scrollable area.
        })
    }
    function scrolltotop(){
        window.scrollTo({
            top: 0,
            behavior: 'smooth' // smooth scroll
        })
        setTimeout(() => document.querySelector('#name').focus(), 750)
    }
</script>
<body>
    <div class="Header">
        <div class="Header__logo">
            <img src=<%=require("Static/logo.svg")%> >
            <p>cyberlawyer</p>
        </div>
        <div class="Header__menu">
            <div onclick="scrolltoservices()" class="Header__menuItem">услуги</div>
            <div onclick="scrolltocontacts()" class="Header__menuItem">контакты</div>
        </div>
    </div>
    <div class="Moto">
        <p class="Moto__text">Запрещаем отбирать у стримера доход&nbsp;
            <span class="Moto__text_border">&nbsp;</span>
        </p>
    </div>
    <div class="Main">
        <div class="Bullets">
            <div class="Bullets__item">
                <div class="Bullets__balloon">
                    <img src=<%=require("Static/bullet1.svg")%> >
                </div>
                <p class="Bullets__text">Сделам за тебя ИП, минимум телодвижений</p>
            </div>

            <div class="Bullets__item">
                <div class="Bullets__balloon">
                    <img src=<%=require("Static/bullet2.svg")%> >
                </div>
                <p class="Bullets__text">Поможем договориться с рекламодателями и агентствами</p>
            </div>

            <div class="Bullets__item">
                <div class="Bullets__balloon">
                    <img src=<%=require("Static/bullet3.svg")%> >
                </div>
                <p class="Bullets__text">Банк не арестует твой счёт</p>
            </div>

            <div class="Bullets__item">
                <div class="Bullets__balloon">
                    <img src=<%=require("Static/bullet4.svg")%> >
                </div>
                <p class="Bullets__text">Крупные бренды смогут на тебя выйти</p>
            </div>

            <div class="Bullets__item Bullets__item_last">
                <div class="Bullets__balloon Bullets__balloon_secret">
                    <img src=<%=require("Static/bullet5.svg")%> >
                </div>
                <p class="Bullets__text">Занимайся любимым делом и не переживай о легальности дохода</p>
            </div>
        </div>
        <?php
            //проверяем, существуют ли переменные в массиве POST
            if(!isset($_POST['name']) and !isset($_POST['contact'])){
        ?>
        <form class="Form" action="" method="POST" enctype="multipart/form-data">
            <div class="Input">
                <label class="Input__label">Твоё имя или ник</label>
                <div class="Input__container">
                    <input id="name" name="name" type="text" placeholder="Печатать тут...">
                    <span class="Input__bottomline"></span>
                </div>
            </div>
            <div class="Input">
                <label class="Input__label">Телефон/соцсеть/почта</label>
                <div class="Input__container">
                    <input type="text" name="contact" placeholder="Куда нам тебе ответить?">
                    <span class="Input__bottomline"></span>
                </div>
            </div>
            <div class="Input">
                <label class="Input__label"></label>
                <button class="Button" type="submit">Сделать доход безопасным</button>
            </div>
            <input type="hidden" name="action" value="Submit">
        </form>
        <?php
            } else {
                //показываем форму
                $name = $_POST['name'];
                $contact = $_POST['contact'];

                $name = htmlspecialchars($name);
                $contact = htmlspecialchars($contact);

                echo $name;
                echo "<br>";
                echo $contact;

                $subject = "Заявка с сайта";
                $from = 'From: Новая заявка с сайте<new-client@legalstream.site>\r\n';
                $message = "Контакт: " . $contact . ". Зовут: " . $name;

                if (mail("vlasenkonikita@gmail.com", "Заказ с сайта", "Имя:".$name.". Контакт: ".$contact ,"From: no-reply@vlasnikita.ru \r\n"))
                {
                echo "сообщение успешно отправлено";
                } else {
                echo "при отправке сообщения возникли ошибки";
                }
            }
        ?>
    </div>
    <div class="Services">
        <div class="Title__container">
            <h1 class="Title">Услуги</h1>
        </div>
        <div class="Services__bodyContainer">
            <span class="Services__bg Services__bg_triangle"></span>
            <span class="Services__bg Services__bg_stripe"></span>
            <span class="Services__bg Services__bg_stripe Services__bg_stripe_right"></span>
            <div class="Services__body">
                <div class="Services__list">
                    <div class="Services__item">
                        <div class="Services__itemImg">
                            <img src=<%=require("Static/service1.svg")%>>
                            <span class="Services__itemSkill">ПАССИВКА</span>
                        </div>
                        <p class="Services__itemTitle">Документооборот</p>
                        <div class="Services__itemBullets">
                            <div class="Services__itemBullet">
                                <span class="Services__itemBulletImg">+</span>
                                составление и аудит договоров
                            </div>
                            <div class="Services__itemBullet">
                                <span class="Services__itemBulletImg">+</span>
                                документы всегда доступны в облаке и на бумаге
                            </div>
                            <div class="Services__itemBullet">
                                <span class="Services__itemBulletImg">+</span>
                                минимум оффлайна и никакой волокиты
                            </div>
                        </div>
                    </div>

                    <div class="Services__item">
                        <div class="Services__itemImg">
                            <img src=<%=require("Static/service2.svg")%>>
                            <span class="Services__itemSkill">СПОСОБНОСТЬ</span>
                        </div>
                        <p class="Services__itemTitle">Бухучёт</p>
                        <div class="Services__itemBullets">
                            <div class="Services__itemBullet">
                                <span class="Services__itemBulletImg">+</span>
                                подадим налоговые декларации вовремя
                            </div>
                            <div class="Services__itemBullet">
                                <span class="Services__itemBulletImg">+</span>
                                рекламодателям станет проще тебе платить
                            </div>
                            <div class="Services__itemBullet">
                                <span class="Services__itemBulletImg">+</span>
                                c белым доходом банк не заморозит твой счёт
                            </div>
                        </div>
                    </div>

                    <div class="Services__item">
                        <div class="Services__itemImg">
                            <img src=<%=require("Static/service3.svg")%>>
                            <span class="Services__itemSkill">СПЕЦУМЕНИЕ</span>
                        </div>
                        <p class="Services__itemTitle">Юрист-саппорт</p>
                        <div class="Services__itemBullets">
                            <div class="Services__itemBullet">
                                <span class="Services__itemBulletImg">+</span>
                                защитит твою интеллектуальную собственность
                            </div>
                            <div class="Services__itemBullet">
                                <span class="Services__itemBulletImg">+</span>
                                поможет с разбаном на платформе
                            </div>
                            <div class="Services__itemBullet">
                                <span class="Services__itemBulletImg">+</span>
                                решение юридических вопросов 24/7
                            </div>
                        </div>
                    </div>
                </div>
                <button onclick="scrolltotop()" class="Button">Я не разбираюсь во всём этом</button>
            </div>
        </div>
    </div>
    <div class="Contacts">
        <div class="Title__container">
            <h1 class="Title">Контакты</h1>
            <div class="Contacts__list">
                <a class="Contacts__item" href="https://t.me/joinchat/Y4qfMvPjWfsxOTBi" target="_blank">
                    <span class="Contacts__itemImg">
                        <img src=<%=require("Static/contact-telegram.svg")%> width=18>
                    </span>
                    <p class="Contacts__itemText">@cyberlawyer_gg</p>
                </a>

                <a class="Contacts__item" href="tel:1234567890">
                    <span class="Contacts__itemImg">
                        <img src=<%=require("Static/contact-phone.svg")%> width=18>
                    </span>
                    <p class="Contacts__itemText">+7 (999) 777-16-06</p>
                </a>

                <a class="Contacts__item" href="mailto:go@cyberlawyer.gg">
                    <span class="Contacts__itemImg">
                        <img src=<%=require("Static/contact-mail.svg")%> width=18>
                    </span>
                    <p class="Contacts__itemText">go@cyberlawyer.gg</p>
                </a>

                <a class="Contacts__item" href="https://discord.gg/n2V38HWt" target="_blank">
                    <span class="Contacts__itemImg">
                        <img src=<%=require("Static/contact-discord.svg")%> width=18>
                    </span>
                    <p class="Contacts__itemText">discord.gg/n2V38HWt</p>
                </a>
            </div>
        </div>
        <span class="Contacts__map"></span>
        <script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3A6ae85511e163b79a7c2bee75aa01ac13ab105fb80a544d3887292bd22470f849&amp;width=100%25&amp;height=300&amp;lang=ru_RU&amp;scroll=true"></script>
    </div>
</body>
</html>