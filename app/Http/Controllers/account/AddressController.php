<?php

namespace App\Http\Controllers\account;

use App\Http\Controllers\Controller;
use App\Models\Address;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\AddressRequest;

class AddressController extends Controller
{
    public function showAddresses()
    {
        $user_addresses = Auth::user()->addresses()->get();
        $user = Auth::user();

        $data = [
            'user' => $user,
            'user_addresses' => $user_addresses,
        ];

        return view('frontend.auth.address', $data);

    }

    public function removeAddresses($address_id){
        Address::destroy($address_id);
        return redirect()->route('show.addresses');

    }

    public function addAddresses(AddressRequest $request)
    {
        Address::query()->create([
            'user_id' => Auth::id(),
            'name' => $request->name,
            'title'       => $request->title ?? '',
            'phone'       => $request->phone ?? '',
            'postal_code' => $request->postal_code ?? '',
            'address'     => $request->address,
            'city'        => $request->city,
            'province'     => $request->province,
        ]);
        return redirect()->route('show.addresses');
    }

    public function updateAddresses($address_id)
    {
        $address = Address::query()->where('id', $address_id);
        $address->update([
            'user_id' => Auth::user()->id(),
            'name' => request('name'),
            'title' => request('title', ''),
            'phone' => request('phone'),
            'postal_code' => request('postal_code'),
            'address' => request('address'),
            'province' => request('province'),
            'city' => request('city'),
        ]);

        return redirect()->route('show.addresses');
    }

    public function selectAddress(Request $request)
    {
        $selectedAddressId = $request->input('selected_address_id');

        if ($selectedAddressId && Auth::user()->addresses()->where('id', $selectedAddressId)->exists()) {
            session()->put('selected_address_id', $selectedAddressId);
        }


        return redirect()->route('cart.checkout');
    }

}
