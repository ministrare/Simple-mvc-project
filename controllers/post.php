<?php

class postController {

    public function create() {
        include_once "models/post.php";

        $post = new Post();

        //gegevens aan de instantie koppelen
        $post->setTitle('Zelfgeschreven titel');
        $post->setText('Dit is een langere efomuizhf ziiu zebfzugzeug zufygzefyug zgefyu zgef uyzegf uzgf u gfgzeu gzoefouz');

        if($post->save()) {
            $result = true;
        } else {
            $result = false;
        }

        include_once "views/post/create.php";
    }
}