<?php

namespace Rompetomp\InertiaBundle\src;

class LazyProp
{
    private $callback;

    public function __construct(callable|string|array $callback)
    {
        $this->callback = $callback;
    }

    public function __invoke()
    {
        return call_user_func($this->callback);
    }
}
