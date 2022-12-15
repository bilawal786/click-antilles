<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Model\ShipmentOption;
use Illuminate\Http\Request;

class ShippingOptionController extends Controller
{
    public function list(Request $request){
        $shipments = ShipmentOption::all();
        return view('admin-views.shipment-options.list',compact('shipments'));
    }

    public function create(){
        return view('admin-views.shipment-options.create');
}

    public function store(Request $request){
        $shippingOption = new ShipmentOption();
        $shippingOption->title = $request->title;
        $shippingOption->description = $request->description;
        $shippingOption->price = $request->price;
        $shippingOption->duration = $request->duration;
        $shippingOption->location = $request->location;
        $shippingOption->save();
        return redirect('admin/shippingOption/list');
    }

    public function edit($id){
        $shipmentOption = ShipmentOption::find($id);
        return view('admin-views.shipment-options.edit',compact('shipmentOption'));
    }

    public function update(Request $request, $id){
        $shippingOption = ShipmentOption::find($id);
        $shippingOption->title = $request->title;
        $shippingOption->description = $request->description;
        $shippingOption->price = $request->price;
        $shippingOption->duration = $request->duration;
        $shippingOption->location = $request->location;
        $shippingOption->save();

        return redirect('admin/shippingOption/list');
    }

    public function delete(Request $request){
        $shipmentOption = ShipmentOption::find($request->id);
        $shipmentOption->delete();
    }

}
