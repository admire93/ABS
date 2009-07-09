<?php
class MainController extends Controller
{
	private $var = array();
	private $urlInfo,$html;
	public function __construct()
	{
		parent::__construct();
		$this->html = new Html();
		$this->html->_header('Hello TestPage');
	}
	public function __destruct()
	{
		$this->html->_footer();
	}
	public function run($url)
	{
		$this->urlInfo = $url;
		if(empty($this->urlInfo['controller'])) {
			$this->MainPage();
		} else {
			$new = newCode($this->urlInfo['controller'],$this->urlInfo['method'],$this->urlInfo['param'],$this->urlInfo['id']);
		}
	}

	public function MainPage()
	{
		$this->load->view('Main/index');
	}
}
?>
