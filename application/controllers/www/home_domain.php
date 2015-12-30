<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class home_domain extends MY_Controller {
	/**
	 * 设置不同域名使用不同的模块首页
	 */
	public function index()
	{
		echo '网站首页';
	}
}
