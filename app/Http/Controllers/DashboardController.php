<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Http;
use App\Models\Task;

class DashboardController extends Controller
{
    public function index()
    {
        // WEATHER API
        $API_KEY = env('OPENWEATHER_API_KEY');
        $city = env('WEATHER_CITY', 'Jakarta');

        try {
            $response = Http::get("https://api.openweathermap.org/data/2.5/weather", [
                'q' => $city,
                'appid' => $API_KEY,
                'units' => 'metric',
            ]);

            $weather = $response->json();
        } catch (\Exception $e) {
            $weather = null;
        }

        // TASK STATISTICS
        $userId = auth()->id();

        $taskCount = Task::where('user_id', $userId)->count();
        $completedCount = Task::where('user_id', $userId)
                            ->where('status', 'completed')
                            ->count();
        $pendingCount = Task::where('user_id', $userId)
                            ->where('status', 'pending')
                            ->count();

        return view('dashboard', compact(
            'weather',
            'taskCount',
            'completedCount',
            'pendingCount'
        ));
    }
}
