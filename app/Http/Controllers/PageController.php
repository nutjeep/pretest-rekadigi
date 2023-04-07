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
            'termsconditions'   => TermsCondition::all(),
            'privacies'         => Privacy::all(),
            'kritiksaran'       => KritikSaran::all()
        ]);
    }

    public function getTerms ()
    {
        return view('backend.pages.edit-terms', [
            'title'     => 'Edit Terms & Condition',
            'terms'     => TermsCondition::all()
        ]);
    }

    public function getPrivacy ()
    {
        return view('backend.pages.edit-privacy', [
            'title'     => 'Edit Privacy',
            'terms'     => Privacy::all()
        ]);
    }

    public function getKritikSaran ()
    {
        return view('backend.pages.edit-kritiksaran', [
            'title'     => 'Edit Kritik Saran',
            'terms'     => KritikSaran::all()
        ]);
    }
}
