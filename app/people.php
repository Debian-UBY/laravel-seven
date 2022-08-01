<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class people extends Model
{
    //mempresentasikan isi tabel pada model
    protected $fillable = ['first_name', 'last_name', 'age'];
}
