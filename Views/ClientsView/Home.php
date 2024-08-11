<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="Common/assets/css/reset.css" />
    <link rel="stylesheet" href="Common/assets/css/style.css" />
    <!-- <link rel="stylesheet" href="Common/assets/js/scrip.js" /> -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Document</title>
</head>

<body>
    <div class="wrapper-main">
        <?php include_once "Views/ClientsView/layouts/header.php"; ?>
        <main id="main">
            <section class="main-top">
            <div class="slideshow-container" >
                
        <div class="mySlides fade" >
            <img src="Common/assets/img/1.jpg" alt=""  >
        </div>
        <div class="mySlides fade">
        <img src="Common/assets/img/2.jpg" alt="" >
        </div>
        <div class="mySlides fade">
        <img src="Common/assets/img/4.jpg" alt="">
        </div>
        <div class="mySlides fade">
        <img src="Common/assets/img/5.jpg" alt="">
        </div>
        <div class="mySlides fade">
        <img src="Common/assets/img/6.jpg" alt="">
        </div>
        <!-- <div class="btn">
           <input type="button" value="<" onclick="previous()"  class="btn-dc">
           <input type="button" value=">" onclick="next()" class="btn-dc">
        </div> -->
        
        </div>

                <div class="container">

                    <div class="body-main">
                        <!-- <section class="news-trending"> -->
                       
    
                        <!-- </section> -->
                        <section class="list-news-trending">
                            <h2>News Products</h2>
                            <ul class="item-list">
                            <li><a href="index.php?ctl=DetailsHome&amp;id_category=1" class="nav-link">Mẫu Thêu Sen</a></li>
                            <li><a href="index.php?ctl=DetailsHome&amp;id_category=2" class="nav-link">Mẫu Đũi</a></li>
                            <li><a href="index.php?ctl=DetailsHome&amp;id_category=3" class="nav-link">Mẫu Đũi Thêu</a></li>
                            <li><a href="index.php?ctl=DetailsHome&amp;id_category=4" class="nav-link">Mẫu Tơ</a></li>
                            <li><a href="index.php?ctl=DetailsHome&amp;id_category=10" class="nav-link">Mẫu Nam</a></li>
                            </ul>
                        </section>
                        <!-- news top -->
                        <section class="trending">
                            <div class="trending-body">
                                <div class="main-trending">
                                    <h2>Trending Nows</h2>
                                    <div class="trending-item">
                                        <?php foreach ($data2 as $sp) : ?>
                                            <div class="atc-item">
                                                <img src="<?= $sp['img_news'] ?>" alt="">
                                                <article>
                                                    <h3><a href="index.php?ctl=ContentHome&id_news=<?= $sp['id_news'] ?>"><?= $sp['title_news'] ?></a></h3>
                                                    <p class="desc"><?= $sp['desc_news'] ?></p>
                                                </article>
                                            </div>
                                        <?php endforeach; ?>
                                    </div>
                                </div>
                                <?php include_once "Views/ClientsView/layouts/aside.php"; ?>
                            </div>
                        </section>
                    </div>
                </div>
            </section>
        </main>
        <?php include_once "Views/ClientsView/layouts/footer.php"; ?>
    </div>
    <script src="Common/assets/js/scrip.js"></script>
</body>

</html>