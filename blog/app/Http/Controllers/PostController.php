<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
session_start();
class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
        //
        return "it's work".$id;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
        return "This is how to show page work ".$id;
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
    }

    public function contact(){
        $people = ['ironman','thor','hulk','thanos','batman'];
        return view('contact',compact('people'));
    }

    public function show_post($id,$name,$pass){
        return view('post',['id'=>$id,'username'=>$name,'pass'=>$pass]);
    }

    public function add_heroes(Request $request){
        if(isset($_SESSION['heroes'])){

            array_push($_SESSION['heroes'],$request->input('name'));
        }else{
            $_SESSION['heroes'] = array('name');  
            array_push($_SESSION['heroes'],$request->input('name'));
        }
      
    }
    public function get_heroes(){
        return $_SESSION['heroes'];
    }
}
