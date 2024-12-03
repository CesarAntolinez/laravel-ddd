<?php


if (! function_exists('storage_public')) {

    /**
     * Get documents from storage public
     *
     * @param string|null $path
     * @param string|null $default
     * @return string
     */
    function storage_public(?string $path, ?string $default = ''): string
    {
        if (\Storage::disk('public')->exists($path))
            return \Storage::disk('public')->url($path);

        return asset($default);
    }
}

if (! function_exists('storage_private')) {

    /**
     * Get documents from storage private
     *
     * @param string|null $path
     * @param string|null $default
     * @return string
     */
    function storage_private(?string $path, ?string $default = ''): string
    {
        if (\Storage::disk('local')->exists($path))
            return \Storage::disk('local')->url($path);

        return asset($default);
    }
}
