<?php

namespace App\Http\Requests;

use App\Models\Booking;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;
use Illuminate\Validation\Rules\Exists;

class StoreBookingRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true; // no-authorization for the moment
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'start_date' => [
                'required',
                'date',
                function ($attribute, $value, $fail) {
                    $endDate = $this->input('end_date');
                    $itemId = $this->input('item_id');

                    $exists = Booking::where('item_id', $itemId)
                        ->where('start_date', '<=', $endDate)
                        ->where('end_date', '>', $value)
                        ->exists();

                    if ($exists) {
                        $fail('Another booking already exists within the selected date range.');
                    }
                },
            ],
            'end_date' => 'required|date|after:start_date',
            'customer_name' => 'required|string|max:100',
            'customer_email' => 'required|email',
            'customer_phone' => 'required|string',
            'item_id' => 'required|exists:items,id'
        ];
    }
}