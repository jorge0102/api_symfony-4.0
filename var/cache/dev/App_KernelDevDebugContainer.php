<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerFNU0ARU\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerFNU0ARU/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerFNU0ARU.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerFNU0ARU\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerFNU0ARU\App_KernelDevDebugContainer([
    'container.build_hash' => 'FNU0ARU',
    'container.build_id' => 'ea90f10c',
    'container.build_time' => 1589918188,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerFNU0ARU');
