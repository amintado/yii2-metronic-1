<?php

namespace wfcreations\metronic\bundles;

use yii\web\AssetBundle;

class SimpleLineIconsAsset extends AssetBundle {

    public $sourcePath = '@wfcreations/metronic/assets';
    public $css = [
        'global/plugins/simple-line-icons/simple-line-icons.min.css',
    ];
    public $js = [
        'global/plugins/uniform/jquery.uniform.min.js',
    ];
    public $depends = [
        'wfcreations\metronic\bundles\FontAsset',
        'yii\web\JqueryAsset',
    ];

}
