<?php

namespace App\Http\Resources\v1;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class ItemResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'title' => $this->title,
            'description' => $this->description,
            'location' => $this->location,
            'bedrooms' => $this->bedrooms,
            'bathrooms' => $this->bathrooms,
            'bookings' => BookingResource::collection($this->bookings),
            'images' => ImageResource::collection($this->images),
            'price' => $this->price,
            'amenities' => $this->amenities,
        ];
    }
}