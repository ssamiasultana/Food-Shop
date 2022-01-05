<?php

namespace App\Http\Controllers;
use Session;
use App\Http\Requests;
use App\Models\Menu;
use Illuminate\Http\Request;
use Gloudemans\Shoppingcart\Facades\Cart;
class MenuController extends Controller
{
    public function __construct(){
        $this->middleware('checklogin')->only('addToCart');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $menus=Menu::all();
        return view('menu',compact('menus'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $product= new Menu();
        $product->name= $request->has('name')? $request->get('name'):'';
        $product->price= $request->has('price')? $request->get('price'):'';
        $product->details= $request->has('details')? $request->get('details'):'';
      
        if($request->hasFile('image')){
            $files = $request->file('image');

            $imageLocation= array();
            $i=0;
            foreach ($files as $file){
                $extension = $file->getClientOriginalExtension();
                $fileName= 'product_'. time() . ++$i . '.' . $extension;
                $location= '/image/uploads/';
                $file->move(public_path() . $location, $fileName);
                $imageLocation[]= $location. $fileName;
            }

            $product->image= implode('|', $imageLocation);
            $product->save();
            return back()->with('success', 'Menu Successfully Saved!');
        } else{
            return back()->with('error', 'Menu was not saved Successfully!');
    }
    }
    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Menu  $menu
     * @return \Illuminate\Http\Response
     */
    public function show(Menu $menu)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Menu  $menu
     * @return \Illuminate\Http\Response
     */
    public function edit(Menu $menu)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Menu  $menu
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Menu $menu)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Menu  $menu
     * @return \Illuminate\Http\Response
     */
    public function destroy(Menu $menu)
    {
        //
    }
    public function addToCart(Request $request){
        $id= $request->has('id')? $request->get('id'): '';
        $name= $request->has('name')? $request->get('name'): '';
        $quantity= $request->has('quantity')? $request->get('quantity'): '';
        $price= $request->has('price')? $request->get('price'): '';

        
        $cart= Cart::content()->where('id', $id)->first();

        if(isset($cart)&& $cart!=null){
            $quantity= ((int)$quantity + (int)$cart->qty);
            $total= ((int)$quantity * (int)$price);
            Cart::update($cart->rowId, ['qty'=>$quantity, 'options'=> [ 'total'=> $total]]);
        } else{
            $total= ((int)$quantity * (int)$price);
            Cart::add($id, $name, $quantity, $price, [ 'total'=> $total]);
        }

        return redirect('/menu')->with('success', 'Menu Added to Your Cart!');
    }
    public function viewCart(){
        $carts= Cart::content();
        $subTotal= Cart::subtotal();

        return view('cart', compact('carts', 'subTotal'));
    }
    public function removeItem($rowId){
        Cart::update($rowId,0);
        return redirect('/cart')->with('success', 'Product Removed Successfully!');
    }

    public function addmenu(){
        return view('/add_menu');
    }
    public function login_check()
    {
    	return view('login');
    }
}
