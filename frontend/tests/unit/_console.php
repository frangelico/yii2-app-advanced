<?php

return yii\helpers\ArrayHelper::merge(
    require(__DIR__ . '/../../../common/config/main.php'),
    require(__DIR__ . '/../../../common/config/main-local.php'),
    require(__DIR__ . '/../../../console/config/main.php'),
    require(__DIR__ . '/../../../console/config/main-local.php'),
    [
        'components' => [
            'db' => [
				'class' => 'yii\db\Connection',
                'dsn' => 'mysql:host=localhost;dbname=yii2advanced',
				'username' => 'ubuntu',
				'password' => '',
				'charset' => 'utf8',
            ],
        ],
    ]
);