<?php
namespace proactionpro\gaugejs;

use \yii\web\AssetBundle;

class GaugeJsAsset extends AssetBundle {
    public $sourcePath = '@vendor/proactionpro/gauge.js/dist';

    public $js = [
        'gauge.js',
    ];
}
