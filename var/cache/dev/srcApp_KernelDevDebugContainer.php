<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerWIAjvxy\srcApp_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerWIAjvxy/srcApp_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerWIAjvxy.legacy');

    return;
}

if (!\class_exists(srcApp_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerWIAjvxy\srcApp_KernelDevDebugContainer::class, srcApp_KernelDevDebugContainer::class, false);
}

return new \ContainerWIAjvxy\srcApp_KernelDevDebugContainer([
    'container.build_hash' => 'WIAjvxy',
    'container.build_id' => '5d9ae6e8',
    'container.build_time' => 1562960096,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerWIAjvxy');