<?php

namespace App\Http\Controllers;

use App\Models\Carrier;
use App\Models\Category;
use App\Models\Feature;
use App\Models\KritikSaran;
use App\Models\Link;
use App\Models\Privacy;
use App\Models\TermsCondition;
use Illuminate\Http\Request;

class HomepageController extends Controller
{
    public function index ()
    {
        return view('frontend.homepage', [
            'title' => 'GAS',
            'features'      => Feature::all(),
            'categories'    => Category::all(),
            'carriers'      => Carrier::all(),
            'termcondition' => TermsCondition::all(),
            'privacies'     => Privacy::all(),
            'kritiksarab'   => KritikSaran::all(),
            'links'         => Link::all()
        ]);
    }

    public function feature (Feature $feature)
    {
        return view('frontend.feature',[
            'title'     => 'GAS | '.$feature->feature_title,
            'feature'  => $feature
        ]);
    }

    public function category (Category $category)
    {
        return view('frontend.category',[
            'title'     => 'GAS | '.$category->category_title,
            'category'  => $category
        ]);
    }

    public function carrier (Carrier $carrier)
    {
        return view('frontend.carrier',[
            'title'     => 'GAS | '.$carrier->carrier_title,
            'carrier'  => $carrier
        ]);
    }
}
