<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function showMainPage() {

        return view('pages.main');
    }

    public function showSpecialitiesPage() {
        return view('pages.specialitites');
    }

    public function showSpecialityPage() {
        return view('pages.speciality');
    }

    public function showDocumentsPage() {
        return view('pages.documents');
    }

    public function showFaqPage() {
        return view('pages.faq');
    }

    public function showContactsPage() {
        return view('pages.contacts');
    }

    public function showNumbersPage() {
        return view('pages.numbers');
    }
}
