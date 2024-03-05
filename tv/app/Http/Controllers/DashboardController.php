<?php

namespace App\Http\Controllers;
use App\Models\Pendrive;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function pendriveList()
        {
            $pendrives = Pendrive::all();
            return view('pendrive.pendrivelist', compact('pendrives'));
        }
    public function pendriveAdd()
        {
            return view('pendrive.pendriveadd');
        }
    public function storePendrive(Request $request)
        {
            $validatedData = $request->validate([
                'pendrive' => 'required|string|max:255',
                'activation' => 'required|string|max:255',
                'validity' => 'required|string|max:255',
                'remaining' => 'required|string|max:255',
                'validityapp' => 'required|string|max:255',
                'defaultpass' => 'required|string|max:255',
                'installpname' => 'required|string|max:255',
            ]);
            Pendrive::create($validatedData);
            return redirect('/pendrivelist'); 
        }
}
