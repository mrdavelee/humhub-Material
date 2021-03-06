<?php

use yii\helpers\Html;

/**
 * View File for the BirthdaySidebarWidget
 *
 * @uses User $users the profile data of all the users that have birthday the next days.
 *
 * @package humhub.modules.birthday.widgets.views
 * @author Sebastian Stumpf
 */
$assets = \humhub\modules\birthday\Assets::register($this);
?>

<div class="panel panel-default panel-birthday">
    <div class="panel-heading">
        <strong><?php echo Yii::t('BirthdayModule.base', 'Upcoming'); ?></strong> <?php echo Yii::t('BirthdayModule.base', 'birthdays'); ?>
    </div>
    <div id="birthdayContent">
        <ul id="birthdayList" class="media-list">

            <?php foreach ($users as $user): ?>
                <?php
                $remainingDays = $this->context->getDays($user);
                ?>
                <li class="birthdayEntry">
                    <a href="<?php echo $user->getUrl(); ?>">
                        <div class="media">
                            <!-- Show user image -->
                            <img class="media-object img-rounded pull-left" data-src="holder.js/32x32"
                                 alt="32x32"
                                 style="width: 32px; height: 32px;"
                                 src="<?php echo $user->getProfileImage()->getUrl(); ?>">
                                 <?php if ($remainingDays == 0) : ?>
                                <img class="media-object img-rounded img-birthday pull-left"
                                     data-src="holder.js/16x16" alt="16x16"
                                     style="width: 16px; height: 16px;"
                                     src="<?php echo $assets->baseUrl ?>/cake.png">
                                 <?php endif; ?>

                            <!-- Show content -->
                            <div class="media-body">
                                <strong><?php echo Html::encode($user->displayName); ?></strong>
                                <?php
                                // show when the user has his birthday
                                if ($remainingDays == 0) {
                                    echo ' <span class="label label-danger">' . Yii::t('BirthdayModule.base', 'today') . '</span>';
                                } else if ($remainingDays == 1) {
                                    echo ' (' . Yii::t('BirthdayModule.base', 'Tomorrow') . ')';
                                } else {
                                    echo ' (' . Yii::t('BirthdayModule.base', 'in') . ' ' . $remainingDays . ' ' . Yii::t('BirthdayModule.base', 'days') . ')';
                                }
                                // show the users age if allowed
                                if ($user->profile->birthday_hide_year == '0') {
                                    echo '<br />' . Yii::t('BirthdayModule.base', 'becomes') . ' ' . $this->context->getAge($user) . ' ' . Yii::t('BirthdayModule.base', 'years old.');
                                }
                                ?>
                            </div>
                        </div>
                    </a>
                </li>

            <?php endforeach; ?>
        </ul>

    </div>
</div>

<style type="text/css">
    .img-birthday {
        position: absolute;
        top: 32px;
        left: 30px;
    }
</style>
