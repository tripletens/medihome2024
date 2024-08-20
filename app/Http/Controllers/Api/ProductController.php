<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Products;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public $result = [];

    public function __construct(){

        $this->result = ( object ) array(
            'status' => false,
            'status_code' => null,
            'message' => null,
            'data' => ( object ) null,
            'token' => null,
            'debug' => null
        );
    }
    // fetch all products by category

    public function fetch_all_products_by_category(){
        $all_categories = Category::where('status',1)->get();

        $all_products_by_Category = []; 

        foreach($all_categories as $key => $category){
            $all_products_by_Category[$category['name']] = Products::where('category_id',$category->id)->limit(5)->get();
        }

        $this->result->status = "success";
        $this->result->status_code = 200;
        $this->result->data = $all_products_by_Category;
        $this->result->message = "Products fetched by categories successfully";
        return response()->json( $this->result );
    }

    // fetch all products under a category 

    public function products_by_category($category_id){
        $products = Products::where('category_id',$category_id)->get();

        if(!$products){
            $this->result->status = "error";
            $this->result->status_code = 400;
            $this->result->message = "Sorry we could not fetch the products under the category";
            return response()->json( $this->result );
        }

        $this->result->status = "success";
        $this->result->status_code = 200;
        $this->result->data = $products;
        $this->result->message = "Products in this category fetched successfully";
        return response()->json( $this->result );
    }

    // view one product 

    public function fetch_one_product($product_id){
        $products = Products::where('id',$product_id)->where('status',1)->get();

        if(!$products || count($products) == 0){
            $this->result->status = "error";
            $this->result->status_code = 400;
            $this->result->message = "Product not available at the moment";
            return response()->json( $this->result );
        }

        $this->result->status = "success";
        $this->result->status_code = 200;
        $this->result->data = $products;
        $this->result->message = "Products in this category fetched successfully";
        return response()->json( $this->result );
    }
    // search for product with category 

    public function search_product_with_category($value,$category_id){
        $product = Products::where('products.name','LIKE','%' .$value. '%')
                    ->where('category_id',$category_id)
                    ->join('categories','products.category_id', '=', 'categories.id')
                    ->select('categories.name as category_name', 'products.*')
                    ->orderBy('products.id','desc')
                    ->get();

        if(!$product || count($product) == 0){
            $this->result->status = "error";
            $this->result->status_code = 400;
            $this->result->message = "Product not available at the moment";
            return response()->json( $this->result );
        }

        $this->result->status = "success";
        $this->result->status_code = 200;
        $this->result->data = $product;
        $this->result->message = "Products in this category fetched successfully";
        return response()->json( $this->result );
    }

    // search product by name

    public function search_product_with_name($value){
        $product = Products::where('products.name','LIKE','%' .$value. '%')
                    ->join('categories','products.category_id', '=', 'categories.id')
                    ->select('categories.name as category_name', 'products.*')
                    ->orderBy('products.id','desc')
                    ->get();

        if(!$product || count($product) == 0){
            $this->result->status = "error";
            $this->result->status_code = 400;
            $this->result->message = "Product not available at the moment";
            return response()->json( $this->result );
        }

        $this->result->status = "success";
        $this->result->status_code = 200;
        $this->result->data = $product;
        $this->result->message = "Products with this name fetched successfully";
        return response()->json( $this->result );
    }
    

}
