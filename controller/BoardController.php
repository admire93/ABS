<?php
class BoardController extends Controller
{
	public $id;
	private $request;
	public function __construct($id)
	{
		parent::__construct();
		$this->id = $id;
	}
	public function index()
	{
		$this->post();
	}
	public function edit()
	{
	}
	public function show()
	{
	}
	public function write()
	{
		$data['title'] = 'Board Wrte _ ' . $this->id;
		$this->load->view('board/Aoard/write',$data);
	}
	public function post($page = 1)
	{
		$data['title'] = 'Board Name ::: ' . $this->id;
		$this->load->view('board/Aoard/post',$data);
	}
	public function request()
	{
		$this->request = new Request();
		#$this->load->model('Board');
		#$this->Board->setBoard($this->id);
		#$this->Board->_insert($request->getPost());
		var_dump($this->request->getPost());
		$this->show($this->request->getPost());
	}
}
?>

