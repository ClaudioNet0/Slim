<?php

namespace App\Action\Admin;

use \App\Action\Action as Action;

final class PostAction extends Action{
	public function index($request, $response){
		$vars['title'] = 'Lista de Posts';
		$vars['page'] = 'posts/list';
		return $this->view->render($response, 'admin/template.phtml', $vars);
	}
}