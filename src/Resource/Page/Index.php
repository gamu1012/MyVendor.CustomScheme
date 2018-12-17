<?php
namespace MyVendor\MyProject\Resource\Page;

use BEAR\Resource\ResourceObject;
use BEAR\Sunday\Inject\ResourceInject;

class Index extends ResourceObject
{
    use ResourceInject;

    public function onGet(string $name = 'BEAR.Sunday') : ResourceObject
    {
        $weekdayResource = $this->resource->get('app://self/weekday', ['year' => '2001', 'month' => '1', 'day' => '1']);
        $summationResource = $this->resource->get('service://self/summation', ['a' => 10, 'b' => 7]);

        $this->body = [
            'greeting' => 'Hello ' . $name,
            'weekday' => $weekdayResource->body,
            'summationResource' => $summationResource->body,
        ];

        return $this;
    }
}
