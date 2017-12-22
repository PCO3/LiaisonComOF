<?php


class LiaisonComOF extends CI_Controller
{
    public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		//connexion à la base de données par défaut dans la config (testcode)

		$this ->load -> database();

		$this->connexion();
	}
}
