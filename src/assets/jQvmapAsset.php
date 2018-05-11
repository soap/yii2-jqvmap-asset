<?php
/**
 * Created by PhpStorm.
 * User: soap
 * Date: 11/05/2018
 * Time: 10:18
 */

namespace soap\jqvmap\assets;

use yii\web\AssetBundle;

class jQvmapAsset extends AssetBundle
{
    public $sourcePath = '@bower/jqvmap/dist';
    public $js = [
        'jquery.vmap.js'
    ];
    public $css = [
        'jqvmap.css'
    ];
    public $depends = [
            'yii\web\JqueryAsset',
        ];
}