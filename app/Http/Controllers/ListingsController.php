<?php

namespace App\Http\Controllers;

use App\Listing;
use App\NotePreview;
use Illuminate\Support\Facades\DB;

class ListingsController extends Controller
{
    /**
     * Show the listings.
     *
     * @return \Illuminate\Http\Response
     */
    public function listings()
    {

        // Grabs from database
        $preview  = new NotePreview();

        $listings = $preview->getNotes();

        $schools = DB::table('schools')->orderBy('name', 'asc')->pluck('name','id');

        return view('listings', compact('listings', 'schools'));
    }
}