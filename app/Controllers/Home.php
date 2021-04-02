<?php

namespace App\Controllers;

class Home extends BaseController
{
	public function index()
	{
		$db = db_connect();
        $sql = "SELECT * FROM events";


		$query = $db->query($sql);
		$rows = $query->getResultArray();
		$data['event'] = $rows;
		


		return view('index',$data);
	}
}
