<header id="header">
    <div class="topbar-wrap">
        <div class="container">
            <section class="body">
                <div class="news-fixed">
                    <p> Pháp Phục Vũ Hào</p>
                </div>
                <div class="active-fixed">
                    
                    <div class="item-icon">
                    <?php if(!isset($_SESSION['username'])):?>
                        
                        <button><a href="index.php?ctl=Register">Đăng Ký</a></button>
                        <button><a href="index.php?ctl=Login">Đăng Nhập</a></button>
                    <?php else:?>
                        <p> Xin chào: <?= $_SESSION['username']['username'] ?></p>
                        <br>
                        <button><a href="index.php?ctl=Logout">Đăng Xuất</a></button>
                    
                    <?php endif;?>
                    </div>
                </div>
            </section>
        </div>
    </div>
    <!-- navigation -->
    <div class="navbar-wrap">
        <div class="container">
            <section class="body">
                
                <nav>
                    <ul class="menu">
                        <li>
                            <a href="index.php?ctl=Home" class="nav-link">Home</a>
                        </li>
                        <?php foreach ($category as $cate) : ?>
                            <li>
                                <a href="index.php?ctl=DetailsHome&id_category=<?= $cate['id_category'] ?>" class="nav-link"><?= $cate['name_category'] ?></a>
                            </li>
                        <?php endforeach; ?>
                        <li>
                            <i class="fa-solid fa-magnifying-glass icon-search"></i>
                            <div class="tab-search">
                                <form action="" method="post">
                                    <input type="search" name="" id="" placeholder="Tìm kiếm thông tin..." />
                                    <button type="submit">Search</button>
                                </form>
                            </div>
                        </li>
                    </ul>
                </nav>
            </section>
        </div>
    </div>
</header>
<section class="space-body"></section>