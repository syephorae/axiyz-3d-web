<x-mail::message>
# Hello {{ $data['first-name'] }},

Thank you for reaching out to **aXiYZ 3D Studios**!

We have received your inquiry regarding **{{ $data['inquiry-type'] }}**. Our team is currently reviewing your details and we will get back to you as soon as possible.

**Your Message Summary:**
<x-mail::panel>
{{ $data['message'] }}
</x-mail::panel>

If you have any urgent files or additional details to share, feel free to reply to this email.

Thanks,<br>
The aXiYZ 3D Team
</x-mail::message>
