<?php
require_once __DIR__ . '/vendor/autoload.php';
use Spatie\ArrayToXml\ArrayToXml;

$lista = ['listItem' => [
			0 => [
					'codItem' => 123
				],
			1 => [
					'codItem' => 456
				]
			]
		];
		
$result = new ArrayToXml($lista, 'pedido', true, 'UTF-8');
echo $result->prettify()->toXml();

