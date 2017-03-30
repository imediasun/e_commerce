<?php

namespace App\Http\Controllers;

use App\MailService;
use Illuminate\Http\Request;
use App\Good;
use App\Http\Libraries\Display_lib;
use App\Mail\OrderShipped;
use Illuminate\Support\Facades\Mail;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Session;
use App\Cart;
use Auth;
class ShopingCartController extends Controller
{
    protected $id;
    protected $qnt;
    protected $product;

    //
    public function addToCart($id){

        if(!Auth::guest()) {
        
            $good = Good::find($id);
            $this->product = $good['original'];
            $this->product['qnt'] = (int)$_GET['qnt'];

            if (Session::has('cart')) {
                $oldCart = session()->get('cart');
            } else {
                $oldCart = null;
            }
            $cart = new Cart($oldCart);
            $cart->add($this->product, $this->product['id']);
            session()->put('cart',$cart);
            session()->save();
            return redirect()->route('good', $id);
        }
        else{
            return view('auth.login');
        }
    }

    public function getCart(){
    
     if(!Session::has('cart')){

         $path='main_page';

         return view('shop.shoping_cart',['products'=> null]);



        }
        $data_nav['menu']=MenuController::index('categories');
        $oldCart = session()->get('cart');
        $cart=new Cart($oldCart);
        $path='shoping_cart';
        $data_content['products']=$cart->items;
        $data_content['totalPrice']=$cart->totalPrice;
        return Display_lib::cart($path,$data_nav,$data_content);
    }

    public function getCheckout(Request $request){
       if(!Session::has('cart')){
            return view('shop.shoping_cart',['products'=> null]);
        }
        $oldCart=session()->get('cart');
        $cart=new Cart($oldCart);
        $total = $cart->totalPrice;
        $mail['subject']='Оформлення заказу';
        $mail['message']='Ви оформили наступний заказ';
        

        // Ship order...

        Mail::to($request->user())->send(new OrderShipped($cart));
        /*return view('shop.checkout', ['total'=>$total]);*/
        return view('shop.checkout');
        
    }
    public function delete_product_by_one($id){


        if(!Session::has('cart')){
            return view('shop.shoping_cart',['products'=> null]);


        }
        $oldCart = session()->get('cart');
        $cart=new Cart($oldCart);
        $cart->delete_by_one($cart->items[$id], $id);
        session()->put('cart',$cart);
        session()->save();
        return view('shop.shoping_cart',['products'=> $cart->items, 'totalPrice'=>$cart->totalPrice]);
    }

    public function delete_products($id){
        if(!Session::has('cart')){
        return view('shop.shoping_cart',['products'=> null]);
        }
        $oldCart = session()->get('cart');
        $cart=new Cart($oldCart);
        $cart->delete_all($cart->items[$id], $id);
        session()->put('cart',$cart);
        session()->save();
        return view('shop.shoping_cart',['products'=> $cart->items, 'totalPrice'=>$cart->totalPrice]);
    }

}
