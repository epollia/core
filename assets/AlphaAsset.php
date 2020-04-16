<?php
/**
 * This file is part of cBackup, network equipment configuration backup tool
 * Copyright (C) 2017, Oļegs Čapligins, Imants Černovs, Dmitrijs Galočkins
 *
 * cBackup is free software: you can redistribute it and/or modify it
 * under the terms of the GNU Affero General Public License as published
 * by the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
 * GNU Affero General Public License for more details.
 *
 * You should have received a copy of the GNU Affero General Public License
 * along with this program.  If not, see <http://www.gnu.org/licenses/>.
 */

namespace app\assets;

use yii\web\AssetBundle;


/**
 * @package app\assets
 */
class AlphaAsset extends AssetBundle
{
    public $basePath  = '@webroot';
    public $baseUrl   = '@web';
    public $css       = [
        'css/sourcesans.css',
        'css/layout.css',
        'css/blue.css',
        'plugins/font-awesome/4.7.0/css/font-awesome.min.css',
        'plugins/icheck/1.0.1/css/cbackup.css',
        'plugins/toastr/2.1.3/toastr.min.css',
        'css/custom.css',
    ];
    public $js        = [
        'plugins/icheck/1.0.1/icheck.min.js',
        'plugins/toastr/2.1.3/toastr.min.js',
        'js/adminlte.js',
        'js/app.js',
        ['plugins/respond.min.js',  'condition' => 'lte IE9'],
        ['plugins/excanvas.min.js', 'condition' => 'lte IE9'],
    ];
    public $depends   = [
        'yii\web\YiiAsset',
        'yii\web\JqueryAsset',
        'yii\jui\JuiAsset',
        'yii\bootstrap\BootstrapAsset',
        'yii\bootstrap\BootstrapPluginAsset',
    ];
}
