<!DOCTYPE html>
<html>
<head>
    <title>Contact Form Submission</title>
    <style>
        body { font-family: 'DM Sans', sans-serif; background: #f5f2ec; color: #0a0a0a; padding: 20px; }
        .container { background: #ffffff; padding: 30px; border: 1px solid #d4cfc4; max-width: 600px; margin: 0 auto; }
        h2 { font-family: 'Playfair Display', serif; border-bottom: 1px solid #c8a96e; padding-bottom: 10px; }
        p { line-height: 1.6; }
        .label { font-weight: bold; color: #8b5e3c; text-transform: uppercase; font-size: 0.8rem; letter-spacing: 0.05em; }
        .footer { margin-top: 30px; font-size: 0.8rem; color: #888070; border-top: 1px solid #d4cfc4; padding-top: 10px; }
    </style>
</head>
<body>
    <div class="container">
        <h2>New Contact Message</h2>
        <p><span class="label">Name:</span><br>{{ $data['name'] }}</p>
        <p><span class="label">Email:</span><br>{{ $data['email'] }}</p>
        <p><span class="label">Subject:</span><br>{{ $data['subject'] }}</p>
        <p><span class="label">Message:</span><br>{!! nl2br(e($data['message'])) !!}</p>
        
        <div class="footer">
            This message was sent from your portfolio contact form.
        </div>
    </div>
</body>
</html>
