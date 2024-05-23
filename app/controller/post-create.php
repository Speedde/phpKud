<?php
/**
 * @var DB $db
 */

if($_SERVER['REQUEST_METHOD'] == "POST") {

    $fillable = ['title', 'excerpt', 'content'];
    $data = load($fillable);

    // validation
    $error = [];
    if(empty($data['title'])) {
        $error['title'] = "Title is reqiured";
    }
    if(empty($data['excerpt'])) {
        $error['excerpt'] = "Excerpt is reqiured";
    }
    if(empty($data['content'])) {
        $error['content'] = "Content is reqiured";
    }
    if(empty($error)) {
        $db->query("INSERT INTO test.TEST (`title`, `excerpt`, `content`) VALUES (:title, :excerpt, :content)",
        $data);
        redirect('/phpStudy/post/create');
    }

}


$title = 'My Blog :: New POST';
require VIEWS . "/post-create.tpl.php";