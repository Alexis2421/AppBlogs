<?php

use App\Models\User;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Encryption\Encrypter;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->integer('age');
            $table->integer('type');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();
        });

      //  $data = array("name" => "Alexis Pescador", "age" =>"26", "type"=>"1", "email"=>"alexis.pescador@ucp.edu.co", "email_verified_at" => "alexis.pescador@ucp.edu.co","password"=>Crypt::encryptString('Alexis2023'));
      $password = '$2y$10$Yz3btxEhQGXJ2.nXMU9f3u9MnOWGIuq7KeQ4JIVvM3jLR1CEFMwjm';
      $data = array("name" => "Alexis Pescador", "age" =>"26", "type"=>"1", "email"=>"alexis.pescador@ucp.edu.co", "email_verified_at" => "alexis.pescador@ucp.edu.co","password"=>$password);
       User::create($data);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
