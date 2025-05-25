<?php
namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Company;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class BaseController extends Controller
{
    public function __construct()
    {
        $company = Company::first();

        $categories = Category::where('status', true)->get();

        View::share([
            'company' => $company,
            'categories' => $categories
        ]);
    }
}
