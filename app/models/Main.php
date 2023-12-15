<?php

namespace app\models;


use RedBeanPHP\R;

class Main extends AppModel
{

    public function get_hits($lang, $limit): array
    {
        return R::getAll("SELECT p.* , pd.* FROM product p JOIN product_description pd on p.id = pd.product_id WHERE p.status = 1 AND p.hit = 1 AND pd.language_id = ? LIMIT $limit", [$lang['id']]);
    }

	public array $attributes = [
		'name' => '',
		'email' => '',
		'phone' => '',
		'text' => '',
	];

	public array $rules = [
		'required' => ['name', 'email', 'text'],
	];

	public array $labels = [
		'name' => 'contacts_input_name',
		'email' => 'contacts_input_email',
		'phone' => 'contacts_input_phone',
		'text' => 'contacts_input_text',
	];

}