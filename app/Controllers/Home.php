<?php

namespace App\Controllers;
use App\Models\DataYearModel;

class Home extends BaseController
{
    public function index(): string
    {
        return view('dashboard');
    }

    public function beaute_research_template()
    {
        return view('template/beaute_research');
    }

    public function market_overview_template()
    {
        return view('template/market_overview');
    }

    public function brand_analysis_br_template()
    {
        return view('template/brand_analysis_br');
    }

    public function group_analysis_br_template()
    {
        return view('template/group_analysis_br');
    }

    public function brand_benchmarking_br_template()
    {
        return view('template/brand_benchmarking_br');
    }

    public function sku_deep_dive_template()
    {
        return view('template/sku_deep_dive');
    }

    public function sku_benchmark_template()
    {
        return view('template/sku_benchmark');
    }

    public function generation_template()
    {
        return view('template/generation');
    }

    public function regional_and_category_template()
    {
        return view('template/regional_and_category_overview');
    }

    public function market_by_region_template()
    {
        return view('template/market_by_region');
    }

    public function category_and_channel_by_market_template()
    {
        return view('template/category_and_channel_by_market');
    }

    public function subcategory_by_market_template()
    {
        return view('template/subcategory_by_market');
    }

    public function group_analysis_template()
    {
        return view('template/group_analysis');
    }

    public function brand_analysis_template()
    {
        return view('template/brand_analysis');
    }

    public function brands_by_groups_template()
    {
        return view('template/brands_by_groups');
    }

    public function trex_analysis_template()
    {
        return view('template/trex_analysis');
    }
}

