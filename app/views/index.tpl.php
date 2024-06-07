<?php require VIEWS . '/incs/header.php'?>
    <main class="main py-4">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <?php foreach($posts as $k => $post): ?>
                        <div class="card mb-3">
                            <div class="card-body">
                                <h5 class="card-title"><?=$post['title']?></h5>
                                <p class="card-text"><?=$post['excerpt']?></p>
                                <p class="card-text"><?=$post['content']?></p>
                                <a href='post<?='?id=' . $post['id']?>' class="btn btn-primary">Go somewhere</a>
                            </div>
                        </div>
                    <?php endforeach; ?>
                    <?=$pagination?>
                </div>
<?php require VIEWS . '/incs/sidebar.php'?>
            </div>
        </div>
    </main>
<?php require VIEWS . '/incs/footer.php' ?>