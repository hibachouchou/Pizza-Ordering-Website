<?php

namespace App\Http\Controllers;
use App\Models\Pizza;
use App\Models\Order;
use App\Models\User;
use Illuminate\Http\Request;

class PizzaController extends Controller
{
    //return  pizzas list
    public function index(){
        $pizzas=Pizza::all();
        return view('welcome',['pizzas'=> $pizzas]);
    }

    //show pizza details
    public function show_pizza_details(string $id){
        $toppings = [
            "Classic Pizza Toppings" => [
                "Pepperoni",
                "Mushrooms",
                "Green bell peppers",
                "Onions",
                "Italian sausage"
            ],
            "Vegetarian Pizza Toppings" => [
                "Black olives",
                "Tomatoes",
                "Spinach",
                "Artichoke hearts",
                "Red onions"
            ],
            "Meat Lover's Pizza Toppings" => [
                "Bacon",
                "Ground beef",
                "Chicken (grilled or roasted)",
                "Salami"
            ],
            "Gourmet Pizza Toppings" => [
                "Prosciutto",
                "Arugula",
                "Sun-dried tomatoes",
                "Gorgonzola or feta cheese",
                "Truffle oil"
            ],
            "Seafood Pizza Toppings" => [
                "Shrimp",
                "Clams",
                "Anchovies",
                "Tuna",
                "Mussels"
            ],
            "Unique and Unconventional Pizza Toppings" => [
                "Pineapple",
                "Barbecue sauce",
                "Egg",
                "Fig jam or balsamic glaze drizzle",
                "Avocado slices"
            ]
        ];
        $pizza=Pizza::findOrFail($id);
        return view('create_order', ['pizza'=>$pizza,'toppings'=>$toppings]);
    }

    //create an order
    public function create_order(){
      
       $order= new Order() ;

        $order->client_name= request('name');
        $order->client_address= request('address');
        $order->client_phone= request('phone');
        $order->pizza_siza= request('size');
        $order->number= request('number');
        $order->toppings= request('toppings');
        $order->pizza= request('id');
         
        $order->save();

        return  redirect('/')->with('msg','Your order was sent successfully! Thanks.');
    }

    //return orders list
    public function show_orders_list(){
        $orders = Order::join('pizzas', 'pizzas.id', '=', 'orders.pizza')
        ->select('pizzas.*', 'orders.*') // Sélectionnez tous les champs des deux tables
        ->get();
        return view('pages.dashboard', ['orders'=>$orders]);
    }

    //show  order details
    public function show_order_details ($id) {
        $order = Order::join('pizzas', 'orders.pizza', '=', 'pizzas.id')
        ->select('pizzas.*', 'orders.*') // Select all fields from both tables
        ->findOrFail($id);
    
        return view('pages.order', ['order'=>$order]);
    }

// destroy an order
    public function destroy_order($id){
    $order= Order::findOrFail($id);
    $order->delete();
    return  redirect('/dashboard')  ;

    }


    //register the  user (admin) 
    public function register_user(){
//name => Admin_Pizza_House ; email=> pizza.house.admin@gmail.fr ; password=>PizzaHouse@2024
    }
}


//login the user(admin)
