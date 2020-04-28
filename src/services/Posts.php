<?php
namespace vb\opdracht\services;

use craft\base\Component;
use vb\opdracht\models\PostsModel;

class Posts extends Component
{
    public function getPosts()
    {
        return ['post1', 'post2', 'post3'];
    }
}