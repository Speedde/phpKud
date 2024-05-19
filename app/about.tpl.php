<?php require 'incs/header.php'?>
    <main class="main py-4">
        <div class="container">
            <div class="row">
                <div class="col-md-8">

                    <?php for($i = 0; $i < 5; $i++)
                    {
                        echo $post;
                    }?>
                </div>
<?php require 'incs/sidebar.php'?>
            </div>
        </div>
    </main>
<?php require 'incs/footer.php' ?>