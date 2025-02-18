<?php

namespace Tests\Feature;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;


class LoginTest extends TestCase
{
    /**
     * A basic feature test example.
     */
    public function test_user_can_login_with_correct_credentials()
    {
        // Tạo một người dùng
        $user = User::factory()->create([
            'email' => 'test@example.com',
            'password' => bcrypt('password'),
        ]);

        // Gửi yêu cầu đăng nhập
        $response = $this->post('/login', [
            'email' => 'test@example.com',
            'password' => 'password',
        ]);

        // Kiểm tra phản hồi
        $response->assertStatus(302);
        $this->assertAuthenticatedAs($user);
    }

    public function test_user_cannot_login_with_incorrect_credentials()
    {
        // Tạo một người dùng
        $user = User::factory()->create([
            'email' => 'test@example.com',
            'password' => bcrypt('password'),
        ]);

        // Gửi yêu cầu đăng nhập với thông tin không chính xác
        $response = $this->post('/login', [
            'email' => 'test@example.com',
            'password' => 'wrongpassword',
        ]);

        // Kiểm tra phản hồi
        $response->assertStatus(302);
        $this->assertGuest();
    }
}
