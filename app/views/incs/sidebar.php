<div class="col-md-4">
    <h3 class = "text-center">Recent Post</h3>
    <ul class="list-group">
        <?php foreach($recent_post as $post): ?>
            <li class="list-group-item"><a href="<?=$post['slug']?>"><?=$post['title']?></a></li>
        <?php endforeach; ?>
    </ul>
</div>