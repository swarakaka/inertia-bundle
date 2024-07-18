<?php

namespace SwaraKaka\InertiaBundle\Architecture;

use SwaraKaka\InertiaBundle\Ssr\InertiaSsrResponse;

interface GatewayInterface
{
    /**
     * Dispatch the Inertia page to the Server Side Rendering engine.
     */
    public function dispatch(array $page): ?InertiaSsrResponse;
}
