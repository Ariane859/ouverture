<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\Container27q4qdx\appDevDebugProjectContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/Container27q4qdx/appDevDebugProjectContainer.php') {
    touch(__DIR__.'/Container27q4qdx.legacy');

    return;
}

if (!\class_exists(appDevDebugProjectContainer::class, false)) {
    \class_alias(\Container27q4qdx\appDevDebugProjectContainer::class, appDevDebugProjectContainer::class, false);
}

return new \Container27q4qdx\appDevDebugProjectContainer(array(
    'container.build_hash' => '27q4qdx',
    'container.build_id' => 'f481cd67',
    'container.build_time' => 1632994847,
), __DIR__.\DIRECTORY_SEPARATOR.'Container27q4qdx');
