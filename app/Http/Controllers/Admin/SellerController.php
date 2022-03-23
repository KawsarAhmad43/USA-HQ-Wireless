<?php

namespace App\Http\Controllers\Admin;
use Illuminate\Support\Facades\Auth;
use Illuminate\Auth\Middleware\Authenticate;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Middleware\AdminMiddleware;
use App\Seller;
use App\Product;
use DB;

class SellerController extends Controller
{


    // public function __construct()
    // {
    //     $this->middleware([Authenticate::class, AdminMiddleware::class]);
    // }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //return view ('back-end.seller.view');

        //$clients=Client::join('done', 'done.id', '=', 'work.work_done')


    // $sellers=DB::table('sellers')
    //     ->Leftjoin('products', 'sellers.id', '=', 'products.seller_id')
    //     ->select('sellers.name','products.title','sellers.phone')
    //    ->get();



    $data=Seller::leftjoin('products','products.id','=','sellers.id')
    ->select('sellers.*','products.pcode')
    ->orderBy('isActive','DESC')
    ->get();



       if(request()->ajax()){
        return datatables()->of($data)
        ->addColumn('action',function($data){
          $button = '<button type="button" name="edit" id="'.$data->id.'" class="edit btn btn-primary btn-sm">Edit</button>';
          $button .= '<button type="button" name="delete" id="'.$data->id.'" class="delete btn btn-danger btn-sm">Delete</button>';
          return $button;
        })
        ->rawColumns(['action'])
        ->addIndexColumn()
        ->make(true);
      }
     
     
     //return response($seller);->with(compact('sellers'))

        return view('back-end.seller.view');




    }


    public function query(){
        $users = Seller::query()
                ->select([
                 
                    'sellers.name as name',
                    'products.title as title',
                    'sellers.phone as phone',
                ])
                ->leftJoin('products', 'products.title', '=', 'sellers.phone');
    
        return $users;
    }





















    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('back-end.seller.add');
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
            'email' => 'nullable|email|max:255|',
            'img' => 'nullable|mimes:jpeg,jpg,png',
            'location' => 'required',
            'phone' => 'required|max:15',
            'bkash' => 'required|max:15',
            'address' => 'required|max:500',
            'description' => 'nullable|max:500',
        ]);


        //print_r($request->all());

        $user = Auth::user();
        $createdBY=$user->name;
        $isActive=1;


        $folder = "back-end/seller/";

        if($image = $request->file('img')){
          $ext = $image->extension();
          $image_name = "Seller".rand(100,999).".".$ext;
          $image_url = $folder.$image_name;
          $image->move($folder,$image_name);
        }

        $data = new Seller();

        $data->name=request('name');
        $data->email=request('email');
        $data->img=$image_url;
        $data->location=request('location');
        $data->phone=request('phone');
        $data->bkash=request('bkash');
        $data->address=request('address');
        $data->description=request('description');
        $data->createdBy=$createdBY;
        $data->isActive=$isActive;

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
        //$seller=Seller::
        $seller = Seller::found($id)->first();

        return view('back-end.seller.edit',compact('seller'));

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
            'email' => 'nullable|email|max:255|',
            'img' => 'nullable|mimes:jpeg,jpg,png',
            'location' => 'required',
            'phone' => 'required|max:15',
            'bkash' => 'required|max:15',
            'address' => 'required|max:500',
            'description' => 'nullable|max:500',
        ]);


        //print_r($request->all());

        $user = Auth::user();
        $createdBY=$user->name;
        $isActive=1;


        $folder = "back-end/seller/";

        if($image = $request->file('img')){
          $ext = $image->extension();
          $image_name = "Seller".rand(100,999).".".$ext;
          $image_url = $folder.$image_name;
          $image->move($folder,$image_name);
        }else{

            $data=Seller::find($id);
            $image_url=$data->img;

        }

        $data = Seller::find($id);

        $data->name=request('name');
        $data->email=request('email');
        $data->img=$image_url;
        $data->location=request('location');
        $data->phone=request('phone');
        $data->bkash=request('bkash');
        $data->address=request('address');
        $data->description=request('description');
        $data->createdBy=$createdBY;
        $data->isActive=$isActive;

        $data->save();

        return back()->with('status', 'Success!! Seller Updated Successfully.');


















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
            $pre = Seller::find($id);
            $preimg = $pre->img;
            if($preimg){
              unlink($preimg);
            }
            $pre->delete();
    
            return back()->with('status', 'Success!! Seller Deleted Successfully.');


}
    }
}