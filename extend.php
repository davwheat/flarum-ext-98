<?php

/*
 * This file is part of davwheat/flarum-ext-98.
 *
 * Copyright (c) 2021 David Wheatley.
 *
 * For the full copyright and license information, please view the LICENSE.md
 * file that was distributed with this source code.
 */

namespace Davwheat\Flarum98;

use Flarum\Extend;

return [
    (new Extend\Frontend('forum'))
        ->js(__DIR__.'/js/dist/forum.js')
        ->css(__DIR__.'/less/common.less')
        ->css(__DIR__.'/98-dist/98.css')
        ->css(__DIR__.'/98-dist/vs.css')
        ->css(__DIR__.'/less/forum.less'),
    (new Extend\Frontend('admin'))
        ->js(__DIR__.'/js/dist/admin.js')
        // ->css(__DIR__.'/less/common.less')
        // ->css(__DIR__.'/98-dist/98.css')
        // ->css(__DIR__.'/98-dist/vs.css')
        // ->css(__DIR__.'/less/admin.less'),
        ,
    new Extend\Locales(__DIR__.'/locale'),
];
