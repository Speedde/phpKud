<?php require VIEWS . '/incs/header.php'?>
    <main class="main py-4">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <p>
                        <h2><?=$post['title'];?></h2>
                        <?=$post['content'];?>
                    </p>

                </div>
<!--                --><?php //require VIEWS . '/incs/sidebar.php'?>
            </div>
        </div>
    </main>
<?php require VIEWS . '/incs/footer.php' ?>