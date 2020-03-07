});
    return (int) $user->id === (int) $id;
Broadcast::channel('App.User.{id}', function ($user, $id) {

*/
|
| used to check if an authenticated user can listen to the channel.
| application supports. The given channel authorization callbacks are
| Here you may register all of the event broadcasting channels that your
|
|--------------------------------------------------------------------------
| Broadcast Channels
|--------------------------------------------------------------------------
/*

use Illuminate\Support\Facades\Broadcast;

<?php
