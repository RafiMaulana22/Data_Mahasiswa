<?php

namespace App\Listeners;

use Carbon\Carbon;
use Illuminate\Auth\Events\Authenticated;
use Illuminate\Auth\Events\Login;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class UpdateLastLogin
{
    public function __construct()
    {
        //
    }

    public function handle(Authenticated $event)
    {
        Log::info('UpdateLastLogin listener dipanggil untuk user: ' . $event->user->id);
        $event->users->last_login = Carbon::now();
        if ($event->users->save()) {
            Log::info('Last login updated for user: ' . $event->user->id);
        } else {
            Log::error('Failed to update last login for user: ' . $event->user->id);
        }
    }
}
