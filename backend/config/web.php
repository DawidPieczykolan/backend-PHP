return [
    'id' => 'basic',
    'basePath' => dirname(__DIR__),
    'bootstrap' => ['log'],
    'components' => [
        'request' => [
            //'cookieValidationKey' => 'your-secret-key', // Wyłączona walidacja ciasteczek
            'parsers' => [
                'application/json' => 'yii\web\JsonParser',  // Parsowanie JSON dla API
            ],
        ],
        'cache' => [
            'class' => 'yii\caching\FileCache',
        ],
        'user' => [
            'identityClass' => 'backend\models\User',  
            'enableAutoLogin' => true,
        ],
        'errorHandler' => [
            'errorAction' => 'site/error',
        ],
        'db' => require __DIR__ . '/db.php',  
        'urlManager' => [
            'enablePrettyUrl' => true,
            'enableStrictParsing' => true,
            'showScriptName' => false,
            'rules' => [
                ['class' => 'yii\rest\UrlRule', 'controller' => 'user'],  
            ],
        ],
    ],
    'params' => $params,
];
