<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="Common/assets/css/reset.css" />
    <link rel="stylesheet" href="Common/assets/css/admin.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Document</title>
</head>

<body>
    <div class="wrapper-main">
        <?php include_once "Views/AdminsView/layouts/nav.php"; ?>
        <section class="content-wrap">
            <?php include_once "Views/AdminsView/layouts/header.php"; ?>
            <main id="main">
                <div class="container">
                    <div class="main-body">
                        <h2>Dashboard</h2>
                        <section class="row">
                            <div class="col-3">
                                <div class="content">
                                    <h3>EARNINGS (MONTHLY)</h3>
                                    <p>$40,000</p>
                                </div>
                                <i class="fa-solid fa-calendar"></i>
                            </div>
                            <div class="col-3">
                                <div class="content">
                                    <h3>EARNINGS (ANNUAL)</h3>
                                    <p>4215,000</p>
                                </div>
                                <i class="fa-solid fa-dollar-sign"></i>
                            </div>
                            <div class="col-3">
                                <div class="content">
                                    <h3>TASKS</h3>
                                    <p>50%</p>
                                </div>
                                <i class="fa-solid fa-paste"></i>
                            </div>
                            <div class="col-3">
                                <div class="content">
                                    <h3>PENDING REQUESTS</h3>
                                    <p>20</p>
                                </div>
                                <i class="fa-solid fa-comments"></i>
                            </div>
                        </section>
                        <!-- row2 -->
                        <section class="row-2">
                           
                            <div class="col-6">
                                <img src="Common/assets/img/undraw_posting_photo.svg" alt="" />
                                <p>
                                    Add some quality, svg illustrations to your project courtesy
                                    of unDraw, a constantly updated collection of beautiful svg
                                    images that you can use completely free and without
                                    attribution!
                                </p>
                            </div>
                        </section>
                    </div>
                </div>
            </main>
            <?php include_once "Views/AdminsView/layouts/footer.php"; ?>
        </section>
    </div>
</body>

</html>