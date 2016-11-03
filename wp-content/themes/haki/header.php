<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>

    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/script/slick-1.5.0/slick/slick.css"/>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/script/fancyBox/source/jquery.fancybox.css"/>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style/style.css"/>
    <link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/favicon.png" type="image/png">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>

<div class="wrapper-all">
    <!-- HEADER -->
    <section class="header">
        <div class="wrapper">
            <div class="flex_between-sm">
                <img src="<?php echo get_template_directory_uri(); ?>/image/header/logo.png" alt="logo">

                <div class="content flex_between-sm">
                    <ul class="address">
                        <li>ул. Первая Большая, 54</li>
                        <li>ул. Вторая Маленькая, 123</li>
                        <li>ул. Третья Средняя, 66</li>
                    </ul>
                    <ul class="number">
                        <li><a href="">8 (843) 245-47-89</a></li>
                        <li><a href="">8 (903) 343-88-13</a></li>
                        <li><a href="">8 (843) 225-02-19</a></li>
                    </ul>
                    <a href=""><img src="<?php echo get_template_directory_uri(); ?>/image/header/vk.png" alt="vk"></a>
                    <div class="call">
                        <button class="btn" data-modal=".callback">
                            Заказать звонок
                        </button>
                        <a href="">Часто задаваемые вопросы</a>
                    </div>
                </div>
            </div>
        </div>
    </section>