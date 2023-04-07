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

    public function addCategory ()
    {
        return view('backend.categories.add', [
            'title'     => 'Tambah Kategori',
        ]);
    }

    public function storeCategory (Request $request)
    {
        $validation = $request->validate([
            'category_title'    => 'required',
            'slug'              => 'required',
            'thumbnail'         => '',
            'description'       => 'required'
        ]);

        Category::create($validation);

        return redirect('/dashboard')->with('add-category', 'Kategory berhasil ditambah!');
    }

    public function editCategory (Category $category)
    {
        return view('backend.categories.edit', [
            'title'     => 'Edit Kategori',
            'category'  => $category
        ]);
    }

    public function updateCategory (Request $request, Category $category)
    {
        $validation = $request->validate([
            'category_title'    => 'required',
            'slug'              => 'required',
            'thumbnail'         => '',
            'description'       => 'required'
        ]);

        Category::where('id', $category->id)->update($validation);

        return redirect('/dashboard')->with('update-category', 'Kategory '.$request->category_title.' berhasil ditambah!');
    }

    public function deleteCategory (Category $category)
    {
        $category->destroy($category->id);

        return redirect('/dashboard')->with('delete-category', $category->category_title.' telah dihapus');
    }

    public function addCarrier ()
    {
        return view('backend.carrier.add', [
            'title'     => 'Tambah Karir',
        ]);
    }

    public function storeCarrier (Request $request)
    {
        $validation = $request->validate([
            'carrier_title'     => 'required',
            'slug'              => 'required',
            'thumbnail'         => '',
            'description'       => 'required'
        ]);

        Carrier::create($validation);

        return redirect('/dashboard')->with('add-carrier', 'Karir berhasil ditambah!');
    }

    public function editCarrier (Carrier $carrier)
    {
        return view('backend.carrier.edit', [
            'title'     => 'Edit Karir',
            'carrier'  => $carrier
        ]);
    }

    public function updateCarrier (Request $request, Category $carrier)
    {
        $validation = $request->validate([
            'carrier_title'     => 'required',
            'slug'              => 'required',
            'thumbnail'         => '',
            'description'       => 'required'
        ]);

        Carrier::where('id', $carrier->id)->update($validation);

        return redirect('/dashboard')->with('update-carrier', 'Karir '.$request->carrier_title.'berhasil diubah');
    }

    public function deleteCarrier (Carrier $carrier)
    {
        $carrier->destroy($carrier->id);

        return redirect('/dashboard')->with('delete-carrier', $carrier->carrier_title.' telah dihapus');
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
