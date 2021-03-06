<?php
namespace Tool\Controller;
use Think\Controller;
class FormatController extends Controller {
    public function __construct() {
        parent::__construct();
        $news=news();
        $this->assign('news',$news);        

    }
	// jshtml格式化压缩
    public function jshtml_format(){
        $this->display();
    }
    //css格式化压缩
    public function csszip(){
    	$this->display();
    }

    //json格式化工具	
    public function jsons(){
    	$this->display();
    }

    //xml格式化工具 
    public function xmlzip(){
        $this->display();
    }

    //xml格式化工具 
    public function unicode(){
        $this->display();
    }

}