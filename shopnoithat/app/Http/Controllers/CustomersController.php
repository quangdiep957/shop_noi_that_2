<?php

namespace App\Http\Controllers;
use App\Models\customer_models;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
class CustomersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $customer=customer_models::orderBy('id','desc')->paginate(10);
       // return view('customer.index',['customers'=>$customer]);
       return view('client.login',['customers'=>$customer]);
    }
    public function Login(Request $request)
    {
        //dd($request->email);
        $customer=customer_models::where([
            ['email','=',$request->email ],
            ['password','=',$request->password]])->get();
           // dd($customer[0]->fullname);
           
        if($customer->count()>0)
        {
           // dd($request->password);
            $user = session()->get('user'); 
           
            if($user==null) {
                $user = [ 
                            "id"=>$customer[0]->id,
                            "name" => $customer[0]->fullname,
                            "email" => $customer[0]->email,
                            "phone"=>$customer[0]->phone,
                            "address"=>$customer[0]->address
                    ];
       
                session()->put('user', $user);
               
               
            }
            return redirect()->intended('client/home');
           
           
        }
        
        else
        {
            echo ("Tài khoản mật khẩu không chính xác");
        }
      
       
    }

    
    public function Register(Request $request)
    {
        $customer=customer_models::where(
            [['email','=',$request->email ],
            ['password','=',$request->password]]
            )->get();
        if($customer->count()>0)
        {
            echo ("Tài khoản đã tồn tại trên hệ thống");
        }
        else
        {
            $customer=new customer_models;
            $customer->fullname=$request->username;
            
            $customer->password=$request->password;
            $customer->email=$request->email;
            $customer->save();
              
            return view('client.login',['customer'=>$customer]);
             
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('customer.new');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $rule=[
            'fullname'=>"required",
            'sex'=>'required',
            'phone'=>'required',
            'email'=>'required'


        ];
        $validator=Validator::make($request->all(),$rule);
        if($validator->fails())
        {
            return redirect()->route('customers.create')->withErrors($validator)->withInput();
        }
        else{

        
        $customer=new customer_models;
        $customer->fullname=$request->fullname;
        $customer->sex=$request->sex;
        $customer->DOB=$request->DOB;
        $customer->address=$request->address;
        $customer->phone=$request->phone;
        $customer->email=$request->email;
        $customer->description=$request->description;
        $customer->save();
         
        return redirect()->route('customers.index');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $customer= customer_models::findOrFail($id);
        return view('customer.edit',['customers'=>$customer]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $rule=[
            'fullname'=>"required",
            'sex'=>'required',
            'phone'=>'required',
            'email'=>'required'


        ];
        $validator=Validator::make($request->all(),$rule);
        if($validator->fails())
        {
            return redirect()->route('customers.update')->withErrors($validator)->withInput();
        }
        else{

        
        $customer= customer_models::finOrFail($id);
        $customer->fullname=$request->fullname;
        $customer->sex=$request->sex;
        $customer->DOB=$request->DOB;
        $customer->address=$request->address;
        $customer->phone=$request->phone;
        $customer->email=$request->email;
        $customer->description=$request->description;
        $customer->save();
         
        return redirect()->route('customers.index');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $customer= customer_models::finOrFail($id);
        $customer->delete();
        return redirect()->route('customers.index');
    }
    public function remove(Request $request)
    {
        if($request->id) {
   
            $user = session()->get('user');
   
            if(isset($user['id'])) {
   
               // dd($user['id']);
           
                session()->flush('success', 'Product removed successfully');
            }
           
            return redirect()->action([Home_Controller::class, 'index']);
        }
    }
}
