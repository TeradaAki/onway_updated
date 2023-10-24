<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class CustomerController extends Controller
{
    public function index() {
        $customers = Customer::all();
        return view('dashboard.customer', ['customers' => $customers]);
    }

    public function edit($id) {
        $customer = Customer::find($id);

        return view('dashboard.customer-edit', compact('customer'));
    }

    public function update(Request $request, $id) {
        // Retrieve the customer you want to update
        $customer = Customer::find($id);

        // Validate the form data, and update the customer's information
        $request->validate([
            'firstName' => 'required',
            'lastName' => 'required',
            'phoneNumber' => 'required',
            'email' => 'required|email',
            'address' => 'required',
            'validId' => 'required',
            // Add more validation rules as needed
        ]);

        // Update the customer's information
        $customer->firstName = $request->input('firstName');
        $customer->lastName = $request->input('lastName');
        $customer->phoneNumber = $request->input('phoneNumber');
        $customer->email = $request->input('email');
        $customer->address = $request->input('address');
        $customer->validID = $request->input('validId');

        // Handle the ID image update if needed
        if ($request->hasFile('idImage')) {
            // Upload and save the new image
            $imagePath = $request->file('idImage')->store('your-image-directory');
            $customer->idImage = $imagePath;
        }

        // Save the customer's updated information
        $customer->save();

        // Redirect to the customer list page or a success page
        return redirect('/customer')->with('success', 'Customer updated successfully');
    }

    public function destroy(Customer $customer) {
        $customer->delete();
        return redirect('/customer')->with('success', 'Customer deleted successfully');
    }

    

}
