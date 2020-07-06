<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class Debug extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [ 'debug' => true, 'data' => $this->resource ];
    }
}
