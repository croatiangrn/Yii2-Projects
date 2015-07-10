<?php

$params = require(__DIR__ . '/params.php');

$config = [
    'id' => 'basic',
    'basePath' => dirname(__DIR__),
    'bootstrap' => ['log'],
    'name' => 'Kundennutzenberater.de',
    'language' => 'de',
    'sourceLanguage' => 'de',
    'components' => [
        'request' => [
            // !!! insert a secret key in the following (if it is empty) - this is required by cookie validation
            'cookieValidationKey' => 'cDD4Hfe-fDMDdsW_3x92oiY2p9v0-9OD',
            // 'baseUrl' => 'http://localhost/bootstrap-aim',
        ],
        'cache' => [
            'class' => 'yii\caching\FileCache',
        ],

        'urlManager' => [
            'enablePrettyUrl' => true,
            'rules' => [
                '' => 'site/index',
                'article/<id:\w+>/<title:.*?>' => 'site/post',
                '<alias:kundennutzen|berater|garantie|leistungen|referenzen|blog|kontakt>' => 'site/<alias>',
            ]
        ],

            'user' => [
            'identityClass' => 'app\models\Users',
            'enableAutoLogin' => true,
        ],
        'errorHandler' => [
            'errorAction' => 'site/error',
        ],
        'mailer' => [
            'class' => 'yii\swiftmailer\Mailer',
            'useFileTransport' => false,
            'transport' => [
                'class' => 'Swift_SmtpTransport',
                'host' => 'server.thecoolcows.com',
                'username' => 'admin@motelkiwi.com',
                'password' => 'n3cr0n0m1c0n',
                'port' => '465',
                'encryption' => 'ssl',
            ],
        ],

        'log' => [
            'traceLevel' => YII_DEBUG ? 3 : 0,
            'targets' => [
                [
                    'class' => 'yii\log\FileTarget',
                    'levels' => ['error', 'warning'],
                ],
            ],
        ],
        'db' => require(__DIR__ . '/db.php'),
    ],
    'params' => $params,
];

if (YII_ENV_DEV) {
    // configuration adjustments for 'dev' environment
    $config['bootstrap'][] = 'debug';
    $config['modules']['debug'] = 'yii\debug\Module';

    $config['bootstrap'][] = 'gii';
    $config['modules']['gii'] = 'yii\gii\Module';
}

return $config;
