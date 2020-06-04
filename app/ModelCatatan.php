<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ModelCatatan extends Model
{
	protected $guarded = ['id'];
    protected $table = 'tb_catatan';
}