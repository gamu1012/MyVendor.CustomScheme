<?php
namespace MyVendor\MyProject\Resource\Service;

use BEAR\Resource\ResourceObject;

class Summation extends ResourceObject
{
    public function onGet(int $a, int $b) : ResourceObject
    {
        $this->body = $a + $b;

        return $this;
    }
}
