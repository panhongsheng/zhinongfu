<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class home extends MY_Controller
{
	public $home_domain;//创建显示首页对象
	public $home_domain_view;//创建显示首页对象
	/**
	 * 设置不同域名使用不同的模块首页
	 */
	public function __construct()
	{
		parent::__construct();
		$this->_init();
	}

	/**
	 * 初始化数据
	 */
	private function _init(){
		$this->home_domain_view = $this->secondDomainName.'/'.$this->_method;
		$home_path = APPPATH . 'controllers/' . $this->secondDomainName . '/';
		require_once $home_path . 'home_domain.php';
		$this->home_domain = new home_domain();
	}
	/*
	 * 首页显示
	 */
	public function index()
	{
		$this->load->view($this->home_domain_view,$this->home_domain->{$this->_method}());
	}
}
