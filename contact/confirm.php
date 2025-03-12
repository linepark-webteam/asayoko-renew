<?php
session_start();

// セッション変数が設定されていないか確認（直接アクセスをチェック）
if (empty($_SESSION['name']) || empty($_SESSION['email'])) {
    // セッション変数が設定されていない場合は、./contact/ へリダイレクト
    header('Location: ../contact/');
    exit;
}

// セッションからデータを取得
$classification = $_SESSION['classification'] ?? '';
$registrationLocation = $_SESSION['registrationLocation'] ?? '';
$companyName = $_SESSION['companyName'] ?? '';
$name = $_SESSION['name'] ?? '';
$kana = $_SESSION['kana'] ?? '';
$email = $_SESSION['email'] ?? '';
$phone = $_SESSION['phone'] ?? '';
$message = $_SESSION['message'] ?? '';
?>

<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, viewport-fit=cover">
    <title>お問合わせ内容確認</title>
    <link rel="icon" href="../img/favicon48.ico" sizes="48x48" />
    <link rel="icon" href="../img/favicon192.ico" sizes="192x192" />
    <!-- アップルタッチアイコン -->
    <link rel="apple-touch-icon" href="../img/apple-touch-icon.webp" sizes="180x180">

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@100..900&family=Open+Sans:ital,wght@0,300..800;1,300..800&display=swap"
        rel="stylesheet">

    <!-- CSS -->
    <!-- reset CSS -->
    <link rel="stylesheet" href="../css/ress.min.css" />
    <!-- BootStrap CSS CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="../css/my-bootstrap.css" />
    <link rel="stylesheet" href="../css/common.css" />
    <link rel="stylesheet" href="../css/contact.css" />

    <!-- noindex -->
    <meta name="robots" content="noindex" />

    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-87FXVWYFXK"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag("js", new Date());

        gtag("config", "G-87FXVWYFXK");
    </script>
</head>

<body>
    <!-- header -->
    <header>
        <nav class="navbar">

            <a href="../">
                <div class="title-box">
                    <img class="title-logo" src="../img/header-logo.png" alt="" loading="lazy">
                    <h1 class="title-text">あさの横浜会場</h1>
                </div>
            </a>

            <ul class="nav-links" id="nav-links">
                <li><a href="../#form">例会情報</a></li>
                <li><a href="../guest/">ゲスト様へ</a></li>
                <li><a href="../asayoko-features/">あさの横浜の特徴</a></li>
                <li><a href="../member/">会員紹介</a></li>
                <li><a href="../contact/">お問合せ</a></li>
            </ul>
            <div class="hamburger" id="hamburger">
                <span></span>
                <span></span>
                <span></span>
            </div>
        </nav>
    </header>
    <!-- header -->

    <main>
        <section class="contact container">
            <div class="contact-container">
                <div class="contact-headline">
                    <h1>お問合わせ内容のご確認</h1>
                </div>

                <div class="container">

                    <form action="sendmail.php" method="post">

                        <div class="mt-3">
                            <h2>会員区分</h2>
                            <p class="answer"><?php echo htmlspecialchars($classification); ?></p>
                        </div>

                        <div class="mt-3">
                            <h2>登録会場</h2>
                            <p class="answer"><?php echo htmlspecialchars($registrationLocation); ?></p>
                        </div>

                        <div class="mt-3">
                            <h2>会社名</h2>
                            <p class="answer"><?php echo htmlspecialchars($companyName); ?></p>
                        </div>

                        <div class="mt-3">
                            <h2>お名前</h2>
                            <p class="answer"><?php echo htmlspecialchars($name); ?></p>
                        </div>

                        <div class="mt-3">
                            <h2>ふりがな</h2>
                            <p class="answer"><?php echo htmlspecialchars($kana); ?></p>
                        </div>

                        <div class="mt-3">
                            <h2>メールアドレス</h2>
                            <p class="answer"><?php echo htmlspecialchars($email); ?></p>
                        </div>

                        <div class="mt-3">
                            <h2>電話番号</h2>
                            <p class="answer"><?php echo htmlspecialchars($phone); ?></p>
                        </div>

                        <div class="mt-3">
                            <h2>お問い合わせ内容</h2>
                            <p class="answer"><?php echo nl2br(htmlspecialchars($message)); ?></p>
                        </div>

                        <div class="my-5 confirm-button-box">
                            <a href="../contact/" class="confirm-button return btn btn-outline-secondary  me-3">修正する</a>
                            <button type="submit" class="confirm-button proceed btn btn-outline-primary">送信する</button>
                        </div>
                    </form>
                </div>
            </div>
        </section>
    </main>

    <section class="sns-icons container mt-5">
        <div class="sns-icon-box">
            <a href="https://line.me/R/ti/p/@617tvtor" target="_blank"><img class="sns-icon" src="../img/line.webp" alt="LINE" loading="lazy"></a>
            <a href="https://www.facebook.com/groups/327293299262540/?locale=ja_JP" target="_blank"><img class="sns-icon" src="../img/facebook.webp" alt="Facebook" loading="lazy"></a>
            <a href="https://www.instagram.com/asano_yokohama.shusei/" target="_blank"><img class="sns-icon" src="../img/instagram.webp" alt="Instagram" loading="lazy"></a>
        </div>
    </section>

    <footer class="footer container mt-5">
        <a href="#"><img class="footer-logo mb-3" src="../img/logo.webp" alt="" loading="lazy"></a>
        <small class="footer-copy pb-3">Copyright 2025 守成クラブ あさの横浜会場</small>
    </footer>

    <!-- To TOP -->
    <!-- <div><a href="#" id="page_top"></a></div> -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz"
        crossorigin="anonymous"></script>
    <script src="../js/contact.js"></script>
</body>

</html>