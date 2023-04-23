<?php
 
namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Kreait\Firebase\Auth\CreateSessionCookie\FailedToCreateSessionCookie;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Cookie;
use Carbon\Carbon;
use App\Models\Meeting;
use App\Models\User;
use App\Models\Section;
use Illuminate\Support\Facades\Auth;

use App;

class MeetingsController extends Controller
{

    public function manage(Request $request)
    {
        /*
        $message = "v0:{$request->header('x-zm-request-timestamp')}:{json_decode($request->body)}";
        $hashForVerify = hash_hmac('sha256', $message, env("ZOOM_WEBHOOK_SECRET_TOKEN", ""));
        $signature = "v0={$hashForVerify}";

        if ($request->header('x-zm-signature') != $signature) {
        */
        if ($request->header('authorization') != env("ZOOM_WEBHOOK_SECRET_TOKEN", "")) {
            return Response::json([
                'error' => 'Unauthorized.'
            ], 403);
        }

        if ($request->has(['event', 'payload', 'event_ts']) == false) {
            return Response::json([
            'error' => "Missing required fields: [event, payload, event_ts]"
            ], 403);
        }
    
        $event = $request["event"];
        $payload = $request["payload"];
        $object = $payload["object"] ?? null;
        
        if ($object == null) {
            return Response::json([
            'error' => "Missing required fields: [object]"
            ], 403);
        }
        
        
        $id = (int)$object["id"];
        $meeting = Meeting::find($id);
        
        if ($meeting != null && $event == 'meeting.deleted') {
            $meeting->delete();
            return Response::json([
            'id' => $id
            ], 200);
        }
        
        if ($meeting == null) {
            $meeting = new Meeting;
            $meeting->id = $id;
        }
        
        $meeting->topic = $object["topic"];
        $meeting->host_id = $object["host_id"];
        $meeting->start_time = $object["start_time"] ?? Carbon::now();
        $meeting->timezone = $object["timezone"] ?? null;
        $meeting->duration = $object["duration"] ?? 0;
        
        switch ($event) {
            case 'meeting.started':
            $meeting->status = 'started';
            break;

            // case 'meeting.updated'
        
            case 'meeting.ended':
            $meeting->status = 'ended';
            $meeting->end_time = $object["end_time"];
            break;
            
            case 'meeting.created':
            $meeting->status = 'scheduled';
            $meeting->join_url = $object["join_url"];
            $meeting->password = $object["password"];
            break;
        
            case 'meeting.live_streaming_started':
            $meeting->status = 'started';
            $livestream = $object["live_streaming"];
            if ($livestream != null) {
                $settings = $livestream["custom_live_streaming_settings"];
                $meeting->livestream_url = $settings["stream_url"]; // or $settings["page_url"]?
                $meeting->livestream_provider = $livestream["service"];
            }
            break;
        }
        $meeting->save();
        return Response::json([
            'id' => $id
        ], 200);
    }


    /**
     * Show the meetings.
     *
     * @return \Illuminate\View\View
     */

    public function show(Request $request)
    {
        // Consider enabling pagination.

        $darkMode = Cookie::get('dark_mode') == 'true';

        $meetings = Meeting::where('status', 'started')
                            ->orWhere('status', 'scheduled')
                            ->orderBy('start_time', 'asc')
                            ->offset(0)
                            ->limit(10)
                            ->get();

        $started = $meetings->filter(function ($meeting) {
            return $meeting->status == 'started';
        })->values();

        $livestreams = $started->filter(function ($meeting) {
            return $meeting->livestream_url != null;
        })->values();

        $scheduled = $meetings->filter(function ($meeting) {
            return $meeting->status == 'scheduled';
        })->values();

        $user = Auth::user();
        $locale = App::currentLocale();
        $sections = Section::where('is_active', true)
                            ->where('language_code', $locale)
                            ->orderBy('position', 'asc')
                            ->get();

        return view('meetings', [
            'darkMode' => $darkMode,
            'started' => $started,
            'livestreams' => $livestreams,
            'scheduled' => $scheduled,
            'sections' => $sections,
            'user' => $user
        ]);
    }
}