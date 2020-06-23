<?php

function manifest_resource($file, $path = 'dist') {
    $manifest = json_decode(file_get_contents($path.'/mix-manifest.json'), true);
    return $path . $manifest[$file];
}

function inline_resource($file, $path = 'dist') {
    return file_get_contents($path.$file);
}
