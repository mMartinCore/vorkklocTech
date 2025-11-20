<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="theme-color" content="#fe6d7c">
    <title>New Contact Inquiry - {{ config('app.name') }}</title>
    <style>
        /* Reset styles */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        
        /* Base styles */
        body {
            font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, sans-serif;
            line-height: 1.6;
            color: #333333;
            background-color: #f8fafc;
            margin: 0;
            padding: 0;
            width: 100% !important;
        }
        
        /* Container styles */
        .email-container {
            max-width: 600px;
            margin: 0 auto;
            background-color: #ffffff;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }
        
        /* Header styles */
        .email-header {
            background: #fafafa;
            border-bottom: 3px solid #fe6d7c;
            color: #2d3748;
            text-align: center;
            padding: 50px 30px;
        }
        
        .logo-container {
            margin-bottom: 25px;
        }
        
        .logo {
            height: 80px;
            max-width: 300px;
            vertical-align: middle;
            border-radius: 12px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
            border: 2px solid #ffffff;
        }
        
        .email-title {
            font-size: 32px;
            font-weight: 700;
            margin: 25px 0 12px;
            color: #2d3748;
            text-shadow: none;
        }
        
        .email-subtitle {
            font-size: 16px;
            color: #718096;
            font-weight: 400;
        }
        
        /* Content styles */
        .email-content {
            padding: 40px 30px;
        }
        
        .content-section {
            background-color: #f8fafc;
            border-radius: 12px;
            padding: 30px;
            border: 1px solid #e2e8f0;
        }
        
        .section-title {
            font-size: 20px;
            font-weight: 600;
            color: #2d3748;
            margin-bottom: 25px;
            padding-bottom: 10px;
            border-bottom: 2px solid #fe6d7c;
        }
        
        /* Table styles */
        .info-table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
        }
        
        .info-row {
            border-bottom: 1px solid #e2e8f0;
        }
        
        .info-row:last-child {
            border-bottom: none;
        }
        
        .info-label {
            padding: 15px 20px 15px 0;
            font-weight: 600;
            color: #4a5568;
            vertical-align: top;
            width: 120px;
        }
        
        .info-value {
            padding: 15px 0;
            color: #2d3748;
            vertical-align: top;
        }
        
        .email-link {
            color: #fe6d7c;
            text-decoration: none;
            font-weight: 500;
            transition: color 0.3s ease;
        }
        
        .email-link:hover {
            color: #f94e9c;
        }
        
        /* Message box styles */
        .message-container {
            margin-top: 20px;
        }
        
        .message-box {
            background-color: #fef2f2;
            border: 2px solid #fecaca;
            border-radius: 8px;
            padding: 20px;
            line-height: 1.7;
            font-size: 15px;
            color: #4a5568;
            box-shadow: 0 1px 3px rgba(254, 109, 124, 0.1);
        }
        
        /* Footer styles */
        .email-footer {
            background: linear-gradient(135deg, #374151 0%, #4b5563 100%);
            color: #cbd5e0;
            text-align: center;
            padding: 30px;
            font-size: 14px;
        }
        
        .footer-title {
            color: #ffffff;
            font-weight: 600;
            margin-bottom: 10px;
        }
        
        .footer-text {
            opacity: 0.8;
            line-height: 1.5;
        }
        
        /* Accent elements */
        .accent-dot {
            display: inline-block;
            width: 8px;
            height: 8px;
            background: linear-gradient(45deg, #fe6d7c, #f94e9c);
            border-radius: 50%;
            margin: 0 5px;
        }
        
        /* Responsive styles */
        @media only screen and (max-width: 600px) {
            .email-container {
                margin: 0 10px;
                box-shadow: none;
            }
            
            .email-header {
                padding: 40px 20px;
            }
            
            .logo {
                height: 70px;
                max-width: 250px;
            }
            
            .email-title {
                font-size: 28px;
            }
            
            .email-content {
                padding: 30px 20px;
            }
            
            .content-section {
                padding: 20px;
            }
            
            .info-label {
                width: 100px;
                font-size: 14px;
            }
            
            .info-value {
                font-size: 14px;
            }
            
            .message-box {
                padding: 15px;
                font-size: 14px;
            }
            
            .email-footer {
                padding: 25px 20px;
            }
        }
        
        @media only screen and (max-width: 480px) {
            .email-header {
                padding: 35px 15px;
            }
            
            .logo {
                height: 60px;
                max-width: 200px;
            }
            
            .email-title {
                font-size: 24px;
            }
            
            .email-content {
                padding: 25px 15px;
            }
            
            .content-section {
                padding: 15px;
            }
            
            .info-table {
                font-size: 13px;
            }
            
            .info-label,
            .info-value {
                padding: 12px 0;
            }
        }
    </style>
</head>
<body>
    <div class="email-container">
        <!-- Header Section -->
        <div class="email-header">
            <div class="logo-container">
                <img src="https://watopak.com/images/Watopak-logo.png" alt="{{ config('app.name') }}" class="logo">
            </div>
            <h1 class="email-title">New Contact Inquiry</h1>
            <p class="email-subtitle">{{ now()->format('F j, Y \a\t g:i A') }}</p>
        </div>

        <!-- Content Section -->
        <div class="email-content">
            <div class="content-section">
                <h2 class="section-title">Contact Details</h2>
                
                <table class="info-table">
                    <tr class="info-row">
                        <td class="info-label">Full Name:</td>
                        <td class="info-value">{{ $data['name'] }}</td>
                    </tr>
                    <tr class="info-row">
                        <td class="info-label">Email Address:</td>
                        <td class="info-value">
                            <a href="mailto:{{ $data['email'] }}" class="email-link">{{ $data['email'] }}</a>
                        </td>
                    </tr>
                </table>
                
                <div class="message-container">
                    <div class="info-label" style="margin-bottom: 10px;">Message:</div>
                    <div class="message-box">
                        {{ $data['message'] }}
                    </div>
                </div>
            </div>
        </div>

        <!-- Footer Section -->
        <div class="email-footer">
            <div class="footer-title">{{ config('app.name') }}</div>
            <div class="footer-text">
                This email was generated automatically from your website contact form.<br>
                Please respond to the customer within 24 hours for the best customer experience.
            </div>
        </div>
    </div>
</body>
</html>
