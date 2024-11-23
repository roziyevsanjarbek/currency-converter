# Currency Converter

**Loyiha tavsifi**  
Currency Converter loyihasi valyutalarni bir-biriga konvertatsiya qilish imkoniyatini beradi. Shuningdek, foydalanuvchilar uchun ob-havo ma'lumotlarini ham ko'rsatadi. Ushbu loyiha Telegram boti orqali ishlaydi: [Currency Converter Bot](https://t.me/ntCurrencyConverter_bot).

---

## Loyihaning tuzilishi

- **app/** - Botga tegishli asosiy fayllar.
- **src/** - Loyihaning asosiy klasslari:
  - `Bot.php` - Bot funksionalligi.
  - `DB.php` - Ma'lumotlar bazasi bilan ishlash.
  - `PrayerTime.php`, `Weather.php` - Qo'shimcha ma'lumotlar uchun klasslar.
  - `currency.php` - Valyuta konvertatsiyasi.
- **views/** - HTML ko'rinishlar:
  - `currencyConverter.php` - Valyuta konvertatsiya ko'rinishi.
  - `weather.php` - Ob-havo ma'lumoti ko'rinishi.
- **index.php** - Barcha kodni ishga tushiruvchi asosiy fayl.

---

## Talablar

Loyihani muvaffaqiyatli ishga tushirish uchun quyidagi dasturlar va vositalar kerak bo'ladi:

- **PHP** (7.4 yoki undan yuqori versiya)
- **Composer** (PHP kutubxonalarini boshqarish uchun)
- **Ngrok** (Tashqi ulanishlarni sozlash uchun)
- **Telegram Bot API** (Botni ulash uchun)

---

## O'rnatish

Loyihani ishlatish uchun quyidagi amallarni bajaring:

### 1. Repositoryni klonlash
```bash
git clone https://github.com/roziyevsanjarbek/currency-converter.git
```

## Loyihaga o'tish
```bash
cd currency-converter
```
## Composer kutubxonalarini o'rnatish
``` bash
composer install
```
##  Config fayllarini sozlash

- Ma'lumotlar bazasi ulanish ma'lumotlari
- Token va API kalitlar
## Ngrok-ni ishga tushirish
```bash
ngrok http 80
```
## Telegram webhookni sozlash
-Ngrok orqali olgan URL-ni Telegram Bot API webhookiga ulang:
```bash
curl -F "url=https://your-ngrok-url.com/index.php" https://api.telegram.org/bot<YOUR_BOT_TOKEN>/setWebhook
```
## Ishga tushirish

- Loyihani ishga tushirish uchun asosiy index.php faylini serverga joylashtiring yoki localhostda ishga tushiring.
```bash
php -S localhost:8000
```
- So'ngra brauzerda quyidagini oching:
```bash
  http://localhost:8000
```
## Foydalanish komandasi
### Telegram botda quyidagi komandalarni ishlatishingiz mumkin:

- /start - Botni ishga tushirish
- /currency - Valyuta konvertatsiyasi
- /weather - Ob-havo ma'lumotlari

## Aloqa
### Savollar va murojaatlar uchun:
📞 +998 88 629 99 09

