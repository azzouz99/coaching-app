<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
  <meta charset="utf-8">
  <title>{{ $meeting->subject }}</title>
</head>
<body style="margin:0;padding:0;background-color:#f3f4f6;font-family:'Cairo',Arial,'Helvetica Neue',sans-serif;">
  <table width="100%" cellpadding="0" cellspacing="0" role="presentation" style="background-color:#f3f4f6;padding:32px 0;">
    <tr>
      <td align="center">
        <table width="600" cellpadding="0" cellspacing="0" role="presentation" style="background:#ffffff;border-radius:16px;overflow:hidden;box-shadow:0 10px 30px rgba(16,185,129,0.12);">
          <tr>
            <td style="background:linear-gradient(135deg,#059669,#047857);padding:32px 40px;color:#fff;">
              <h1 style="margin:0;font-size:24px;font-weight:700;line-height:1.4;">{{ __('دعوة لحضور لقاء افتراضي') }}</h1>
              <p style="margin:12px 0 0 0;font-size:16px;opacity:0.9;">
                {{ $meeting->subject }}
              </p>
            </td>
          </tr>
          <tr>
            <td style="padding:32px 40px;color:#111827;line-height:1.8;">
              <p style="margin:0 0 16px 0;font-size:16px;">
                {{ __('مرحباً :name،', ['name' => $participant->name]) }}
              </p>
              <p style="margin:0 0 16px 0;font-size:15px;color:#4b5563;">
                {{ __('يسرنا دعوتك لحضور لقاءنا القادم عبر Google Meet. تجد أدناه تفاصيل الجلسة:') }}
              </p>
              <table role="presentation" cellpadding="0" cellspacing="0" width="100%" style="margin:24px 0;background:#f9fafb;border-radius:12px;border:1px solid #e5e7eb;">
                <tr>
                  <td style="padding:16px 20px;font-size:15px;color:#047857;font-weight:600;width:30%;">{{ __('الموضوع') }}</td>
                  <td style="padding:16px 20px;font-size:15px;color:#1f2937;">{{ $meeting->subject }}</td>
                </tr>
                <tr>
                  <td style="padding:16px 20px;font-size:15px;color:#047857;font-weight:600;">{{ __('موعد اللقاء') }}</td>
                  <td style="padding:16px 20px;font-size:15px;color:#1f2937;">
                    @php($meetAt = $meeting->meet_at?->timezone(config('app.timezone')))
                    {{ $meetAt?->format('d/m/Y') }} {{ __('الساعة') }} {{ $meetAt?->format('H:i') }}
                  </td>
                </tr>
                <tr>
                  <td style="padding:16px 20px;font-size:15px;color:#047857;font-weight:600;">{{ __('رابط Google Meet') }}</td>
                  <td style="padding:16px 20px;font-size:15px;">
                    <a href="{{ $meeting->meet_url }}" target="_blank" rel="noopener" style="color:#047857;text-decoration:underline;">
                      {{ $meeting->meet_url }}
                    </a>
                  </td>
                </tr>
              </table>
              <p style="margin:24px 0;font-size:15px;color:#4b5563;">
                {{ __('يمكنك الانضمام للقاء في الوقت المحدد من خلال النقر على الزر التالي:') }}
              </p>
              <table role="presentation" cellpadding="0" cellspacing="0" style="margin:0 auto 24px auto;">
                <tr>
                  <td>
                    <a href="{{ $meeting->meet_url }}" target="_blank" rel="noopener"
                       style="display:inline-block;background-color:#059669;color:#ffffff;padding:12px 28px;border-radius:9999px;font-weight:600;text-decoration:none;">
                      {{ __('الانضمام إلى اللقاء') }}
                    </a>
                  </td>
                </tr>
              </table>
              <p style="margin:0;font-size:14px;color:#9ca3af;">
                {{ __('إذا لم يعمل الزر، انسخ الرابط أعلاه والصقه في متصفحك.') }}
              </p>
            </td>
          </tr>
          <tr>
            <td style="background:#f9fafb;padding:24px 40px;color:#6b7280;font-size:13px;text-align:center;">
              {{ __('مع خالص التحية، فريق المنصة') }}
            </td>
          </tr>
        </table>
      </td>
    </tr>
  </table>
</body>
</html>
