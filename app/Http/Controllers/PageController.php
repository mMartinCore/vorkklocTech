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
            SitemapGenerator::create(config('app.url'))->writeToFile($path);
        }

        return response()->file($path);
    }

    public function home()
    {
        SEOTools::setTitle('VorkklocTech | Custom Software Development - Increase Efficiency And Productivity');
        SEOTools::setDescription('VorkklocTech specializes in custom software development. We design and develop tailored websites, web applications, APIs, and mobile apps that solve specific operational challenges and drive growth. Increase efficiency and productivity with our custom digital solutions.');
        SEOMeta::setKeywords([
            'Custom Software Development', 'Web Development', 'Mobile App Development', 'API Development', 
            'Software Consulting', 'Custom Web Applications', 'E-commerce Development', 'Business Software Solutions',
            'Software Development Company', 'Custom Software Solutions', 'Web Application Development', 'Mobile App Design',
            'API Integration', 'Software Development Services', 'Custom Software Company', 'Digital Solutions',
            'Business Process Automation', 'Software Engineering', 'Full Stack Development', 'Software Development Agency'
        ]);
        SEOTools::twitter()->setSite('@vorkkloctech');
        
        // Set structured data for business
        JsonLd::setTitle('VorkklocTech - Custom Software Development');
        JsonLd::setDescription('Custom Software Development. Increase Efficiency And Productivity. We design and develop tailored websites, web applications, APIs, and mobile apps that solve specific operational challenges and drive growth.');
        JsonLd::setType('Organization');
        JsonLd::addValue('name', 'VorkklocTech');
        JsonLd::addValue('url', config('app.url'));
        JsonLd::addValue('logo', config('app.url') . '/images/logo-no-text.png');
        JsonLd::addValue('image', config('app.url') . '/images/watopak-logistics-hero.png');
        JsonLd::addValue('description', 'Custom Software Development. Increase Efficiency And Productivity.');
        JsonLd::addValue('address', [
            '@type' => 'PostalAddress',
            'addressCountry' => 'Jamaica'
        ]);
        JsonLd::addValue('email', 'info@vorkkloctech.com');
        JsonLd::addValue('sameAs', [
            'https://www.facebook.com/vorkkloctech',
            'https://www.instagram.com/vorkkloctech',
            'https://twitter.com/vorkkloctech'
        ]);
        
        
        // Add FAQ Schema for rich snippets
        JsonLdMulti::addValue('faq', [
            '@type' => 'FAQPage',
            'mainEntity' => [
                [
                    '@type' => 'Question',
                    'name' => 'What services does VorkklocTech offer?',
                    'acceptedAnswer' => [
                        '@type' => 'Answer',
                        'text' => 'VorkklocTech specializes in custom software development including web development, mobile app development, API development and integration, and software consulting. We design and develop tailored websites, web applications, APIs, and mobile apps that solve specific operational challenges and drive growth.'
                    ]
                ],
                [
                    '@type' => 'Question',
                    'name' => 'How long does custom software development take?',
                    'acceptedAnswer' => [
                        '@type' => 'Answer',
                        'text' => 'Development timelines vary based on project scope and complexity. We follow an agile development process that includes discovery, development, and deployment phases. Contact us for a detailed timeline based on your specific requirements.'
                    ]
                ],
                [
                    '@type' => 'Question',
                    'name' => 'What technologies does VorkklocTech use?',
                    'acceptedAnswer' => [
                        '@type' => 'Answer',
                        'text' => 'We use modern technologies and frameworks including React, Laravel, Node.js, React Native, Flutter, and various cloud platforms. Our technology stack is chosen based on your specific project requirements and business needs.'
                    ]
                ],
                [
                    '@type' => 'Question',
                    'name' => 'Does VorkklocTech provide ongoing support after deployment?',
                    'acceptedAnswer' => [
                        '@type' => 'Answer',
                        'text' => 'Yes, we provide ongoing support and maintenance services to ensure your software continues to perform optimally. We offer training, bug fixes, updates, and feature enhancements as your business grows.'
                    ]
                ],
                [
                    '@type' => 'Question',
                    'name' => 'What is Courier-App?',
                    'acceptedAnswer' => [
                        '@type' => 'Answer',
                        'text' => 'Courier-App is VorkklocTech\'s flagship product, an on-demand delivery platform that demonstrates our expertise in building custom software solutions. It embodies our core belief that the right technology should streamline complex processes and deliver transparent, measurable results.'
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
            'logo' => config('app.url') . '/images/logo-no-text.png',
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
        SEOTools::setTitle('Contact VorkklocTech - Get Started with Custom Software Development');
        SEOTools::setDescription('Get in touch with VorkklocTech for all your custom software development needs. Contact us to discuss your project and learn how we can help increase efficiency and productivity for your business.');
        SEOMeta::setKeywords([
            'Contact VorkklocTech', 'Software development contact', 'Custom software inquiry',
            'Web development consultation', 'Mobile app development contact', 'Software consulting',
            'VorkklocTech contact', 'Software development quote', 'Custom software consultation',
            'Software development support', 'Technology consulting contact', 'Digital solutions inquiry'
        ]);
        SEOTools::twitter()->setSite('@vorkkloctech');
        
        // JSON-LD for contact page
        JsonLd::setTitle('Contact VorkklocTech');
        JsonLd::setDescription('Contact information for VorkklocTech custom software development services.');
        JsonLd::setType('ContactPage');
        JsonLd::addValue('contactPoint', [
            '@type' => 'ContactPoint',
            'contactType' => 'customer service',
            'email' => 'info@vorkkloctech.com',
            'availableLanguage' => ['English']
        ]);
        JsonLd::addValue('sameAs', [
            'https://www.facebook.com/vorkkloctech',
            'https://www.instagram.com/vorkkloctech'
        ]);

        return view('pages.contact');
    }
    
    public function about()
    {
        SEOTools::setTitle('About VorkklocTech | Custom Software Development Company');
        SEOTools::setDescription('VorkklocTech is a specialized software development and consultancy firm dedicated to building custom digital solutions that increase efficiency and productivity. Learn about our mission, vision, and flagship product Courier-App.');
        SEOMeta::setKeywords([
            'VorkklocTech about', 'Custom software development company', 'Software development firm', 
            'Web development company', 'Mobile app development company', 'Software consulting',
            'VorkklocTech mission', 'VorkklocTech vision', 'Courier-App',
            'Custom software solutions', 'Software development team', 'Digital solutions company',
            'Business software development', 'Software engineering company', 'Technology consulting',
            'Software development expertise', 'Custom application development', 'Software development services'
        ]);
        SEOTools::twitter()->setSite('@vorkkloctech');
        
        // JSON-LD for about page
        JsonLd::setTitle('About VorkklocTech | Custom Software Development Company');
        JsonLd::setDescription('Learn about VorkklocTech\'s mission to build custom digital solutions that increase efficiency and productivity for businesses.');
        JsonLd::setType('AboutPage');
        JsonLd::addValue('mainEntity', [
            '@type' => 'Organization',
            'name' => 'VorkklocTech',
            'description' => 'A specialized software development and consultancy firm dedicated to building custom digital solutions that increase efficiency and productivity for businesses.',
            'url' => config('app.url'),
            'logo' => config('app.url') . '/images/logo-no-text.png',
            'image' => config('app.url') . '/images/watopak-logistics-hero.png',
            'slogan' => 'Custom Software Development. Increase Efficiency And Productivity.',
            'address' => [
                '@type' => 'PostalAddress',
                'addressCountry' => 'Jamaica'
            ],
            'contactPoint' => [
                '@type' => 'ContactPoint',
                'contactType' => 'customer service',
                'email' => 'info@vorkkloctech.com',
                'availableLanguage' => ['English']
            ],
            'sameAs' => [
                'https://www.facebook.com/vorkkloctech',
                'https://www.instagram.com/vorkkloctech',
                'https://twitter.com/vorkkloctech'
            ],
            'knowsAbout' => [
                'Custom Software Development',
                'Web Development',
                'Mobile App Development',
                'API Development',
                'Software Consulting'
            ]
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
            Mail::to('info@vorkkloctech.com')->send(new sendEmail($data));
            return back()->with('success', 'Your message has been sent successfully!');
        } catch (\Exception $e) {
            return back()->with('error', 'Sorry, there was an error sending your message. Please try again later.' );
        }
    }
}
