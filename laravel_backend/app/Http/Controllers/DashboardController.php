<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    /**
     * Get dashboard data for the authenticated user
     * 
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function index(Request $request)
    {
        // Get the authenticated user
        $user = $request->user();
        
        // Create a simple response with minimal data
        $dashboardData = [
            'user' => [
                'id' => $user->id,
                'name' => $user->name,
                'email' => $user->email,
            ],
            'message' => 'Welcome to your dashboard!'
        ];
        
        return response()->json($dashboardData);
    }
}