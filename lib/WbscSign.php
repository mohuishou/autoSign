<?php
/**
* 沃贝四川自动签到
*/
namespace Mohuishou\Lib;
class wbscSign
{
	/**
	 * 验证是否登录的地址
	 * @var string
	 */
	private $_check_sign_url="http://wob.169ol.com/wobei/online/apis/GetSign.ashx";

	/**
	 * 签到地址
	 * @var string
	 */
	private $_sign_url="http://wob.169ol.com/wobei/online/Sign/Default.aspx";

	/**
	 * 登陆cookie的路径
	 * @var string
	 */
	private $_login_cookie="fee_status=true; AspxAutoDetectCookieSupport=1; woUsrMob_sc=usermob=JM//ZFa1/y8g2xGSjmMB0w==&userkey=000c71d0de81188c1abf5462850100ec";

	/**
	 * 初始化
	 * @param [type] $login_cookie cookie文件路径，如果为null则先登录
	 */
	public function __construct($login_cookie=null){
		if($login_cookie){
			$this->_login_cookie=$login_cookie;
		}else {
			$this->login();
		}
	}



	public function login(){

	}

	public function sign(){
		$status=$this->get($this->_check_sign_url,$this->_login_cookie,'str');
		if($status){
			$p=$this->get($this->_sign_url,$this->_login_cookie,'str');
			print_r($p);
			return [];
		}else{
			return [
				'msg'=>'尚未登录，或者登录信息已经失效，请重新登陆一次使用',
				'code'=>'10001'
			];
		}
		
	}
}