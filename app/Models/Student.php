<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Student
 *
 * @property $id
 * @property $stu_name
 * @property $stu_lstname
 * @property $stu_dni
 * @property $stu_phone
 * @property $stu_email
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Student extends Model
{
    
    static $rules = [
		'stu_name' => 'required',
		'stu_lstname' => 'required',
		'stu_dni' => 'required',
		'stu_phone' => 'required',
		'stu_email' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['stu_name','stu_lstname','stu_dni','stu_phone','stu_email'];



}
