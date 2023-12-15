<?php

	namespace app\controllers;


	use app\models\Main;
	use RedBeanPHP\R;
	use wfm\App;
	use wfm\Cache;


	/** @property Main $model */
	class MainController extends AppController
	{

		public function indexAction()
		{
			$lang = App::$app->getProperty('language');
			$this->setMeta(___('main_index_meta_title'), ___('main_index_meta_description'), ___('main_index_meta_keywords'));

			if (!empty($_POST)) {
				$this->model->load();
				debug($this->model->attributes);
				if (!$this->model->validate($this->model->attributes)) {
					$this->model->getErrors();
					$_SESSION['contacts_data'] = $this->model->attributes;
				}
				if ($this->model->save('contacts')) {
					$_SESSION['success'] = ___('contacts_button');
				} else {
					$_SESSION['errors'] = ___('contacts_button');
				}
				redirect();
			}
		}

	}