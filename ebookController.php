<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ebookController extends Controller
{
    public function about() {
        return view('subview/about');
    }

    public function list() {
        $title1 = 'Chemistry: An Introduction to General, Organic, & Biological Chemistry (10th Edition)';
        $isbn1 = '9780136019701';
        $bookCategory1 = 'Education';
        $noPages1 = '676';

        $title2 = 'Essentials of Statistics 6th Edition';
        $isbn2 = '9780134685779';
        $bookCategory2 = 'Education';
        $noPages2 = '648';

        return view('subview/list', compact('title1', 'isbn1', 'bookCategory1', 'noPages1', 
        'title2', 'isbn2', 'bookCategory2', 'noPages2'));
    }
}
