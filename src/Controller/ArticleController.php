<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;

Class ArticleController {

	/**
	 * @Route("/")
	 */
	public function homepage()
	{
		return new Response('OMG! My First page already !!!');
	}

	/**
	 * @Route("/news/why-asteroids-taste-like-bacon")
	 */
	public function show() {
		return new Response('Future space to one space article!');
	}
}