<?php

namespace App\Http\Controllers;

use ErrorException;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class ProductController extends Controller
{
    private static $products = [
        ["id"=>"1", "name"=>"TV", "description"=>"Best TV", "price"=>1000],
        ["id"=>"2", "name"=>"iPhone", "description"=>"Best iPhone", "price"=>1200],
        ["id"=>"3", "name"=>"Chromecast", "description"=>"Best Chromecast", "price"=>35],
        ["id"=>"4", "name"=>"Glasses", "description"=>"Best Glasses", "price"=>100]
    ];

    public function index(): View
    {
        $viewData = [];
        $viewData["title"] = "Products - Online Store";
        $viewData["subtitle"] = "List of products";
        $viewData["products"] = ProductController::$products;

        return view('product.index')->with("viewData", $viewData);
    }

    public function show(string $id): View | RedirectResponse
    {
        try {
            $viewData = [];
            $product = ProductController::$products[$id-1];
            $viewData["title"] = $product["name"]." - Online Store";
            $viewData["subtitle"] = $product["name"]." - Product information";
            $viewData["product"] = $product;

            return view('product.show')->with("viewData", $viewData);
        } catch (ErrorException $e) {
            return redirect()->route('home.index');
        }
    }

    public function create(): View
    {
        $viewData = [];
        $viewData["title"] = "Create Product";

        return view('product.create')->with("viewData", $viewData);
    }

    public function save(Request $request): View
    {
        $request->validate([
            "name" => "required",
            "price" => "required|min:1|numeric",
        ]);

        $viewData = [];
        $viewData["title"] = "Product Created";

        return view('product.success')->with("viewData", $viewData);
    }
}
