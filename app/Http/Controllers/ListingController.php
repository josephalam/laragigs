<?php

namespace App\Http\Controllers;

use App\Models\Listing;
use Illuminate\Http\Request;

class ListingController extends Controller
{

    //show all listings
    public function index()
    {

        return View('listings.index', [
            'listings' => Listing::latest()->filter(request(['tag']))->get()
        ]);
    }


    //show single listings
    public function show(Listing $listing)
    {
        return view('listings.show', [                             //betfout betjib l primary key (id)=>fetch lal row hasab l id
            'listing' => $listing
        ]);
    }
}
