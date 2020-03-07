}
    }
        Schema::dropIfExists('failed_jobs');
    {
    public function down()
     */
     * @return void
     *
     * Reverse the migrations.
    /**

    }
        });
            $table->timestamp('failed_at')->useCurrent();
            $table->longText('exception');
            $table->longText('payload');
            $table->text('queue');
            $table->text('connection');
            $table->id();
        Schema::create('failed_jobs', function (Blueprint $table) {
    {
    public function up()
     */
     * @return void
     *
     * Run the migrations.
    /**
{
class CreateFailedJobsTable extends Migration

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

<?php
