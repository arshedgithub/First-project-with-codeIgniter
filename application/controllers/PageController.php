<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class PageController extends CI_Controller {

	public function index()
	{
        echo "This is Page Controller Page";
	}

	public function demo()
	{
        echo "demo sub route of Page Controller function";
	}

	public function blog($blog_url = '')
	{
        echo "$blog_url";

	}
}
