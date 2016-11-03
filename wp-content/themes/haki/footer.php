<!-- FOOTER -->
<footer class="footer">
    <div class="wrapper">
        <div class="flex_between-sm">
            <ul class="address">
                <li>ул. Первая Большая, 54</li>
                <li>ул. Вторая Маленькая, 123</li>
                <li>ул. Третья Средняя, 66</li>
            </ul>
            <p class="studio">
                Сделано в <a href="">Studio Chaplina</a>
            </p>
            <div class="contact flex_between-sm">
                <ul class="number">
                    <li><a href="">8 (843) 245-47-89</a></li>
                    <li><a href="">8 (903) 343-88-13</a></li>
                    <li><a href="">8 (843) 225-02-19</a></li>
                </ul>
                <button class="btn" data-modal=".callback">
                    Заказать звонок
                </button>
            </div>
        </div>
    </div>
</footer>

<!-- MODAL WINDOW -->
<div class="modal hidden">
    <div class="layout" data-btn-type="close">

    </div>

    <div class="callback hidden">
        <div class="colse" data-btn-type="close"></div>

        <form  id="modal_form_call" data-form-name="modal-form" method="post" action="<?php echo get_template_directory_uri(); ?>/formManager.php">
            <p class="title">
                Оставьте Ваш номер и мы свяжемся с Вами
            </p>
            <input type="text" class="input" name="name" placeholder=Имя" data-required="">
            <input type="text" class="input" name="phone" placeholder="Телефон" data-required="">
            <button class="btn" data-form-name="modal-form">Заказать звонок</button>
        </form>
    </div>
</div>
</div>



<?php wp_footer(); ?>

<!--------------------------------------------- SCRIPT ---------------------------------------------------------------->
<script src="<?php echo get_template_directory_uri(); ?>/script/jquery.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/script/jquery.inputmask.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/script/slick-1.5.0/slick/slick.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/script/fancyBox/source/jquery.fancybox.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/script/js.js"></script>

</body>
</html>