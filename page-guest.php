<?php
/**
 * Template Name: ゲスト様へ
 * Template Post Type: page
 */

get_header(); // ヘッダーを読み込み
?>

<main>
    <section class="title container">
        <h1 class="mt-5">ゲスト様へ</h1>
    </section>

    <section class="about container">
        <div class="about-container">
            <h2 class="mt-5 mb-3">守成クラブとは？</h2>
            <div class="about-box container">
                <div class="about-desc container mt-3">
                    <h3 class="mt-5 mb-3">紹介制の経営者の会</h3>
                    <p>守成クラブは、<span class="blue-text">中小零細企業経営者</span>（社長およびそれに準ずる方）によって構成される<span class="blue-text">紹介制</span>の会です。</p>
                    <p>決裁権者の集まりだからこそ、スピーディーにビジネスが展開していきます。</p>

                    <h3 class="mt-5 mb-3">売上を伸ばすことが第一の目的</h3>
                    <p>守成クラブは、単なる異業種交流とは違い「商売繁盛」を前面に打ち出し、<span class="blue-text">「本音で自社をPRし互いに商売（実利）に徹して売上を伸ばす」ことを第一の目的</span>としています。</p>
                    <ul>
                        <li>ビジネスチャンスを拡大し、営業力を高めたい！</li>
                        <li>とにかく販売力を伸ばしたい！</li>
                    </ul>
                    <p>そんなニーズをお持ちの経営者に最適な会です。</p>

                    <h3 class="mt-5 mb-3">規模が大きい</h3>
                    <p>日本全国に<span class="blue-text">約280会場</span>あり、会員数は<span class="blue-text">約32,000社</span>。</p>
                    <p>「自分たちでマーケットを創る！」という考えのもと、日々拡大成長しています。</p>

                    <h3 class="mt-5 mb-3">リアル（対面）を重視</h3>
                    <p>コロナ禍以降、オンラインでのコミュニケーションが急拡大しましたが、守成クラブは<span class="blue-text">リアル（対面）でのコミュニケーションを重視</span>しています。</p>
                    <p>リアル（対面）だからこその信頼関係構築が可能となり、有用な人脈を構築できます。</p>
                </div>
            </div>
        </div>
    </section>

    <section class="join container">
        <div class="join-container">
            <h2 class="mt-5 mb-3">入会後の活動可能範囲</h2>
            <div class="join-box container">
                <div class="join-desc container mt-3">
                    <p class="my-5">「入会＝いずれかの会場に所属すること」です。</p>
                    <div>
                        <div class="my-5">
                            <span>入会時は、</span>
                            <ul>
                                <li>準会員</li>
                                <li>自会場（所属会場）の例会のみに参加可能</li>
                            </ul>
                            <span class="sm-text">（あさの横浜会場の例会は、毎月第3土曜日10：00～12：30に開催しています）</span>
                        </div>

                        <div class="my-5">
                            <div class="mb-5">
                                <span>1名以上紹介（入会）すると、</span>
                                <ul>
                                    <li>正会員</li>
                                    <li>全国すべての会場の例会に参加可能</li>
                                </ul>
                            </div>
                            <span>となります。</span>
                        </div>
                    </div>
                    <p>正会員になって様々な会場の例会に参加することが商売繁盛の近道です。</p>
                </div>
            </div>
        </div>
    </section>

    <section class="cost container">
        <div class="cost-container">
            <h2 class="mt-5 mb-3">費用について</h2>
            <div class="cost-box container">
                <div class="cost-desc container mt-3">
                    <ul>
                        <li>入会金（入会時のみ）
                            <ul>
                                <li>11,000円</li>
                            </ul>
                        </li>
                        <li>年会費
                            <ul>
                                <li>28,600円</li>
                            </ul>
                        </li>
                    </ul>
                    <p>
                        よって、入会時には、<br>
                        11,000円 ＋ 28,600円 ＝ 39,600円<br>
                        をお振込みいただきます。
                    </p>

                    <ul class="mt-5">
                        <li>例会費（あさの横浜会場の場合）
                            <ul>
                                <li>5,000円（例会へ参加の都度）</li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <section class="guest container">
        <div class="guest-container">
            <h2 class="mt-5 mb-3">ゲスト参加について</h2>
            <div class="guest-box container">
                <div class="guest-desc container mt-3">
                    <ul>
                        <li>ゲスト参加は大いに歓迎されますが、同一人物の参加は守成クラブの全会場を通じて1回のみとさせていただきます。</li>
                        <li>ゲスト参加は、紹介者経由でのお申込みとなります（ご自身での登録作業等はございません）。</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <section class="image container">
        <div class="image-container">
            <h2 class="mt-5 mb-3">例会のイメージ</h2>
            <div class="image-box container">
                <div class="image-desc container mt-3">
                    <p class="my-3">毎月の例会の様子をまとめた映像です。</p>
                    <img src="<?php echo get_template_directory_uri(); ?>/img/meeting-image.webp" alt="車座商談会イメージ">
                </div>
            </div>
        </div>
    </section>
</main>

<?php get_footer(); // フッターを読み込み ?>
