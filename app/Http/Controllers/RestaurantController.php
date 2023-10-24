<?php

namespace App\Http\Controllers;

use App\Models\Restaurant;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class RestaurantController extends Controller
{
    public function index() {
        $restaurants = Restaurant::all();
        return view('dashboard.restaurant', ['restaurants' => $restaurants]);
    }

    public function edit($id) {
        $restaurant = Restaurant::find($id);
        return view('dashboard.restaurant-edit', compact('restaurant'));
    }

    public function update(Request $request, $id) {
        // Retrieve the restaurant you want to update
        $restaurant = Restaurant::find($id);

        // Validate the form data and update the restaurant's information
        $request->validate([
            'name' => 'required',
            'description' => 'nullable',
            'cuisine_type' => 'required',
            'address' => 'required',
            'rating' => 'numeric',
            'delivery_time' => 'integer',
            'is_open' => 'boolean',
            // Add more validation rules as needed
        ]);

        // Update the restaurant's information
        $restaurant->name = $request->input('name');
        $restaurant->description = $request->input('description');
        $restaurant->cuisine_type = $request->input('cuisine_type');
        $restaurant->address = $request->input('address');
        $restaurant->rating = $request->input('rating');
        $restaurant->delivery_time = $request->input('delivery_time');
        $restaurant->is_open = $request->input('is_open');

        // Save the restaurant's updated information
        $restaurant->save();

        // Redirect to the restaurant list page or a success page
        return redirect('/restaurant')->with('success', 'Restaurant updated successfully');
    }
}
