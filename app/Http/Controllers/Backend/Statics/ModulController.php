<?php

namespace App\Http\Controllers\Backend\Statics;

use App\Models\Module;
use App\Models\Page;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ModulController extends Controller
{
    public function show(){
        $modules = Module::all();
        return view("backend.static.moduleIndex", compact("modules"));
    }
    public function newModulShow()
    {
        $pages = Page::all();
        return view("backend.static.newModule", compact("pages"));
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

        $module = new Module();

        $module->name = $request->name;
        $module->title = $request->title;
        $module->description = $request->description;
        $module->page_id = $request->page_id;


        if ( $module->save()){
            return ["status"=>"success","title"=>"başarılı","massage"=>"Modul keydedildi"];

        }
        return ["status"=>"error","title"=>"hatalı","massage"=>"Modul keydedilmedi"];

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
