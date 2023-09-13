<?php

namespace App\Http\Livewire;

use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Http;

use Livewire\Component;

class Ingredientview extends Component
{
    public $ingredients = [];
    public function render()
    {
        $response = Http::withHeaders([
            'Authorization' => Session::get('token'),
        ])->get('http://test.webfolks.in/api/ViewIngredient');

        if ($response->successful()) {
            $data = $response->json();
            $this->ingredients = $data['data'];
            return view('livewire.ingredientview');
        } else {
            abort($response->status(), 'Failed to retrieve data from API');
        }
    }
}
