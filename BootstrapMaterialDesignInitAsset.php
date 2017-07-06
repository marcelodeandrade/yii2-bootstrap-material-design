<?php

namespace  marcelodeandrade\material;

use yii\web\AssetBundle;

class BootstrapMaterialDesignInitAsset extends AssetBundle
{
    public $sourcePath = '@vendor/marcelodeandrade';

	public $css = [];

	public $js = [	
		'material.init.js'
	];

    public $depends = [
        'marcelodeandrade\material\BootstrapMaterialDesignAsset'
    ];

}