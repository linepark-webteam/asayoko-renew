<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, viewport-fit=cover">

    <title><?php echo wp_get_document_title(); ?></title>

    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <header>
        <nav class="navbar">
            <div class="logo">
                <a href="<?php echo esc_url(home_url('/')); ?>">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/logo.webp" alt="守成クラブ｜あさの横浜会場">
                </a>
            </div>
            <ul class="nav-links" id="nav-links">
                <li><a href="<?php echo esc_url(home_url('/#form')); ?>">例会情報</a></li>
                <li><a href="<?php echo esc_url(home_url('/guest/')); ?>">ゲスト様へ</a></li>
                <li><a href="<?php echo esc_url(home_url('/asayoko-features/')); ?>">あさの横浜の特徴</a></li>
                <li><a href="<?php echo esc_url(home_url('/member/')); ?>">会員紹介</a></li>
                <li><a href="<?php echo esc_url(home_url('/contact/')); ?>">お問合せ</a></li>
            </ul>
            <div class="hamburger" id="hamburger">
                <span></span>
                <span></span>
                <span></span>
            </div>
        </nav>
    </header>