<?php

namespace App\Http\Controllers;
use Auth;
use App\Models\Category;
use App\Models\Client;
use App\Models\User;
use App\Models\Time_date;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CategoryController extends Controller
{
    
    public function index(){
        if(Auth::guest()){
            return redirect()->route('login');
        }
        $data= Category::all()->count();
        
        $client= Client::where('status','=','3')->count();
        $at= Client::where('status','=','1')->count();
        $pd= Client::where('status','=','2')->count();
        $online = User::all()->first();
        return view('admin.admin_dashboard',['data'=>$data,'client'=>$client,'at'=>$at,'pd'=>$pd,"online"=>$online]);

    }
    public function isOfline($id){
        
        $online =DB::table('users')->select('status1')->where('id','=',$id)->first();
            if($online->status1 == '1'){
                $status1 ='0';
            }
            elseif($online->status1 == '0'){
                $status1 ='1';
            }
         
            $values = array('status1'=>$status1);
            DB::table('users')->where('id',$id)->update($values);
        return redirect()->back();

}
    public function create(){
        if(Auth::guest()){
            return redirect()->route('login');
        }
        $categories = Category::all();
        return view('admin.category',['categories'=>$categories]); 
    }
    public function store(Request $request){

        if(Auth::guest()){
            return redirect()->route('login');
        }
        $request->validate([
            'cat_name' => 'required',
            'price' => 'required',
            'cat_img' => 'required',
            'cat_discription' => 'required',

        ]);

        $filename = time() ."." . $request->cat_img->extension();
        $request->cat_img->move(public_path('cat_img'),$filename);

        $req = new Category();
        $req->cat_name = $request->input('cat_name');
        $req->price = $request->input('price');
        $req->cat_img = $filename;
        $req->cat_discription = $request->input('cat_discription');
        $req->save();

        return redirect()->back();
    }
    public function show(Category $category){
       
    }
    public function edit(Category $category) {
        //
    }
   
    public function update(Request $request, Category $category){
        //
    }

    public function destroy(Category $category){
        //
    }

    public function insert(Request $request){
       
        $categories = Category::get();
        if($request->isMethod('post')){
            $request->validate([
            'name' => 'required',
            'contact' => 'required',
            'alt_contact' => 'required',
            'email' => 'required',
            'cat_id' => 'required',
        ]);
     
        $req = new Client();
        $req->name = $request->input('name');
        $req->contact = $request->input('contact');
        $req->alt_contact = $request->input('alt_contact');
        $req->email = $request->input('email');
        $req->cat_id = $request->input('cat_id');
        $req->save();
        return redirect()->back();
        
        }
        return view('insert' ,['categories'=>$categories]);

    }
    public function details(){

        $clients = Client::all();
        
        return view('details',['clients'=>$clients]);

    }
    public function client_manage(){
     
        return view('admin.client_manage',[
            'client' => Client::where('status','=',0)->get(),
            'pending' => Client::where('status','=',2)->get(),
            'done' => Client::all()

        ]);

    }
    public function show_date_time($id){
        if(Auth::guest()){
            return redirect()->route('login');
        }
        $data = Client::find($id);
        return view('admin.date_time',['data'=>$data]);

    }

    public function update_date_time(Request $re){
        if(Auth::guest()){
            return redirect()->route('login');
        }
        $data = Client::find($re->id);
        $data->date_time = $re->date_time;
        $data->save();
        return redirect()->back();

    }

    public function done(Request $req,$id){
        
        
            $clients = Client::find($id);
            $clients->status=1;
           
            $clients->save();
            return redirect()->back();
    
    }
    public function pending(Request $req,$id){
        $clients = Client::find($id);
            $clients->status=2;
           
            $clients->save();
            return redirect()->back();
    

    }
    
    public function remove(Request $req,$id){
        $clients = Client::find($id);
        $clients->status=3;
       
        $clients->save();
        return redirect()->back();

    }


    public function homeindex(){
       $user =User::all()->first();
        $categories = Category::all();
        
        return view('home',['categories'=>$categories,"user"=>$user]);
    }
    // public function status_update($id){
    //     $client =DB::table('clients')->select('status')->where('id','=',$id)->first();
    //     if($client->status == '1'){
    //         $status ='2';
    //     }
    //     elseif($client->status == '0'){
    //         $status ='1';
    //     }
    //     elseif($client->status == '2'){
    //         $status ='1';
    //     }
    //     $values = array('status'=>$status);
    //     DB::table('clients')->where('id',$id)->update($values);
    //     return redirect('category/admin.client_manage');

    // }
//     public function isonline(){
       
//         $online = User::all();
//         return view("admin.admin_dashboard",["online"=>$online]);
 
      
// }
}
