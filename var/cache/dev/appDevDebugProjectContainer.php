<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerZ3zy9ak\appDevDebugProjectContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerZ3zy9ak/appDevDebugProjectContainer.php') {
    touch(__DIR__.'/ContainerZ3zy9ak.legacy');

    return;
}

if (!\class_exists(appDevDebugProjectContainer::class, false)) {
    \class_alias(\ContainerZ3zy9ak\appDevDebugProjectContainer::class, appDevDebugProjectContainer::class, false);
}

return new \ContainerZ3zy9ak\appDevDebugProjectContainer([
    'container.build_hash' => 'Z3zy9ak',
    'container.build_id' => '04d6b7e4',
    'container.build_time' => 1686251583,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerZ3zy9ak');
