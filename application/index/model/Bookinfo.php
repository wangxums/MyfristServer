<?php
namespace app\index\model;
use think\Model;
use think\Db;
class Bookinfo extends \think\Model{
	protected $table = 'bookinfo';
    protected $field = true;
    //添加书籍
	public  function add($id,$name,$autor,$intro)
	{
		$info = $this -> insert([ 'book_id'=> $id , 'book_name'=> $name ,'book_autor'=>$autor , 'book_intro'=>$intro]);
		if($info){
			return true;
		}else{
			return false;
		}
	}
	//查询
	public function b_query($info)
	{
    	
		$where['book_name'] = array( 'like',"%$info%");
		$req = $this->where($where)->select();
		return $req;
	}
}