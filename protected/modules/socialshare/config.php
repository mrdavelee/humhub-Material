<?php

use app\modules\socialshare\Module;
use humhub\modules\content\widgets\WallEntryLinks;

return [
    'id' => 'socialshare',
    'class' => 'app\modules\socialshare\Module',
    'namespace' => 'app\modules\socialshare',
    'events' => array(
        array('class' => WallEntryLinks::className(), 'event' => WallEntryLinks::EVENT_INIT, 'callback' => array('app\modules\socialshare\Events', 'onWallEntryLinksInit')),
    ),
];
?>
