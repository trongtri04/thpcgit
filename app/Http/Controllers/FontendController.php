<?php

namespace App\Http\Controllers;

use App\Http\Requests\OrderRequest;
use App\Mail\TestMail;
use App\Models\order;
use App\Models\product;
use App\Notifications\EmailNotification;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Notification;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Session;

class FontendController extends Controller
{
    //hiển thị sản phẩm nổi bậc
    public function index()
    {
        $products = product::all();
        return view('home', [
            'products' => $products
        ]);
    }
    // hiển thị chi tiết sản phẩm nổi bậc
    public function show_product(Request $request)
    {
        $product = product::find($request->id);
        return view('product_detail', [
            'product' => $product
        ]);
    }



    // Hiển thị tất cả Mainboard
    public function show_mainboards()
    {
        $mainboards = Product::where('loai', 'mainboard')->get();
        return view('productMainboard', [
            'mainboards' => $mainboards
        ]);
    }

    // Hiển thị chi tiết Mainboard
    public function show_mainboard_detail($id)
    {
        $product = Product::where('loai', 'mainboard')->find($id);

        if (!$product) {
            return redirect()->route('productMainboard')->with('error', 'Product not found.');
        }

        return view('productMainboard_detail', [
            'product' => $product
        ]);
    }
    // Hiển thị tất cả cpu
    public function show_cpu()
    {
        $cpu = Product::where('loai', 'cpu')->get();
        return view('productCpu', [
            'cpu' => $cpu
        ]);
    }

    // Hiển thị chi tiết cpu
    public function show_cpu_detail($id)
    {
        $product = Product::where('loai', 'cpu')->find($id);

        if (!$product) {
            return redirect()->route('productCpu')->with('error', 'Product not found.');
        }

        return view('productCpu_detail', [
            'product' => $product
        ]);
    }
    // Hiển thị tất cả case
    public function show_case()
    {
        $case = Product::where('loai', 'case')->get();
        return view('productCase', [
            'case' => $case
        ]);
    }

    // Hiển thị chi tiết case
    public function show_case_detail($id)
    {
        $product = Product::where('loai', 'case')->find($id);

        if (!$product) {
            return redirect()->route('productCase')->with('error', 'Product not found.');
        }

        return view('productCase_detail', [
            'product' => $product
        ]);
    }
    // Hiển thị tất cả hdd
    public function show_hdd()
    {
        $hdd = Product::where('loai', 'hdd')->get();
        return view('productHdd', [
            'hdd' => $hdd
        ]);
    }

    // Hiển thị chi tiết hdd
    public function show_hdd_detail($id)
    {
        $product = Product::where('loai', 'hdd')->find($id);

        if (!$product) {
            return redirect()->route('productHdd')->with('error', 'Product not found.');
        }

        return view('productHdd_detail', [
            'product' => $product
        ]);
    }
    // Hiển thị tất cả màn hình
    public function show_manhinh()
    {
        $manhinh = Product::where('loai', 'manhinh')->get();
        return view('productManhinh', [
            'manhinh' => $manhinh
        ]);
    }

    // Hiển thị chi tiết màn hình
    public function show_manhinh_detail($id)
    {
        $product = Product::where('loai', 'manhinh')->find($id);

        if (!$product) {
            return redirect()->route('productManhinh')->with('error', 'Product not found.');
        }

        return view('productManhinh_detail', [
            'product' => $product
        ]);
    }
    // Hiển thị tất cả Nguồn
    public function show_nguon()
    {
        $nguon = Product::where('loai', 'nguon')->get();
        return view('productNguon', [
            'nguon' => $nguon
        ]);
    }

    // Hiển thị chi tiết Nguồn
    public function show_nguon_detail($id)
    {
        $product = Product::where('loai', 'nguon')->find($id);

        if (!$product) {
            return redirect()->route('productNguon')->with('error', 'Product not found.');
        }

        return view('productNguon_detail', [
            'product' => $product
        ]);
    }
    // Hiển thị tất cả Ram
    public function show_ram()
    {
        $ram = Product::where('loai', 'ram')->get();
        return view('productRam', [
            'ram' => $ram
        ]);
    }

    // Hiển thị chi tiết Ram
    public function show_ram_detail($id)
    {
        $product = Product::where('loai', 'ram')->find($id);

        if (!$product) {
            return redirect()->route('productRam')->with('error', 'Product not found.');
        }

        return view('productRam_detail', [
            'product' => $product
        ]);
    }
    // Hiển thị tất cả ssd
    public function show_ssd()
    {
        $ssd = Product::where('loai', 'ssd')->get();
        return view('productSsd', [
            'ssd' => $ssd
        ]);
    }

    // Hiển thị chi tiết ssd
    public function show_ssd_detail($id)
    {
        $product = Product::where('loai', 'ssd')->find($id);

        if (!$product) {
            return redirect()->route('productSsd')->with('error', 'Product not found.');
        }

        return view('productSsd_detail', [
            'product' => $product
        ]);
    }
    // Hiển thị tất cả vga
    public function show_vga()
    {
        $vga = Product::where('loai', 'vga')->get();
        return view('productVga', [
            'vga' => $vga
        ]);
    }

    // Hiển thị chi tiết vga
    public function show_vga_detail($id)
    {
        $product = Product::where('loai', 'vga')->find($id);

        if (!$product) {
            return redirect()->route('productVga')->with('error', 'Product not found.');
        }

        return view('productVga_detail', [
            'product' => $product
        ]);
    }
    // card
    public function add_cart(Request $request)
    {
        $product_id = $request->product_id;
        $product_qty = $request->product_qty;
        if (is_null(Session::get('cart'))) {
            Session::put('cart', [
                $product_id => $product_qty
            ]);
            return redirect('/cart');
        } else {
            $cart = Session::get('cart');
            if (Arr::exists($cart, $product_id)) {
                $cart[$product_id] = $cart[$product_id] + $product_qty;
                Session::put('cart', $cart);
                return redirect('/cart');
            } else {
                $cart[$product_id] = $product_qty;
                Session::put('cart', $cart);
                return redirect('/cart');
            }
        }
    }
    public function show_cart()
    {
        $cart = Session::get('cart');
        $product_id = array_keys($cart);
        $products = product::whereIn('id', $product_id)->get();

        return view('cart', [
            'products' => $products
        ]);
    }
    public function delete_cart(Request $request)
    {
        $cart = Session::get('cart');
        $product_id = $request->id;
        unset($cart[$product_id]);
        Session::put('cart', $cart);
        return redirect('/cart');
    }
    public function update_cart(Request $request)
    {
        $cart = $request->product_id;
        Session::put('cart', $cart);
        return redirect('/cart');
    }
    public function send_cart(OrderRequest $request)
    {

        $token = Str::random(12);
        $order = new order;
        $order->name = $request->input('name');
        $order->phone = $request->input('phone');
        $order->email = $request->input('email');
        $order->city = $request->input('city');
        $order->district = $request->input('district');
        $order->ward = $request->input('ward');
        $order->address = $request->input('address');
        $order->note = $request->input('note');
        $order_detail = json_encode($request->input('product_id'));
        $order->order_detail = $order_detail;
        $order->token = $token;
        $order->save();
        Session::flush('cart');
        $mailifor = $order->email;
        $nameifor = $order->name;
        $Mail = Mail::to($mailifor)->send(new TestMail($nameifor));
        Notification::send($order, new EmailNotification($order));
        return redirect('/order/confirm');
    }
    public function show_login()
    {
        return view('login');
    }
    public function check_login(Request $request)
    {
        if (Auth::attempt(
            [
                'email' => $request->input('email'), 'password' => $request->input('password')
            ]
        )) {
            return redirect('admin');
        }
        return redirect()->back();
    }
}
