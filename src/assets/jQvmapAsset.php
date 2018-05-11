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
    public $sourcePath = '@bower/jqvmap';
    public $js = [
        'dist/jquery.vmap.js'
    ];
    public $css = [
        'dist/jqvmap.css'
    ];
    public $depends = [
            'yii\web\JqueryAsset',
        ];
}