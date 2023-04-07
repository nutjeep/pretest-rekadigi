<?php

namespace App\Http\Controllers;

use App\Models\Privacy;
use App\Models\KritikSaran;
use App\Models\TermsCondition;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index ()
    {
        return view('backend.pages.pages', [
            'title'             => 'Pages',
            'termscondition'    => TermsCondition::all(),
            'privacies'         => Privacy::all(),
            'kritiksaran'       => KritikSaran::all()
        ]);
    }

    public function getTerms (TermsCondition $terms)
    {
        return view('backend.pages.edit-terms', [
            'title' => 'Edit Terms & Condition',
            'terms' => $terms
        ]);
    }

    public function updateTerms (Request $request, TermsCondition $terms)
    {
        $validation = $request->validate([
            'title'         => '',
            'slug'          => '',
            'description'   => ''
        ]);

        TermsCondition::where('id', $terms->id)->update($validation);

        return redirect('/pages')->with('update-terms', 'Data berhasil diubah');
    }

    public function getPrivacy (Privacy $privacy)
    {
        return view('backend.pages.edit-privacy', [
            'title'     => 'Edit Privacy',
            'privacy'   => $privacy
        ]);
    }

    public function updatePrivacy (Request $request, Privacy $privacy)
    {
        $validation = $request->validate([
            'title'         => '',
            'slug'          => '',
            'description'   => ''
        ]);

        Privacy::where('id', $privacy->id)->update($validation);

        return redirect('/pages')->with('update-privacy', 'Data berhasil diubah');
    }
}
