<!DOCTYPE html>
<html lang="ar">

<head>
    <meta charset="UTF-8">
</head>

<body style="font-family: Arial; background:#f3f4f6; padding:20px;">

    <div style="max-width:600px;margin:auto;background:#fff;padding:25px;border-radius:10px;">

        <h2 style="color:#f59e0b;">رسالة جديدة من الموقع</h2>

        <p><strong>الاسم:</strong> {{ $data['name'] }}</p>

        <p><strong>البريد:</strong> {{ $data['email'] }}</p>

        <p><strong>عنوان المشروع:</strong> {{ $data['subject'] }}</p>

        <p><strong>التفاصيل:</strong></p>

        <div style="background:#f9fafb;padding:15px;border-radius:8px;">
            {{ $data['message'] }}
        </div>

    </div>

</body>

</html>
