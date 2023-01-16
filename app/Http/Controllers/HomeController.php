<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Property;
use App\Models\Location;
use App\Models\Page;
use Illuminate\Support\Facades\Cookie;

class HomeController extends Controller
{
    public function index()
    {
        // $latest_properties = Property::all();
        $latest_properties = Property::latest()->get()->take(4);
        $locations = Location::select(['id', 'name'])->get();

        return view('welcome',[
            'latest_properties' => $latest_properties,
            'locations' => $locations
        ]);
        // return view('welcome')->with(['latest_properties' => $latest_properties]);
        // return view('property.single')->with('property',$property);
        // return view('welcome',compact('latest_properties'));
    }


//--------------------- frotnend(nav) page view ---------------------------------------------
    public function pages($slug)
    {
        $page = Page::where('slug', $slug)->first();
        if (!empty($page)) {
            return view('pages.index')->with('page', $page);
        } else {
            return abort('404');
        }
    }


//--------------------- Change Currency ---------------------------------------------
    public function currencyConverter($code)
    {
        Cookie::queue('currency', $code, 3600);
        return back();

      
    }

}
