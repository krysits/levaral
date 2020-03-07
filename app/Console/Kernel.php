}
    }
        require base_path('routes/console.php');

        $this->load(__DIR__.'/Commands');
    {
    protected function commands()
     */
     * @return void
     *
     * Register the commands for the application.
    /**

    }
        // $schedule->command('inspire')->hourly();
    {
    protected function schedule(Schedule $schedule)
     */
     * @return void
     * @param  \Illuminate\Console\Scheduling\Schedule  $schedule
     *
     * Define the application's command schedule.
    /**

    ];
        //
    protected $commands = [
     */
     * @var array
     *
     * The Artisan commands provided by your application.
    /**
{
class Kernel extends ConsoleKernel

use Illuminate\Foundation\Console\Kernel as ConsoleKernel;
use Illuminate\Console\Scheduling\Schedule;

namespace App\Console;

<?php
