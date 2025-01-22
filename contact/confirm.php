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
    <link rel="icon" href="../img/favicon32.webp" sizes="32x32" />
    <link rel="icon" href="../img/favicon192.webp" sizes="192x192" />

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@100..900&family=Open+Sans:ital,wght@0,300..800;1,300..800&display=swap"
        rel="stylesheet">

    <!-- CSS -->
    <link rel="stylesheet" href="../css/ress.css" />
    <!-- BootStrap CSS CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="../css/my-bootstrap.css" />
    <link rel="stylesheet" href="../css/common.css" />
    <link rel="stylesheet" href="../css/contact.css" />
    <!-- <link rel="stylesheet" href="../css/toPagetop.css" /> -->

    <!-- jquery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <!-- noindex -->
    <meta name="robots" content="noindex" />
</head>

<body>
    <!-- header -->
    <header>
        <nav class="navbar">
            <div class="logo">
                <a href="../">
                    <img src="../img/logo.webp" alt="あさの横浜">
                </a>
            </div>
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
                    <h2>お問合わせ内容のご確認</h2>
                </div>

                <div class="container">

                    <form action="sendmail.php" method="post">

                        <div class="mt-3">
                            <h3>会員区分</h3>
                            <p class="answer"><?php echo htmlspecialchars($classification); ?></p>
                        </div>

                        <div class="mt-3">
                            <h3>登録会場</h3>
                            <p class="answer"><?php echo htmlspecialchars($registrationLocation); ?></p>
                        </div>

                        <div class="mt-3">
                            <h3>会社名</h3>
                            <p class="answer"><?php echo htmlspecialchars($companyName); ?></p>
                        </div>

                        <div class="mt-3">
                            <h3>お名前</h3>
                            <p class="answer"><?php echo htmlspecialchars($name); ?></p>
                        </div>

                        <div class="mt-3">
                            <h3>ふりがな</h3>
                            <p class="answer"><?php echo htmlspecialchars($kana); ?></p>
                        </div>

                        <div class="mt-3">
                            <h3>メールアドレス</h3>
                            <p class="answer"><?php echo htmlspecialchars($email); ?></p>
                        </div>

                        <div class="mt-3">
                            <h3>電話番号</h3>
                            <p class="answer"><?php echo htmlspecialchars($phone); ?></p>
                        </div>

                        <div class="mt-3">
                            <h3>お問い合わせ内容</h3>
                            <p class="answer"><?php echo nl2br(htmlspecialchars($message)); ?></p>
                        </div>

                        <div class="my-5 confirm-button-box">
                            <a href="../contact/" class="confirm-button btn btn-secondary me-3">修正する</a>
                            <button type="submit" class="confirm-button btn btn-primary">送信する</button>
                        </div>
                    </form>
                </div>
            </div>
        </section>
    </main>

    <section class="sns-icons container mt-5">
        <div class="sns-icon-box">
            <a href="#"><img class="sns-icon" src="../img/line.webp" alt="LINE"></a>
            <a href="#"><img class="sns-icon" src="../img/facebook.webp" alt="Facebook"></a>
            <a href="#"><img class="sns-icon" src="../img/instagram.webp" alt="Instagram"></a>
        </div>
    </section>

    <footer class="footer container mt-5">
        <img class="footer-logo mb-3" src="../img/logo.webp" alt="">
        <small class="footer-copy pb-3">Copyright 2025 守成クラブ あさの横浜会場</small>
    </footer>

    <!-- To TOP -->
    <!-- <div><a href="#" id="page_top"></a></div> -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz"
        crossorigin="anonymous"></script>
    <script src="../js/common.js"></script>
</body>

</html>