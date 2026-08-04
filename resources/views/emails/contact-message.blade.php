<x-mail::message>
# New Contact Form Submission

You have received a new message from the **ksteps Tech** website contact form.

---

| Field | Detail |
|---|---|
| **Name** | {{ $senderName }} |
| **Email** | {{ $senderEmail }} |
| **Subject** | {{ $messageSubject }} |

---

**Message:**

{{ $messageBody }}

---

<x-mail::button :url="'mailto:' . $senderEmail" color="primary">
Reply to {{ $senderName }}
</x-mail::button>

*Sent automatically from the ksteps Tech website.*

© {{ date('Y') }} ksteps Tech &nbsp;·&nbsp; +91 86938 29219
</x-mail::message>
