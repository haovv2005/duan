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
                        <h2>List Detail</h2>
                        <section class="card-wrapper">
                            <div class="card-header">
                                <h3>Add, Edit & Remove</h3>
                            </div>
                            <div class="card-body">
                                <div class="row-top">
                                    <button>
                                        <i class="fa-solid fa-plus"></i><a href="index.php?ctl=Add-details">Add</a>
                                    </button>
                                </div>
                                <div class="row-body">
                                    <table border="1">
                                        <thead>
                                            <tr>
                                                <th>ID_Category</th>
                                                <th>Name</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php foreach ($data_category as $it_cate) : ?>
                                                <tr>
                                                    <td><?= $it_cate['id_category'] ?></td>
                                                    <td><?= $it_cate['name_category'] ?></td>
                                                    <td>
                                                        <button class="btn btn-success">
                                                            <a href="index.php?ctl=Edit-details&id_category=<?= $it_cate['id_category'] ?>">Edit</a>
                                                        </button>
                                                        <button class="btn btn-danger">
                                                            <a href="index.php?ctl=Delete-details&id_category=<?= $it_cate['id_category'] ?>">Delete</a>
                                                        </button>
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