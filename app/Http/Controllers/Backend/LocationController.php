<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Helpers\FlashMsg;
use App\Models\City;
use App\Models\Area;
use App\Models\Country;

class LocationController extends Controller
{
    public function service_city(){
        $service_cities = ServiceCity::with('countryy')->latest()->get();
        $countries = Country::where('status',1)->get();
        return view('backend.pages.location.city',compact('service_cities','countries'));
    }

    public function add_city(Request $request)
    {
        if($request->isMethod('post')){
            $request->validate([
                'service_city'=> 'required|max:191|unique:service_cities',
                'country_id'=> 'required',
            ]);

            ServiceCity::create([
               'service_city' => $request->service_city,
               'country_id' => $request->country_id,
           ]);

           return redirect()->back()->with(FlashMsg::item_new('New City Added'));
        }

        $countries = Country::select('id','country')->where('status',1)->get();
        return view('backend.pages.location.add_city',compact('countries'));
    }

    public function edit_city(Request $request)
    {
        $request->validate([
            'up_service_city'=> 'required|max:191|unique:service_cities,service_city,'.$request->up_id,
            'up_country_id'=> 'required',
        ]);

        ServiceCity::where('id',$request->up_id)->update([
            'service_city'=>$request->up_service_city,
            'country_id'=>$request->up_country_id,
        ]);
        return redirect()->back()->with(FlashMsg::item_new('City Update Success'));
    }

    public function change_status_city($id)
    {
        $city = ServiceCity::select('status')->where('id',$id)->first();
        if($city->status==1){
            $status = 0;
        }else{
         $status = 1;
        }
        ServiceCity::where('id',$id)->update(['status'=>$status]);
        return redirect()->back()->with(FlashMsg::item_new(' Status Change Success'));
    }

     public function delete_city($id)
     {
        ServiceCity::find($id)->delete();
        return redirect()->back()->with(FlashMsg::item_new(' City Deleted Success'));
    }

    public function bulk_action_city(Request $request)
    {
        ServiceCity::whereIn('id',$request->ids)->delete();
        return response()->json(['status' => 'ok']);
    }


    public function area()
    {
        $service_areas = ServiceArea::with('city','country')->paginate(10);
        $cities = ServiceCity::all();
        $countries = Country::all();
        return view('backend.pages.location.area',compact('service_areas','cities','countries'));
    }

    public function add_area(Request $request)
    {
        if($request->isMethod('post')){
            $request->validate([
                'service_area'=> 'required|max:191|unique:service_areas',
                'service_city_id'=> 'required',
                'country_id'=> 'required',
            ]);

            ServiceArea::create([
               'service_area' => $request->service_area,
               'service_city_id' => $request->service_city_id,
               'country_id' => $request->country_id,
           ]);

           return redirect()->back()->with(FlashMsg::item_new('New Service Area Added'));
        }
        $cities = ServiceCity::all();
        $countries = Country::all();
        return view('backend.pages.location.add_area',compact('cities','countries'));
    }

    public function edit_area(Request $request)
    {
        $request->validate([
            'up_service_area'=> 'required|max:191|unique:service_areas,service_area,'.$request->up_id,
            'up_service_city_id'=> 'required',
            'up_country_id'=> 'required',
        ]);

        ServiceArea::where('id',$request->up_id)->update([
            'service_area'=>$request->up_service_area,
            'service_city_id'=>$request->up_service_city_id,
            'country_id'=>$request->up_country_id,
        ]);

        return redirect()->back()->with(FlashMsg::item_new('Service Area Update Success'));
    }

    public function change_status_area($id)
    {
        $location = ServiceArea::select('status')->where('id',$id)->first();
        if($location->status==1){
            $status = 0;
        }else{
         $status = 1;
        }
        ServiceArea::where('id',$id)->update(['status'=>$status]);
        return redirect()->back()->with(FlashMsg::item_new(' Status Change Success'));
    }

    public function delete_area($id)
    {
        ServiceArea::find($id)->delete();
        return redirect()->back()->with(FlashMsg::item_new(' Service Area Deleted Success'));
    }

    public function bulk_action_area(Request $request)
    {
        ServiceArea::whereIn('id',$request->ids)->delete();
        return response()->json(['status' => 'ok']);
    }

    public function country(){
        $countries = Country::latest()->get();


        return view('backend.pages.location.country',compact('countries'));
    }

    public function add_country(Request $request)
    {      

        if($request->isMethod('post')){
            $request->validate([
                'name'=> 'required|unique:countries|max:191',
            ]);
          $country =  Country::create([
               'name' => $request->name,
           ]);

            return response()->json([               
                'message' => 'Country Add Success',
                'country' =>  $country,
            ]);

        }

        return view('backend.pages.location.add_country');
    }

    public function edit_country(Request $request)
    {       
        $country = Country::findOrFail($request->id);
        return response()->json([   
            'country' =>  $country,
        ]);
    }
    
    public function update_country(Request $request)
    {
    
     
        $request->validate([
            'name'=> 'required|max:191|unique:countries,name,'.$request->id,
        ]);       
       
            $country_id =  Country::where('id',$request->id)->update([
                'name'=>$request->name,
            ]);   

            $country = Country::find($country_id);     

            return response()->json([         
                'status' => 200,
                'message' => 'Country Update Success',
                'country' =>  $country,
            ]);       
    }

    public function delete_country($id)
    {    
        Country::find($id)->delete();        
        return response()->json([         
            'status' => 200,
            'message' => 'Country Delete Successfully' ,           
        ]);        
    }

    public function change_status_country($id)
    {
        $country = Country::select('status')->where('id',$id)->first();
        $country->status==1 ? $status=0 : $status=1;
        Country::where('id',$id)->update(['status'=>$status]);
        return redirect()->back()->with(FlashMsg::item_new(' Status Change Success'));
    }  

    public function bulk_action_country(Request $request){
        Country::whereIn('id',$request->ids)->delete();
        return response()->json(['status' => 'ok']);
    }
}
