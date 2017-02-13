<?php
/**
 * Created by PhpStorm.
 * User: elven
 * Date: 2/12/2017
 * Time: 4:10 PM
 */

namespace Petros\Providers;

use Collective\Html\HtmlServiceProvider as CollectiveHtmlServiceProvider;
use Petros\Components\HtmlBuilder;

class HtmlServiceProvider extends CollectiveHtmlServiceProvider
{
    /**
     * Register the HTML builder instance.
     *
     * @return void
     */
    protected function registerHtmlBuilder()
    {
        $this->app->singleton('html', function ($app) {
            return new HtmlBuilder($app['url'], $app['view']);
        });
    }

}