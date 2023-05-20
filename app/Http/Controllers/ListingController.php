<?php

namespace App\Http\Controllers;

use App\Models\Listing;
use Illuminate\Http\Request;

class ListingController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
      return inertia(
        'Listing/Index',
        [
            'listings' => Listing::all(),
        ]
      );
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
      return inertia('Listing/Create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
      $message = [
        'beds.required' => 'Trường beds là bắt buộc.',
        'beds.integer' => 'Trường beds phải là một số từ 0 đến 20.',
        'beds.min' => 'Trường beds phải là một số từ 0 đến 20.',
        'beds.max' => 'Trường beds phải là một số từ 0 đến 20.',

        'baths.required' => 'Trường baths là bắt buộc.',
        'baths.integer' => 'Trường baths phải là một số từ 0 đến 20.',
        'baths.min' => 'Trường baths phải là một số từ 0 đến 20.',
        'baths.max' => 'Trường baths phải là một số từ 0 đến 20.',

        'area.required' => 'Trường area là bắt buộc.',
        'area.integer' => 'Trường area phải là một số từ 15 đến 1500.',
        'area.min' => 'Trường area phải là một số từ 15 đến 1500.',
        'area.max' => 'Trường area phải là một số từ 15 đến 1500.',

        'city.required' => 'Trường city là bắt buộc.',
        'code.required' => 'Trường code là bắt buộc.',
        'street.required' => 'Trường city là bắt buộc.',

        'street_nr.required' => 'Trường street_nr là bắt buộc.',
        'street_nr.integer' => 'Trường street_nr phải là một số từ 1 đến 1000.',
        'street_nr.min' => 'Trường street_nr phải là một số từ 1 đến 1000.',
        'street_nr.max' => 'Trường street_nr phải là một số từ 1 đến 1000.',

        'price.required' => 'Trường price là bắt buộc.',
        'price.integer' => 'Trường price phải là một số từ 1 đến 2000000.',
        'price.min' => 'Trường price phải là một số từ 1 đến 2000000.',
        'price.max' => 'Trường price phải là một số từ 1 đến 2000000.',

      ];

      Listing::create([
        $request->validate([
          'beds' => 'required|integer|min:0|max:20',
          'baths' => 'required|integer|min:0|max:20',
          'area' => 'required|integer|min:15|max:1500',
          'city' => 'required',
          'code' => 'required',
          'street' => 'required',
          'street_nr' => 'required|integer|min:1|max:1000',
          'price' => 'required|integer|min:1|max:2000000',
        ], $message)
      ]);

        return redirect()->route('listing.index')->with('success', 'Liting was created!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Listing $listing)
    {
      return inertia(
        'Listing/Show',
        [
            'listing' => $listing
        ]
      );
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Listing $listing)
    {
      return inertia(
        'Listing/Edit',
        [
            'listing' => $listing
        ]
      );
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Listing $listing)
    {
      $listing_change =  $listing->update([
        $request->validate([
          'beds' => 'required|integer|min:0|max:20',
          'baths' => 'required|integer|min:0|max:20',
          'area' => 'required|integer|min:15|max:1500',
          'city' => 'required',
          'code' => 'required',
          'street' => 'required',
          'street_nr' => 'required|integer|min:1|max:1000',
          'price' => 'required|integer|min:1|max:2000000',
        ])
      ]);

      return redirect()->route('listing.index')->with('success', 'Liting was changed!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
