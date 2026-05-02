<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home()
    {
        return view('home');
    }

    public function services()
    {
        $services = [
            [
                'icon' => '01',
                'title' => 'Implementation & Setup',
                'description' => 'Complete deployment of your chosen system — configured to your workflows, data, and team structure.',
                'features' => ['Cloud / on-premise setup', 'Custom configuration', 'Go-live support'],
            ],
            [
                'icon' => '02',
                'title' => 'Data Migration',
                'description' => 'We safely migrate all your existing data from spreadsheets, legacy systems, or other software — zero data loss.',
                'features' => ['Excel / CSV import', 'Legacy system migration', 'Data cleaning & mapping'],
            ],
            [
                'icon' => '03',
                'title' => 'Staff Training',
                'description' => 'Hands-on training sessions for your entire team — online or on-site — so everyone is confident from day one.',
                'features' => ['Role-based training', 'Video tutorial library', 'Printed training manual'],
            ],
            [
                'icon' => '04',
                'title' => '24/7 Support',
                'description' => 'Dedicated support via WhatsApp, phone, and email — real humans who know your system inside out.',
                'features' => ['WhatsApp helpdesk', 'Remote desktop support', 'Priority bug fixes'],
            ],
            [
                'icon' => '05',
                'title' => 'Custom Development',
                'description' => 'Need a feature built specifically for your business? Our team handles custom modules, integrations, and extensions.',
                'features' => ['Custom module development', 'Third-party API integration', 'White-label options'],
            ],
            [
                'icon' => '06',
                'title' => 'Annual Maintenance',
                'description' => 'Regular updates, security patches, and performance optimizations — so your system keeps running at its best.',
                'features' => ['Software updates', 'Security patches', 'Performance monitoring'],
            ],
        ];

        return view('services', compact('services'));
    }

    public function products()
    {
        $products = [
            [
                'name'        => 'Classes Management System',
                'category'    => 'Education Software',
                'color_class' => 'education',
                'price'       => '₹12,999',
                'old_price'   => '₹18,999',
                'badge'       => null,
                'description' => 'A complete platform for schools, colleges, and coaching centres to manage every aspect of academic operations.',
                'features'    => [
                    'Student enrollment & profiles',
                    'Attendance tracking',
                    'Fee collection & invoicing',
                    'Exam & result management',
                    'Parent communication portal',
                    'Timetable management',
                    'Staff & payroll module',
                    'Reports & analytics',
                ],
            ],
            [
                'name'        => 'Clinic Management System',
                'category'    => 'Healthcare Software',
                'color_class' => 'health',
                'price'       => '₹9,999',
                'old_price'   => null,
                'badge'       => null,
                'description' => 'A fully integrated solution for clinics, hospitals, and diagnostic centres to streamline patient care and administration.',
                'features'    => [
                    'Patient registration & history',
                    'Appointment scheduling',
                    'Doctor & staff management',
                    'Prescription generation',
                    'Lab reports & results',
                    'Billing & insurance',
                    'Pharmacy management',
                    'Analytics dashboard',
                ],
            ],
            [
                'name'        => 'Real Estate Management System',
                'category'    => 'Property Software',
                'color_class' => 'realestate',
                'price'       => '₹14,999',
                'old_price'   => '₹20,999',
                'badge'       => null,
                'description' => 'A powerful CRM for property dealers, builders, and brokers to manage listings, leads, and close deals faster.',
                'features'    => [
                    'Property listings & search',
                    'Lead capture & CRM',
                    'Deal pipeline management',
                    'Commission calculation',
                    'Document management',
                    'Client portal',
                    'Follow-up reminders',
                    'Sales reports & insights',
                ],
            ],
            [
                'name'        => 'WhatsApp Marketing System',
                'category'    => 'Marketing Software',
                'color_class' => 'whatsapp',
                'price'       => '₹7,999',
                'old_price'   => null,
                'badge'       => 'Most Popular',
                'description' => 'Send targeted WhatsApp campaigns at scale — with smart segmentation, templates, and real-time analytics.',
                'features'    => [
                    'Bulk message broadcasting',
                    'Contact list management',
                    'Campaign scheduling',
                    'Message template library',
                    'Delivery & read analytics',
                    'Auto-reply bots',
                    'Team inbox management',
                    'Campaign ROI reports',
                ],
            ],
        ];

        return view('products', compact('products'));
    }

    public function about()
    {
        return view('about');
    }

    public function contact()
    {
        return view('contact');
    }

    public function submitContact(Request $request)
    {
        $validated = $request->validate([
            'name'    => 'required|string|max:120',
            'email'   => 'required|email|max:160',
            'subject' => 'required|string|max:200',
            'message' => 'required|string|max:2000',
        ]);

        return redirect()->route('contact')->with('success', 'Thanks! Your message reached us — we\'ll reply within a few hours.');
    }
}
