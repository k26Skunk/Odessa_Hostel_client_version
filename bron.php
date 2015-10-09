<?php
 /* Здесь проверяется существование переменных */
  if (isset($_POST['name'])) {$name = $_POST['name'];}
  if (isset($_POST['phone'])) {$phone = $_POST['phone'];}

/* Сюда впишите свою эл. почту */
 $address = "0933888111k@gmail.com";

/* А здесь прописывается текст сообщения, \n - перенос строки */
 $mes = "Заказа брони\nИмя: $name\nТелефон: $phone";

/* А эта функция как раз занимается отправкой письма на указанный вами email */
$sub='Заказа брони'; //сабж
$email='no-reply@life-hostel.od.ua'; // от кого
$send = mail ($address,$sub,$mes,"Content-type:text/plain; charset = utf-8\r\nОткуда: $email");

ini_set('short_open_tag', 'On');
header('Refresh: 3; URL=index.php');
?>
    <!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
    <html>

    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <meta http-equiv="refresh" content="3; url=../index.php" />
        <title>Вы заказали обратный звонок, спасибо! С Вами скоро свяжутся.</title>
        <meta name="generator" />
        <style type="text/css">
                body {
                background: #2f4d58;
        </style>
    </head>

    <body>

        <h1 style="text-align:center;margin:350px auto;color:#fff;">Вы заказали бронь, спасибо! <br> С Вами скоро свяжутся.</h1>
        <!-- Yandex.Metrika counter -->
        <script type="text/javascript">
            (function (d, w, c) {
                (w[c] = w[c] || []).push(function () {
                    try {
                        w.yaCounter32930309 = new Ya.Metrika({
                            id: 32930309,
                            webvisor: true,
                            clickmap: true,
                            trackLinks: true,
                            accurateTrackBounce: true
                        });
                    } catch (e) {}
                });

                var n = d.getElementsByTagName("script")[0],
                    s = d.createElement("script"),
                    f = function () {
                        n.parentNode.insertBefore(s, n);
                    };
                s.type = "text/javascript";
                s.async = true;
                s.src = (d.location.protocol == "https:" ? "https:" : "http:") + "//mc.yandex.ru/metrika/watch.js";

                if (w.opera == "[object Opera]") {
                    d.addEventListener("DOMContentLoaded", f, false);
                } else {
                    f();
                }
            })(document, window, "yandex_metrika_callbacks");
        </script>
        <noscript>
            <div><img src="//mc.yandex.ru/watch/32930309" style="position:absolute; left:-9999px;" alt="" /></div>
        </noscript>
        <!-- /Yandex.Metrika counter -->
    </body>

    </html>