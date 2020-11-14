<?php

namespace App\Controllers;

class Home extends BaseController
{

	protected $helpers;

	public function __construct()
	{
		$helpers = ['url', 'file', 'url_helper'];
		$request = \Config\Services::request();
	}

	public function index()
	{
		echo view('content/index');
	}

	public function id($id)
	{
		if ($id == 'blog') {
			$this->_blog();
		} else {
			throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
		}
	}

	private function _blog()
	{
		$id = $this->request->getGet('page');
		if (!empty($id)) {
			$data = [
				'judul' => $id
			];
			echo view('content/content', $data);
		} else {
			$data = ['judul' => 'blog dgt'];
			echo view('content/list', $data);
		}
	}

	//--------------------------------------------------------------------

}
