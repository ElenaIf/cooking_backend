<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerDJzXWZx\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerDJzXWZx/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerDJzXWZx.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerDJzXWZx\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerDJzXWZx\App_KernelDevDebugContainer([
    'container.build_hash' => 'DJzXWZx',
    'container.build_id' => '78d0b545',
    'container.build_time' => 1619772652,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerDJzXWZx');
