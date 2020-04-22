<?php


namespace App\Support;


class Cropper
{
    public static function thumb (String $uri, int $widht, int $height = null)
    {
        $cropper = new \CoffeeCode\Cropper\Cropper('../public/storage/cache');
        $pathThumb = $cropper->make(config('filesystems.disks.public.root') . '/posts/' . $uri,$widht,$height);

        $file = 'cache/' . collect(explode('/', $pathThumb))->last();
        return $file;
    }

    public static function thumJobs (String $uri, int $widht, int $height = null)
    {
        $cropper = new \CoffeeCode\Cropper\Cropper('../public/storage/cache');
        $pathThumb = $cropper->make(config('filesystems.disks.public.root') . '/jobs/' . $uri,$widht,$height);

        $file = 'cache/' . collect(explode('/', $pathThumb))->last();
        return $file;
    }
}
