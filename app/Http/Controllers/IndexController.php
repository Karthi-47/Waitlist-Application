<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Register;
use App\Models\orders;
use App\Models\contact;
use App\Models\subscribe;


class IndexController extends Controller
{
    public function index()
    {
        $details = orders::get();
        return view('index',['details'=>$details]);
    }

    public function register(Request $request)
    {
        //dd($request);
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
            'cnfpassword' => 'required',
        ]);


        $reg = new register;
        $reg->email = $request->email;
        $reg->password = $request->password;
        $reg->cnfpassword = $request->cnfpassword;
        $reg->save();
        return \redirect('orders');
    }

    public function orders(Request $request)
    {
        //dd($request);
        $request->validate([
            'fname' => 'required',
            'lname' => 'required',
            'email' => 'required|email',
            'phone' => 'required|numeric',
            'country' => 'required',
            'state' => 'required',
            'city' => 'required',
            'pincode' => 'required|numeric',
        ]);


        $store = new orders;
        $store->fname = $request->fname;
        $store->lname = $request->lname;
        $store->email = $request->email;
        $store->phone = $request->phone;
        $store->country = $request->country;
        $store->state = $request->state;
        $store->city = $request->city;
        $store->pincode = $request->pincode;
        $store->save();
        return \redirect('thank');
    }

    public function contact(Request $request)
    {
        //dd($request);
        $request->validate([
            'namecn' => 'required',
            'emailcn' => 'required|email',
            'messagecn' => 'required',
        ]);


        $reg = new contact;
        $reg->namecn = $request->namecn;
        $reg->emailcn = $request->emailcn;
        $reg->messagecn = $request->messagecn;
        $reg->save();
        return back();
    }

    public function subscribe(Request $request)
    {
        //dd($request);
        $request->validate([
            'emailsub' => 'required',
        ]);


        $sub = new subscribe;
        $sub->emailsub = $request->emailsub;
        $sub->save();
        return back();
    }

    //Getting Values
    public function waitlist(){
        $data = orders::get();
        return view('waitlist',compact('data'));
    }

    public function admin(){
        $data = orders::get();
        return view('admin',compact('data'));
    }

    public function edit($id){
        $details=orders::where('id', $id)->first();
        return view('list.edit', ['details'=>$details]);
    }

    public function update(Request $request ,$id){

        $request->validate([
            'fname' => 'required',
            'lname' => 'required',
            'email' => 'required|email', 
            'phone' => 'required|numeric',
            'country' => 'required',
            'state' => 'required',
            'city' => 'required',
            'pincode' => 'required|numeric',
        ]);
        $details=orders::where('id', $id)->first();

        $store = orders::find($details->id);
        $store->fname = $request->fname;
        $store->lname = $request->lname;
        $store->email = $request->email;
        $store->phone = $request->phone;
        $store->country = $request->country;
        $store->state = $request->state;
        $store->city = $request->city;
        $store->pincode = $request->pincode;
        $store->save();
        return \redirect('admin');
    }

        public function delete($id){
            $details = orders::where('id',$id)->first();
            $details->delete();
            return \redirect('admin');
        }
    
}
