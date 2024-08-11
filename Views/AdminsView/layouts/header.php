<header id="header">
    <div class="container">
        <div class="header-body">
            <form action="" method="post">
                <input type="text" name="" id="" />
                <button type="submit">
                    <i class="fa-solid fa-magnifying-glass"></i>
                </button>
            </form>
            <section class="media">
                <i class="fa-solid fa-bell"></i>
                <div class="user">
                    <?= isset($username['username']) ? '<p> Xin chào: ' . $username['username'] . '</p>' : '<i class="fa-solid fa-user"></i>' ?>
                    <div class="tab-user">
                        <p><strong>Tài khoản: </strong><span><?= $username['username'] ?></span></p>
                        <a href="index.php?ctl=Logout">Đăng xuất</a>
                    </div>
                </div>
            </section>
        </div>
    </div>
</header>