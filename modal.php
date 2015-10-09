    <div class="modal fade bs-example-modal-sm" tabindex="-1" id="callback" role="dialog" aria-labelledby="mySmallModalLabel">
        <div class="modal-dialog modal-sm">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span>
                    </button>
                    <h4 class="modal-title">Введите ваши данные</h4>
                </div>
                <div class="modal-body">
                    <form class="forms" action="zvonok.php" method="POST">
                        <label>
                            <input type="text" name="name" required placeholder="Ваше имя">
                        </label>
                        <label>
                            <input type="text" name="phone" required placeholder="Ваш телефон">
                        </label>
                        <div class="button_submit">
                            <button type="submit" name="send">Заказать звонок</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade bs-example-modal-sm" tabindex="-1" id="book" role="dialog" aria-labelledby="mySmallModalLabel">
        <div class="modal-dialog modal-sm">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span>
                    </button>
                    <h4 class="modal-title">Введите ваши данные</h4>
                </div>
                <div class="modal-body">
                    <form class="forms" action="bron.php">
                        <label>
                            <input type="text" name="name" required placeholder="Ваше имя">
                        </label>
                        <label>
                            <input type="text" name="phone" required placeholder="Ваш телефон">
                        </label>
                        <div class="button_submit">
                            <button type="submit" name="send">Забронировать</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    
   <!-- Yandex.Metrika counter -->
<script type="text/javascript">
(function (d, w, c) {
    (w[c] = w[c] || []).push(function() {
        try {
            w.yaCounter32930309 = new Ya.Metrika({id:32930309,
                    webvisor:true,
                    clickmap:true,
                    trackLinks:true,
                    accurateTrackBounce:true});
        } catch(e) { }
    });

    var n = d.getElementsByTagName("script")[0],
        s = d.createElement("script"),
        f = function () { n.parentNode.insertBefore(s, n); };
    s.type = "text/javascript";
    s.async = true;
    s.src = (d.location.protocol == "https:" ? "https:" : "http:") + "//mc.yandex.ru/metrika/watch.js";

    if (w.opera == "[object Opera]") {
        d.addEventListener("DOMContentLoaded", f, false);
    } else { f(); }
})(document, window, "yandex_metrika_callbacks");
</script>
<noscript><div><img src="//mc.yandex.ru/watch/32930309" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
<!-- /Yandex.Metrika counter -->