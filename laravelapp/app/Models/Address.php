<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    use HasFactory;

    protected $guarded = array('id');

    public function getData()
    {
        return $this->id . $this->name . $this->postal . $this->address . $this->phone . $this->email .$this->todo;
    }

}


