<?php

namespace Rompetomp\InertiaBundle\Architecture;

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
