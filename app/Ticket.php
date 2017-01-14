<?php

namespace App;

use App\User;
use Illuminate\Database\Eloquent\Model;

class Ticket extends Model
{
    public function user()
    {
      $this->belongsTo('User');
    }

    public function getTitle()
    {
      return $this->title;
    }
}
