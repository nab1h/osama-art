<!DOCTYPE html>
<html lang="ar">

<head>
    <meta charset="UTF-8">
    <title>رسالة جديدة</title>
</head>

<body style="font-family: Arial; background:#f3f4f6; padding:20px;">

    <div style="max-width:600px; margin:auto; background:#fff; padding:25px; border-radius:10px; border:1px solid #ddd;">

        <h2 style="color:#f59e0b; text-align:center;">
            رسالة جديدة من الموقع
        </h2>

        <hr style="margin:20px 0;">

        <p><strong>الاسم:</strong> {{ $messageData->name }}</p>

        <p><strong>الرسالة:</strong></p>

        <div style="background:#f9fafb; padding:15px; border-radius:8px; color:#333;">
            {{ $messageData->message }}
        </div>

        <hr style="margin:20px 0;">

        <p style="font-size:12px; color:#888; text-align:center;">
            تم الإرسال من موقعك
        </p>

    </div>

</body>

</html>
