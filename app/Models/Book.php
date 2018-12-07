<?php

namespace App\Models;

use App\Models\Author;
use App\Models\Discipline;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Book extends Model
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
     * Get the authors who wrote the book.
     * 
     * @return Author[]
     */
    public function authors()
    {
    	return $this->belongsToMany(Author::class, 'publications', 'book_id', 'author_id')->withPivot('id')->withTimestamps();
    }

    /**
     * Get the disicplines associated with the book.
     * 
     * @return Disicpline[]
     */
    public function disciplines()
    {
    	return $this->belongsToMany(Discipline::class, 'associations', 'book_id', 'discipline_id')->withPivot('id')->withTimestamps();
    }
}
