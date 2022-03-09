<?php
namespace App\Controllers;
use App\Models\Laptop;
class LaptopController{
    public function index() {
        $laptops = Laptop::all();
        return view('index', [
            'laptops' => $laptops
        ]);
    }
}

?>