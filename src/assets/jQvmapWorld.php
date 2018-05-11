<?php
/**
 * Created by PhpStorm.
 * User: soap
 * Date: 11/05/2018
 * Time: 11:13
 */

namespace soap\jqvmap\assets;

use yii\web\AssetBundle;

class jQvmapWorldAsset extends AssetBundle
{
    public $sourcePath = '@bower/jqvmap/dist';

    public $js = [
        'maps/jquery.vmap.world.js'
    ];

    public $depends = [
        'soap\jqvmap\assets\jQvmapAsset'
    ];
}