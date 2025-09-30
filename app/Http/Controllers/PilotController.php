<?php

namespace App\Http\Controllers;

use App\Models\Pilot;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class PilotController extends Controller
{
    public function index(): View
    {
        $pilots = Pilot::orderBy('nitro', 'asc')->get();

        $viewData = [];
        $viewData['pilots'] = $pilots;

        return view('pilots.index')->with('viewData', $viewData);
    }

    public function create(): View
    {
        return view('pilots.create');
    }

    public function save(Request $request): RedirectResponse
    {
        $validatedRequest = $request->validate(Pilot::$rules);

        Pilot::create($validatedRequest);

        return redirect()->route('pilots.index')->with('success', 'Pilot created successfully.');
    }

    public function stats(): View
    {
        $pilotsCountLA = Pilot::where('city', 'LA')->count();
        $pilotsCountTokio = Pilot::where('city', 'Tokio')->count();

        $nitroAverage = Pilot::avg('nitro');
        $nitroAverage = round($nitroAverage, 2);

        $viewData = [];
        $viewData['pilotsCountLA'] = $pilotsCountLA;
        $viewData['pilotsCountTokio'] = $pilotsCountTokio;
        $viewData['nitroAverage'] = $nitroAverage;

        return view('pilots.stats')->with('viewData', $viewData);
    }
}
