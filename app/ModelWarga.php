<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ModelWarga extends Model
{
	protected $fillable = ['nik, name, gender, tgl_lahir, email, password, role, remember_token, created_at, updated_at'];
    protected $table = 'tb_warga';

    protected $primaryKey = 'nik';
}
