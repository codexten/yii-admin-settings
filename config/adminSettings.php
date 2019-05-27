<?php

return [
    'components' => [
        'adminSettings' => [
            'class' => \codexten\yii\admin\settings\components\AdminSettings::class,
        ],
    ],
    'modules' => [
        'settings' => [
            'class' => \codexten\yii\admin\settings\SettingsModule::class,
        ],
    ],
];