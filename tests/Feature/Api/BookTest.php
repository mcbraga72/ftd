<?php

namespace Tests\Feature\Api;

use App\Models\Book;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class BookTest extends TestCase
{
    /**
     * Testing get method - index.
     *
     * @return void
     */
    public function testGetBooks()
    {
        $response = $this->json('GET', '/api/book');
        $response->assertStatus(200);
    }

    /**
     * Testing post method - store.
     *
     * @return void
     */
    public function testCreateBook()
    {
        $response = $this->json('POST', '/api/book', [
            'isbn' => '7898592130952',
            'title' => '360º Filosofia',
            'cover' => 'https://s3-us-west-2.amazonaws.com/catalogo.ftd.com.br/files/uploads/11699118CJ_resized_597x800.jpg',
            'level' => 'Ensino médio',
            'price' => '219.00',
            'authors' => [1],
            'disciplines' => [1]
        ]);
        
        $response->assertStatus(201);
    }

    /**
     * Testing get method - show.
     *
     * @return void
     */
    public function testGetBook()
    {
        $books = $this->json('GET', '/api/book');
        $response = $this->json('GET', "/api/book/" . $books->getData()[0]->id);
        $response->assertStatus(200);
    }

    /**
     * Testing get method - update.
     *
     * @return void
     */
    public function testUpdateBook()
    {
        $books = $this->json('GET', '/api/book');
        $book = Book::findOrFail($books->getData()[0]->id);
        $book->title = "Teste";
        $book->save();
        
        $response = $this->json('PUT', '/api/book', [
            'isbn' => $book->isbn,
            'title' => $book->title,
            'cover' => $book->cover,
            'level' => $book->level,
            'price' => $book->price,
            'authors' => [1],
            'disciplines' => [1]
        ]);
        
        $this->assertDatabaseHas('books', [
            'title' => 'Teste'            
        ]);
    }

    /**
     * Testing get method - delete.
     *
     * @return void
     */
    public function testDeleteBook()
    {
        $books = $this->json('GET', '/api/book');
        $response = $this->json('DELETE', "/api/book/" . $books->getData()[0]->id);
        $this->assertDatabaseMissing('books', ['deleted_at' => null, 'id' => $books->getData()[0]->id]);
    }
}
