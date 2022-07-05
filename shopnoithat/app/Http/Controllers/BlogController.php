<?php

namespace App\Http\Controllers;
use App\Models\blog_models;
use App\Models\categorie_models;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $blog =blog_models::orderby('id','desc')->paginate(10);
        return view('blog.index',['blogs'=>$blog]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('blog.new');
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
            'mota'=>"required",
            'tieude'=>"required",
            'anh'=>"required",
            'email'=>"required",
            

        ];
        $validator=Validator::make($request->all(),$rule);
        if($validator->fails())
        {
            return redirect()->route('blog.create')->withErrors($validator)->withInput();
        }
        else{

        
        $blog=new blog_models;
       
        $blog->mota=$request->mota;
        $blog->tieude=$request->tieude;
        $blog->email=$request->email;
        $blog->save();
          //upload file 

          $id = $blog->id;
          $file=$request->anh;
          $file->move("./uploads/blog","$id.jpg");
          
         
        return redirect()->route('blog.index');
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
        $blog=blog_models::findOrFail($id);
      
        return view('blog.edit',[
            'blog'=>$blog]);
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
        $rule=[
            'mota'=>"required",
            'tieude'=>"required",
            'anh'=>"required",
            'email'=>"required",
            

        ];
        $validator=Validator::make($request->all(),$rule);
        if($validator->fails())
        {
            return redirect()->route('edit.create')->withErrors($validator)->withInput();
        }
        else{

        
        $blog= blog_models::findOrFail($id);
        $blog->mota=$request->mota;
        $blog->tieude=$request->tieude;
        $blog->email=$request->email;
        $blog->save();
          //upload file 

          $id = $blog->id;
          $file=$request->anh;
          $file->move("./uploads/blog","$id.jpg");
          
         
        return redirect()->route('blog.index');
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
        $blog =blog_models::findOrFail($id);
        $blog->delete();
        return redirect()->route('blog.index');
    }
    public function contact()
    {
        return view('client.contact');
    }
    public function clientBlog()
    {
        $categorie =categorie_models::all();
        $blog3 =blog_models::orderBy('id','asc')->take(3)->get();
        $blog4 =blog_models::orderBy('id','desc')->take(4)->get();
        $blog =blog_models::orderBy('id','desc')->get();
        return view('client.blog',['blog3'=>$blog3,'blog4'=>$blog4,'categories'=>$categorie,'blogs'=>$blog]);
        

    }
}
