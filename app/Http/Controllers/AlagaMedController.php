<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Alagamed;

class AlagamedController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $alagameds = Alagamed::all();
        return view('alagamed.index', compact('alagameds'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function appointment(Request $request)
    {
        // Validate the form data
        $validatedData = $request->validate([
            'name' => 'required|string',
            'email' => 'required|email',
            'AppointmentDate' => 'required|date',
            'phone_number' => 'required|string',
            'services' => 'required|string', // Corrected this line
        ]);
    
        // Create a new Alagamed instance
        $alagamed = new Alagamed([
            'name' => $validatedData['name'],
            'email' => $validatedData['email'],
            'AppointmentDate' => $validatedData['AppointmentDate'],
            'phone_number' => $validatedData['phone_number'],
            'services' => $validatedData['services'],
        ]);
    
        // Save the Alagamed instance to the database
        $alagamed->save();
    
        // Pass data to the success view
        return view('alagamed.success', $validatedData);
    }
    

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $alagamed = Alagamed::find($id);

        return view('alagamed.show', compact('alagamed'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'title' => 'required|max:255',
            'body' => 'required',
        ]);

        $alagamed = Alagamed::find($id);
        $alagamed->update($request->all());

        return redirect()->route('alagamed.index')
            ->with('success', 'Alagamed updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $alagamed = Alagamed::find($id);
        $alagamed->delete();

        return redirect()->route('alagamed.index')
            ->with('success', 'Alagamed deleted successfully');
    }
   
       
    public function about($id)
    {
        $alagamed = Alagamed::find($id);

        return view('alagamed.about', compact('alagamed'));
    }

    public function services($id)
    {
        $alagamed = Alagamed::find($id);

        return view('alagamed.services', compact('alagamed'));
    }

    public function doctors($id)
    {
        $alagamed = Alagamed::find($id);

        return view('alagamed.doctors', compact('alagamed'));
    }

    public function reviews($id)
    {
        $alagamed = Alagamed::find($id);

        return view('alagamed.reviews', compact('alagamed'));
    }

    public function blogs($id)
    {
        $alagamed = Alagamed::find($id);

        return view('alagamed.blogs', compact('alagamed'));
    }
}
