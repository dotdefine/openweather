<?php

namespace dotdefine\openweather\migrations;

use Craft;
use craft\db\Migration;

/**
 * m220714_122140_removeUniqueIndex migration.
 */
class m220714_122140_removeUniqueIndex extends Migration
{
    /**
     * @inheritdoc
     */
    public function safeUp()
    {
        // Place migration code here...
        $this->dropIndexIfExists('{{%open_weather_entries}}', ['lat', 'lon'], true);
        $this->createIndexIfMissing('{{%open_weather_entries}}', ['lat', 'lon'], false);
    }

    /**
     * @inheritdoc
     */
    public function safeDown()
    {
        echo "m220714_122140_removeUniqueIndex cannot be reverted.\n";
        return false;
    }
}
