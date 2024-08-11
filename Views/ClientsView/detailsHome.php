<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="Common/assets/css/reset.css" />
    <link rel="stylesheet" href="Common/assets/css/detailsHome.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Document</title>
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
                        <div class="trending-body">
                            <div class="main-trending">
                                <h2><?= $name_category ?></h2>
                                <div class="trending-item">
                                    <?php if (!empty($data)) : ?>
                                        <?php foreach ($data as $sp) : ?>
                                            <div class="atc-item">
                                                <img src="<?= $sp['img_news'] ?>" alt="" />
                                                <article>
                                                    <h3>
                                                        <a href="index.php?ctl=ContentHome&id_news=<?= $sp['id_news'] ?>"> <?= $sp['title_news'] ?></a>
                                                    </h3>
                                                    <p class="desc">
                                                        <?= $sp['desc_news'] ?>
                                                    </p>
                                                    <p class="name-writter"><?= $sp['writter_news'] ?></p>
                                                </article>
                                            </div>
                                        <?php endforeach; ?>
                                    <?php else : ?>
                                        <h2>Không có bài viết</h2>
                                    <?php endif; ?>
                                </div>
                            </div>
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