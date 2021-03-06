<?php namespace App\Http\Controllers;

/**
 * Class HomeController
 *
 * @author Jagadeesh Battula jagadeesh@goftx.com
 * @package App\Http\Controllers
 */

class HomeController extends Controller
{
    /**
     * HomeController constructor.
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Index method
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        return view('home');
    }
}
