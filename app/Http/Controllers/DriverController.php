<?php

namespace App\Http\Controllers;

use App\Models\Driver;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class DriverController extends Controller
{
    public function index() {
        $drivers = Driver::all();
        return view('dashboard.driver', ['drivers' => $drivers]);
    }

    public function edit($id) {
        $driver = Driver::find($id);
        return view('dashboard.driver-edit', compact('driver'));
    }    

    public function update(Request $request, $id) {
        // Retrieve the driver you want to update
        $driver = Driver::find($id);
    
        // Validate the form data and update the driver's information
        $request->validate([
            'firstName' => 'required',
            'lastName' => 'required',
            'phoneNumber' => 'required',
            'email' => 'required|email',
            'address' => 'required',
            'vehicleType' => 'required', // Add more validation rules as needed
            'license' => 'sometimes|mimes:jpeg,png,jpg,gif|max:2048', // Optional: Update the license image
        ]);
    
        // Update the driver's information
        $driver->firstName = $request->input('firstName');
        $driver->lastName = $request->input('lastName');
        $driver->phoneNumber = $request->input('phoneNumber');
        $driver->email = $request->input('email');
        $driver->address = $request->input('address');
        $driver->vehicleType = $request->input('vehicleType');
    
        // Handle the driver license image update if needed
        if ($request->hasFile('license')) {
            // Upload and save the new image
            $imagePath = $request->file('license')->store('your-license-directory');
            $driver->license = $imagePath;
        }
    
        // Save the driver's updated information
        $driver->save();
    
        // Redirect to the driver list page or a success page
        return redirect('/driver')->with('success', 'Driver updated successfully');
    }
    

    public function destroy($id) {
        // Find the driver record by ID
        $driver = Driver::find($id);
    
        if ($driver) {
            // Delete the driver record
            $driver->delete();
            return redirect('/driver')->with('success', 'Driver deleted successfully');
        }
    
        // Handle the case where the driver record was not found
        return redirect('/driver')->with('error', 'Driver not found or could not be deleted');
    }
    
    


}   
