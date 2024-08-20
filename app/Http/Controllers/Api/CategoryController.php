<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;

class CategoryController extends Controller
{
    //

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
    public function fetch_all_categories(){
        $all_categories = Category::where('status',true)->get();

        if(!$all_categories){
            $this->result->status = "error";
            $this->result->status_code = 400;
            $this->result->message = "Sorry we could not fetch the categories";
            return response()->json( $this->result );
        }

        $this->result->status = "success";
        $this->result->status_code = 200;
        $this->result->message = "Categories fetched successfully";
        $this->result->data = $all_categories;
        return response()->json( $this->result );
    }

    public function edit_category(Request $request){

        $validator = Validator::make( $request->all(), [
            'name' => 'required'
        ] );

        if ( $validator->fails() ) {
            $this->result->status_code = 422;
            $this->result->message = $validator->errors();
            $this->result->status = "error";
            return response()->json( $this->result );
        } else {
            $id = $request->input('id');

            $fetch_Category = Category::find($id);

            if(!$fetch_Category){
                $this->result->status = "error";
                $this->result->status_code = 400;
                $this->result->message = "Sorry we could not find the category";
                return response()->json( $this->result );
            }
            
            $name = $request->input('name');
            $description = $request->input('description') ? $request->input('description') : $fetch_Category->description;
            $img_url = $request->input('img_url') ? $request->input('img_url') : $fetch_Category->img_url;
            $status = $request->input('status') ? $request->input('status') : $fetch_Category->status;
            
            $edit_category = $fetch_Category->update([
                'name' => $name,
                'description' => $description,
                'img_url' => $img_url,
                'status' => $status
            ]);

            if(!$edit_category){
                $this->result->status = "error";
                $this->result->status_code = 400;
                $this->result->message = "Sorry we could not edit the category";
                return response()->json( $this->result );
            }

            $this->result->status = "success";
            $this->result->status_code = 200;
            $this->result->message = "Categories Edited successfully";
            $this->result->data = $edit_category;
            return response()->json( $this->result );
        }
    }

    public function add_category(Request $request){
        $validator = Validator::make( $request->all(), [
            'name' => 'required'
        ] );

        if ( $validator->fails() ) {
            $this->result->status_code = 422;
            $this->result->message = $validator->errors();
            $this->result->status = "error";
            return response()->json( $this->result );
        } else {

            $img_path = '';

            if ($request->file('img') &&  $request->file( 'img' )->isValid()) {
                $img_extension = $request->file( 'img' )->extension();
                $img_filename = $request->file( 'img' )->getClientOriginalName();
                $new_img_filename = Str::slug( $img_filename . date( 'Y-m-d' ) ) . '.' . $img_extension;
                $img_path = $request->file( 'img' )->storeAs( 'public/img', $new_img_filename );
            } 
            
                    
                    $name = $request->input('name');
                    $description = $request->input('description') ? $request->input('description') : null;
                    $status = $request->input('status') ? $request->input('status') : true;
            
                    $create_category = Category::create([
                        'name' => $name,
                        'description' => $description,
                        'status' => $status,
                        'img_url' => $img_path ? env( 'APP_URL' ) . Storage::url( $img_path ) : null
                    ]);

                    if ( $create_category ) {
                        $this->result->status = true;
                        $this->result->status_code = 200;
                        $this->result->message = 'Category Successfully Saved';
                        return response()->json( $this->result );
                    } else {
                        $this->result->status = true;
                        $this->result->status_code = 404;
                        $this->result->message = 'An Error Ocurred, Category saving failed';
                        return response()->json( $this->result );
                    }
        }
    }

    public function delete_category($id){
        if ( !$id) {
            $this->result->status_code = 422;
            $this->result->message = ['id' => "Sorry id field is required"];
            $this->result->status = "error";
            return response()->json( $this->result );
        } else {

            $fetch_Category = Category::where('id',$id)->where('status',1)->first();
            

            if(!$fetch_Category){
                $this->result->status_code = 404;
                $this->result->message = "Sorry the category doesnt exist or has already been deleted";
                $this->result->status = "error";
                return response()->json( $this->result );
            }

            $delete_category = $fetch_Category->update([
                'status' => false
            ]);

            if(!$delete_category){
                $this->result->status_code = 422;
                $this->result->message = "Sorry we could not delete the category";
                $this->result->status = "error";
                return response()->json( $this->result );
            }

            $this->result->status = "success";
            $this->result->status_code = 200;
            $this->result->message = "Categories deleted successfully";
            return response()->json( $this->result );
        }
    }
}
