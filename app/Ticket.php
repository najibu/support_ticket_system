<?php

namespace App;

use App\User;
use Illuminate\Database\Eloquent\Model;

class Ticket extends Model
{
    protected $fillable = [
      'title',
      'content',
      'slug',
      'status',
      'user_id'
    ];

    public function user()
    {
      $this->belongsTo('User');
    }

    public function getTitle()
    {
      return $this->title;
    }
}
