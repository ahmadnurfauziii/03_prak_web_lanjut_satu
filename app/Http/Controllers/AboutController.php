<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    //
    public function aboutus() {
        $data = array ( 'nama' => 'Ahmad Nur Fauzi',
                        'nim' => '1941720068');
        return view ('about-us', $data);
    }
}
