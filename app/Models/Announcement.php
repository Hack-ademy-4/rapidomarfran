<?php

namespace App\Models;

use App\Models\User;
use App\Models\Category;
use App\Models\Announcement;
use App\Models\AnnouncementImage;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Announcement extends Model
{   
   use HasFactory;
   
   public function category()
   {
      return $this->belongsTo(Category::class);
   }
   
   public function user()
   {
      return $this->belongsTo(User::class);
   }

   
  public function images()
  {
      return $this->HasMany(AnnouncementImage::class);
  }


   static public function ToBeRevisionedCount()
   {
      return Announcement::where('is_accepted', null)->count();
   }
}
