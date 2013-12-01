<?php

Route::post(Config::get('deployment::route').'/{required_branch?}', 'PaoloUmali\Deployment\Controller@postDeploy');
Route::get(Config::get('deployment::route').'/{required_branch?}', 'PaoloUmali\Deployment\Controller@getDeploy');
//Route::get(Config::get('deployment::composer_update_route').'/{composer_options?}', 'PaoloUmali\Deployment\Controller@getComposerUpdate');

