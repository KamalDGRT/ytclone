<?php

namespace common\helpers;


use yii\helpers\Url;

/**
 * Class Html
 *
 * @package common\helpers
 */
class Html
{
    public static function channelLink($user, $schema = false)
    {
        return \yii\helpers\Html::a($user->username,
            Url::to(['/channel/view', 'username' => $user->username], $schema),
            ['class' => 'text-dark']);
    }
}
