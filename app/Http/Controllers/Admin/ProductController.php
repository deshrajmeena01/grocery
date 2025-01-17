<?php

namespace App\Http\Controllers\Admin;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
class ProductController extends Controller
{
    public function Adminproduct(Request $request)
    {

        $status = $request->status;
        
        if($status !=null)
        {
             $products = DB::table('product')->where('status',$status)->get();
        }else{
            $products = DB::table('product')->get();
        }

        return view('Admin.Adminproduct', compact('products'));

    }

    public function Addproduct(Request $request)
    {
        // dd('ddd');
         $rules =[
            'name' => 'required|string|max:255',
            'category' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif',
            'selling' =>'required',
            'discount' =>'required',
            // 'rating'=>'required',
            'description'=>'required',
        ];
        $Validate = Validator::make($request->all(), $rules);

        if (!$Validate->fails()) {
            $date = now();
            
                if($request->hasfile('image')){

                    $image = $request->file('image');
                    $imageName = time() . '.' . $image->getClientOriginalName();
                    $image->move(public_path('product'), $imageName);
                    $imagePath = 'product/' . $imageName;
                   

                    $data =[
                        'name' => $request->input('name'),
                        'category' => $request->input('category'),
                        'image'=>$imagePath,
                        'selling'=> $request->input('selling'),
                        'discount'=>$request->input('discount'),
                        'rating'=>$request->input('rating'),
                        'description'=>$request->input('description'),
                        'created_at' => $date,
                        'updated_at' => now(),
                    ];


                    $result = DB::table('product')->insert($data);

                    if($result>0){
                        return response()->json(['status_code'=>1, 'message'=>'Product added successfully']);
                    }
                        
                    else{
                        return response()->json(['status_code'=>2, 'message'=>'Unable to add product']);
                    }  

                }
        }

        else {
            return response()->json(['status_code' => 3, 'message' => $Validate->errors()->first()]);
        }
    }


    public function Active(Request $request)
    {   
        $id =$request->input('id');

        if($id !=""){
            $data=[
                'status'=>1,
            ];

            $result = DB::table('product')->where('id',$id)->update($data);

            if($result>0){
                return response()->json(['status_code'=>1, 'message'=>'status change successfully']);
            }else{
                return response()->json(['status_code'=>0, 'message'=>'unbale to   change status ']);
            }

        }else{
            return response()->json(['status_code'=>3, 'message'=>'id not found ']);

        }
    }

    public function InActive($id)
    {
        if(!empty($id)){
            $data=[
                'status' =>2,

            ];
            $result = DB::table('product')->where('id',$id)->update($data);

            if($result>0){
                return response()->json(['stetus_code'=>1, 'message'=>'status change successfully']);
            }else{
                return response()->json(['stetus_code'=>0, 'message'=>'unbale to   change status ']);
            }
        }else{
            return response()->json(['stetus_code'=>3, 'message'=>'id not found ']);
        }
    }

    public function delete ($id){
        // dd($id);
        if($id){
            $data= DB::table('product')->where('id',$id)-> delete();
            if($data>0){
                return redirect()->back();
            }else{
                return response()->json(['stetus_code'=>0, 'message'=>'unbale to   delete record ']);
            }
        }else{
            return response()->json(['stetus_code'=>3, 'message'=>'id not found ']);           
        }

    }

    public function Editproduct(Request $request)
    {
        // dd($request->id);
        $id =$request->input('id');
        if($id !=""){

            $checkedId = DB::table('product')->where('id',$id)->exists();

            if($checkedId>0){
                $record = DB::table('product')->find($id);
                return response()->json(['data'=>$record]);

            }else{
                return response()->json(['stetus_code'=>0, 'message'=>'invalid id found']);
            }

        }else{
            return response()->json(['stetus_code'=>2, 'message'=>'id is required ']);  
        }
    }

    public function ProductUpdate(Request $request)
    {
        $rules = [
            'updatename' => 'required|string|max:255',
            'category' => 'required',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif',
        ];
    
        $Validate = Validator::make($request->all(), $rules);
    
        if (!$Validate->fails()) {
            $date = now();
            $imagePath = null; 
    
            if ($request->hasFile('image')) {
                $image = $request->file('image');
                $imageName = time() . '.' . $image->getClientOriginalExtension();
                $image->move(public_path('product'), $imageName);
                $imagePath = 'product/' . $imageName;
            }
    
            $data = [
                'name' => $request->input('updatename'),
                'category' => $request->input('category'),
                'created_at' => $date,
            ];
    
            if ($imagePath) {
                $data['image'] = $imagePath;
            }
    
            $id = $request->idfield;
            $result = DB::table('product')->where('id', $id)->update($data);
    
            if ($result > 0) {
                return response()->json(['status_code' => 1, 'message' => 'Data updated successfully']);
            } else {
                return response()->json(['status_code' => 2, 'message' => 'Unable to update data']);
            }
        } else {
            return response()->json(['status_code' => 3, 'message' => $Validate->errors()->first()]);
        }
    }
    

}
 
                 
            

    

    

