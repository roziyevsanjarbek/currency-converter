# Currency Converter

Bu loyiha PHP va XAMPP yordamida valyuta konvertatsiyasi xizmatini taqdim etadi. Valyuta qiymatini kiriting, kerakli valyutani tanlang va natijani oling.

## Talablar
Loyihani ishga tushirish uchun quyidagi dasturiy ta'minot kerak bo'ladi:
- XAMPP (Apache)
- PHP 7 yoki undan yangi versiya

## O'rnatish

1. Repozitoriyani yuklab oling yoki klonlang:
    ```bash
    git clone https://github.com/roziyevsanjarbek/currency-converter.git
    ```

2. Yuklab olingan fayllarni XAMPP `htdocs` papkasiga joylashtiring:
    ```bash
    cp -r currency-converter /xampp/htdocs/
    ```

3. XAMPP dasturini ishga tushiring va Apache serverini yoqing.

## Foydalanish

1. Brauzerda quyidagi manzilni oching:
    ```
    http://localhost/currency-converter
    ```

2. Ekranda quyidagi maydonlar bo'ladi:
   - **Miqdor**: Konvertatsiya qilinadigan miqdorni kiriting.
   - **Valyutalar**: Konvertatsiya qilinadigan va olinadigan valyutalarni tanlang.
   - **Convert** tugmasini bosing.

3. Natija konvertatsiya qilingan miqdorni ko'rsatadi.

## Qo'shimcha Ma'lumot
- Kurslarni PHP `cURL` yoki boshqa API orqali avtomatik olish mumkin.
- `Convert` tugmasi bosilgandan so'ng, kerakli miqdor tanlangan valyutaga konvertatsiya qilinadi va natija ekranda ko'rsatiladi.
  
## Mualliflik Huquqi va Litsenziya
Ushbu loyiha erkin foydalanish uchun taqdim etilgan. Qo'shimcha ma'lumot uchun loyiha litsenziyasini ko'ring.
