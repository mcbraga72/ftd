<?php

namespace App\Models;

//use App\Models\Author;
//use App\Models\Book;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Discipline extends Model
{
    use SoftDeletes;

    /**
     * Enable soft deletes in the model.
     *
     * @var array
     */
    protected $dates = [
    	'expires_at',
    	'deleted_at'
    ];

    /**
     * Get discipline's books.
     * 
     * @return Book[]
     */
    /*public function books()
    {
    	return $this->belongsToMany(Book::class, 'associations', 'discipline_id', 'book_id')->withPivot('id')->withTimestamps();
    }*/

    /**
     * Get the authors associated with the discipline's books.
     * 
     * @return Author[]
     */
    /*public function authors()
    {
    	return $this->hasManyThrough(Author::class, Book::class);
    }*/
}
