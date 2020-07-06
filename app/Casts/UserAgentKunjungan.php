<?php

namespace App\Casts;

use Illuminate\Contracts\Database\Eloquent\CastsAttributes;

class UserAgentKunjungan implements CastsAttributes
{
    /**
     * Cast the given value.
     *
     * @param  \Illuminate\Database\Eloquent\Model  $model
     * @param  string  $key
     * @param  mixed  $value
     * @param  array  $attributes
     * @return array
     */
    public function get($model, $key, $value, $attributes)
    {
        $operation_system = null;
        $browser = null;
        preg_match("/^([^\(]+)(\()([^\)]+)(\))/i", $value, $operation_system);
        preg_match("/^(.*)\s(.+)\s(.+)$/i", $value, $browser);

        return [ "ori" => $value, "os" => $operation_system[3], "browser" => $browser[2] ];
    }

    /**
     * Prepare the given value for storage.
     *
     * @param  \Illuminate\Database\Eloquent\Model  $model
     * @param  string  $key
     * @param  array  $value
     * @param  array  $attributes
     * @return string
     */
    public function set($model, $key, $value, $attributes)
    {
        return $value;
    }
}
