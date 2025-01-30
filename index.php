<?php get_header(); ?>

<main>
    <!-- Hero Section -->
    <section class="hero">
        <div class="hero-container">
            <div class="hero-content">
                <h1>Together, we can aim higher</h1>
            </div>
            <div class="hero-overlay"></div>
        </div>
        <div class="catch container-fluid">
            <div class="catch-container">
                <div class="catch-text-box">
                    <span class="catch-text">あさ横には、求める仕事・人材と </span>
                    <span class="catch-text str">マッチングできる『仕組み』</span>
                    <span class="catch-text"> があります！</span>
                </div>
            </div>
        </div>
    </section>

    <section id="form" class="form container mt-3 mt-lg-5">

        <div class="forms-box">
            <?php
            // クエリ条件の設定
            $args = [
                'post_type' => 'event',
                'posts_per_page' => -1,
                'meta_key' => 'end_date',
                'orderby' => 'meta_value',
                'order' => 'ASC',
            ];
            $events = new WP_Query($args);

            if ($events->have_posts()):
                $current_datetime = new DateTime(); // 現在の日時を取得

                while ($events->have_posts()): $events->the_post();
                    // メタデータの取得
                    $start_date = get_post_meta(get_the_ID(), 'start_date', true);
                    $start_time = get_post_meta(get_the_ID(), 'start_time', true) ?: '00:00:00'; // デフォルト時刻
                    $end_date = get_post_meta(get_the_ID(), 'end_date', true);
                    $end_time = get_post_meta(get_the_ID(), 'end_time', true) ?: '23:59:59'; // デフォルト時刻
                    $url = get_post_meta(get_the_ID(), 'url', true);

                    // 開始・終了日時の結合と比較
                    $start_datetime = $start_date ? new DateTime("$start_date $start_time") : null;
                    $end_datetime = $end_date ? new DateTime("$end_date $end_time") : null;

                    // 表示条件: 終了日時が現在より未来
                    if ($end_datetime && $end_datetime > $current_datetime && $url):
                        // 日付フォーマットを分解
                        $end_date_obj = new DateTime($end_date);
                        $month = $end_date_obj->format('n'); // 月（数値）
                        $day = $end_date_obj->format('j'); // 日
                        $week = ['日', '月', '火', '水', '木', '金', '土'];
                        $day_of_week = $week[$end_date_obj->format('w')]; // 曜日
            ?>
                        <div class="application-btn schedule"
                            data-start-datetime="<?php echo esc_attr($start_datetime->format('Y-m-d H:i:s')); ?>"
                            data-end-datetime="<?php echo esc_attr($end_datetime->format('Y-m-d H:i:s')); ?>">
                            <a href="<?php echo esc_url($url); ?>" target="_blank" class="form-btn btn btn-outline-primary">
                                <div class="btn-date-box">
                                    <span class="btn-num"><?php echo esc_html($month); ?></span>
                                    <span class="btn-month">月</span>
                                    <span class="btn-num"><?php echo esc_html($day); ?></span>
                                    <span class="btn-day">日(<?php echo esc_html($day_of_week); ?>)</span>
                                </div>
                                <div class="btn-text-box mt-1">
                                    <span class="btn-text"><?php echo esc_html(get_the_title()); ?></span>
                                    <span class="btn-text">お申し込み</span>
                                </div>
                            </a>
                        </div>
            <?php
                    endif; // 表示条件の終了
                endwhile;

                wp_reset_postdata(); // グローバル変数をリセット
            else:
                echo '<p>現在、例会情報はありません。</p>';
            endif;
            ?>
        </div>


    </section>


    <section class="info container mt-5">
        <div class="info-items-container">
            <h2 class="info-heading py-3">例会情報</h2>
            <h3 class="info-heading-blue py-3">毎月第3土曜日 10：00 ～ 12：20</h3>

            <div class="info-table-container">
                <table class="info-table">
                    <tbody>
                        <tr>
                            <th class="py-3">受付</th>
                            <td class="long-td py-3">9：30 ～<span class="long-td-text">（ゲスト様は9:15までにお願いいたします）</span>
                            </td>
                        </tr>
                        <tr>
                            <th class="py-3">開始時間</th>
                            <td class="py-3">10：00</td>
                        </tr>
                        <tr>
                            <th class="py-3">終了時間</th>
                            <td class="py-3">12：20</td>
                        </tr>
                        <tr>
                            <th class="py-3">例会費用 </th>
                            <td class="py-3">5,000円（食事付き）</td>
                        </tr>
                        <tr>
                            <th class="py-3">場所</th>
                            <td class="long-td py-3"><span>神奈川県横浜市西区南幸2-16-28</span> <span>ホテル・ザ・ノットヨコハマ 2階</span>
                                <p>（各線 横浜駅西口 徒歩5分）</p>
                            </td>
                        </tr>
                        <tr>
                            <th></th>
                            <td>
                                <div class="info-table-maps">
                                    <iframe class="info-table-map"
                                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2297.817994463602!2d139.6152479961609!3d35.464563036010475!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x60185c0dce76b7a3%3A0x5fb1251d53a0bd09!2z44Ob44OG44Or44K244OO44OD44OI44Oo44Kz44OP44Oe!5e0!3m2!1sja!2sjp!4v1736836299081!5m2!1sja!2sjp"
                                        allowfullscreen="" loading="lazy"
                                        referrerpolicy="no-referrer-when-downgrade"></iframe>
                                    <img class="info-table-img" src="<?php echo get_template_directory_uri(); ?>/img/hotel-image.webp" alt="会場イメージ">
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>

            </div>

    </section>

    <section class="container mt-5">
        <div class="accordion-item">
            <div class="accordion-header" data-target="#content1">
                ブース出展について <span class="accordion-icon"></span>
            </div>
            <div class="accordion-content" id="content1">
                <div>
                    <p>“出店”ではなく<span
                            class="accordion-content-blue-text">“出展”</span>となりますので、自社の商品・技術などの説明・案内の場としてご活用ください。</p>
                    <br>
                    <table class="accordion-content-table">
                        <tbody>
                            <tr>
                                <th>注意点：</th>
                                <td>飲食物は食品衛生法に基づく各種情報の表示が必須です。<br>
                                    ご協力をお願いいたします。
                                </td>
                            </tr>
                            <tr>
                                <th>出展費：</th>
                                <td>無料</td>
                            </tr>
                            <tr>
                                <th>出展資格：</th>
                                <td>例会参加者であればどなたでも出展可能です。</td>
                            </tr>
                        </tbody>
                    </table>

                </div>
            </div>
        </div>
        <div class="accordion-item">
            <div class="accordion-header" data-target="#content2">
                二部会について <span class="accordion-icon"></span>
            </div>
            <div class="accordion-content" id="content2">
                <p>
                    あさの横浜会場では、例会後に二部会を開催しています。<br>
                    二部会の位置付けは、<br>
                    <span class="accordion-content-blue-text">　・商談の続きを行う場</span><br>
                    <span class="accordion-content-blue-text">　・例会で出来なかった商談を行う場</span><br>
                    <span class="accordion-content-blue-text">　・関係性を深める場</span><br>
                    と考えています。<br>
                    ぜひ奮ってご参加ください。<br>
                </p>

                <table class="accordion-content-table">
                    <tbody>
                        <tr>
                            <th>時間：</th>
                            <td>12：45～15：00</td>
                        </tr>
                        <tr>
                            <th>場所：</th>
                            <td>近隣飲食店</td>
                        </tr>
                        <tr>
                            <th>費用：</th>
                            <td>4,000円</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <div class="accordion-item">
            <div class="accordion-header" data-target="#content3">
                年間スケジュール <span class="accordion-icon"></span>
            </div>
            <div class="accordion-content" id="content3">
                <div class="accordion-content-text-box">
                    <p class="py-3">例会詳細情報は<a href="#form">こちら</a></p>
                </div>
                <div class="accordion-content-schedule">
                    <p>第34回 2024年11月16日（土）</p>
                    <p>第35回 2024年12月21日（土）</p>
                    <p>第36回 2025年1月18日（土）</p>
                    <p>第37回 2025年2月15日（土）</p>
                    <p>第38回 2025年3月15日（土）</p>
                    <p>第39回 2025年4月19日（土）</p>
                    <p>第40回 2025年5月17日（土）</p>
                    <p>第41回 2025年6月21日（土）</p>
                    <p>第42回 2025年7月19日（土）</p>
                    <p>第43回 2025年8月16日（土）</p>
                    <!-- <p>第44回 2025年9月20日（土）</p> -->
                    <!-- <p>第45回 2025年10月18日（土）</p> -->
                    <!-- <p>第46回 2025年11月15日（土）</p> -->
                    <!-- <p>第47回 2025年12月20日（土）</p> -->
                    <!-- <p>第48回 2026年1月17日（土）</p> -->
                    <!-- <p>第49回 2026年2月21日（土）</p> -->
                </div>
            </div>
        </div>
    </section>
</main>

<?php get_footer(); ?>