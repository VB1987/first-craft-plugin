<?php

namespace vb\opdracht\migrations;

use Craft;
use craft\db\Migration;

/**
 * m200423_131028_createPostsTable migration.
 */
class m200423_131028_createPostsTable extends Migration
{
    /**
     * @inheritdoc
     */
    public function safeUp()
    {
        $this->createTable(' ');
    }

    /**
     * @inheritdoc
     */
    public function safeDown()
    {
        echo "m200423_131028_createPostsTable cannot be reverted.\n";
        return false;
    }
}
