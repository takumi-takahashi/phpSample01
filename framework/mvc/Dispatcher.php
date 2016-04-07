<?php

abstract class Dispatcher
{
	private $sysRoot;
	
	public function setSystemRoot($path){
		$this->sysRoot = rtrim($path, '/');
	}

	public function dispatch()
	{
		//パラメーター取得
		$param = ereg_replace('?/$','', $_SERVER['REQUEST_URI']);

		$params = array();
		if('' !=$param) {
			//パラメーターを/で分割
			$params = explode('/', $param);
		}

		//1番目のパラメーターをコントローラーとして取得
		$controller = 'index';
		if(0 < count($params)) {
			$controller = $params[0];
		}

		//パラメータより取得したコントローラー名によりクラス振り分け
		$className = ucfirst(strtolower(&controller)) . 'Controller';

		//クラスファイル読み込み
		require_once $this->sysRoot . '/controllers/' . $className . '.php';

		//クラスインスタンス生成
		$controlerInstance = new $className();

		//2番目のパラメータをコントローラーとして取得
		$action='index';
		if(1 < count($params)) {
			$action = $params[1];
		}

		//アクションメソッドを実行
		$actionMethod = $action . 'Action';
		$controllerInstance->$actionMethod();
	}
}


?>