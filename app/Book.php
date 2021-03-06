<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Book extends Model {

	protected $fillable = [
            'title',
            'author',
            'rating',
            'comments',
            'read_at',
            'genre',
            'user_id'
        ];
        
        public function user()
        {
            return $this->belongsTo('App\User');
        }

}
