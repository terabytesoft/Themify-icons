<?php


namespace TerabyteSoft\Assets\ThemifyIcons;

use yii\web\AssetBundle;

class ThemifyIconsAsset extends AssetBundle
{
	public $sourcePath = '@npm/ti-icons/';

	public $css = [
		'css/themify-icons.css',
	];

	public $publishOptions = [
		'only' => [
			'themify-icons.css',
			'fonts/*',
		],
	];
}
