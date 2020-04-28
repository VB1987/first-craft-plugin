<?php

namespace vb\opdracht\models;

use craft\base\Model;

class PostsModel extends Model
{
    public $postTitle;
    public $postContent;

    public function init()
    {
        parent::init();
    }

    protected function getPosts()
    {
        return 'posts';
    }

    public function postsHtml()
    {
        return \Craft::$app->view->renderTemplate(
            'vb-opdracht/index',
            [
                'posts' => $this->getPosts()
            ]
        );
    }
}