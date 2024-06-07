<?php require VIEWS . '/incs/header.php'
/**
 * @var myfrm\Validator $validation;
 */
?>

    <main class="main py-4">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <p>
                    <h1>New post</h1>
                    <form action="" method="POST">
                        <div class="mb-3">
                            <label for="title" class="form-label">Example label</label>
                            <input name="title" type="text" class="form-control" id="title" placeholder="Example input placeholder"
                                   value="<?=old('title')?>">
                            <?= isset($validation) ? $validation->listErrors("title") : '' ?>
                        </div>

                        <div class="mb-3">
                            <label for="excerpt" class="form-label">Another label</label>
                            <input name="excerpt" type="text" class="form-control" id="excerpt" placeholder="Another input placeholder"
                                   value="<?=old('excerpt')?>">
                            <?= isset($validation) ? $validation->listErrors("excerpt") : '' ?>
                        </div>

                        <div class="mb-3">
                            <label for="content" class="form-label">Example textarea</label>
                            <textarea name="content" class="form-control" id="content" rows="3"><?=old('content')?></textarea>
                            <?= isset($validation) ? $validation->listErrors("content") : '' ?>
                        </div>

                        <button type="submit" class="btn btn-success">Success</button>

                    </form>
                </div>

                    <?php require VIEWS . '/incs/sidebar.php'?>
            </div>
        </div>
    </main>
<?php require VIEWS . '/incs/footer.php' ?>