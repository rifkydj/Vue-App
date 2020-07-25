<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;
use App\userData;
use Faker\Factory as Faker;
use Illuminate\Support\Str;

class vueController extends Controller
{
    public function showVue()
    {
        return View('vue');
    }
    public  function saveData(Request $request){
         $request->validate([
            'name' => 'required|max:255',
            'email' => 'required',
            'phone' => 'required',
            'dob' => 'required',
        ]);
        $userData =  new userData();
        $userData->name = $request->name;
        $userData->email = $request->email;
        $userData->phone_number = $request->phone;
        $userData->dob = $request->dob;
        $userData->save();

    }
    public function getData(){
        $userData = userData::orderBy('id','DESC')->get();
        $faker = Faker::create();
        $data =  [
            'name' => $faker->name,
            'email' => $faker->unique()->safeEmail,
            'contact' => $faker->e164PhoneNumber,
            'dob' => $faker->dateTimeThisCentury->format('Y-m-d')
        ];
        return array('user_data' => $userData , 'faker_data' => $data);
    }
    public function edit(Request $request){
        $id = $request->id;
        $userData =  userData::find($id);
        return $userData;
    }
    public function updateData(Request $request){
        $request->validate([
            'id' => 'required',
            'name' => 'required|max:255',
            'email' => 'required',
            'phone' => 'required',
            'dob' => 'required',
        ]);
        $userData =  userData::find($request->id);
        $userData->name = $request->name;
        $userData->email = $request->email;
        $userData->phone_number = $request->phone;
        $userData->dob = $request->dob;
        $userData->save();
    }
    public function delete(Request $request){
        $id = $request->id;
        $userData =  userData::destroy($id);
    }
}
