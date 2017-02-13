<?php

namespace Petros\Http\Controllers\Admin;

use Illuminate\Http\Request;

use Petros\Http\Requests;
use Petros\Http\Controllers\Controller;
use Petros\Order;
use Petros\OrderItem;

class OrderController extends Controller
{
    public function index()
    {
    	$orders = Order::orderBy('id', 'desc')->paginate(5);
    	//dd($orders);
    	return view('admin.order.index', compact('orders'));
    }

    public function getItems(Request $request)
    {
    	$items = OrderItem::with('product')->where('order_id', $request->get('order_id'))->get();
    	return json_encode($items);
    }

    public function destroy($id)
    {
        $order = Order::findOrFail($id);
        
        $deleted = $order->delete();
        
        $message = $deleted ? 'Pedido eliminado correctamente!' : 'El Pedido NO pudo eliminarse!';
        
        return redirect()->route('order.index')->with('message', $message);
    }
}
