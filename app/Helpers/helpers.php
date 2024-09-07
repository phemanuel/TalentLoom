<?php

if (!function_exists('formatFileSize')) {
    function formatFileSize($size)
    {
        // Convert bytes to KB
        $sizeInKB = $size / 1024;

        if ($sizeInKB < 1024) {
            // If size is less than 1024 KB, display in KB
            return round($sizeInKB, 2) . ' KB';
        } else {
            // Otherwise, display in MB
            return round($sizeInKB / 1024, 2) . ' MB';
        }
    }
}
