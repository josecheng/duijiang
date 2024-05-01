<?php
// extend.php
/*
 * This file is part of josecheng/duijiang.
 *
 * Copyright (c) 2024 Jose Cheng.
 *
 * For the full copyright and license information, please view the LICENSE.md
 * file that was distributed with this source code.
 *
*/
namespace Josecheng\Duijiang;

use Flarum\Extend;
use Flarum\Foundation\Application;
use Flarum\Frontend\Document;
use Flarum\Api\Controller;
use Flarum\Http\Middleware;
use Flarum\Settings\SettingsRepositoryInterface;
use Flarum\Notification\NotificationSyncer;
use Flarum\Http\UrlGenerator;
use Flarum\User\User;
use Flarum\User\Event;
use Flarum\Group\Group;
use Flarum\Validation\Validator;
use Flarum\Discussion\Discussion;
use Flarum\Event\ConfigureForumRoutes;
use Flarum\Event\ConfigureClientView;
use Josecheng\Duijiang\Api\Controller\ListduijiangController;
use Josecheng\Duijiang\Ui\View\ListDuijiangView;
use Josecheng\Duijiang\Api\Controller\ServiceProvider as DuijiangServiceProvider;

return [
    (new Extend\Routes('api'))
        ->get('/duijiang', 'duijiang.index', ListduijiangController::class),
        
    (new Extend\Frontend('forum'))
        ->route('/duijiang', 'duijiang.index', function () {
            return resolve(ListDuijiangView::class);
        })
        ->js(__DIR__.'/js/extend.js')
        ->content(function (Document $document) {
            $document->head[] = '<link rel="stylesheet" href="https://font.mc.airli.cn/css/all.css">';
        })
        ->content(function (Document $document) {
            $document->payload['items'][] = [
                'label' => 'Duijiang',
                'icon' => 'fas fa-microsoft',
                'url' => '/duijiang',
                'className' => 'Button-label',
            ];
        }),
        
    (new Extend\View)
        ->namespace('duijiang', __DIR__.'/views'),
        
    (new Extend\Frontend('admin'))
        ->content(function (Document $document) {
            $document->head[] = '<link rel="stylesheet" href="https://font.mc.airli.cn/css/all.css">';
        }),

    (new Extend\ServiceProvider())
        ->register(DuijiangServiceProvider::class),
];
