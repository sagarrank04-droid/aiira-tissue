<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    /**
     * Flagship Single Product Details
     */
    private function getProductData()
    {
        return [
            'brand' => 'Aiira',
            'name' => 'Aiira Luxury Facial Tissue Paper Box',
            'tagline' => 'The Soft Side of Everyday',
            'material' => '100% Pure Virgin Wood Pulp',
            'ply' => '3-Ply / 2-Ply CloudSoft Technology',
            'sheet_size' => '200 mm × 200 mm',
            'gsm' => '13.5 GSM per ply (Total ~40.5 GSM)',
            'pulls' => '100 / 200 Sheets per box (Interfolded V-Fold)',
            'shelf_life' => '3 Years',
            'certifications' => ['ISO 9001:2015', 'FSC Certified', '100% Chlorine Free (ECF)', 'Dermatologically Tested'],
            'variants' => [
                [
                    'name' => 'Classic 100 Pulls Box',
                    'count' => '100 Sheets (2-Ply)',
                    'desc' => 'Everyday compact box ideal for car dashboards, desks, and bedside tables.',
                    'badge' => 'Daily Essential',
                    'moq' => '1 Master Carton (48 Boxes)'
                ],
                [
                    'name' => 'Luxury 200 Pulls Box',
                    'count' => '200 Sheets (3-Ply)',
                    'desc' => 'Extra-thick 3-ply cloud softness infused with soothing aloe touch for sensitive facial skin.',
                    'badge' => 'Flagship Bestseller',
                    'moq' => '1 Master Carton (24 Boxes)'
                ],
                [
                    'name' => 'Family Pack 3-in-1 Bundle',
                    'count' => '3 × 200 Pulls Pack',
                    'desc' => 'Shrink-wrapped multi-box bundle designed for household value and retail shelves.',
                    'badge' => 'Value Pack',
                    'moq' => '20 Bundles'
                ],
                [
                    'name' => 'Custom OEM / Private Label',
                    'count' => 'Tailored Pulls & Design',
                    'desc' => 'Custom branded tissue boxes printed with your hotel, hospital, or corporate logo.',
                    'badge' => 'Institutional / OEM',
                    'moq' => '1,000 Custom Boxes'
                ]
            ]
        ];
    }

    /**
     * Home Page
     */
    public function home()
    {
        $product = $this->getProductData();
        return view('pages.home', compact('product'));
    }

    /**
     * About Us Page
     */
    public function about()
    {
        $product = $this->getProductData();
        return view('pages.about', compact('product'));
    }

    /**
     * Single Product Details Page
     */
    public function products()
    {
        $product = $this->getProductData();
        return view('pages.products', compact('product'));
    }

    /**
     * Contact Us Page
     */
    public function contact()
    {
        $product = $this->getProductData();
        return view('pages.contact', compact('product'));
    }

    /**
     * Handle Contact & Quotation Form Submission
     */
    public function submitContact(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:100',
            'email' => 'required|email|max:100',
            'phone' => 'required|string|max:20',
            'inquiry_type' => 'required|string',
            'variant' => 'nullable|string|max:100',
            'quantity' => 'nullable|string|max:100',
            'message' => 'required|string|max:2000',
        ]);

        return redirect()->back()->with('success', 'Thank you, ' . $validated['name'] . '! Your factory quotation request for Aiira Facial Tissue Boxes has been received. Our sales team will connect with you shortly.');
    }

    /**
     * Handle Newsletter Subscription
     */
    public function submitNewsletter(Request $request)
    {
        $request->validate([
            'email' => 'required|email|max:100'
        ]);

        return redirect()->back()->with('newsletter_success', 'Thank you for subscribing to Aiira factory updates & wholesale offers!');
    }
}
