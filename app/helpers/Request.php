<?php

namespace agenda\app\helpers;

class Request
{

    public function __construct(array $request)
    {
        foreach ($request as $key => $value) {
            $this->set($key, $value);
        }
    }
    private function set(string $name, string $value)
    {
        $this->$name = $value;
    }
}
