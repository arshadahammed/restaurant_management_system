<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;  



use App\Models\User;
use App\Models\food;
use App\Models\reservation;
use App\Models\Foodchef;
use App\Models\order;


class AdminController extends Controller
{
   public function users(){
        $data= user::all();
        return view('admin.users',compact('data'));
    }


    public function deleteuser($id){
     
        $data=user::find($id);
        $data->delete();
        return redirect()->back();
    }

     public function deleteMenu($id){
     
        $data=food::find($id);
        $data->delete();
        return redirect()->back();
    }




     public function foodMenu(){
         $data = food::all();
     
        return view("admin.foodmenu",compact('data'));
    }

    public function updateView($id){
        $data = food::find($id);
        return view("admin.updateview",compact('data'));
         
    }

     public function update(Request $request, $id){
        $data = food::find($id);
         $image = $request->image;
        $imagename=time().'.'.$image->getClientOriginalExtension();
        $request->image->move('foodimage',$imagename);
        $data->image=$imagename;

        
        $data->title=$request->title;
        $data->price=$request->price;
        $data->description=$request->description;
        $data->save();
        return redirect()-> back();
      
         
    }






     public function uploadFood(Request $request){
     
        $data = new food;
        $image = $request->image;
        $imagename=time().'.'.$image->getClientOriginalExtension();
        $request->image->move('foodimage',$imagename);
        $data->image=$imagename;

        
        $data->title=$request->title;
        $data->price=$request->price;
        $data->description=$request->description;
        $data->save();
        return redirect()-> back();

    }


    public function reservation(Request $request){
        $data = new reservation;
        $data->name=$request->name;
        $data->email=$request->email;
        $data->phone=$request->phone;
        $data->guest=$request->guest;
        $data->date=$request->date;
        $data->time=$request->time;
        $data->phone=$request->phone;
        $data->message=$request->message;
        $data->save();
        return redirect()-> back();
      
         
    }

    public function viewReservation (){
    
         if (Auth::id()){

         $data= reservation::all();
         return view('admin.adminreservation',compact('data'));


         }else{

            return redirect('login');
         }

       
    }

     public function viewchef (){

        if (Auth::id()){
         $data=foodchef::all();
        return view('admin.adminchef',compact("data"));
        }
        else{

           return redirect('login'); 
        }
        
    }

    public function uploadChef(Request $request){
        $data = new foodchef;
        $image=$request->image;
        $imagename=time().'.'.$image->getClientOriginalExtension();
        $request->image->move('chefimage',$imagename);
        $data->image=$imagename;

          $data->name=$request->name;
           $data->speciality=$request->speciality;
           $data->save();
           return redirect()->back();
    }

    public function updateChef($id){
        $data=foodchef::find($id);
        return view("admin.updatechef",compact("data"));

    }

     public function updatefoodChef(Request $request, $id){
        $data=foodchef::find($id);
        
        $image = $request->image;
        if ($image) {
        $imagename=time().'.'.$image->getClientOriginalExtension();
        $request->image->move('chefimage',$imagename);
        $data->image=$imagename;
        }
        

        $data->name = $request->name;
        $data->speciality = $request->speciality;
       
          $data->save();
          return redirect()->back();

    }

    public function deleteChef($id){

          $data=foodchef::find($id);
        $data->delete();
        return redirect()->back();


    }

    public function orders(){
        $data=order::all();
        return view('admin.orders', compact('data'));
       
   }

   public function search(Request $request){

    $search = $request->search;

        $data=order::where('name', 'Like' ,'%', $search, '%'->get() );
        return view('admin.orders', compact('data'));

   }



}
