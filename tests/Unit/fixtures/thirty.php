<?php

class Server
{
    protected array $handlers = [];

    public function withHandler(callable | string $handler): static
    {
        $this->handlers[] = $this->createHandlerItem($handler);

        return $this;
    }

    public function move(int | string $handler): static
    {
        $b = 1 | 2;
    }

    public static function callIt(callable $callback)
    {
        $callback();
    }
}