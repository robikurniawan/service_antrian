<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\ResourceCollection;

class KelompokObatCollection extends ResourceCollection
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'kelompok_obat' => $this->collection->map(function($subunit) use ($request) {
                return (new KelompokObatResource($subunit))->toArray($request);
            })
        ];
    }
}
