<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use DB;
Use App\Category;

class PostsController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth',['except'=>['index','show','sort','category','sortcat']]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
            
        
        //$posts=Post::orderBy('created_at','desc')->get();
        //$posts=Post::orderBy('created_at','desc')->take(1)->get();
        //return $post=Post::where('title','Post two')->get();
        //$posts=Post::all();
        $posts=Post::orderBy('created_at','desc')->paginate(11);
        return view ('posts.index')->with('posts',$posts);
        
    }
    
    public function category($id)
    { 

        $posts=Post::where('category_id','like',$id)->get();
        return view ('posts.index')->with('posts',$posts)->with('id',$id);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('posts.create');
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
            'title'=>'required',
            'body'=>'required',
            'cover_image'=>'image|nullable|max:1999',
            'cover_imag'=>'image|nullable|max:1999',
            'cover_ima'=>'image|nullable|max:1999',
            'cover_im'=>'image|nullable|max:1999',
            'cover_i'=>'image|nullable|max:1999'
              

        ]);



        if($request->hasFile('cover_image')){
            // Get filename with the extension
            $filenameWithExt = $request->file('cover_image')->getClientOriginalName();
            // Get just filename
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            // Get just ext
            $extension = $request->file('cover_image')->getClientOriginalExtension();
            // Filename to store
            $fileNameToStore= $filename.'_'.time().'.'.$extension;
            // Upload Image
            $path = $request->file('cover_image')->storeAs('public/storage/', $fileNameToStore);
        } else {
            $fileNameToStore = 'noimage.jpg';
        }



        if($request->hasFile('cover_ima')){
            // Get filename with the extension
            $filenameWithExt = $request->file('cover_ima')->getClientOriginalName();
            // Get just filename
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            // Get just ext
            $extension = $request->file('cover_ima')->getClientOriginalExtension();
            // Filename to store
            $fileNameToSto= $filename.'_'.time().'.'.$extension;
            // Upload Image
            $path = $request->file('cover_ima')->storeAs('public/', $fileNameToSto);
        } else {
            $fileNameToSto = 'noimage.jpg';
        }
      
        







        $post=new Post;
        $post->cover_image = $fileNameToStore;
        $post->cover_ima = $fileNameToSto;
        
        $post->title = $request->input('title');
        $post->rent_price = $request->input('rent_price');
        $post->area = $request->input('area');
        $post->exact_address = $request->input('exact_address');
        $post->covered_area = $request->input('covered_area');
        $post->num_of_products = $request->input('num_of_producs');
        $post->CC = $request->input('CC');
        $post->parking = $request->input('parking');
        $post->mess = $request->input('mess');
        $post->wifi = $request->input('wifi');
        $post->washroom = $request->input('washroom');
        $post->beds = $request->input('beds');
        $post->body = $request->input('body');
        $post->phone_no = $request->input('phone');
        
        $pst =  $request->input('check');
        $pst2 =  $request->input('check2');

        $post->A_washroom = $request->input('A_washroom');
        $post->Sitting_Cap = $request->input('SC');

        //getting respective sub_category ID from cat table.
        $get_cat_ID = Category::where('name', '=', $pst)->value('id');
        $post->category_id = $get_cat_ID;

        //getting respective parent ID from cat table.
     
        
        $post->num_of_portions = $request->input('num_of_portions');
        $post->user_id=auth()->user()->id;
        


        if($request->hasFile('cover_imag')){
            // Get filename with the extension
            $filenameWithExt = $request->file('cover_imag')->getClientOriginalName();
            // Get just filename
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            // Get just ext
            $extension = $request->file('cover_imag')->getClientOriginalExtension();
            // Filename to store
            $fileNameToStor= $filename.'_'.time().'.'.$extension;
            // Upload Image
            $path = $request->file('cover_imag')->storeAs('public/', $fileNameToStor);
        } else {
            $fileNameToStor = 'noimage.jpg';
        }



        $post->cover_imag=$fileNameToStor;
        $post->save();
        return redirect('/posts')->with('success','Post Created');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $post= post::find($id);
        return view('posts.show')->with('post',$post);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $post=Post::find($id);

        //Check for correct user
        if (auth()->user()->id==$post->user_id||auth()->user()->credentials=="admin"){
            return view('posts.edit')->with('post',$post);
        }
        
        return redirect('/posts')->with('error','Unauthorized Page');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
       
            $post=Post::find($request->post_id);
            //handle file uplpad
            // dd($request->all());
            
            if($request->hasFile('cover_image')){
                // Get filename with the extension
                $filenameWithExt = $request->file('cover_image')->getClientOriginalName();
                // Get just filename
                $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
                // Get just ext
                $extension = $request->file('cover_image')->getClientOriginalExtension();
                // Filename to store
                $fileNameToStore= $filename.'_'.time().'.'.$extension;
                // Upload Image
                $path = $request->file('cover_image')->storeAs('public/cover_images', $fileNameToStore);
            } else {
                $fileNameToStore = 'noimage.jpg';
            }
    
    
    
            if($request->hasFile('cover_ima')){
                // Get filename with the extension
                $filenameWithExt = $request->file('cover_ima')->getClientOriginalName();
                // Get just filename
                $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
                // Get just ext
                $extension = $request->file('cover_ima')->getClientOriginalExtension();
                // Filename to store
                $fileNameToSto= $filename.'_'.time().'.'.$extension;
                // Upload Image
                $path = $request->file('cover_ima')->storeAs('public/cover_images', $fileNameToSto);
            } else {
                $fileNameToSto = 'noimage.jpg';
            }
           
    
    
    
    
    
    
    
            
            $post->cover_image = $fileNameToStore;
            $post->cover_ima = $fileNameToSto;
           
            $post->title = $request->input('title');
            $post->rent_price = $request->input('rent_price');
            $post->area = $request->input('area');
            $post->exact_address = $request->input('exact_address');
            $post->covered_area = $request->input('covered_area');
            $post->num_of_products = $request->input('num_of_producs');
            $post->CC = $request->input('CC');
            $post->parking = $request->input('parking');
            $post->mess = $request->input('mess');
            $post->wifi = $request->input('wifi');
            $post->washroom = $request->input('washroom');
            $post->beds = $request->input('beds');
            $post->body = $request->input('body');
            $post->phone_no = $request->input('phone');
            $post->num_of_portions=$request->input('num_of_portions');
            $pst =  $request->input('check');
            $pst2 =  $request->input('check2');
    
    
            //getting respective sub_category ID from cat table.
            
          
            $post->A_washroom = $request->input('A_washroom');
        $post->Sitting_Cap = $request->input('SC');
            $post->num_of_portions = $request->input('num_of_portions');
            $post->user_id=auth()->user()->id;
            
    
    
            if($request->hasFile('cover_imag')){
                // Get filename with the extension
                $filenameWithExt = $request->file('cover_imag')->getClientOriginalName();
                // Get just filename
                $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
                // Get just ext
                $extension = $request->file('cover_imag')->getClientOriginalExtension();
                // Filename to store
                $fileNameToStor= $filename.'_'.time().'.'.$extension;
                // Upload Image
                $path = $request->file('cover_imag')->storeAs('public/cover_images', $fileNameToStor);
            } else {
                $fileNameToStor = 'noimage.jpg';
            }
    
    
    
            $post->cover_imag=$fileNameToStor;
         
            $post->save();
    
            return redirect('/posts')->with('success','Post Updated');
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post=Post::find($id);
        

        if (auth()->user()->id!=$post->user_id && auth()->user()->credentials!="admin"){
            return redirect('/posts')->with('error','Unauthorized Page');
        }
        
        $post->delete();
        return redirect('/posts')->with('success','Post Deleted');

    }
    public function search(Request $request)
    {
       
       // $posts=
       $posts=Post::where('title','like','%'.$a.'%')->get();
       // return view ('posts.index', ['posts' => $posts]);
        return view ('posts.index')->with('posts',$posts);
        return redirect ('/posts', $posts);
        
            
    }
    // public function search($a)
    // {
    //     dump($request);
        
    //    // $posts=
    //    $posts=Post::where('title','like','%'.$a.'%')->get();
    //    // return view ('posts.index', ['posts' => $posts]);
    //     return view ('posts.index')->with('posts',$posts);
    //     return redirect ('/posts', $posts);
        
            
    // }
    public function sort(Request $request)
    {
        $a = $request->input('min');
        $b = $request->input('max');
        $ax = $request->input('see');
        
        
        if($a!=null && $b!=null && $ax=="Filter"){
            
            $posts=Post::whereBetween('rent_price',[$a,$b])->get();            
            return view('posts.index',['posts'=>$posts])->with('a',$a)->with('b',$b);
        }
        if($a==null && $b==null && $ax!="Filter"){
            
            if($ax=='High to low'){
                $flt=1;
                $posts = Post::orderBy('rent_price', 'DESC')->get();
                return view('posts.index',['posts'=>$posts])->with('flt',$flt);    
            }
            else if($ax=='Low to high'){
                $flt=2;
                $posts = Post::orderBy('rent_price', 'ASC')->get();      
                return view('posts.index',['posts'=>$posts])->with('flt',$flt);    
            }
            else if($ax=='Newly Listed'){
                $flt=3;
                $posts = Post::orderBy('created_at', 'DESC')->get();
                return view('posts.index',['posts'=>$posts])->with('flt',$flt);    
            }
            else if($ax=='Oldest Listed'){
                $flt=4;
                $posts = Post::orderBy('created_at', 'ASC')->get();      
                return view('posts.index',['posts'=>$posts])->with('flt',$flt);    
            }
        }
        if($a!=null && $b!=null && $ax!="Filter"){
            if($ax=='High to low'){
                $flt=1;
                $posts=Post::whereBetween('rent_price',[$a,$b])->orderBy('rent_price', 'DESC')->get();
                return view('posts.index',['posts'=>$posts])->with('a',$a)->with('b',$b)->with('flt',$flt);  
            }
            else if($ax=='Low to high'){
                $flt=2;
                $posts=Post::whereBetween('rent_price',[$a,$b])->orderBy('rent_price', 'ASC')->get();
                return view('posts.index',['posts'=>$posts])->with('a',$a)->with('b',$b)->with('flt',$flt);   
            }
            else if($ax=='Newly Listed'){
                $flt=3;
                $posts=Post::whereBetween('rent_price',[$a,$b])->orderBy('created_at', 'DESC')->get();
                return view('posts.index',['posts'=>$posts])->with('a',$a)->with('b',$b)->with('flt',$flt);   
            }
            else if($ax=='Oldest Listed'){
                $flt=4;
                $posts=Post::whereBetween('rent_price',[$a,$b])->orderBy('created_at', 'ASC')->get();
                return view('posts.index',['posts'=>$posts])->with('a',$a)->with('b',$b)->with('flt',$flt);  
            }
            
            
        }
        
             
    }

    
    
    public function sortcat(Request $request,$id)
    {
        $a = $request->input('min');
        $b = $request->input('max');
        $ax = $request->input('see');
        
        
        if($a!=null && $b!=null && $ax=="Filter"){
            
            $posts=Post::whereBetween('rent_price',[$a,$b])->where('category_id','like',$id)->get();            
            return view('posts.index',['posts'=>$posts])->with('a',$a)->with('b',$b)->with('id',$id);
        }
        if($a==null && $b==null && $ax!="Filter"){
            
            if($ax=='High to low'){
                $flt=1;
                $posts = Post::orderBy('rent_price', 'DESC')->where('category_id','like',$id)->get();
                return view('posts.index',['posts'=>$posts])->with('flt',$flt)->with('id',$id);    
            }
            else if($ax=='Low to high'){
                $flt=2;
                $posts = Post::orderBy('rent_price', 'ASC')->where('category_id','like',$id)->get();      
                return view('posts.index',['posts'=>$posts])->with('flt',$flt)->with('id',$id);    
            }
            else if($ax=='Newly Listed'){
                $flt=3;
                $posts = Post::orderBy('created_at', 'DESC')->where('category_id','like',$id)->get();
                return view('posts.index',['posts'=>$posts])->with('flt',$flt)->with('id',$id);    
            }
            else if($ax=='Oldest Listed'){
                $flt=4;
                $posts = Post::orderBy('created_at', 'ASC')->where('category_id','like',$id)->get();      
                return view('posts.index',['posts'=>$posts])->with('flt',$flt)->with('id',$id);    
            }
        }
        if($a!=null && $b!=null && $ax!="Filter"){
            if($ax=='High to low'){
                $flt=1;
                $posts=Post::whereBetween('rent_price',[$a,$b])->orderBy('rent_price', 'DESC')->where('category_id','like',$id)->get();
                return view('posts.index',['posts'=>$posts])->with('a',$a)->with('b',$b)->with('flt',$flt)->with('id',$id);  
            }
            else if($ax=='Low to high'){
                $flt=2;
                $posts=Post::whereBetween('rent_price',[$a,$b])->orderBy('rent_price', 'ASC')->where('category_id','like',$id)->get();
                return view('posts.index',['posts'=>$posts])->with('a',$a)->with('b',$b)->with('flt',$flt)->with('id',$id);   
            }
            else if($ax=='Newly Listed'){
                $flt=3;
                $posts=Post::whereBetween('rent_price',[$a,$b])->orderBy('created_at', 'DESC')->where('category_id','like',$id)->get();
                return view('posts.index',['posts'=>$posts])->with('a',$a)->with('b',$b)->with('flt',$flt)->with('id',$id);   
            }
            else if($ax=='Oldest Listed'){
                $flt=4;
                $posts=Post::whereBetween('rent_price',[$a,$b])->orderBy('created_at', 'ASC')->where('category_id','like',$id)->get();
                return view('posts.index',['posts'=>$posts])->with('a',$a)->with('b',$b)->with('flt',$flt)->with('id',$id);  
            }
            
            
        }
        
             
    }

    public function filter(Request $request)
    {
        $c = $request->input('min');
        $b = $request->input('max');
        $request->session()->flash('min','max');
        if ($c!=null && $b!=null)
       {
        $posts=Post::whereBetween('rent_price',[$c,$b])->get();
        return view ('posts.index')->with('posts',$posts);          
        return view('posts.sort',['posts'=>$posts]);     
       }
    
        $a = $request->input('see');
        if($a!=null)
        {
        if($a=='High to low'){
            $posts = Post::orderBy('rent_price', 'DESC')->get();
            return view ('posts.index')->with('posts',$posts); 
            return view('posts.filter',['posts'=>$posts]);    
        }
        if($a=='Low to high'){
            $posts = Post::orderBy('rent_price', 'ASC')->get();      
            return view ('posts.index')->with('posts',$posts); 
            return view('posts.filter',['posts'=>$posts]);    
        }
        if($a=='Newly Listed'){
            $posts = Post::orderBy('created_at', 'DESC')->get();
            return view ('posts.index')->with('posts',$posts); 
            return view('posts.filter',['posts'=>$posts]);    
        }
        if($a=='Oldest Listed'){
            $posts = Post::orderBy('rent_price', 'ASC')->get();      
            return view ('posts.index')->with('posts',$posts); 
            return view('posts.filter',['posts'=>$posts]);    
        }
    }
    }
}
