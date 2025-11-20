<?php

namespace App\Http\Controllers;

use App\Mail\sendEmail;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Spatie\Sitemap\SitemapGenerator;
use Symfony\Component\Mailer\Messenger\SendEmailMessage;

use Artesaos\SEOTools\Facades\SEOTools;

use Artesaos\SEOTools\Facades\SEOMeta;
use Artesaos\SEOTools\Facades\OpenGraph;
use Artesaos\SEOTools\Facades\TwitterCard;
use Artesaos\SEOTools\Facades\JsonLd;
// OR with multi
use Artesaos\SEOTools\Facades\JsonLdMulti;
use App\Rules\Recaptcha;
class PageController extends Controller
{
    public function sitemap()
    {
        // Cache sitemap generation for 24 hours to avoid repeated crawls cost
        $path = public_path('sitemap.xml');
        $ttlSeconds = 60 * 60 * 24;

        if (! file_exists($path) || (time() - filemtime($path)) > $ttlSeconds) {
            SitemapGenerator::create('https://watopak.com/')->writeToFile($path);
        }

        return response()->file($path);
    }

    public function home()
    {
        SEOTools::setTitle('Watopak Logistics | #1 USA to Jamaica Shipping & Package Forwarding');
        SEOTools::setDescription('Get your FREE USA shipping address today! Shop Amazon, eBay & US stores with fast, reliable delivery to Jamaica. Choose from air & sea freight options. Join thousands of satisfied customers!');
        SEOMeta::setKeywords([
            'Jamaica USA Mailbox', 'USA Shipping Address Jamaica', 'Online Shopping Jamaica Delivery', 'Package Forwarding Jamaica', 
            'Amazon Shipping to Jamaica', 'eBay Shipping to Jamaica', 'US to Jamaica Logistics Service', 'Best Shipping Jamaica',
            'Cheap Sea Freight Jamaica', 'Fast Air Freight Jamaica', 'Jamaica Package Consolidation', 'Jamaica Customs Clearance',
            'Jamaica Personal Shopper', 'Kingston Delivery Service', 'Montego Bay Shipping', 'Jamaica Freight Forwarder',
            'USA Shopping Jamaica Address', 'Jamaica Import Service', 'Ship Large Items to Jamaica', 'Jamaica Shipping Calculator'
        ]);
        SEOTools::twitter()->setSite('@watopak.com');
        
        // Set structured data for business
        JsonLd::setTitle('Watopak Logistics - #1 USA to Jamaica Shipping & Package Forwarding');
        JsonLd::setDescription('Get your FREE USA shipping address to shop online from US retailers with fast, secure delivery to Jamaica. Air & Sea freight options available.');
        JsonLd::setType('LocalBusiness');
        JsonLd::addValue('name', 'Watopak Logistics Services');
        JsonLd::addValue('url', 'https://watopak.com');
        JsonLd::addValue('logo', 'https://watopak.com/images/logo.png');
        JsonLd::addValue('image', 'https://watopak.com/images/watopak-Logistics-hero.png');
        JsonLd::addValue('priceRange', '$$');
        JsonLd::addValue('address', [
            '@type' => 'PostalAddress',
            'streetAddress' => '123 Commerce Plaza, Spanish Town Road',
            'addressLocality' => 'Kingston',
            'addressRegion' => 'Kingston',
            'postalCode' => 'JMAAW01',
            'addressCountry' => 'Jamaica'
        ]);
        JsonLd::addValue('geo', [
            '@type' => 'GeoCoordinates',
            'latitude' => '17.9714',
            'longitude' => '-76.7931'
        ]);
        JsonLd::addValue('telephone', '+1-876-555-9800');
        JsonLd::addValue('email', 'info@watopak.com');
        JsonLd::addValue('openingHours', [
            'Mo-Fr 08:00-18:00',
            'Sa 09:00-16:00',
            'Su Closed'
        ]);
        JsonLd::addValue('sameAs', [
            'https://www.facebook.com/watopak.com',
            'https://www.instagram.com/watopak_logistics',
            'https://twitter.com/watopak.com'
        ]);
        
        
        // Add FAQ Schema for rich snippets
        JsonLdMulti::addValue('faq', [
            '@type' => 'FAQPage',
            'mainEntity' => [
                [
                    '@type' => 'Question',
                    'name' => 'How do I get a USA shipping address with Watopak Logistics?',
                    'acceptedAnswer' => [
                        '@type' => 'Answer',
                        'text' => 'Simply register for free on our website and you\'ll instantly receive your personal USA shipping address. You can then use this address when shopping at any US online retailer.'
                    ]
                ],
                [
                    '@type' => 'Question',
                    'name' => 'How long does shipping take from USA to Jamaica?',
                    'acceptedAnswer' => [
                        '@type' => 'Answer',
                        'text' => 'Our Air Freight service delivers in 5-7 business days, while Sea Freight takes 4-6 weeks.'
                    ]
                ],
                [
                    '@type' => 'Question',
                    'name' => 'Does Watopak handle customs clearance in Jamaica?',
                    'acceptedAnswer' => [
                        '@type' => 'Answer',
                        'text' => 'Yes, we provide complete customs clearance services including documentation handling, duty calculation assistance, and regulatory compliance to ensure your packages clear customs quickly.'
                    ]
                ],
                [
                    '@type' => 'Question',
                    'name' => 'What items can I ship with Watopak Logistics?',
                    'acceptedAnswer' => [
                        '@type' => 'Answer',
                        'text' => 'We ship most items including electronics, clothing, auto parts, furniture, appliances, and more. Our Air Freight is ideal for smaller items, while Sea Freight is perfect for large items like refrigerators, stoves, and barrels.'
                    ]
                ],
                [
                    '@type' => 'Question',
                    'name' => 'How much does shipping from USA to Jamaica cost?',
                    'acceptedAnswer' => [
                        '@type' => 'Answer',
                        'text' => 'Shipping costs depend on weight, dimensions, and shipping method. Air Freight starts at $750 JMD per pound, while Sea Freight starts at $650 JMD per pound. Use our online calculator for an instant quote.'
                    ]
                ]
            ]
        ]);

        return view('pages.home');
    }

    public function rates()
    {
        SEOTools::setTitle('USA to Jamaica Shipping Rates | Air & Sea Freight Pricing | Watopak Logistics');
        SEOTools::setDescription('Compare our affordable USA to Jamaica shipping rates.');
        SEOMeta::setKeywords([
            'USA to Jamaica shipping rates', 'Jamaica air freight cost', 'Jamaica sea freight prices', 
            'shipping calculator Jamaica', 'package forwarding cost Jamaica', 'Amazon shipping to Jamaica cost',
            'cheapest way to ship to Jamaica', 'Jamaica customs fees', 'Jamaica import duty calculator',
            'Jamaica shipping price per pound', 'Jamaica freight forwarder rates', 'Kingston shipping rates',
            'Montego Bay shipping cost', 'barrel shipping to Jamaica', 'refrigerator shipping Jamaica',
            'furniture shipping to Jamaica', 'electronics shipping Jamaica', 'Jamaica shipping comparison'
        ]);
        SEOTools::twitter()->setSite('@watopak.com');
        
        // JSON-LD for shipping rates offerings
        JsonLd::setTitle('USA to Jamaica Shipping Rates | Air & Sea Freight Pricing');
        JsonLd::setDescription('Compare our USA to Jamaica shipping services with reliable delivery.');
        JsonLd::setType('Service');
        JsonLd::addValue('provider', [
            '@type' => 'LocalBusiness',
            'name' => 'Watopak Logistics Services',
            'url' => 'https://watopak.com',
            'logo' => 'https://watopak.com/images/logo.png',
            'address' => [
                '@type' => 'PostalAddress',
                'streetAddress' => '123 Commerce Plaza, Spanish Town Road',
                'addressLocality' => 'Kingston',
                'addressRegion' => 'Kingston',
                'postalCode' => 'JMAAW01',
                'addressCountry' => 'Jamaica'
            ],
            'telephone' => '+1-876-555-9800',
            'email' => 'info@watopak.com'
        ]);
        
        
        // Add FAQ Schema for rates page
        JsonLdMulti::addValue('rates-faq', [
            '@type' => 'FAQPage',
            'mainEntity' => [
                [
                    '@type' => 'Question',
                    'name' => 'What is the difference between Air Freight and Sea Freight?',
                    'acceptedAnswer' => [
                        '@type' => 'Answer',
                        'text' => 'Air Freight is faster (5-7 business days) but more expensive, ideal for urgent items and electronics. Sea Freight is more economical (4-6 weeks delivery) and perfect for large items like furniture, appliances, and barrels.'
                    ]
                ],
                [
                    '@type' => 'Question',
                    'name' => 'How much does it cost to ship 1 pound from USA to Jamaica?',
                    'acceptedAnswer' => [
                        '@type' => 'Answer',
                        'text' => 'Shipping costs vary by weight, dimensions, and method. Use our calculator or contact us for a quote.'
                    ]
                ],
                [
                    '@type' => 'Question',
                    'name' => 'Do you offer package consolidation services?',
                    'acceptedAnswer' => [
                        '@type' => 'Answer',
                        'text' => 'Yes, we offer free package consolidation. We can combine multiple packages from different retailers into one shipment to save on shipping costs.'
                    ]
                ],
                [
                    '@type' => 'Question',
                    'name' => 'Are there additional fees besides the shipping rates?',
                    'acceptedAnswer' => [
                        '@type' => 'Answer',
                        'text' => 'Our rates cover shipping costs from our USA facility to Jamaica. You\'ll also need to pay Jamaica import duties and taxes, which vary by item type. We can provide duty estimation services to help you calculate the total cost.'
                    ]
                ],
                [
                    '@type' => 'Question',
                    'name' => 'How do I calculate the shipping cost for my package?',
                    'acceptedAnswer' => [
                        '@type' => 'Answer',
                        'text' => 'Use our online shipping calculator on the website. Enter your package weight and dimensions, and select your preferred shipping method (Air or Sea Freight) to get an instant quote.'
                    ]
                ]
            ]
        ]);

     // Air freight rates data
     $airRates = [
        ['weight' => '1 lb', 'price' => '750'],
        ['weight' => '2 lb', 'price' => '1210'],
        ['weight' => '3 lb', 'price' => '1620'],
        ['weight' => '4 lb', 'price' => '2030'],
        ['weight' => '5 lb', 'price' => '2440'],
        ['weight' => '6 lb', 'price' => '2850'],
        ['weight' => '7 lb', 'price' => '3260'],
        ['weight' => '8 lb', 'price' => '3670'],
        ['weight' => '9 lb', 'price' => '4080'],
        ['weight' => '10 lb', 'price' => '4490'],
        ['weight' => '11 lb', 'price' => '4900'],
        ['weight' => '12 lb', 'price' => '5310'],
        ['weight' => '13 lb', 'price' => '5720'],
        ['weight' => '14 lb', 'price' => '6130'],
        ['weight' => '15 lb', 'price' => '6540'],
        ['weight' => '16 lb', 'price' => '6950'],
        ['weight' => '17 lb', 'price' => '7360'],
        ['weight' => '18 lb', 'price' => '7770'],
        ['weight' => '19 lb', 'price' => '8180'],
        ['weight' => '20 lb', 'price' => '8590'],
        ['weight' => '21 lb', 'price' => '9000'],
        ['weight' => '22 lb', 'price' => '9410'],
        ['weight' => '23 lb', 'price' => '9820'],
        ['weight' => '24 lb', 'price' => '10230'],
        ['weight' => '25 lb', 'price' => '10640'],
        ['weight' => '26 lb', 'price' => '11050'],
        ['weight' => '27 lb', 'price' => '11460'],
        ['weight' => '28 lb', 'price' => '11870'],
        ['weight' => '29 lb', 'price' => '12280'],
        ['weight' => '30 lb', 'price' => '12690'],
        ['weight' => '31 lb', 'price' => '13100'],
        ['weight' => '32 lb', 'price' => '13510'],
        ['weight' => '33 lb', 'price' => '13920'],
        ['weight' => '34 lb', 'price' => '14330'],
        ['weight' => '35 lb', 'price' => '14740'],
        ['weight' => '36 lb', 'price' => '15150'],
        ['weight' => '37 lb', 'price' => '15560'],
        ['weight' => '38 lb', 'price' => '15970'],
        ['weight' => '39 lb', 'price' => '16380'],
        ['weight' => '40 lb', 'price' => '16790'],
        ['weight' => '41 lb', 'price' => '17200'],
        ['weight' => '42 lb', 'price' => '17610'],
        ['weight' => '43 lb', 'price' => '18020'],
        ['weight' => '44 lb', 'price' => '18430'],
        ['weight' => '45 lb', 'price' => '18840'],
        ['weight' => '46 lb', 'price' => '19250'],
        ['weight' => '47 lb', 'price' => '19660'],
        ['weight' => '48 lb', 'price' => '20070'],
        ['weight' => '49 lb', 'price' => '20480'],
        ['weight' => '50 lb', 'price' => '20890'],
    ];
        
        // Sea freight rates data
        // $seaRates = [
        //     ['weight' => '1-10 lbs', 'price' => '10.99'],
        //     ['weight' => '11-20 lbs', 'price' => '15.99'],
        //     ['weight' => '21-30 lbs', 'price' => '19.99'],
        //     ['weight' => '31-50 lbs', 'price' => '29.99'],
        //     ['weight' => '51-100 lbs', 'price' => '49.99'],
        //     ['weight' => '101-200 lbs', 'price' => '89.99'],
        //     ['weight' => '201-500 lbs', 'price' => '149.99'],
        //     ['weight' => '500+ lbs', 'price' => 'Contact Us'],
        // ];
        $seaRates = [
            ['weight' => '1 lb', 'price' => '650'],
            ['weight' => '2 lb', 'price' => '950'],
            ['weight' => '3 lb', 'price' => '1250'],
            ['weight' => '4 lb', 'price' => '1550'],
            ['weight' => '5 lb', 'price' => '1850'],
            ['weight' => '6 lb', 'price' => '2150'],
            ['weight' => '7 lb', 'price' => '2450'],
            ['weight' => '8 lb', 'price' => '2750'],
            ['weight' => '9 lb', 'price' => '3050'],
            ['weight' => '10 lb', 'price' => '3350'],
            ['weight' => '11 lb', 'price' => '3650'],
            ['weight' => '12 lb', 'price' => '3950'],
            ['weight' => '13 lb', 'price' => '4250'],
            ['weight' => '14 lb', 'price' => '4550'],
            ['weight' => '15 lb', 'price' => '4850'],
            ['weight' => '16 lb', 'price' => '5150'],
            ['weight' => '17 lb', 'price' => '5450'],
            ['weight' => '18 lb', 'price' => '5750'],
            ['weight' => '19 lb', 'price' => '6050'],
            ['weight' => '20 lb', 'price' => '6350'],
            ['weight' => '21 lb', 'price' => '6650'],
            ['weight' => '22 lb', 'price' => '6950'],
            ['weight' => '23 lb', 'price' => '7250'],
            ['weight' => '24 lb', 'price' => '7550'],
            ['weight' => '25 lb', 'price' => '7850'],
            ['weight' => '26 lb', 'price' => '8150'],
            ['weight' => '27 lb', 'price' => '8450'],
            ['weight' => '28 lb', 'price' => '8750'],
            ['weight' => '29 lb', 'price' => '9050'],
            ['weight' => '30 lb', 'price' => '9350'],
            ['weight' => '31 lb', 'price' => '9650'],
            ['weight' => '32 lb', 'price' => '9950'],
            ['weight' => '33 lb', 'price' => '10250'],
            ['weight' => '34 lb', 'price' => '10550'],
            ['weight' => '35 lb', 'price' => '10850'],
            ['weight' => '36 lb', 'price' => '11150'],
            ['weight' => '37 lb', 'price' => '11450'],
            ['weight' => '38 lb', 'price' => '11750'],
            ['weight' => '39 lb', 'price' => '12050'],
            ['weight' => '40 lb', 'price' => '12350'],
            ['weight' => '41 lb', 'price' => '12600'],
            ['weight' => '42 lb', 'price' => '12950'],
            ['weight' => '43 lb', 'price' => '13250'],
            ['weight' => '44 lb', 'price' => '13550'],
            ['weight' => '45 lb', 'price' => '13850'],
            ['weight' => '46 lb', 'price' => '14150'],
            ['weight' => '47 lb', 'price' => '14450'],
            ['weight' => '48 lb', 'price' => '14750'],
            ['weight' => '49 lb', 'price' => '15050'],
        ];
        ;
        return view('pages.rates', compact('airRates', 'seaRates'));
    }
    
    public function privacy()
    {
        SEOTools::setTitle('Privacy Policy - Watopak Logistics');
        SEOTools::setDescription('At Watopak Logistics, protecting your privacy is our commitment. Our comprehensive Privacy Policy explains how we collect, use, and safeguard your personal information while delivering premium shipping services from USA to Jamaica.');
        SEOMeta::setKeywords([
            'Privacy Policy', 'Watopak Logistics Privacy', 'Data Protection', 'Information Security', 
            'Customer Privacy', 'Shipping Privacy Policy', 'Jamaica Shipping Privacy', 
            'Personal Data Protection', 'Online Shopping Privacy', 'Secure Shipping',
            'GDPR Compliance', 'Customer Data Protection', 'Data Security Jamaica'
        ]);
        SEOTools::twitter()->setSite('@watopak.com');
        
        // JSON-LD for webpage
        JsonLd::setTitle('Watopak Logistics Privacy Policy');
        JsonLd::setDescription('Privacy Policy for our premium shipping services.');
        JsonLd::setType('WebPage');
        JsonLd::addValue('provider', [
            '@type' => 'LocalBusiness',
            'name' => 'Watopak Logistics',
            'address' => [
                '@type' => 'PostalAddress',
                'streetAddress' => '123 Commerce Plaza, Spanish Town Road',
                'addressLocality' => 'Kingston',
                'addressCountry' => 'Jamaica'
            ],
            'telephone' => '+1-876-555-9800',
            'email' => 'info@watopak.com'
        ]);
        JsonLd::addValue('datePublished', '2024-01-01');
        JsonLd::addValue('dateModified', date('Y-m-d'));

        return view('pages.privacy');
    }
    
    public function term()
    {
        SEOTools::setTitle('Terms and Conditions - Watopak Logistics');
        SEOTools::setDescription('Review our Terms and Conditions for shipping with Watopak Logistics. Understand our shipping policies, delivery processes, and service standards for a premium shipping experience from USA to Jamaica.');
        SEOMeta::setKeywords([
            'Terms and Conditions', 'Shipping Terms', 'Watopak Logistics Terms', 'Delivery Conditions',
            'Shipping Policies Jamaica', 'Customer Shipping Agreement', 'Air Freight Terms',
            'Sea Freight Terms', 'Online Shopping Terms', 'Package Delivery Terms',
            'Jamaica Shipping Rules', 'Import Regulations', 'Customs Clearance Terms'
        ]);
        SEOTools::twitter()->setSite('@watopak.com');
        
        // JSON-LD for webpage
        JsonLd::setTitle('Watopak Logistics Terms and Conditions');
        JsonLd::setDescription('Terms and Conditions for our premium shipping services from USA to Jamaica.');
        JsonLd::setType('WebPage');
        JsonLd::addValue('provider', [
            '@type' => 'LocalBusiness',
            'name' => 'Watopak Logistics',
            'address' => [
                '@type' => 'PostalAddress',
                'streetAddress' => '123 Commerce Plaza, Spanish Town Road',
                'addressLocality' => 'Kingston',
                'addressCountry' => 'Jamaica'
            ],
            'telephone' => '+1-876-555-9800',
            'email' => 'info@watopak.com'
        ]);
        JsonLd::addValue('datePublished', '2024-01-01');
        JsonLd::addValue('dateModified', date('Y-m-d'));

        return view('pages.term-condition');
    }

    public function contact()
    {
        SEOTools::setTitle('Contact Watopak Logistics - Connect with Our Expert Team');
        SEOTools::setDescription('Get in touch with Watopak Logistics for all your premium shipping needs. Contact us via phone, email, or visit our modern facility in Kingston, Jamaica at 123 Commerce Plaza. Our dedicated customer service team provides personalized assistance.');
        SEOMeta::setKeywords([
            'Contact Watopak Logistics', 'Jamaica shipping contact', 'shipping customer service',
            'shipping help Jamaica', 'Watopak Logistics phone', 'Watopak Logistics email',
            'Kingston shipping company', 'Jamaica Logistics contact', 'shipping inquiry',
            'shipping support Jamaica', 'premium shipping service', 'online shopping delivery'
        ]);
        SEOTools::twitter()->setSite('@watopak.com');
        
        // JSON-LD for contact page
        JsonLd::setTitle('Contact Watopak Logistics');
        JsonLd::setDescription('Contact information for Watopak Logistics premium shipping services in Jamaica.');
        JsonLd::setType('ContactPage');
        JsonLd::addValue('contactPoint', [
            '@type' => 'ContactPoint',
            'telephone' => '+1-876-555-9800',
            'contactType' => 'customer service',
            'email' => 'info@watopak.com',
            'areaServed' => 'Jamaica',
            'hoursAvailable' => [
                'Monday-Friday: 8AM-6PM',
                'Saturday: 9AM-4PM',
                'Sunday: Closed'
            ],
            'address' => [
                '@type' => 'PostalAddress',
                'streetAddress' => '123 Commerce Plaza, Spanish Town Road',
                'addressLocality' => 'Kingston',
                'addressCountry' => 'Jamaica'
            ]
        ]);
        JsonLd::addValue('sameAs', [
            'https://www.facebook.com/watopak.com',
            'https://www.instagram.com/watopak_logistics'
        ]);

        return view('pages.contact');
    }
    
    public function about()
    {
        SEOTools::setTitle('About Watopak Logistics | #1 USA to Jamaica Shipping & Package Forwarding Service');
        SEOTools::setDescription('Watopak Logistics is Jamaica\'s leading shipping company with 1000+ satisfied customers. Our USA mailbox service, air & sea freight options, and customs clearance expertise make online shopping from the US easy and affordable!');
        SEOMeta::setKeywords([
            'Watopak Logistics history', 'Jamaica shipping company background', 'best Jamaica freight forwarder', 
            'USA to Jamaica shipping experts', 'Jamaica package forwarding company', 'Jamaica shipping team',
            'Watopak Logistics mission', 'Jamaica shipping values', 'Jamaica customs experts',
            'Jamaica online shopping partner', 'USA mailbox Jamaica company', 'Jamaica shipping experience',
            'trusted Jamaica shipping', 'Jamaica shipping reviews', 'Jamaica shipping testimonials',
            'Jamaica shipping reliability', 'Jamaica shipping customer service', 'Jamaica shipping facilities'
        ]);
        SEOTools::twitter()->setSite('@watopak.com');
        
        // JSON-LD for about page
        JsonLd::setTitle('About Watopak Logistics | #1 USA to Jamaica Shipping Service');
        JsonLd::setDescription('Learn about Watopak Logistics\'s mission to provide affordable, reliable shipping from USA to Jamaica with exceptional customer service.');
        JsonLd::setType('AboutPage');
        JsonLd::addValue('mainEntity', [
            '@type' => 'Organization',
            'name' => 'Watopak Logistics Services',
            'description' => 'Jamaica\'s leading shipping company providing USA mailbox addresses, air & sea freight, and customs clearance services for Jamaicans shopping online from US retailers.',
            'url' => 'https://watopak.com',
            'logo' => 'https://watopak.com/images/logo.png',
            'image' => 'https://watopak.com/images/watopak-Logistics-hero.png',
            'foundingDate' => '2024',
            'foundingLocation' => [
                '@type' => 'Place',
                'address' => [
                    '@type' => 'PostalAddress',
                    'addressLocality' => 'Kingston',
                    'addressCountry' => 'Jamaica'
                ]
            ],
            'slogan' => 'Your trusted shipping partner from USA to Jamaica',
            'numberOfEmployees' => [
                '@type' => 'QuantitativeValue',
                'value' => '15'
            ],
            'address' => [
                '@type' => 'PostalAddress',
                'streetAddress' => '123 Commerce Plaza, Spanish Town Road',
                'addressLocality' => 'Kingston',
                'addressRegion' => 'Kingston',
                'postalCode' => 'JMAAW01',
                'addressCountry' => 'Jamaica'
            ],
            'contactPoint' => [
                '@type' => 'ContactPoint',
                'telephone' => '+1-876-555-9800',
                'contactType' => 'customer service',
                'email' => 'info@watopak.com',
                'areaServed' => 'Jamaica',
                'availableLanguage' => ['English']
            ],
            'sameAs' => [
                'https://www.facebook.com/watopak.com',
                'https://www.instagram.com/watopak_logistics',
                'https://twitter.com/watopak.com'
            ],
            'award' => [
                'Best Shipping Service in Jamaica 2024',
                'Customer Service Excellence Award 2024'
            ],
            
        ]);

        return view('pages.about');
    }
     
    
    public function calculator()
    {
        SEOTools::setTitle('Shipping Cost Calculator - Watopak Logistics Jamaica');
        SEOTools::setDescription('Calculate your premium shipping costs from USA to Jamaica with our advanced shipping calculator. Get instant estimates for any package size for express air or secure sea freight delivery to Jamaica.');
        SEOMeta::setKeywords([
            'Shipping calculator', 'Shipping cost estimate', 'USA to Jamaica shipping cost',
            'Package shipping rates', 'International shipping calculator', 'Freight cost calculator',
            'Online shopping shipping cost', 'Jamaica import cost calculator', 'Duty estimate',
            'Air freight calculator', 'Sea freight calculator', 'Jamaica delivery costs',
            'Shipping rates Jamaica', 'Parcel shipping calculator'
        ]);
        SEOTools::twitter()->setSite('@watopak.com');
        
        // JSON-LD for calculator page
        JsonLd::setTitle('Watopak Logistics Cost Calculator');
        JsonLd::setDescription('Calculate premium shipping costs from USA to Jamaica with our interactive tool.');
        JsonLd::setType('WebApplication');
        JsonLd::addValue('applicationCategory', 'CalculatorApplication');
        JsonLd::addValue('provider', [
            '@type' => 'LocalBusiness',
            'name' => 'Watopak Logistics',
            'address' => [
                '@type' => 'PostalAddress',
                'streetAddress' => '123 Commerce Plaza, Spanish Town Road',
                'addressLocality' => 'Kingston',
                'addressCountry' => 'Jamaica'
            ],
            'telephone' => '+1-876-555-9800',
            'email' => 'info@watopak.com'
        ]);
        

        return view('pages.calculator');
    }

    public function send_email(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            // 'phone' => 'required|string|max:30',
            'message' => 'required|string',
            'recaptcha_token' => ['required', new Recaptcha()]
        ]);

        try {
           $data = [
            'name' => $request->name,
            'email' => $request->email,
            'message' => $request->message,
           ];
            Mail::to('info@watopak.com')->send(new sendEmail($data));
            return back()->with('success', 'Your message has been sent successfully!');
        } catch (\Exception $e) {
            return back()->with('error', 'Sorry, there was an error sending your message. Please try again later.' );
        }
    }
}
