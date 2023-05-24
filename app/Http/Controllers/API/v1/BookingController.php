<?php

namespace App\Http\Controllers\API\v1;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreBookingRequest;
use App\Http\Resources\v1\BookingResource;
use App\Models\Booking;
use Illuminate\Http\Request;

class BookingController extends Controller
{
    public function store(StoreBookingRequest $request)
    {
        $booking = Booking::create($request->validated());

        return BookingResource::make($booking);
    }
}