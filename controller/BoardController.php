<?php
class BoardController extends Controller
{
	public function index()
	{
		$data['title'] = 'This is index title';
		$data['body'] = 'This is Body Message';
		$this->load->view('board/index',$data);
	}
	public function edit()
	{
	}
	public function show()
	{
	}
	public function post($page = 1)
	{
	}
}
?>

