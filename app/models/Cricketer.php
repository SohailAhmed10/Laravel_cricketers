<?php


class Cricketer extends Eloquent {

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */

	public $timestamps = false;
	protected $table = 'cricketers';

	protected $fillable = array(
        'name', 'shirt_number',
        'number_of_sixes', 'age');

}