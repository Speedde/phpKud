<?php
/**
 * @var DB $db
 */

if($_SERVER['REQUEST_METHOD'] == "POST") {

    $fillable = ['title', 'excerpt', 'content'];
    $data = load($fillable);

    // validation
    $error = [];
    if(empty(trim($data['title']))) {
        $error['title'] = "Title is reqiured";
    }
    if(empty(trim($data['excerpt']))) {
        $error['excerpt'] = "Excerpt is reqiured";
    }
    if(empty(trim($data['content']))) {
        $error['content'] = "Content is reqiured";
    }
    if(empty($error)) {
        $db->query("INSERT INTO test.TEST (`title`, `excerpt`, `content`) VALUES (?, ?, ?)",
            [$_POST['title'], $_POST['excerpt'], $_POST['content']]);
    }

}


$title = 'My Blog :: New POST';
require VIEWS . "/post-create.tpl.php";