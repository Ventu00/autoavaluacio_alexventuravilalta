<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class CicleResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
         return parent::toArray($request);

        // return[
        //     "sigles" => $this->sigles,
        //     "moduls" => ModulResource::collection($this->moduls)
        // ];
    }
}
