<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Visitor;

class VisitorController extends Controller {
    public function traffic() {
        $visitors = Visitor::selectRaw('visit_date, count(*) as total_visits')->groupBy('visit_date')->get();

        return view('admin.traffic', compact('visitors'));
    }
}
