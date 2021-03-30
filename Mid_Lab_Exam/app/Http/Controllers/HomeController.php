<?php

namespace App\Http\Controllers;

use App\CustomerCart;
use App\Http\Requests\MedicineRequest;
use App\User;
use Illuminate\Http\Request;
use App\Http\Requests\UserRequest;
use App\Medicine;
use Validator;
use DB;

class HomeController extends Controller
{
    public function index(Request $request)
    {

        return view('home.index');
    }

    public function profile(Request $request)
    {
        $user = User::where('username', $request->session()->get('username'))
                    ->first();
        return view('home.profile', compact('user'));
    }
    public function editprofile(Request $request)
    {
        $user = User::where('username', $request->session()->get('username'))
                    ->first();
        return view('home.editprofile', compact('user'));
    }


    public function updateProfile(UserRequest $request)
    {
        $user = User::where('username', $request->session()->get('username'))
                    ->first();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->address = $request->address;
        $user->city             = $request->city;
        $user->country          = $request->country;
        $user->companyname      = $request->companyname;

        $user->save();
        $request->session()->flash('msg', 'Profile Updated Sucessfully!');
        return view('home.profile', compact('user'));
    }

    public function delete(Request $request, $id)
    {
        $user = User::find($id);
        $request->session()->flash('DELETED SUCESSFULLY');
        $user->delete();
        return Back();
    }

    public function customerlist(Request $request)
    {

        $users = User::where('user_type', '=', 'Customer')->get();
        return view('home.customerlist', compact('users'));
    }

    public function medicinelist(Request $request)
    {

        $users = Medicine::get();
        return view('home.medicinelist', compact('users'));
    }

    public function addmedicine(Request $request)
    {
        return view('home.addmedicine');
    }



    public function medicineAdded(MedicineRequest $request)
    {
        $user = new Medicine();
        $user->name = $request->name;
        $user->category = $request->category;
        $user->medicine_type = $request->medicine_type;
        $user->vendor_name            = $request->vendor_name;
        $user->price          = $request->price;
        $user->availability    = $request->availability;

        $user->save();
        $request->session()->flash('msg', 'Medicine Added Sucessfully!');
        return view('home.addmedicine', compact('user'));
    }

    public function editmedicine(Request $request,$id)
    {
        $user = Medicine::find($id)->first();
        return view('home.editmedicine',compact('user'));
    }

    public function medicineUpdate(MedicineRequest $request, $id)
    {
        $user = Medicine::find($id)->first();
        $user->name = $request->name;
        $user->category = $request->category;
        $user->medicine_type = $request->medicine_type;
        $user->vendor_name            = $request->vendor_name;
        $user->price          = $request->price;
        $user->availability    = $request->availability;

        $user->save();
        $request->session()->flash('msg', 'Medicine Updated Sucessfully!');
        return Back();
    }
    public function deletemedicine(Request $request, $id)
    {
        $user = Medicine::find($id);
        $request->session()->flash('DELETED SUCESSFULLY');
        $user->delete();
        return Back();
    }

    public function searchmedicine()
    {
        return view('home.searchmedicine');
    }

    public function action(Request $request)
    {
        if ($request->ajax()) {
            $output = '';
            $query = $request->get('query');
            if ($query != '') {
                $data = DB::table('medicines')
                    ->where('name', 'like', '%' . $query . '%')
                    ->orWhere('category', 'like', '%' . $query . '%')
                    ->orWhere('medicine_type', 'like', '%' . $query . '%')
                    ->orWhere('vendor_name', 'like', '%' . $query . '%')
                    ->orderBy('id', 'asc')
                    ->get();
            }
            else {
                $data = DB::table('medicines')
                    ->orderBy('id', 'asc')
                    ->get();
            }
            $total_row = $data->count();
            if ($total_row > 0) {
                foreach ($data as $row) {
                    $output .= '
                    <tr>
                    <td>' . $row->id . '</td>
                    <td>' . $row->name . '</td>
                    <td>' . $row->category . '</td>
                    <td>' . $row->medicine_type . '</td>
                    <td>' . $row->price . '</td>
                    <td>' . $row->vendor_name . '</td>
                    <td> <a href="'.route('home.addtocart',['id'=>$row->medicine_id]).'">
                            <button class="btn btn-success">Add to cart</button></a>
                         <a href="'.route('home.removemedicine',['id'=>$row->medicine_id]).'">
                            <button class="btn btn-danger">Remove</button></a></td>
                    </tr>';
                }
            }
            else {
                $output = '<tr><td align="center" colspan="5">No Data Found</td></tr>';
            }

            $data = array(
                'table_data'  => $output,
                'total_data'  => $total_row
            );

            echo json_encode($data);
        }
    }

    public function addtocart(Request $request,$id)
    {

        $user = Medicine::where('medicine_id','=',$id)->first();
        return view('home.addtocart',compact('user'));
    }

    public function removemedicine(Request $request, $id)
    {
        $medicine = CustomerCart::where('medicine_id','=',$id)->first();
        $request->session()->flash('delete','REMOVED FROM CART');
        $medicine->delete();
        return Back();
    }

    public function confirmMedicine(Request $request, $id)
    {
        $user = User::where('username', $request->session()->get('username'))
            ->first();
        $medicine = Medicine::where('medicine_id','=',$id)->first();

        $check = CustomerCart::where('medicine_id','=',$id)->get();
        if(count($check)>0)
        {
            $cart = CustomerCart::where('medicine_id','=',$id)->first();
        }
        else
        {
            $cart = new CustomerCart();
        }
        $cart->user_id = $user->user_id;
        $cart->medicine_id = $id;
        $cart->quantity = $request->quantity;
        $cart->total = $request->quantity*$medicine->price;
        $cart->request = 'on hold';
        $cart->payment_type = 'not selected';
        $cart->save();
        $request->session()->flash('msg','MEDICINE ADDED TO THE CART TOTAL '.$cart->total.' TAKA');
        return redirect()->route('home.searchmedicine');
    }

    public function showcart(Request $request)
    {
        $user = User::where('username', $request->session()->get('username'))
                    ->first();
        $cart = CustomerCart::where('user_id','=',$user->user_id)->get();


        if(count($cart)>0)
        {
            $carts = DB::table('customer_carts','medicines')
                        ->join('medicines','medicines.medicine_id','=','customer_carts.medicine_id')
                        ->SELECT ('customer_carts.medicine_id','medicines.name','medicines.medicine_type',
                        'medicines.price','customer_carts.quantity','customer_carts.total')
                        ->where('user_id','=',$user->user_id)
                        ->get();

            $total = $carts->sum('total');
            return view('home.showcart',compact('user','carts','total'));
        }
        else
        {
            $request->session()->flash('msg','YOU DO NOT HAVE ANY MEDICINE IN THE CART');
            return redirect()->route('home.searchmedicine');
        }
    }

    public function purchase(Request $request)
    {
        $user = User::where('username', $request->session()->get('username'))
                    ->first();
        $cart = CustomerCart::where('user_id','=',$user->user_id)->get();
        foreach ($cart as $cart)
        {
            $cart->payment_type = $request->payment_type;
            $cart->request = 'pending';
            $cart->save();
        }

        $request->session()->flash('msg','Purchase request is confirmed');
        return redirect()->route('home.showcart');
    }
}

