<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerXmtMWOY\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerXmtMWOY/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerXmtMWOY.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerXmtMWOY\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerXmtMWOY\App_KernelDevDebugContainer([
    'container.build_hash' => 'XmtMWOY',
    'container.build_id' => 'dd3d15a6',
    'container.build_time' => 1654705951,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerXmtMWOY');
