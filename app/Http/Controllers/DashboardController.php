<?php

namespace App\Http\Controllers;

use App\Models\Link;
use App\Models\Carrier;
use App\Models\Feature;
use App\Models\Category;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class DashboardController extends Controller
{
    public function index()
    {
        return view('backend.dashboard', [
            'title'             => 'Dashboard',
            'links'             => Link::all(),
            'features'          => Feature::all(),
            'categories'        => Category::all(),
            'carriers'          => Carrier::all()
        ]);
    }


    /* ================== CATEGORY ==================*/
    public function addCategory()
    {
        return view('backend.categories.add', [
            'title'     => 'Tambah Kategori Toko',
        ]);
    }

    public function storeCategory(Request $request)
    {
        $validation = $request->validate([
            'category_title'    => 'required',
            'slug'              => 'required',
            'thumbnail'         => 'file',
            'description'       => 'required'
        ]);

        if ($request->hasFile('thumbnail')) {
            $validation['thumbnail'] = $request->file('thumbnail')->store('category-images');
        }

        Category::create($validation);

        return redirect('/dashboard')->with('add-category', 'Kategory toko berhasil ditambah!');
    }

    public function editCategory(Category $category)
    {
        return view('backend.categories.edit', [
            'title'     => 'Edit Kategori',
            'category'  => $category
        ]);
    }

    public function updateCategory(Request $request, Category $category)
    {
        $validation = $request->validate([
            'category_title'    => 'required',
            'slug'              => 'required',
            'thumbnail'         => 'file',
            'description'       => 'required'
        ]);

        if ($request->hasFile('thumbnail')) {
            $validation['thumbnail'] = $request->file('thumbnail')->store('category-images');
        }

        Category::where('id', $category->id)->update($validation);

        return redirect('/dashboard')->with('update-category', 'Kategory toko ' . $request->category_title . ' berhasil ditambah!');
    }

    public function deleteCategory(Category $category)
    {
        if ($category->thumbnail) {
            Storage::delete($category->thumbnail);
        }

        $category->destroy($category->id);

        return redirect('/dashboard')->with('delete-category', $category->category_title . ' telah dihapus');
    }


    /* ================== CARIER ==================*/
    public function addCarrier()
    {
        return view('backend.carrier.add', [
            'title'     => 'Tambah Karir',
        ]);
    }

    public function storeCarrier(Request $request)
    {
        $validation = $request->validate([
            'carrier_title'     => 'required',
            'slug'              => 'required',
            'thumbnail'         => 'file|image|max:500',
            'description'       => 'required'
        ]);

        if ($request->hasFile('thumbnail')) {
            $validation['thumbnail'] = $request->file('thumbnail')->store('carrier-images');
        }

        Carrier::create($validation);

        return redirect('/dashboard')->with('add-carrier', 'Karir berhasil ditambah!');
    }

    public function editCarrier(Carrier $carrier)
    {
        return view('backend.carrier.edit', [
            'title'     => 'Edit Karir',
            'carrier'  => $carrier
        ]);
    }

    public function updateCarrier(Request $request, Category $carrier)
    {
        $validation = $request->validate([
            'carrier_title'     => 'required',
            'slug'              => 'required',
            'thumbnail'         => 'file|image|max:500',
            'description'       => 'required'
        ]);

        if ($request->hasFile('thumbnail')) {
            $validation['thumbnail'] = $request->file('thumbnail')->store('carrier-images');
        }

        Carrier::where('id', $carrier->id)->update($validation);

        return redirect('/dashboard')->with('update-carrier', 'Karir ' . $request->carrier_title . 'berhasil diubah');
    }

    public function deleteCarrier(Carrier $carrier)
    {
        if($carrier->thumbnail) {
            Storage::delete($carrier->thumbnail);
        }

        $carrier->destroy($carrier->id);

        return redirect('/dashboard')->with('delete-carrier', $carrier->carrier_title . ' telah dihapus');
    }


    /* ================== FEATURE ==================*/
    public function storeFeature(Request $request)
    {
        $validation = $request->validate([
            'feature_title' => 'required',
            'slug'          => '',
            'thumbnail'     => 'file|image|max:500'
        ]);

        if ($request->hasFile('thumbnail')) {
            $validation['thumbnail'] = $request->file('thumbnail')->store('feature-images');
        }

        Feature::create($validation);

        return redirect('/dashboard')->with('add-feature', 'Fitur ' . $request->feature_title . ' telah ditambah');
    }

    public function updateFeature(Request $request, Feature $feature)
    {
        $validation = $request->validate([
            'feature_title' => 'required',
            'slug'          => '',
            'thumbnail'     => 'file|image|max:500'
        ]);

        if ($request->hasFile('thumbnail')) {
            $validation['thumbnail'] = $request->file('thumbnail')->store('feature-images');
        }

        Feature::where('id', $feature->id)->update($validation);

        return redirect('/dashboard')->with('update-feature', 'Fitur ' . $request->feature_title . ' telah diubah');
    }

    public function deleteFeature(Feature $feature)
    {
        if($feature->thumbnail) {
            Storage::delete($feature->thumbnail);
        }

        $feature->destroy($feature->id);

        return redirect('/dashboard')->with('delete-feature', $feature->feature_title . ' telah dihapus');
    }


    /* ================== LINKS ==================*/
    public function updateLink(Request $request, Link $link)
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
