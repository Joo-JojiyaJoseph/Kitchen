<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Food;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class FoodController extends Controller
{
    public function viewfood()
    {
        try {
            $food = Food::all();
            return response()->json([
                'status' => true,
                'data' =>  $food,
            ], 200);
        } catch (\Throwable $th) {
            return response()->json([
                'status' => false,
                'message' => $th->getMessage()
            ], 500);
        }
    }

    public function addfood(Request $request)
    {
        try {
            //Validated
            $validateFood = Validator::make(
                $request->all(),
                [
                    'food_name'=> 'required',
                    'food_ingredient'=> 'required',
                    'food_quantity'=>'required',
                ]
            );
            if ($validateFood->fails()) {
                return response()->json([
                    'status' => false,
                    'message' => 'validation error',
                    'errors' => $validateFood->errors()
                ], 401);
            }

            $food = Food::create([
                'food_name' => $request->food_name,
                'food_ingredient' => $request->food_ingredient,
                'food_quantity' => $request->food_quantity,
            ]);

            return response()->json([
                'status' => true,
                'message' => 'food ' . $food->food_name . ' Created Successfully',
            ], 200);
        } catch (\Throwable $th) {
            return response()->json([
                'status' => false,
                'message' => $th->getMessage()
            ], 500);
        }
    }

    public function editfood(Request $request, $id)
    {
        try {
            //Validated
            $validateFood = Validator::make(
                $request->all(),
                [
                    'food_name'=> 'required',
                    'food_ingredient'=> 'required',
                    'food_quantity'=>'required',
                ]
            );
            if ($validateFood->fails()) {
                return response()->json([
                    'status' => false,
                    'message' => 'validation error',
                    'errors' => $validateFood->errors()
                ], 401);
            }

            $Food = Food::find($id);
            $Food->update([
                'food_name' => $request->food_name,
                'food_ingredient' => $request->food_ingredient,
                'food_quantity' => $request->food_quantity,
            ]);

            return response()->json([
                'status' => true,
                'message' => 'Ingredient ' . $Food->food_name . ' Updated Successfully',
            ], 200);
        } catch (\Throwable $th) {
            return response()->json([
                'status' => false,
                'message' => $th->getMessage()
            ], 500);
        }
    }

    public function deletefood($id)
    {
        try {
            Food::destroy($id);
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

    public function add_quantity_food(Request $request, $id)
    {
        try {
            //Validated
            $validatefood = Validator::make(
                $request->all(),
                [
                    'food_quantity' => 'required',
                ]
            );
            if ($validatefood->fails()) {
                return response()->json([
                    'status' => false,
                    'message' => 'validation error',
                    'errors' => $validatefood->errors()
                ], 401);
            }

            $food = Food::find($id);
            $quantity = $food->food_quantity + $request->food_quantity;

            $food->update([
                'food_quantity' => $quantity,
            ]);

            return response()->json([
                'status' => true,
                'message' =>  $food->food_name . 'Quantity Updated Successfully',
            ], 200);
        } catch (\Throwable $th) {
            return response()->json([
                'status' => false,
                'message' => $th->getMessage()
            ], 500);
        }
    }




}
