<?php

namespace app\modules\socialshare;

use Yii;
use yii\helpers\Url;

class Events extends \yii\base\Object
{

    public static function onTopMenuInit($event)
    {
        $event->sender->addItem(array(
            'label' => 'SocialShare',
            'url' => Url::toRoute('/socialshare/main/index'),
            'icon' => '<i class="fa fa-sun-o"></i>',
            'isActive' => (Yii::$app->controller->module && Yii::$app->controller->module->id == 'socialshare'),
        ));
    }
    
    public static function onWallEntryLinksInit($event)
    {
    	$event->sender->addWidget(widgets\ShareLink::className(), array('object' => $event->sender->object), array('sortOrder' => 10));
    }

}
