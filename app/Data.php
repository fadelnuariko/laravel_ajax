<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Data extends Model
{
    protected $table = 'tbl_data';
    protected $primaryKey = 'id';
    public $timestamps = false;
}
