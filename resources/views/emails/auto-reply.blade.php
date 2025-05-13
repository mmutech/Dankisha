<!DOCTYPE html>
<html>
<head>
    <title>Thank you for reaching out!</title>
</head>
<body>
    <h1>Hello, {{ $data['name'] }},</h1>

    <p>Thank you for contacting Dankisha & Associate Ltd. We've received your message and will get back to you as soon as possible.</p>

    <p>Here’s a summary of what you sent:</p>
    <p><strong>Your Message:</strong></p>
    <p>{{ $data['message'] }}</p>

    <p>Best regards,<br>
    Dankisha & Associate Ltd.</p>
</body>
</html>
