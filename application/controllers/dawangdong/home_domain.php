<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class home_domain extends MY_Controller {
	/**
	 * 设置不同域名使用不同的模块首页
	 */
	public function index()
	{
		$data = array(
			'content'=>'内容',
			'array_list'=>array(
				'1'=>'数组1',
				'2'=>'数组2'
			)
		);
		return $data;
	}
}
