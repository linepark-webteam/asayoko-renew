<?php
/**
 * Template Name: あさの横浜の特徴
 * Template Post Type: page
 */

get_header(); // ヘッダーを読み込み
?>

<main>
    <section class="title container">
        <h1 class="mt-5 title">あさの横浜会場の特徴</h1>
    </section>

    <section class="features container">
        <div class="catch-box py-3">
            <h2 class="catch blue-text">Together, we can aim higher</h2>
            <h3 class="catch-sub blue-text">～ ビジネス・マッチングに注力し、成長を加速します ～</h3>
        </div>
        <div class="message-box container">
            <div class="message-text">
                <div>
                    <p>あさの横浜会場は、“一人はみんなのために、みんなは一人のために”を体現する会場であるために、キャッチコピーとして<br>
                        <strong class="message-catch">Together, we can aim higher</strong><br>
                        を掲げ、ともにビジネスを拡大していく姿勢を大切にしています。
                    </p>
                    <div class="mt-3">
                        <span>また、あさの横浜会場から一つでも多くのビジネスが生まれることを目指して、</span>
                        <ul>
                            <li class="blue-text">ビジネス・マッチングの仕組み</li>
                        </ul>
                        <span>を例会に取り入れています。</span>
                    </div>
                </div>
                <div class="mt-3">
                    <span>これに加え、守成クラブの約300会場の中で数少ない</span>
                    <ul>
                        <li class="blue-text">土曜日開催</li>
                        <li class="blue-text">あさ（午前中）開催</li>
                    </ul>
                    <span>という希少性を武器に、市場拡大と会員のビジネス成長を加速していきます。</span>
                </div>
            </div>
            <div class="message-img">
                <img src="<?php echo get_template_directory_uri(); ?>/img/representative.webp" alt="大門 さおり">
            </div>
        </div>
        <div class="representative container mt-5">
            <p>あさの横浜会場</p>
            <p><span>代表　</span><span class="representative-name">大門 さおり</span></p>
        </div>
    </section>
</main>

<?php get_footer(); // フッターを読み込み ?>
