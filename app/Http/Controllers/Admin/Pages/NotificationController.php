<?php

namespace App\Http\Controllers\Admin\Pages;

use App\Events\NotificationEvent;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Models\Notifications\Notification;
use App\Models\User;

class NotificationController extends Controller
{
    public function pusher()
    {
        return view('admin.pages.notification.pusher');
    }

    public function sendNotification(Request $request)
    {
        $user = User::where('email', 'soheil.salah.dev@gmail.com')->first();
        $title = 'Can I have some lemonade Please';

        $notification = Notification::create([
            'user_id' => $user->id,
            'title' => $title,
            'slug' => Str::random(16)
        ]);

        $count = Notification::where('user_id', $user->id)->where('isRead', 0)->count();

        event(new NotificationEvent($title, $user->id, $notification->created_at, $count));
    }
}
