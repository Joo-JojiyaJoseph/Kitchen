<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Ingredient;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class IngredientController extends Controller
{
    public function viewingredient()
    {
        try {
            $Ingredient = Ingredient::all();
            return response()->json([
                'status' => true,
                'data' =>  $Ingredient,
            ], 200);
        } catch (\Throwable $th) {
            return response()->json([
                'status' => false,
                'message' => $th->getMessage()
            ], 500);
        }
    }
    
    public function addingredient(Request $request)
    {
        try {
            //Validated
            $validateIngredient = Validator::make(
                $request->all(),
                [
                    'ingredient_name' => 'required',
                    'ingredient_quantity' => 'required',
                ]
            );
            if ($validateIngredient->fails()) {
                return response()->json([
                    'status' => false,
                    'message' => 'validation error',
                    'errors' => $validateIngredient->errors()
                ], 401);
            }

            $Ingredient = Ingredient::create([
                'ingredient_name' => $request->ingredient_name,
                'ingredient_quantity' => $request->ingredient_quantity,
            ]);

            return response()->json([
                'status' => true,
                'message' => 'Ingredient ' . $Ingredient->name . ' Created Successfully',
            ], 200);
        } catch (\Throwable $th) {
            return response()->json([
                'status' => false,
                'message' => $th->getMessage()
            ], 500);
        }
    }

    public function editingredient(Request $request, $id)
    {
        try {
            //Validated
            $validateIngredient = Validator::make(
                $request->all(),
                [
                    'ingredient_name' => 'required',
                    'ingredient_quantity' => 'required',
                ]
            );
            if ($validateIngredient->fails()) {
                return response()->json([
                    'status' => false,
                    'message' => 'validation error',
                    'errors' => $validateIngredient->errors()
                ], 401);
            }

            $Ingredient = Ingredient::find($id);
            $Ingredient->update([
                'ingredient_name' => $request->ingredient_name,
                'ingredient_quantity' => $request->ingredient_quantity,
            ]);

            return response()->json([
                'status' => true,
                'message' => 'Ingredient ' . $Ingredient->name . ' Updated Successfully',
            ], 200);
        } catch (\Throwable $th) {
            return response()->json([
                'status' => false,
                'message' => $th->getMessage()
            ], 500);
        }
    }

    public function deleteingredient($id)
    {
        try {
            Ingredient::destroy($id);
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
    public function add_quantity_ingredient(Request $request, $id)
    {
        try {
            //Validated
            $validateIngredient = Validator::make(
                $request->all(),
                [
                    'ingredient_quantity' => 'required',
                ]
            );
            if ($validateIngredient->fails()) {
                return response()->json([
                    'status' => false,
                    'message' => 'validation error',
                    'errors' => $validateIngredient->errors()
                ], 401);
            }

            $Ingredient = Ingredient::find($id);
            $quantity = $Ingredient->ingredient_quantity + $request->ingredient_quantity;

            $Ingredient->update([
                'ingredient_quantity' => $quantity,
            ]);

            return response()->json([
                'status' => true,
                'message' =>  $Ingredient->name . 'Quantity Updated Successfully',
            ], 200);
        } catch (\Throwable $th) {
            return response()->json([
                'status' => false,
                'message' => $th->getMessage()
            ], 500);
        }
    }
}
