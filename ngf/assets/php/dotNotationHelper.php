<?php
// Helper untuk akses array nested dengan dot notation di PHP
function getByDot($array, $path, $default = null) {
    $keys = explode('.', $path);
    $value = $array;
    foreach ($keys as $key) {
        if (is_array($value) && array_key_exists($key, $value)) {
            $value = $value[$key];
        } else {
            return $default;
        }
    }
    return $value;
} 