<?php

namespace Tests\Feature;

use App\Models\Author;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class AuthorTest extends TestCase
{
    /**
     * Testing get method - index.
     *
     * @return void
     */
    public function testGetAuthors()
    {
        $response = $this->json('GET', '/api/author');
        $response->assertStatus(200);
    }

    /**
     * Testing post method - store.
     *
     * @return void
     */
    public function testCreateAuthor()
    {
        $response = $this->json('POST', '/api/author', [
            'name' => 'Dalton Franco'            
        ]);

        $response->assertStatus(201);
    }

    /**
     * Testing get method - show.
     *
     * @return void
     */
    public function testGetAuthor()
    {
        $authors = $this->json('GET', '/api/author');
        $response = $this->json('GET', "/api/author/" . $authors->getData()[0]->id);
        $response->assertStatus(200);
    }

    /**
     * Testing get method - update.
     *
     * @return void
     */
    public function testUpdateAuthor()
    {
        $authors = $this->json('GET', '/api/author');
        $author = Author::findOrFail($authors->getData()[0]->id);
        $author->name = "Author Name";
        $author->save();
        
        $response = $this->json('PUT', '/api/author', [
            'name' => $author->name            
        ]);
        
        $this->assertDatabaseHas('authors', [
            'name' => 'Author Name'            
        ]);
    }

    /**
     * Testing get method - delete.
     *
     * @return void
     */
    public function testDeleteAuthor()
    {
        $authors = $this->json('GET', '/api/author');
        $response = $this->json('DELETE', "/api/author/" . $authors->getData()[0]->id);
        $this->assertDatabaseMissing('authors', ['deleted_at' => null, 'id' => $authors->getData()[0]->id]);
    }
}
