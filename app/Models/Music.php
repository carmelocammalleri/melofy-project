<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Music extends Model
{
    use HasFactory;

    protected $fillable=[
        'name',
        'slug',
        'artist',
        'album',
        'music_time',
        'publication_year'
    ];

    public static function generateSlug($string){
        $slug = Str::slug($string, '-');
        $original_slug = $slug;

        $exists = Music::where('slug', $slug)->first();
        $c = 1;
        while($exists){
            $slug = $original_slug .'-'. $c;
            $exists = Music::where('slug', $slug)->first();
            $c++;
        }
        return $slug;
    }

}
