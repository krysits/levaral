}
    }
        Schema::dropIfExists('users');
    {
    public function down()
     */
     * @return void
     *
     * Reverse the migrations.
    /**

    }
        });
            $table->timestamps();
            $table->rememberToken();
            $table->string('password');
            $table->timestamp('email_verified_at')->nullable();
            $table->string('email')->unique();
            $table->string('name');
            $table->id();
        Schema::create('users', function (Blueprint $table) {
    {
    public function up()
     */
     * @return void
     *
     * Run the migrations.
    /**
{
class CreateUsersTable extends Migration

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

<?php
