<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerXEZAbqT\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerXEZAbqT/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerXEZAbqT.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerXEZAbqT\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerXEZAbqT\App_KernelDevDebugContainer([
    'container.build_hash' => 'XEZAbqT',
    'container.build_id' => '2b648fa5',
    'container.build_time' => 1630441126,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerXEZAbqT');
