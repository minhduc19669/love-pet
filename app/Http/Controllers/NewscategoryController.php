<?php

namespace App\Http\Controllers;

use App\Http\Requests\ValidateFormAddNescategory;
use App\Http\Requests\ValidateFormUpdateNewscategory;
use App\Newscategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use mysql_xdevapi\Exception;

class NewscategoryController extends Controller
{
    public function list(){
        $newscategory = Newscategory::all();
       return view('admin.newscategory.list',compact('newscategory'));
    }
    public function add(){
        return view('admin.newscategory.add');
    }
    public function save(ValidateFormAddNescategory $request){
       try{
        DB::beginTransaction();
            Newscategory::create([
              'news_cate_title' => $request ->news_cate_title,
               'news_cate_desc' => $request ->news_cate_desc,
               'news_cate_status' => $request ->news_cate_status
           ]);
               DB::commit();
           Alert()->success('Thêm thành công !')->autoClose(1500);
           return \redirect()->route('newscategory.list');
       }catch (Exception $e){
              DB::rollBack();
       }
    }
    public function edit($id){
        $newscategory = Newscategory::where('id',$id)->get();
        return view('admin.newscategory.edit',['newscategory'=>$newscategory]);
    }
    public function update(ValidateFormUpdateNewscategory $request,$id){
        Newscategory::find($id)->update([
            'news_cate_title' => $request->news_cate_title,
            'news_cate_desc' => $request->news_cate_desc,
            'news_cate_status' => $request->news_cate_status
        ]);
        Alert()->success('sửa  thành công !')->autoClose(1500);
        return \redirect()->back();
    }
}