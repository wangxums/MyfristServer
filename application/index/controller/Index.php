<?php
namespace app\index\controller;
use think\Controller;

class Index  extends Controller
{
    public function index(){
        return $this -> fetch('/add');
    }
    public function query(){
        return $this -> fetch('/query');
    }
    public function update(){
        return $this -> fetch('/update');
    }
    public function del(){
        return $this -> fetch('/update');
    }

    public function addbook(){
    	$request = request();
		$param = $request->param();
    	$id = $param['id'];
        $name = $param['name'];
        $autor = $param['autor'];
    	$intro = $param['intro'];
        $bookinfo = new \app\index\model\Bookinfo(); 
    	$info = $bookinfo ->add($id,$name,$autor,$intro);
        if($info){
            return true;
        }else{
            return false;
        }
    }
    public function b_query()
    {
        $request = request();
        $param = $request->param();
        $info = $param['info'];
        $bookinfo = new \app\index\model\Bookinfo(); 
        $info = $bookinfo -> b_query($info);
        if($info){
            return $info;
        }else{
            return false;
        }
    }
    public function test()
    {
    	echo "women ";
    }
}
