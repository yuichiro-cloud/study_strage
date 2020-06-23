<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class StudyTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */

    public function testIndexView()
    {
        $response = $this->get('/');
        $response->assertSeeText('index');
    }

    public function testShowView()
    {
        $response = $this->get('/study/{id}');
        $response->assertSeeText('show');
    }

    public function testEditView()
    {
        $response = $this->get('/study/{id}/edit');
        $response->assertSeeText('edit');
    }

    public function testCreateView()
    {
        $response = $this->get('/create');
        $response->assertSeeText('create');
    }
}
