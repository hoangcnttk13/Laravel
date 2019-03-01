<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Session\Store;

class CustomerController extends Controller
{
   public function getIndex(Store $store){
    
    $customers = [
        ];
    
    if(!$store->has('customers')) {
        
        $customers = [[
            'id'=> 1,
            'name'=> 'Nguyễn Thế Hoàng',
            'phone'=> '26354761',
            'email'=> 'hoang@gmail.com'
        ],[
            'id'=> 2,
            'name'=> 'Nguyễn Thế Hoàng2',
            'phone'=> '26354761',
            'email'=> 'hoang2@gmail.com'
        ]
        ];

        $store->put('customers', $customers);
    } else {
        $customers = $store->get('customers');
    }

    $name = "Hoàng";
    
    return view('customer.index', compact(['name', 'customers']));
   }

   public function getaddCustomer(){
    $description = 'Thêm khách hàng';
    return view('customer.addCustomer', compact(['description']));
   }

   public function clickAdd (Store $store, Request $request){
        $id = $request->id;
        $name = $request->name;
        $phone = $request->phone;
        $email = $request->email;
        $customers = $store->get('customers');
        array_push($customers, [
            'id' => $id,
            'name' => $name,
            'phone' => $phone,
            'email' => $email
        ]);
        $store->put('customers', $customers);
        return redirect()->route('customer.index'); 
    }

    public function getXem(Store $store, $id){
        $customer = $store->get('customers')[$id-1];
        return view('customer.xem', compact(['customer']));
    }

    public function showSua(Store $store, $id){
        $customer = $store->get('customers')[$id-1];
        return view('customer.sua', compact(['customer']));
    }

     public function addSua(Store $store, Request $request){
        $customers = $store->get('customers');
        $id = $request->id;
        $name = $request->name;
        $phone = $request->phone;
        $email = $request->email;
        
        $customers [$id-1] = [
            'id' => $id,
            'name' => $name,
            'phone' => $phone,
            'email' => $email
        ];
        $name = "Hoàng";
        $store->put('customers',$customers);
        return view('customer.index', compact(['customers', 'name']));
    }

    public function delete(Store $store, $id){
        $customers = $store->get('customers');
        unset($customers[$id-1]);
        $name = "Hoàng";
        $store->put('customers',$customers);
        return view('customer.index', compact(['customers','name']));
    }
}
