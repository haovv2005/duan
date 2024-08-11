<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="Common/assets/css/reset.css" />
    <link rel="stylesheet" href="Common/assets/css/contentHome.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>content</title>
</head>

<body>
    <div class="wrapper-main">
        <?php include_once "Views/ClientsView/layouts/header.php"; ?>
        <!-- Main -->
        <main id="main">
            <div class="container">
                <div class="body-main">
                    <!-- news top -->
                    <section class="trending">
                        <!-- <p class="tag"><?= $name_category ?></p> -->
                        <h1>
                            <?= $post['title_news'] ?>
                        </h1>
                        <p class="desc">
                            <?= $post['title_news'] ?>
                        </p>
                        <p class="writter">by Vũ Hào</p>
                        <div class="media">
                            <span><i class="fa-brands fa-facebook"></i><strong>FaceBook</strong></span>
                            <span><i class="fa-brands fa-instagram"></i><strong>Instagram</strong></span>
                            <span><i class="fa-brands fa-tiktok"></i><strong>Pinterest</strong></span>
                        </div>
                        <div class="trending-body">
                            <div class="main-trending">
                                <img width="900" src="<?= $post['img_news'] ?>" alt="" />
                                <p class="desc-second">
                                    <?= $post['contents_news'] ?>
                                </p>
                            </div>
                            <!-- aside main -->
                            <?php include_once "Views/ClientsView/layouts/aside.php"; ?>
                        </div>
                    </section>
                </div>
            </div>
        </main>
        <?php include_once "Views/ClientsView/layouts/footer.php"; ?>
    </div>
    <script src="./js/main.js"></script>
</body>

</html>