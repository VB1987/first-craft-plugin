<?php

namespace vb\opdracht;

use Craft;
use craft\base\Plugin;
use craft\events\RegisterUrlRulesEvent;
use craft\helpers\UrlHelper;
use craft\log\FileTarget;
use craft\web\twig\variables\CraftVariable;
use craft\web\UrlManager;
use yii\base\Event;
use yii\log\Logger;
use vb\opdracht\models\PostsModel;

/**
 * Class Posts
 * 
 * @package vb\opdracht
 *
 * @property \vb\opdracht\services\Posts $posts
 */
class Posts extends Plugin
{
    public $hasCpSection = true;
    public $hasCpSettings = true;
    public static $plugin;

    public function init()
    {
        parent::init();
        self::$plugin = $this;

        Event::on(UrlManager::class, UrlManager::EVENT_REGISTER_CP_URL_RULES, static function (RegisterUrlRulesEvent $event) {
            $event->rules['vb-opdracht'] = 'vb-opdracht/posts';
        });

        $this->setComponents(['posts' => \vb\opdracht\services\Posts::class]);


    }
}