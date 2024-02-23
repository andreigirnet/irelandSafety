<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Order;
use App\Models\Package;
use App\Models\Product;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminDashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $todayUsers = User::whereDate('created_at', '>=', Carbon::now()->subDay())->count();
        $lastWeekUsers = User::whereDate('created_at', '>=', Carbon::now()->subWeek())->count();
        $lastMonthUsers = User::whereDate('created_at', '>=', Carbon::now()->subMonth())->count();

        $todayOrderTotal = Order::whereDate('created_at', '>=', Carbon::now()->subDay())->sum('paid');
        $lastWeekOrderTotal = Order::whereDate('created_at', '>=', Carbon::now()->subWeek())->sum('paid');
        $lastMonthOrderTotal = Order::whereDate('created_at', '>=', Carbon::now()->subMonth())->sum('paid');

        $todayPackages = Package::whereDate('created_at', '>=', Carbon::now()->subDay())->count();
        $lastWeekPackages = Package::whereDate('created_at', '>=', Carbon::now()->subWeek())->count();
        $lastMonthPackages = Package::whereDate('created_at', '>=', Carbon::now()->subMonth())->count();

        $usersTotal = User::count();

        return view('pages.adminDash', compact('todayUsers','lastWeekUsers','lastMonthUsers','todayOrderTotal','lastWeekOrderTotal','lastMonthOrderTotal','todayPackages','lastWeekPackages','lastMonthPackages','usersTotal'));
    }

    public function simpleUserIndex(){
        $userPackageId = DB::select("SELECT id FROM packages WHERE user_id=" . auth()->user()->id . " AND status='purchased' ORDER BY created_at DESC LIMIT 1;");
        $certificateId = DB::select("SELECT id FROM certificates WHERE user_id=" . auth()->user()->id . " ORDER BY created_at DESC LIMIT 1;");
        $products = Product::orderBy('id', 'asc')->get();
        return view('index', compact('products'))->with('userPackageId', $userPackageId)->with('certificateId', $certificateId);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
