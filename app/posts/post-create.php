<?php
/**
 * @var myfrm\DB $db
 */

use myfrm\Validator;
$db = \myfrm\App::getApp()->getService('\myfrm\Db');
if($_SERVER['REQUEST_METHOD'] == "POST") {

    $fillable = ['title', 'excerpt', 'content'];
    $data = load($fillable);
    $rules = [
        'title' => [
            'require' => true,
            'min' => 5,
            'max' => 30
        ],
        'excerpt' => [
            'require' => true,
            'min' => 5,
            'max' => 40
        ],
        'content' => [
            'require' => true,
            'min' => 10
        ]
    ];
    // validation
    $validator = new Validator();
    $validation = $validator->validate($data, $rules);
    if(!$validation->hasErrors()) {
        if($db->query("INSERT INTO test.TEST (`title`, `excerpt`, `content`) VALUES (:title, :excerpt, :content)",
        $data)) {
            $_SESSION['success'] = "Оk";
        } else {
            $_SESSION['error'] = "Db error";
        }
        redirect('/phpStudy/post/create');

    }



}


$title = 'My Blog :: New POST';
require VIEWS . "/post-create.tpl.php";