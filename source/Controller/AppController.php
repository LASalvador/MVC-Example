<?php 
	
	namespace App\Controller;

	final class Appcontroller extends Controller
	{
		public function __construct()
		{
			session_start();
			session_regenerate_id();
		}
		public static function index()
		{
			return self::view('home');
		}
		public static function about()
		{
			return self::view('about');
		}
		public static function loadForm($etc)
		{
			return self::view('form'.$etc);
		}
		public static function submitFormIAGPOL()
		{
			
			$_SESSION['texto'] = self::params('texto');
			self::redirect('/IAGPOL/Output');
		}
		public static function loadOuput($etc)
		{
			return self::view('output'.$etc);
		}
	}
?>