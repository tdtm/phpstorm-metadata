<?php
    // Using within a callable so we don't have to define the method body.
    function test (\Example\Container $repositoryContainer)
    {
        // This should be \Example\EntityService::class:
        $repositoryFromClassConstant = $repositoryContainer->getByClass(\Example\Entity::class);

        // If I give the service (which isn't mapped), it returns the same
        $repositoryItself = $repositoryContainer->getByClass(\Example\EntityService::class);

        // Interestingly if I map a plain string (not an FQN) it works:
        $repositoryFromString = $repositoryContainer->getByClass('EntityAsString');
    };
