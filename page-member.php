<?php
/**
 * Template Name: 会員紹介
 * Template Post Type: page
 */

get_header(); // ヘッダーを読み込み
?>

<main>
    <section class="member container">
        <div class="member-container">
            <h1 class="mt-5">会員紹介</h1>
            <div class="member-desc-box container">
                <div class="member-text container mt-3">
                    <p>あさの横浜会場の会員紹介を、以下の<span class="blue-text">守成会員マップに掲載</span>しております。</p>
                    <p>ぜひご覧ください。</p>
                </div>
                <div class="member-img container mt-3">
                    <a href="https://asayoko.shusei-maps.com/" target="_blank">
                        <img class="shusei-asayoko-map" src="<?php echo get_template_directory_uri(); ?>/img/shusei-asayoko-map.webp" alt="あさの横浜会場会員マップ">
                    </a>
                </div>
            </div>
        </div>
    </section>
</main>

<?php get_footer(); // フッターを読み込み ?>
