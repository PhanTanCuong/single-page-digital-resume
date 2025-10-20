<?php

namespace Tests\Feature;

use GuzzleHttp\Psr7\Response;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Http\Client\ResponseSequence;
use Illuminate\Support\Facades\Storage;

use Tests\TestCase;

class ResumeControllerTest extends TestCase
{
    /**
     * A basic feature test example.
     */
    public function test_resume_payload_successfully(): void
    {
        // arrange
        $resumeData = [
            'basics' => [
                'name' => 'Alexander Smith',
                'label' => 'Senior Backend Developer | DevOps Enthusiast',
                'image' => '/images/alex_profile.jpg',
                'email' => 'alex.smith.dev@example.com',
                'phone' => '(555) 123-4567',
                'url' => 'https://alexsmithdev.com',
                'summary' => 'Highly motivated Senior Backend Developer with 8 years of experience building scalable, robust, and secure web applications using PHP/Laravel and Go. Proven ability to lead cross-functional teams and improve deployment pipelines.',
                'location' => [
                    'address' => '101 Tech Lane',
                    'postalCode' => '10001',
                    'city' => 'New York',
                    'countryCode' => 'US',
                    'region' => 'NY'
                ],
            ]
        ];

        // \Illuminate\Support\Facades\Cache::forget('resuma_data');

        Storage::fake('resume');
        Storage::disk('resume')->put('resume.json', json_encode($resumeData));

        //act

        $response = $this->get('/');

        $response->assertStatus(200);
        $response->assertSee('Alexander Smith');
        $response->assertSee('Senior Backend Developer | DevOps Enthusiast');
        $response->assertSee('alex.smith.dev@example.com');
    }
}
