<?php

namespace Tests\Feature;

use App\Models\Discipline;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class DisciplineTest extends TestCase
{
    /**
     * Testing get method - index.
     *
     * @return void
     */
    public function testGetDisciplines()
    {
        $response = $this->json('GET', '/api/discipline');
        $response->assertStatus(200);
    }

    /**
     * Testing post method - store.
     *
     * @return void
     */
    public function testCreateDiscipline()
    {
        $response = $this->json('POST', '/api/discipline', [
            'name' => 'Sociologia'
        ]);

        $response->assertStatus(201);
    }

    /**
     * Testing get method - show.
     *
     * @return void
     */
    public function testGetDiscipline()
    {
        $disciplines = $this->json('GET', '/api/discipline');
        $response = $this->json('GET', "/api/discipline/" . $disciplines->getData()[0]->id);
        $response->assertStatus(200);
    }

    /**
     * Testing get method - update.
     *
     * @return void
     */
    public function testUpdateDiscipline()
    {
        $disciplines = $this->json('GET', '/api/discipline');
        $discipline = Discipline::findOrFail($disciplines->getData()[0]->id);
        $discipline->name = "Discipline Name";
        $discipline->save();
        
        $response = $this->json('PUT', '/api/discipline', [
            'name' => $discipline->name            
        ]);
        
        $this->assertDatabaseHas('disciplines', [
            'name' => 'Discipline Name'            
        ]);
    }

    /**
     * Testing get method - delete.
     *
     * @return void
     */
    public function testDeleteDiscipline()
    {
        $disciplines = $this->json('GET', '/api/discipline');
        $response = $this->json('DELETE', "/api/discipline/" . $disciplines->getData()[0]->id);
        $this->assertDatabaseMissing('disciplines', ['deleted_at' => null, 'id' => $disciplines->getData()[0]->id]);
    }
}
