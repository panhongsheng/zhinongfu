<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
/**
 * Created by PhpStorm.
 * User: phs
 * Date: 15-12-30
 * Time: 上午9:38
 */
class MY_Controller extends CI_Controller
{
	public $_dir = ''; //站点模块目录
	public $_control = ''; //控制器
	public $_method = ''; //方法名称
	public $secondDomainName = ''; //二级域名
	public function __construct()
	{
		parent::__construct(); //初始化父类构造函数
		preg_match('/(.*)?\.\w+\.\w+$/', $_SERVER['HTTP_HOST'], $matches); //正则解析域名获取二级域名
		$this->secondDomainName = $matches[1];
		$this->_dir = trim($this->router->directory, '/');
		$this->_control = $this->router->class;
		$this->_method = $this->router->method;
		$this->_check_domain_module();
	}

	/**
	 * 检查域名是否对应模型
	 */
	public function _check_domain_module()
	{

	}
}