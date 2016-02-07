<?php

Yii::app()->moduleManager->register(array(
    'id' => 'socialshare',
    'class' => 'application.modules.socialshare.Module',
    'import' => array(
        'application.modules.socialshare.*',
    ),
    'events' => array(
        array('class' => 'TopMenuWidget', 'event' => 'onInit', 'callback' => array('Events', 'onTopMenuInit')),
    ),
));
?>
