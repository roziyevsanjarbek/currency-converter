# Currency Converter va Weather Application

Bu loyiha ikkita qismdan iborat: `Currency Converter` (Valyuta Konvertori) va `Weather Application` (Ob-Havo Ilovasi). Ushbu dastur PHP va XAMPP yordamida yozilgan va ikkala qism Bootstrap bilan ishlangan.

## Talablar

- PHP 7.4 yoki undan yuqori
- XAMPP dasturi
- Internet aloqasi (API orqali ma'lumot olish uchun)

## Loyiha Qismlari

### 1. Currency Converter (Valyuta Konvertori)

Valyuta konvertori foydalanuvchilarga turli valyutalar o'rtasida mablag'ni o'zgartirishga imkon beradi. Foydalanuvchi miqdor va valyutalarni tanlaydi va `Convert` tugmasini bosadi. Dastur valyuta kurslarini olish uchun onlayn API dan foydalanadi.

#### Foydalanilgan Texnologiyalar
- **PHP** - Valyuta hisob-kitoblari uchun backend qismi.
- **Bootstrap** - UI dizayn uchun.

### 2. Weather Application (Ob-Havo Ilovasi)

Ob-havo ilovasi foydalanuvchi tomonidan kiritilgan shahar nomiga asoslangan holda, OpenWeather API orqali ob-havo ma'lumotlarini olish va ko'rsatish uchun ishlatiladi. Foydalanuvchi shahar nomini kiritsa, dastur o'sha shahar uchun ob-havo holatini (temperatura, namlik, bosim va shamol tezligi) ko'rsatadi.

#### Foydalanilgan Texnologiyalar
- **PHP** - Ob-havo ma'lumotlarini olish va qayta ishlash uchun.
- **Bootstrap** - UI komponentlari uchun.
- **OpenWeather API** - Ob-havo ma'lumotlarini olish uchun.

## O'rnatish

1. Loyiha fayllarini yuklab oling va XAMPP `htdocs` papkasiga joylang.
2. Valyuta konvertori va ob-havo ilovasi uchun kerakli API kalitlarini oling.
   - OpenWeather API kalitini [bu yerda](https://home.openweathermap.org/api_keys) oling.
3. API kalitlarini `Weather.php` va `CurrencyConverter.php` fayllarida mos ravishda joylashtiring.

## Ishlatish

1. XAMPP serverini ishga tushiring va Apache ni yoqing.
2. Brauzer orqali loyihaga murojaat qiling:
3. 3. Currency Converter uchun valyutani tanlang va miqdorni kiriting.
4. Weather Application uchun shahar nomini kiriting va `Get Weather` tugmasini bosing.




