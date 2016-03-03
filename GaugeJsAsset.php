<?php
namespace glagola\gaugejs;

use \yii\web\AssetBundle;

class GaugeJsAsset extends AssetBundle {
    public $sourcePath = '@bower/gauge.js/dist';

    public $js = [
        'gauge.js',
    ];
}
