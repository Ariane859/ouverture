<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerKug1vrq\appProdProjectContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerKug1vrq/appProdProjectContainer.php') {
    touch(__DIR__.'/ContainerKug1vrq.legacy');

    return;
}

if (!\class_exists(appProdProjectContainer::class, false)) {
    \class_alias(\ContainerKug1vrq\appProdProjectContainer::class, appProdProjectContainer::class, false);
}

return new \ContainerKug1vrq\appProdProjectContainer(array(
    'container.build_hash' => 'Kug1vrq',
    'container.build_id' => 'b69eb185',
    'container.build_time' => 1636386449,
), __DIR__.\DIRECTORY_SEPARATOR.'ContainerKug1vrq');
