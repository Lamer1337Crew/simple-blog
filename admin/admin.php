<?php

class admin
{
    private $event;
    private $type;
    private $title;
    private $category;
    private $slug;
    private $post;

    function __construct()
    {
        $this->event = isset($_POST['event']) ? $_POST['event'] : null;
        $this->type = isset($_POST['type']) ? $_POST['type'] : null;
        $this->title = isset($_POST['title']) ? $_POST['title'] : null;
        $this->category = isset($_POST['category']) ? $_POST['category'] : null;
        $this->slug = isset($_POST['slug']) ? $_POST['slug'] : null;
        $this->post = isset($_POST['post']) ? $_POST['post'] : null;
    }

    function start()
    {
        echo $this->type;
    }
}

$admin = new admin();

if (!empty($_POST)) {
    $admin->start();
}