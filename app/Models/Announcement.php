<?php

namespace App\Models;

use App\Models\Category;
use App\Models\Announcement;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Announcement extends Model
{
   public function category()
   {
      return $this->belongsTo(Category::class);
   }
}