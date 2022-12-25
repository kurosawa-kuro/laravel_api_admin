<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;
use Tests\TestCase;

class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function test_example()
    {
        $response = $this->get('/api/hello_list');
        dd($response);
        $response->assertStatus(200);
    }

    public function test_example2()
    {
        $data = [
            'name' => 'ttt',
            'email' => 'ttt@ttt.ttdddddfddt',
            'password' => 'ttt',
        ];
        $response = $this->post('/api/register',$data);
//        dd($response->baseResponse->content());
//        dd($response->exception);
        $response->assertStatus(201);
    }

    public function test_example3()
    {
        $uploadedFile = UploadedFile::fake()->image('design.jpg');
//        dd($uploadedFile);
        $response  = $this->post('/api/upload', ['image' => $uploadedFile]);
//        dd($response);
        $response->assertStatus(200);
//
////        $response = $this->post('/api/upload',$data);
////        dd($response->baseResponse->content());
//        dd($response->exception);
//        $response->assertStatus(201);
    }
}
