<?php

namespace Mojo\Core\Base;


use Mojo\Core\Contracts\Base\Application as ApplicationContract;

class Application implements ApplicationContract
{
    const VERSION = '0.1';

    protected $basePath;

    protected $providers = [];

    /**
     * Application constructor.
     * @param $basePath
     */
    public function __construct($basePath)
    {
        $this->setBasePath($basePath);
    }

    /**
     * @param mixed $basePath
     * @return Application
     */
    public function setBasePath($basePath)
    {
        $this->basePath = $basePath;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getBasePath()
    {
        return $this->basePath;
    }

    /**
     * Get the version number of the application.
     *
     * @return string
     */
    public function version()
    {
        return static::VERSION;
    }

    /**
     * Get the base path of the Laravel installation.
     *
     * @param string $path Optionally, a path to append to the base path
     * @return string
     */
    public function basePath($path = "")
    {
        return $this->basePath.($path ? DIRECTORY_SEPARATOR.$path : $path);
    }

    /**
     * Boot the application's service providers.
     *
     * @return void
     */
    public function boot()
    {
        // TODO: Implement boot() method.
    }

}