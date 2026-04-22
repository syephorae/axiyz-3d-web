<!DOCTYPE html>
<html>
<head>
    <style>
        body { font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; line-height: 1.6; color: #333; }
        .container { max-width: 600px; margin: 0 auto; padding: 20px; border: 1px solid #eee; border-radius: 10px; }
        .header { background-color: #003366; color: #ffffff; padding: 20px; text-align: center; border-radius: 8px 8px 0 0; }
        .content { padding: 20px; }
        .footer { font-size: 12px; color: #777; text-align: center; margin-top: 20px; }
        .label { font-weight: bold; color: #003366; display: block; margin-top: 15px; }
        .value { background-color: #f9f9f9; padding: 10px; border-radius: 5px; border-left: 4px solid #e11d48; margin-bottom: 10px; }
        .brand-red { color: #e11d48; }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <h1>aXiYZ <span style="color: #e11d48;">3D Studios</span></h1>
            <p>New Quote Request Received</p>
        </div>
        <div class="content">
            <p>Hello Team,</p>
            <p>You have received a new inquiry from the website contact form.</p>

            <span class="label">Name:</span>
            <div class="value">{{ $data['first-name'] }} {{ $data['last-name'] ?? '' }}</div>

            <span class="label">Email:</span>
            <div class="value">{{ $data['email'] }}</div>

            <span class="label">Inquiry Type:</span>
            <div class="value">{{ $data['inquiry-type'] }}</div>

            <span class="label">Message:</span>
            <div class="value" style="white-space: pre-wrap;">{{ $data['message'] }}</div>

            <hr style="border: 0; border-top: 1px solid #eee; margin: 20px 0;">
            <p>You can reply directly to this email to contact the customer.</p>
        </div>
        <div class="footer">
            &copy; {{ date('Y') }} aXiYZ 3D Studios. All rights reserved.
        </div>
    </div>
</body>
</html>
