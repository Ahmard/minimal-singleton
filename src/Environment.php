<?php

namespace Ahmard\Singleton;

class Environment
{
    private static Environment $instance;

    private string $appName;
    private string $appEnv;
    private string $appHost;

    final public static function singleton(): static
    {
        return SingletonHelper::init(static::class);
    }

    public function setName(string $name): static
    {
        $this->appName = $name;
        return $this;
    }

    public function setEnv(string $env): static
    {
        $this->appEnv = $env;
        return $this;
    }

    public function setHost(string $host): static
    {
        $this->appHost = $host;
        return $this;
    }


    /**
     * @return string
     */
    public function getAppEnv(): string
    {
        return $this->appEnv;
    }

    /**
     * @return string
     */
    public function getAppHost(): string
    {
        return $this->appHost;
    }

    /**
     * @return string
     */
    public function getAppName(): string
    {
        return $this->appName;
    }
}
