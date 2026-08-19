<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>New Contact Message</title>
</head>
<body style="margin:0; padding:0; background-color:#f4f4f4; font-family: Arial, Helvetica, sans-serif;">
    <table role="presentation" width="100%" cellpadding="0" cellspacing="0" style="background-color:#f4f4f4; padding:30px 0;">
        <tr>
            <td align="center">
                <table role="presentation" width="600" cellpadding="0" cellspacing="0" style="background-color:#ffffff; border-radius:6px; overflow:hidden;">
                    <tr>
                        <td style="background-color:#1a1a1a; padding:20px 30px;">
                            <h1 style="color:#ffffff; font-size:18px; margin:0;">New Contact Form Submission</h1>
                        </td>
                    </tr>
                    <tr>
                        <td style="padding:30px;">
                            <p style="margin:0 0 16px; font-size:14px; color:#333;">
                                You have received a new message from the Tech Support Inc website contact form.
                            </p>

                            <table role="presentation" width="100%" cellpadding="0" cellspacing="0" style="font-size:14px; color:#333;">
                                <tr>
                                    <td style="padding:8px 0; width:100px; vertical-align:top;"><strong>Name</strong></td>
                                    <td style="padding:8px 0;">{{ $contact->name }}</td>
                                </tr>
                                <tr>
                                    <td style="padding:8px 0; vertical-align:top;"><strong>Email</strong></td>
                                    <td style="padding:8px 0;"><a href="mailto:{{ $contact->email }}">{{ $contact->email }}</a></td>
                                </tr>
                                <tr>
                                    <td style="padding:8px 0; vertical-align:top;"><strong>Phone</strong></td>
                                    <td style="padding:8px 0;">{{ $contact->phone }}</td>
                                </tr>
                                <tr>
                                    <td style="padding:8px 0; vertical-align:top;"><strong>Message</strong></td>
                                    <td style="padding:8px 0; white-space:pre-line;">{{ $contact->message }}</td>
                                </tr>
                            </table>

                            <p style="margin:24px 0 0; font-size:12px; color:#888;">
                                Submitted {{ $contact->created_at->format('d M Y, H:i') }}
                            </p>
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
    </table>
</body>
</html>
