<aside class="aside-trending-now">
    <h2>Follow us</h2>
    <ul class="list-social">
        <li>
            <a href="https://www.facebook.com/">
                <i class="fa-brands fa-facebook-f"></i>
            </a>
        </li>
        <li>
            <a href="https://twitter.com/">
                <i class="fa-brands fa-x-twitter"></i>
            </a>
        </li>
        <li>
            <a href="https://www.youtube.com/">
                <i class="fa-brands fa-youtube"></i>
            </a>
        </li>
        <li>
            <a href="https://www.instagram.com/">
                <i class="fa-brands fa-instagram"></i>
            </a>
        </li>
        <li>
            <a href="https://www.pinterest.com/">
                <i class="fa-brands fa-pinterest"></i>
            </a>
        </li>
        <li>
            <a href="https://mail.google.com/">
                <i class="fa-solid fa-envelope"></i>
            </a>
        </li>
    </ul>
    <section class="favorite-news">
        <h2>Category</h2>
        <div class="atc-item">
            <ul>
            <li><a href="index.php?ctl=DetailsHome&amp;id_category=1" class="nav-link">Mẫu Thêu Sen</a></li>
                <li><a href="index.php?ctl=DetailsHome&amp;id_category=2" class="nav-link">Mẫu Đũi</a></li>
                <li><a href="index.php?ctl=DetailsHome&amp;id_category=3" class="nav-link">Mẫu Đũi Thêu</a></li>
                <li><a href="index.php?ctl=DetailsHome&amp;id_category=4" class="nav-link">Mẫu Tơ</a></li>
                <li><a href="index.php?ctl=DetailsHome&amp;id_category=10" class="nav-link">Mẫu Nam</a></li>
            </ul>
        </div>
    </section>
    <section>
    <div class="main-trending">
                                    <h2>Top 5 sản phẩm yêu thích</h2>
                                    <div class="spview">
                                        <?php foreach ($views as $view) :?>
                                                <img src="<?= $view['img_news'] ?>" alt="">
                                                <a href="index.php?ctl=ContentHome&id_news=<?= $view['id_news'] ?>">Áo dài</a>
                                            <?php endforeach;?>
                                    </div>
                                </div>
    </section>
</aside>