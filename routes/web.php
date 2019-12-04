<?php

use Encore\ErrorPage\Http\Controllers\ErrorPageController;

Route::get('errorPage', ErrorPageController::class.'@index');