<?php

namespace vb\opdracht\controllers;

use craft\web\Controller;
use Craft;
use vb\opdracht\Posts;

class PostsController extends Controller
{
    public function actionIndex()
    {
        $offset = (int)Craft::$app->request->get('offset');
        $limit = (int)Craft::$app->request->get('limit', 10) ?: 10;

        $data = Posts::$plugin->posts->getPosts();
        if (Craft::$app->request->accepts('application/json')) {
            return $this->asJson($data);
        }

        return $this->renderTemplate('vb-opdracht', [
            'title' => Craft::t('vb-opdracht', 'Posts'),
            'offset' => $offset,
            'limit' => $limit,
            'posts' => $data
        ]);
    }

}