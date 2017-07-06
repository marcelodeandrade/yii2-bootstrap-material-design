<?php

namespace  marcelodeandrade\material;

use yii\web\AssetBundle;

class BootstrapMaterialDesignInitAsset extends AssetBundle
{
    public $sourcePath = '@vendor/marcelodeandrade/yii2-bootstrap-material-design/src/assets';

	public $css = [];

	public $js = [	
		'js/material.init.js'
	];

    public $depends = [
        'marcelodeandrade\material\BootstrapMaterialDesignAsset'
    ];

}