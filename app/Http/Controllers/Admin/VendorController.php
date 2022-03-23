<?php

namespace App\Http\Controllers\Admin;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;
class VendorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        if(request()->ajax()){
            return datatables()->of(User::where('Name','!=','Admin')->get())
            ->addColumn('action',function($data){
              $button = '<button type="button" name="edit" id="'.$data->id.'" class="edit btn btn-primary btn-sm">Edit</button>';
              $button .= '<button type="button" name="delete" id="'.$data->id.'" class="delete btn btn-danger btn-sm">Delete</button>';
              return $button;
            })
            ->rawColumns(['action'])
            ->addIndexColumn()
            ->make(true);
          }


        return view ('back-end.vendor.view');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
        return view ('back-end.vendor.add');
      
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        


        $this->validate($request,[

            'name' => 'required|min:5|max:255',
            'email' => 'unique:users|email|max:255|',
            'img' => 'required|mimes:jpeg,jpg,png',
            'phone' => 'unique:users|required|max:15',
            'password' => 'required|min:6|max:50',
            'address' => 'required|max:500',
        ]);


        //print_r($request->all());



        $folder = "back-end/vendors/profile/";

        if($image = $request->file('img')){
          $ext = $image->extension();
          $image_name = "Vendors".rand(100,999).".".$ext;
          $image_url = $folder.$image_name;
          $image->move($folder,$image_name);
        }

        $data = new User();

        $data->name=request('name');
        $data->email=request('email');
        $data->img=$image_url;
        $data->password=bcrypt($request->password);
        $data->phone=request('phone');
        $data->address=request('address');
        $data->save();

        return back()->with('status', 'Success!! New Seller added successfully.');
        





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
        //echo $id;
        //$vendor = User::findOrFail($id)->get()6 ;->
                        //->first();
     $vendor = User::where('id', $id)->first();

     //$vendor = User::foundada($id)->first();

        return view('back-end.vendor.admin.edit',compact('vendor'));
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
        $this->validate($request,[

            'name' => 'required|min:5|max:255',
            'img' => 'required|mimes:jpeg,jpg,png',
            'password' => 'required|min:6|max:50',
            'address' => 'required|max:500',

        ]);


        //print_r($request->all());

        $folder = "back-end/vendors/profile/";

        if($image = $request->file('img')){
          $ext = $image->extension();
          $image_name = "Vendors".rand(100,999).".".$ext;
          $image_url = $folder.$image_name;
          $image->move($folder,$image_name);
        }else{

            $data=User::find($id);
            $image_url=$data->img;
            
        }

        //$data = new User();
        $data = User::find($id);

        $data->name=request('name');
        $data->email=request('email');
        $data->img=$image_url;
        $data->password=bcrypt($request->password);
        $data->phone=request('phone');
        $data->address=request('address');
        $data->save();

        return back()->with('status', 'Success!! Information Updated Successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if(Auth::check()){
        
            $user = User::find($id);
        
            $img = $user->img;
        
            if($img){
        
                unlink($img);
        
            }
        
            $user->delete();
            
        return back()->with('status', 'Success!!! Vendor Deleted Successfully.');
          }
    }
}
