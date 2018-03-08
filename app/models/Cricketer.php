<?php


class Cricketer extends Eloquent {

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */

	public $timestamps = false;
	protected $table = 'cricketers';

	public static $rules = ['name'=>'required', 'number_of_sixes'=>'required', 'age'=>'required', 'shirt_number'=>'required'];

	protected $fillable = array(
        'name', 'shirt_number',
        'number_of_sixes', 'age');

	public static $messages;

	public static function isValid($data)
	{
		$validation = Validator::make($data, Cricketer::$rules);

		if ($validation->passes())
		{
			return true;
		}

		static::$messages = $validation->messages();

		return false;
	}

}