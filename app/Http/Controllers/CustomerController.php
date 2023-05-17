<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;

class CustomerController extends Controller
{
    //
    public function show(){
        $customer = Customer::get();

        return response()->json([
            'success' => true,
            'data' => $customer,
        ]);
    }

    public function details($id){
        $customer = Customer::find($id);

        return response()->json([
            'success' => true,
            'data' => $customer,
        ]);
    }
}
