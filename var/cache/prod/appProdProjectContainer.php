<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerS7wwzyy\appProdProjectContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerS7wwzyy/appProdProjectContainer.php') {
    touch(__DIR__.'/ContainerS7wwzyy.legacy');

    return;
}

if (!\class_exists(appProdProjectContainer::class, false)) {
    \class_alias(\ContainerS7wwzyy\appProdProjectContainer::class, appProdProjectContainer::class, false);
}

return new \ContainerS7wwzyy\appProdProjectContainer([
    'container.build_hash' => 'S7wwzyy',
    'container.build_id' => '97e10b04',
    'container.build_time' => 1582200863,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerS7wwzyy');
