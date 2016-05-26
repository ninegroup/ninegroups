<?php
return [
    'vendorPath' => dirname(dirname(__DIR__)) . '/vendor',
    'components' => [
        'cache' => [
            'class' => 'yii\caching\FileCache',
        ],
		'memcache' => [
			'class' => 'yii\caching\MemCache',
			'servers' => [
				[
					'host' => '127.0.0.1',
					'port' => 11211,
					'weight' => 100,
				],
				[
					'host' => 'server2',
					'port' => 11211,
					'weight' => 50,
				],
			 ],
		],
    ],
];
