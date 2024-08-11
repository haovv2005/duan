<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="Common/assets/css/reset.css" />
    <link rel="stylesheet" href="Common/assets/css/form.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Document</title>
</head>

<body>
    <div class="wrapper-main">
        <?php include_once "Views/AdminsView/layouts/nav.php"; ?>
        <section class="content-wrap">
            <main id="main">
                <div class="container">
                    <div class="main-body">
                        <div class="form-wrapper">
                            <div><?= $message ?></div>
                            <form action="" method="post" enctype="multipart/form-data">
                                <h2>Add Details Article</h2>
                                <div class="it">
                                    <label for="">nameCate</label>
                                    <input type="text" name="name_category" id="" value="<?= $data_category['name_category'] ?? '' ?>" />
                                </div>
                                <input type="hidden" name="id_category" value="<?= $data_category['id_category'] ?? '' ?>">
                                <div class="btn-submit">
                                    <button type="submit">Add to Article</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </main>
            <?php include_once "Views/AdminsView/layouts/footer.php"; ?>
        </section>
    </div>
</body>

</html>