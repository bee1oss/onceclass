<?php

namespace App\Http\Controllers\Backend\Statics;

use App\Models\Page;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class StaticController extends Controller
{
    public function show(){
        $pages = Page::all();
        return view("backend.static.index" ,compact("pages"));
    }
    public function newPageShow()
    {
        return view("backend.static.newPage");
    }

    public function editPageShow($slug)
    {
        $page = Page::where("slug",$slug)->first();
        return view("backend.static.newPage", compact("page"));
    }
    public function update(Request $request, $slug)
    {
        if ($request->slug== null){
            $slugNew = str_slug($request->name);
        }else{
            $slugNew = str_slug($request->slug);
        }
        $page = Page::where( "slug" , $slug )->update
        ([ "name"=>$request-> name,
        "slug" => $slugNew,
        "title" => $request->title,
        "keywords" => $request->keywords,
         "description" => $request->description,
        ]);

        if($page){
            return "başarılı";
        }
        return "hatalı";

    }
    public function create(Request $request){
        if ($request->slug == null){
            $slug = str_slug($request->name);
        }else{
            $slug = str_slug($request->slug);
        }

        $page = new Page();

        $page->name = $request->name;
        $page->slug = $slug;
        $page->title = $request->title;
        $page->keywords = $request->keywords;
        $page->description = $request->description;


        if ( $page->save()){
            return ["status"=>"success","title"=>"başarılı","massage"=>"yeni sayfa keydedildi"];

        }
        return ["status"=>"error","title"=>"hatalı","massage"=>"yeni sayfa keydedilmedi"];

    }
    public function delete(Request $request)
    {

        $page = Page::where("id",$request->id)->delete();

        if ($page){
            return ["status"=>"success","title"=>"başarılı","massage"=>"sayfa silindi"];

        }
        return ["status"=>"error","title"=>"hatalı","massage"=>"sayfa silinemedi"];

    }
}
