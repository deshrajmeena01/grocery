<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;

class UserCartController extends Controller
{
    public function Addcart(Request $request)
    {
    
        $user_id = Auth::id();
        $date = now();

        $productId = $request->id;
        
        $product = DB::table('user_cart')->where('user_id', $user_id)->where('product_id', $productId)->first();
        // dd($product);
        $data = [
            'user_id' => $user_id,
            'product_id' => $productId,
            'quantity' => 1,
            'created_at' => $date,
        ];
        if (!$product) {
            $result = DB::table('user_cart')->insert($data);
            
            if ($result > 0) {
                return response()->json(['status_code' => 0, 'message' => 'insert successfully']);
            } else {
                return response()->json(['status_code' => 1, 'message' => 'Error while adding to cart']);
            }

        } else {
            $newQuantity = $product->quantity + 1;
            $updatedCart = [
                'quantity' => $newQuantity,
                'updated_at' => $date,
            ];
            $cartUpdated = DB::table('user_cart')->where('user_id', $user_id)->where('product_id', $productId)->update($updatedCart);
            // dd($cartUpdated);
            if ($cartUpdated > 0) {
                return response()->json(['status_code' => 0, 'message' => 'Quantity increased successfully']);
            } else {
                return response()->json(['status_code' => 1, 'message' => 'Error while updating quantity']);
            }
        }

    }




    public function  productdesc(Request $request){
        $producttId = $request->id;
        // dd( $producttId);
        
        if($producttId){
            $userid = Auth::user()->id;
            $cartitam = DB::table('user_cart')->where('id',$producttId)->first();

            if($cartitam->quantity >1){
                $minquantity = DB::table('user_cart')->where('id',  $producttId)->update(['quantity'=>$cartitam->quantity - 1]);
                if(  $minquantity > 0){
                    return response()->json(['status_code'=>1, 'message'=>'Quantity Descrease successfully']);
                }else{
                    return response()->json(['status_code'=>2, 'message'=>'unable to  Descrease quantity']);
                }
            }else{

                $delete = DB::table('user_cart')->where('id', $producttId)->delete();
                
                
                if($delete > 0){
                    return response()->json(['status_code'=>1, 'message'=>'Quantity Deleted successfully']);
                }else{
                    return response()->json(['status_code'=>2, 'message'=>'unable to  Deleted Quantity']);
                }
            }
        }else{
            return response()->json(['status_code'=>2, 'message'=>'Product Id Not Found']);

        }

    }


    public function  productInc(Request $request){
        $producttID = $request->id;
        // dd( $producttID);
        
        if($producttID){
            $userid = Auth::user()->id;
            $cartitam = DB::table('user_cart')->where('id',$producttID)->first();

            if($cartitam->quantity >=1){
                $minquantity = DB::table('user_cart')->where('id',  $producttID)->update(['quantity'=>$cartitam->quantity + 1]);
                if(  $minquantity > 0){
                    return response()->json(['status_code'=>1, 'message'=>'Quantity Increase successfully']);
                }else{
                    return response()->json(['status_code'=>2, 'message'=>'unable to  Increase quantity']);
                }
            }
        }else{
            return response()->json(['status_code'=>2, 'message'=>'Product Id Not Found']);

        }

    }


    public function  deletecart(Request $request)
    {
        $producttID = $request->id;
        $usreid = Auth:: user ()->id;
        $deleted = DB::table('user_cart')->where('id', $producttID)->delete();

        if($deleted > 0){

            return response()->json(['status_code'=>1, 'message'=>'Deleted successfully']);
        }else{
            return response()->json(['status_code'=>2, 'message'=>'  unable to Deleted successfully']);
        }

    }

    public function Checkout(){


        $user_id =Auth::user()->id;
        $user_data = DB::table('users')->where('id',$user_id)->first();
        return view('User.Checkout',compact('user_data'));
    }


    public function primary_mobile_update(Request $request)
    {
        $rules =[
            'primary' =>'required|numeric|unique:users,mobile',
        ];

        $validator = Validator::make($request->all(), $rules);

        if(!$validator->fails()){

            $user_id = Auth::user()->id;
            $time=now();
            $data = [
                'mobile'=>$request->input('primary'),
                'updated_at'=>$time,
            ];

            $update = DB::table('users')->where('id',$user_id)->update($data);

            if($update>0)
            {
                return response()->json(['sattus_code'=>1,'message'=>'Primary number Set']);

            }else{
                return response()->json(['sattus_code'=>1,'message'=>'Unable to set Primary']);
            }

        }else{
            return response()->json(['sattus_code'=>3,'message'=>$validator->errors()->first()]);
        }
    }

    public function secondary_mobile_update(Request $request)
    {
        $rules =[
            'secondary' =>'required|numeric',
        ];

        $validator = Validator::make($request->all(), $rules);

        if(!$validator->fails()){

            $user_id = Auth::user()->id;
            $time=now();
            $data = [
                'mobile_second'=>$request->input('secondary'),
                'updated_at'=>$time,
            ];

            $update = DB::table('users')->where('id',$user_id)->update($data);

            if($update>0)
            {
                return response()->json(['sattus_code'=>1,'message'=>'Secondary number Set']);

            }else{
                return response()->json(['sattus_code'=>1,'message'=>'Unable to set Secondary']);
            }

        }else{
            return response()->json(['sattus_code'=>3,'message'=>$validator->errors()->first()]);
        }
    }
}
