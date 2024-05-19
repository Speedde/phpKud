<?php require "incs/header.php"?>
    <main class="main py-4">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <?php foreach($posts as $k => $post): ?>
                        <div class="card mb-3">
                            <div class="card-body">
                                <h5 class="card-title"><?=$post['title']?></h5>
                                <p class="card-text"><?=$post['desc']?></p>
                                <a href='<?=$post['slug']?>' class="btn btn-primary">Go somewhere</a>
                            </div>
                        </div>
                    <?php endforeach; ?>

                </div>
<?php require 'incs/sidebar.php'?>
            </div>
        </div>
    </main>
<?php require 'incs/footer.php' ?>