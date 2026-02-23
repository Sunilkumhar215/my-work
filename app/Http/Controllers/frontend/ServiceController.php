<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function index()
    {
        return view("frontend.services.ui-ux-design-services");
    }
    public function webdevelopment()
    {
        return view("frontend.services.web-development");
    }
    public function socialmedia()
    {
        return view("frontend.services.social-media-marketing-services-company");
    }
    public function mobileapplicatio()
    {
        return view("frontend.services.mobile-application-development");
    }
    public function ecommercewebdevelopment()
    {
        return view("frontend.services.ecommerce-web-development");
    }
    public function saasdevelopment()
    {
        return view("frontend.services.saas-development-company");
    }
    public function seoservices()
    {
        return view("frontend.services.seo-services-company");
    }
    public function crmdevelopment()
    {
        return view("frontend.services.crm-development-company");
    }
    
    public function softwaredevelopment()
    {
        return view("frontend.services.custom-software-development-services");
    }
    public function ppcservices()
    {
        return view("frontend.services.ppc-services-company");
    }
    

    
}
