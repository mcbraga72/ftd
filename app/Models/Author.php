<?php

namespace App\Models;

use App\Models\Book;
use App\Models\Discipline;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Author extends Model
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
     * Get author's books.
     * 
     * @return Book[]
     */
    public function books()
    {
    	return $this->belongsToMany(Book::class, 'publications', 'author_id', 'book_id')->withPivot('id')->withTimestamps();
    }

    /**
     * Get the disicplines associated with the author's books.
     * 
     * @return Disicpline[]
     */
    public function disciplines()
    {
    	return $this->hasManyThrough(Discipline::class, Book::class);
    }
}
