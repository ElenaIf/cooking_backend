<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerVuM8Txx\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerVuM8Txx/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerVuM8Txx.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerVuM8Txx\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerVuM8Txx\App_KernelDevDebugContainer([
    'container.build_hash' => 'VuM8Txx',
    'container.build_id' => 'bf1febb4',
    'container.build_time' => 1619774614,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerVuM8Txx');
