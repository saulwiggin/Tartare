<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerHRVpngt\srcApp_KernelProdContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerHRVpngt/srcApp_KernelProdContainer.php') {
    touch(__DIR__.'/ContainerHRVpngt.legacy');

    return;
}

if (!\class_exists(srcApp_KernelProdContainer::class, false)) {
    \class_alias(\ContainerHRVpngt\srcApp_KernelProdContainer::class, srcApp_KernelProdContainer::class, false);
}

return new \ContainerHRVpngt\srcApp_KernelProdContainer([
    'container.build_hash' => 'HRVpngt',
    'container.build_id' => '94bf6aac',
    'container.build_time' => 1598103526,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerHRVpngt');
