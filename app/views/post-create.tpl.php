<?php require VIEWS . '/incs/header.php'?>
    <main class="main py-4">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <p>
                    <h1>New post</h1>
                    <form action="" method="POST">
                        <div class="mb-3">
                            <label for="title" class="form-label">Example label</label>
                            <input name="title" type="text" class="form-control" id="title" placeholder="Example input placeholder">
                        </div>
                        <?php if(isset($error['title'])): ?>
                            <div id="validationServer05Feedback" class="invalid-feedback d-block">
                              Please provide a valid title.
                            </div>
                        <?php endif; ?>
                        <div class="mb-3">
                            <label for="excerpt" class="form-label">Another label</label>
                            <input name="excerpt" type="text" class="form-control" id="excerpt" placeholder="Another input placeholder">
                        </div>
                        <?php if(isset($error['excerpt'])): ?>
                            <div id="validationServer05Feedback" class="invalid-feedback d-block">
                                Please provide a valid excerpt.
                            </div>
                        <?php endif; ?>
                        <div class="mb-3">
                            <label for="content" class="form-label">Example textarea</label>
                            <textarea name="content" class="form-control" id="content" rows="3"></textarea>
                        </div>
                        <?php if(isset($error['content'])): ?>
                            <div id="validationServer05Feedback" class="invalid-feedback d-block">
                                Please provide a valid content.
                            </div>
                        <?php endif; ?>
                        <button type="submit" class="btn btn-success">Success</button>


                </div>
                    </form>
                    <?php require VIEWS . '/incs/sidebar.php'?>
            </div>
        </div>
    </main>
<?php require VIEWS . '/incs/footer.php' ?>