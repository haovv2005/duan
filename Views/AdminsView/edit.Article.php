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
                                <h2>Edit Article</h2>
                                <div class="it">
                                    <label for="">Title</label>
                                    <textarea name="title_news" id="" cols="60" rows="7"><?= $Article['title_news'] ?? '' ?></textarea>
                                </div>
                                <p><?= $errors['title_news'] ?? '' ?></p>
                                <div class="it">
                                    <label for="">Image</label>
                                    <input type="file" name="img_news" id="" />
                                    <div><img src="<?= $Article['img_news'] ?>" alt="" width="200"></div>
                                    <input type="hidden" name="img_news" value="<?= $Article['img_news'] ?>">
                                </div>
                                <p><?= $errors['img_news'] ?? '' ?></p>
                                <div class="it">
                                    <label for="">Price</label>
                                    <textarea name="desc_news" id="" cols="60" rows="7"><?= $Article['desc_news'] ?? '' ?></textarea>
                                </div>
                                <div class="it">
                                    <label for="">Contents</label>
                                    <textarea name="contents_news" id="" cols="60" rows="7"><?= $Article['contents_news'] ?? '' ?></textarea>
                                </div>
                                <div class="it">
                                    <label for="">Writer</label>
                                    <input type="text" name="writter_news" value="<?= $Article['writter_news'] ?? '' ?>" />
                                </div>
                                <p><?= $errors['writter_news'] ?? '' ?></p>
                                <div class="it">
                                    <label for="">Tag</label>
                                    <select name="id_category" id="">
                                        <?php foreach ($detail as $dt) : ?>
                                            <option value="<?= $dt['id_category'] ?>" <?= ($dt['id_category'] == $Article['id_category']) ? 'selected' : '' ?>>
                                                <?= $dt['name_category'] ?></option>
                                        <?php endforeach; ?>
                                    </select>
                                </div>
                                <input type="hidden" name="id_news" value="<?= $Article['id_news'] ?>">
                                <div class="btn-submit">
                                    <button type="submit">Update to Article</button>
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