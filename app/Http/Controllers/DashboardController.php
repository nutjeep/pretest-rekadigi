<?php

namespace App\Http\Controllers;

use App\Models\Link;
use App\Models\Carrier;
use App\Models\Feature;
use App\Models\Category;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index ()
    {
        return view('backend.dashboard', [
            'title'             => 'Dashboard',
            'links'             => Link::all(),
            'features'          => Feature::all(),
            'categories'        => Category::all(),
            'carriers'          => Carrier::all()
        ]);
    }

    public function addFeature (Request $request)
    {
        $validation = $request->validate([
            'feature_title' => 'required',
            'slug'          => 'required',
            'thumbnail'     => ''
            // 'thumbnail'     => 'required|file|image|max:300'
        ]);

        Feature::create($validation);

        return redirect('/dashboard')->with('add-feature', 'Fitur '.$request->feature_title.' telah ditambah');
    }

    public function updateFeature (Request $request, Feature $feature)
    {
        $validation = $request->validate([
            'feature_title' => 'required',
            'slug'          => 'required',
            'thumbnail'     => ''
            // 'thumbnail'     => 'required|file|image|max:300'
        ]);

        Feature::where('id', $feature->id)->update($validation);

        return redirect('/dashboard')->with('update-feature', 'Fitur '.$request->feature_title.' telah diubah');
    }

    public function deleteFeature (Feature $feature)
    {
        $feature->destroy($feature->id);

        return redirect('/dashboard')->with('delete-feature', $feature->feature_title.' telah dihapus');
    }

    public function updateLink (Request $request, Link $link)
    {
        $validation = $request->validate([
            'instagram'     => 'required',
            'facebook'      => 'required',
            'google_play'   => 'required',
        ]);

        Link::where('id', $link->id)->update($validation);

        return redirect('/dashboard')->with('update-link', 'Link telah diupdate');
    }
}
