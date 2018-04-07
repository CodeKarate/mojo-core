<?php

namespace Mojo\Core\Contracts\Base;

interface Application
{
    /**
     * Get the version number of the application.
     *
     * @return string
     */
    public function version();

    /**
     * Get the base path of the Laravel installation.
     *
     * @return string
     */
    public function basePath();

    /**
     * Boot the application's service providers.
     *
     * @return void
     */
    public function boot();
}