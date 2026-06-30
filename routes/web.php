<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/products', function () {
    return view('products');
});

Route::get('/products/{slug}', function ($slug) {

    $projects = [
        'bearings' => [
            'title' => 'High-Performance Bearings',
            'image' => 'bearings.jpg',
            'intro' => 'High-quality industrial bearings designed to reduce friction, support loads, and ensure smooth rotational movement across a wide range of applications. Our bearings are suitable for demanding industrial environments where reliability and precision are critical.',
            'details' => 'Hanuda Supply offers a comprehensive range of bearings for maintenance, repair, and replacement needs, supporting consistent equipment performance and extended service life.',
            'points' => [
                'Designed for high load and speed conditions',
                'Reduces wear and operational friction',
                'Suitable for heavy-duty industrial applications',
                'Ensures smooth and reliable motion',
                'Long service life with proper maintenance',
            ],
            'why_choose' => 'Our bearings meet industry standards and provide dependable performance, helping reduce downtime and maintenance costs.',
        ],
        'electricalmotors' => [
            'title' => 'Electrical Motors',
            'image' => 'electrical-moter.jpeg',
            'intro' => 'Electrical motors engineered for efficient power conversion and reliable operation in industrial and commercial environments. These motors support continuous-duty applications where performance and durability are essential.',
            'details' => 'Our motors are sourced to meet operational demands across manufacturing, processing, and maintenance applications.',
            'points' => [
                'Energy-efficient and reliable operation',
                'Designed for continuous industrial use',
                'Supports various speed and torque requirements',
                'Robust construction for long-term performance',
                'Suitable for multiple industrial sectors',
            ],
            'why_choose' => 'Our electrical motors deliver consistent performance while supporting operational efficiency and reduced energy loss.',
        ],
        'beltingbelts' => [
            'title' => 'Durable Belting Solutions',
            'image' => 'belts.jpg',
            'intro' => 'Industrial belting solutions designed for power transmission, conveying, and material handling applications. Our belts ensure efficient motion transfer and stable performance under varying load conditions.',
            'details' => 'We supply durable belts suitable for demanding environments, helping maintain smooth and uninterrupted operations.',
            'points' => [
                'High tensile strength and flexibility',
                'Suitable for conveying and transmission systems',
                'Resistant to wear and operational stress',
                'Reliable performance under continuous use',
                'Supports efficient power transfer',
            ],
            'why_choose' => 'Our belting solutions provide durability and reliability, reducing maintenance requirements and improving system efficiency.',
        ],
        'rollerchains' => [
            'title' => 'Precision Roller Chains',
            'image' => 'roller-chain.jpg',
            'intro' => 'Heavy-duty roller chains designed for reliable power transmission and motion control in industrial machinery. These chains ensure smooth operation and consistent load handling.',
            'details' => 'Our roller chains are suitable for applications requiring strength, precision, and durability.',
            'points' => [
                'High strength and load capacity',
                'Smooth and efficient power transmission',
                'Wear-resistant construction',
                'Suitable for industrial machinery',
                'Long operational life',
            ],
            'why_choose' => 'Our roller chains deliver dependable performance, ensuring stable operation in demanding mechanical systems.',
        ],
        'gearboxes' => [
            'title' => 'Industrial Gear Boxes',
            'image' => 'gear-box.jpeg',
            'intro' => 'Industrial gear boxes designed to transmit power efficiently while reducing speed and increasing torque for heavy-duty machinery. Our gear boxes are built to perform reliably under high load conditions and continuous industrial operation.',
            'details' => 'Hanuda Supply offers a wide range of gear boxes suitable for manufacturing, material handling, mining, and processing industries, ensuring smooth and controlled power transmission.',
            'points' => [
                'High torque transmission capability',
                'Robust and durable construction',
                'Smooth and efficient power transfer',
                'Suitable for heavy-duty industrial applications',
                'Long service life with minimal maintenance',
            ],
            'why_choose' => 'Our gear boxes provide dependable performance and precise power control, helping improve machine efficiency, reduce operational stress, and ensure long-term reliability in demanding environments.',
        ],
        'casters' => [
            'title' => 'Heavy Duty Casters',
            'image' => 'casters.jpg',
            'intro' => 'Industrial casters designed for smooth mobility and safe material handling across various environments. These casters support easy movement of heavy equipment and workstations.',
            'details' => 'Our range includes durable casters suitable for industrial floors and continuous use.',
            'points' => [
                'Smooth and controlled movement',
                'Heavy-duty load capacity',
                'Durable wheel and housing construction',
                'Suitable for industrial material handling',
                'Enhances workplace efficiency',
            ],
            'why_choose' => 'Our casters provide reliable mobility solutions that improve safety and operational convenience.',
        ],
        'lubricants' => [
            'title' => 'Premium Lubricants',
            'image' => 'lubricants.jpeg',
            'intro' => 'Industrial lubricants formulated to reduce friction, minimize wear, and protect machinery components. Proper lubrication helps extend equipment life and maintain optimal performance.',
            'details' => 'We supply lubricants suitable for a wide range of industrial maintenance and operational requirements.',
            'points' => [
                'Reduces friction and wear',
                'Protects components from corrosion',
                'Enhances equipment efficiency',
                'Supports extended service life',
                'Suitable for industrial applications',
            ],
            'why_choose' => 'Our lubricants help ensure smooth operation, reduced maintenance, and improved equipment reliability.',
        ],
        'constructionmining' => [
            'title' => 'Construction & Mining Machinery Bearings',
            'image' => 'construction-mining.jpg',
            'intro' => 'Heavy-duty bearings designed specifically for construction and mining machinery operating in harsh environments. These bearings support high loads, shock resistance, and continuous operation.',
            'details' => 'Our bearings are suitable for excavators, loaders, crushers, and other heavy equipment used in demanding applications.',
            'points' => [
                'Designed for extreme load conditions',
                'Resistant to shock, vibration, and contamination',
                'Suitable for harsh operating environments',
                'Ensures reliable machinery performance',
                'Long-lasting and durable construction',
            ],
            'why_choose' => 'Our construction and mining machinery bearings provide strength and reliability where performance is critical.',
        ],
    ];

    if (! isset($projects[$slug])) {
        abort(404);
    }

    return view('productDetails', [
        'product' => $projects[$slug],
    ]);
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/terms-conditions', function () {
    return view('terms_conditions');
});

Route::get('/help', function () {
    return view('help');
});
