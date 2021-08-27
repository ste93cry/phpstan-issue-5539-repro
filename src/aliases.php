<?php

declare(strict_types=1);

namespace App;

if (class_exists(BaseFoo::class)) {
    class_alias(FooV1::class, 'App\\Foo');
} elseif (interface_exists(BaseFoo::class)) {
    class_alias(FooV2::class, 'App\\Foo');
}
