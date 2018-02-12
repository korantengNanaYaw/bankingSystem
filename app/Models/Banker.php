<?php

/**
 * Created by Reliese Model.
 * Date: Mon, 27 Nov 2017 07:31:04 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Banker
 * 
 * @property int $id
 * @property string $firstname
 * @property string $lastname
 * @property string $password
 * @property string $email
 * @property string $phone
 * @property string $dob
 * @property string $pic
 * @property string $gender
 * @property string $address
 * @property string $city
 * @property string $state
 * @property string $zipcode
 * @property string $acctype
 * @property string $pin
 * @property string $token
 * @property string $remember_token
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 *
 * @package App\Models
 */
class Banker extends Eloquent
{
	protected $hidden = [
		'password',
		'token',
		'remember_token'
	];

	protected $fillable = [
		'firstname',
		'lastname',
		'password',
		'email',
		'phone',
		'dob',
		'pic',
		'gender',
		'address',
		'city',
		'state',
		'zipcode',
		'acctype',
		'pin',
		'token',
		'remember_token'
	];
}
