<?php

    namespace PHPSTORM_META
    {
        override(
           \Example\Container::getByClass(0),
            map([
                \Example\Entity::class => \Example\EntityService::class,
                'EntityAsString' => \Example\EntityService::class,
            ])
        );
    }
