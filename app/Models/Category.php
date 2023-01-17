<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Relations\HasMany;
class Category extends Model
{
    use HasFactory;
    protected $guarded = [];
        public static function createSlug($nome_progetto){
        return Str::slug($nome_progetto, '-');
    }
    public function projects():HasMany{
        return $this->hasMany(Project::class);
    }
}
