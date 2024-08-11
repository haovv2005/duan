<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="Common/assets/css/reset.css" />
    <link rel="stylesheet" href="Common/assets/css/list.css" />
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
                        <h2>List Article</h2>
                        <section class="card-wrapper">
                            <div class="card-header">
                                <h3>Add, Edit & Remove</h3>
                            </div>
                            <p style="color: green;"><?= $message ?></p>
                            <div class="card-body">
                                <div class="row-top">
                                    <button>
                                        <i class="fa-solid fa-plus"></i><a href="index.php?ctl=Add-atc">Add</a>
                                    </button>
                                </div>
                                <div class="row-body">
                                    <table border="1">
                                        <thead>
                                            <tr>
                                                <th>ID_News</th>
                                                <th>Title</th>
                                                <th>Image</th>
                                                <th>Desc</th>
                                                <th>Contents</th>
                                                <th>Writter</th>
                                                <th>ID_Category</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php foreach ($data_list as $it_list) : ?>
                                                <tr>
                                                    <td><?= $it_list['id_news'] ?></td>
                                                    <td><?= $it_list['title_news'] ?></td>
                                                    <td><img src="<?= $it_list['img_news'] ?>" alt=""></td>
                                                    <td><?= $it_list['desc_news'] ?></td>
                                                    <td><?= $it_list['contents_news'] ?></td>
                                                    <td><?= $it_list['writter_news'] ?></td>
                                                    <td><?= $it_list['id_category'] ?></td>
                                                    <td>
                                                        <section>
                                                            <button class="btn btn-success">
                                                                <a href="index.php?ctl=Edit-atc&id_news=<?= $it_list['id_news'] ?>">Edit</a>
                                                            </button>
                                                            <button class="btn btn-danger">
                                                                <a href="index.php?ctl=Delete-atc&id_news=<?= $it_list['id_news'] ?>">Delete</a>
                                                            </button>
                                                        </section>
                                                    </td>
                                                </tr>
                                            <?php endforeach; ?>
                                        </tbody>
                                    </table>
                                </div>
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