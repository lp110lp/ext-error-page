<?php

namespace Encore\ErrorPage;

use Encore\Admin\Extension;

class ErrorPage extends Extension
{
    public $name = 'errorPage';

    public $views = __DIR__.'/../resources/views';

    public $assets = __DIR__.'/../resources/assets';

    public $menu = [
        'title' => 'Errorpage',
        'path'  => 'errorPage',
        'icon'  => 'fa-gears',
    ];
}