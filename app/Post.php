<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Post extends Model
{
	
 	protected $guarded = [];   

 	public function comments()
    {

    	return $this->hasMany('App\Comment');

    }


    public function user()
    {

    	return $this->belongsTo('App\User');

    }



    public function addComment($body)
    {
    	$this->comments()->create(compact('body'));
    }

    public function scopeFilter($query, $filters)
    {

        if (isset($filters['month']))
        {
            $month = $filters['month'];

            $query->whereMonth('created_at', Carbon::parse($month)->month );
        }


        if (isset($filters['year']))
        {
            $year = $filters['year'];

            $query->whereYear('created_at', Carbon::parse($year)->year );
        }
    }

    public static function archives()
    {
        return static::selectRaw('year(created_at) year, monthname(created_at) month, count(*) published')

                    ->groupBy('year', 'month')

                    ->orderByRaw('min(created_at) desc')

                    ->get();
    }

    public function tags()
    {
        return $this->belongsToMany('App\Tag');
    }

}
