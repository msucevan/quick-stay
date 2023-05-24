<?php

namespace App\Http\Controllers\API\v1;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreImageRequest;
use App\Http\Resources\v1\ImageResource;
use App\Models\Image;
use Illuminate\Http\Request;

class ImageController extends Controller
{
    public function store(StoreImageRequest $request)
    {
        $image = Image::create($request->validated());

        return ImageResource::make($image);
    }
}