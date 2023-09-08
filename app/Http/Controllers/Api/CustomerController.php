<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Customer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class CustomerController extends Controller
{
    public function viewcustomer()
    {
        try {
            $customer = Customer::all();
            return response()->json([
                'status' => true,
                'data' =>  $customer,
            ], 200);
        } catch (\Throwable $th) {
            return response()->json([
                'status' => false,
                'message' => $th->getMessage()
            ], 500);
        }
    }

    public function addcustomer(Request $request)
    {
        try {
            //Validated
            $validatecustomer = Validator::make(
                $request->all(),
                [
                    'name'=> 'required',
                    'phone'=> 'required',
                    'address'=>'required',
                ]
            );
            if ($validatecustomer->fails()) {
                return response()->json([
                    'status' => false,
                    'message' => 'validation error',
                    'errors' => $validatecustomer->errors()
                ], 401);
            }

            $customer = Customer::create([
                'name' => $request->name,
                'phone' => $request->phone,
                'address' => $request->address,
            ]);

            return response()->json([
                'status' => true,
                'message' => 'customer ' . $customer->name . ' Created Successfully',
            ], 200);
        } catch (\Throwable $th) {
            return response()->json([
                'status' => false,
                'message' => $th->getMessage()
            ], 500);
        }
    }

    public function editcustomer(Request $request, $id)
    {
        try {
            //Validated
            $validatecustomer = Validator::make(
                $request->all(),
                [
                    'name'=> 'required',
                    'phone'=> 'required',
                    'address'=>'required',
                ]
            );
            if ($validatecustomer->fails()) {
                return response()->json([
                    'status' => false,
                    'message' => 'validation error',
                    'errors' => $validatecustomer->errors()
                ], 401);
            }

            $customer = Customer::find($id);
            $customer->update([
                'name' => $request->name,
                'phone' => $request->phone,
                'address' => $request->address,
            ]);

            return response()->json([
                'status' => true,
                'message' => 'Ingredient ' . $customer->name . ' Updated Successfully',
            ], 200);
        } catch (\Throwable $th) {
            return response()->json([
                'status' => false,
                'message' => $th->getMessage()
            ], 500);
        }
    }

    public function deletecustomer($id)
    {
        try {
            Customer::destroy($id);
            return response()->json([
                'status' => true,
                'message' => 'Deleted Successfully',
            ], 200);
        } catch (\Throwable $th) {
            return response()->json([
                'status' => false,
                'message' => $th->getMessage()
            ], 500);
        }
    }

}
