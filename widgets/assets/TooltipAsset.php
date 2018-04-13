<?php

namespace dkhlystov\widgets\assets;

use yii\web\AssetBundle;

class TooltipAsset extends AssetBundle
{

    public $js = [
        'tooltip.js',
    ];

    public $depends = [
        'yii\bootstrap\BootstrapPluginAsset',
    ];

    public function init()
    {
        parent::init();

        $this->sourcePath = __DIR__ . '/tooltip';
    }

}
