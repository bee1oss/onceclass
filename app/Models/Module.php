<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Module extends Model
{
    protected $table = "modules";
    protected $fillable = ["pafe_id","title","description","name"];

    public function page()
    {
        return $this->hasOne(Page::class, "page_id");
    }
}
