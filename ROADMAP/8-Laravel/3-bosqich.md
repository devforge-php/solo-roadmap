
---

# Laravel Zero To‘liq O‘rganish Hujjati

---

## 1. Laravel Zero asoslari

### Laravel Zero nima?

Laravel Zero — bu Laravel asosidagi, faqat CLI (Command Line Interface) dasturlar yaratish uchun mo‘ljallangan yengil framework. U Laravelning kuchli komponentlari va sintaksisini olib, komandalar yaratishni soddalashtiradi.

### Nima uchun Laravel Zero?

* Tez va qulay CLI dasturlar yaratish uchun.
* Laraveldan tanish sintaksis va komponentlarni ishlatish imkoniyati.
* Oddiy Laravel loyihasiga nisbatan yengil va tez.

### Nima o‘rganish kerak?

* Laravel Zero o‘rnatish va ishga tushirish.
* Oddiy buyruq (command) yaratish va ishga tushirish.
* Buyruq ro‘yxatini ko‘rish (`list`).
* Buyruqning asosiy metodlari: `handle()`.

---

## 2. CLI interfeys va foydalanuvchi bilan muloqot

### Asosiy tushunchalar

CLI dastur foydalanuvchi bilan interaktiv aloqada bo‘lishi mumkin: ma’lumot so‘rash, tanlov qilish, xabar berish.

### Nima o‘rganish kerak?

* `ask()`: Foydalanuvchidan matn qabul qilish.
* `choice()`: Bir nechta variant orasidan tanlov qilish.
* `confirm()`: Ha/yo‘q (boolean) javobini olish.
* `info()`, `error()`, `line()`: Rangli va formatlangan chiqish yaratish.
* Jadval (`table()`) yordamida ma’lumotlarni chiroyli chiqarish.
* Progress bar — jarayonni ko‘rsatish.

---

## 3. Buyruqlarni parametrlar va opsiyalar bilan boyitish

### Asosiy tushunchalar

Har bir buyruq parametr va opsiyalarni qabul qilishi mumkin, bu uni moslashuvchan qiladi.

### Nima o‘rganish kerak?

* `signature` orqali parametrlar va opsiyalar yaratish.
* Majburiy va ixtiyoriy parametrlar.
* Flag (boolean) opsiyalar.
* Parametrlarning default qiymatlari.
* Parametrlarni tekshirish va ishlov berish.

---

## 4. Fayl tizimi bilan ishlash

### Asosiy tushunchalar

Ko‘plab CLI dasturlar fayl bilan ishlaydi — o‘qish, yozish, tekshirish.

### Nima o‘rganish kerak?

* Fayl o‘qish va yozish (txt, JSON, YAML kabi formatlarda).
* Laravel Zero`ning `storage\` katalogidan foydalanish.
* Fayl mavjudligini tekshirish, yaratish, o‘chirish.
* Kataloglar bilan ishlash (yaratish, o‘zgartirish).

---

## 5. Service (xizmat) va helper klasslar yaratish

### Asosiy tushunchalar

Kod qayta ishlanishini ta’minlash uchun servis va yordamchi klasslar yozish.

### Nima o‘rganish kerak?

* Loyihani modularga bo‘lish.
* Helper funksiyalar yaratish.
* Service klasslar orqali biznes mantiqni ajratish.
* Dependency Injection va singleton tushunchalari.

---

## 6. Shell va tizim buyruqlarini bajarish

### Asosiy tushunchalar

PHP orqali tizim buyruqlarini chaqirish va natijalarini olish.

### Nima o‘rganish kerak?

* `exec()`, `shell_exec()`, `proc_open()` funksiyalaridan foydalanish.
* Tizim javoblarini qayta ishlash.
* Buyruqlarni asinxron bajarish (zaruratga qarab).

---

## 7. Loglar va monitoring

### Asosiy tushunchalar

CLI dastur loglarini yuritish va tahlil qilish.

### Nima o‘rganish kerak?

* Loglarni yaratish va saqlash.
* Log darajalari: info, warning, error.
* Loglarni o‘qish va foydalanuvchiga ko‘rsatish.

---

## 8. Snapshot, rollback va konfiguratsiyalarni boshqarish

### Asosiy tushunchalar

Dastur holatini saqlash va kerak bo‘lsa oldingi holatga qaytish.

### Nima o‘rganish kerak?

* Snapshot yaratish (holat nusxasi).
* Rollback (oldingi holatga qaytish).
* Konfiguratsiyalarni fayl yoki ma’lumotlar bazasida boshqarish.
* Branch va commit konseptlarini CLI’da qayta yaratish.

---

## 9. Test yozish va avtomatlashtirish

### Asosiy tushunchalar

CLI buyruqlarining to‘g‘ri ishlashini test qilish.

### Nima o‘rganish kerak?

* Unit test va integration test yozish.
* Test muhiti yaratish.
* CI (Continuous Integration) uchun testlarni sozlash.

---

## 10. Paketlar va ekstansiyalar

### Asosiy tushunchalar

Laravel Zero dasturiga paketlar qo‘shish yoki o‘z paketini yaratish.

### Nima o‘rganish kerak?

* Composer bilan paket boshqaruvi.
* Laravel Zero uchun paketlar topish va ulardan foydalanish.
* O‘z paketini yaratish va loyihaga ulash.

---

## 11. Advanced mavzular

### Asosiy tushunchalar

Murakkabroq CLI dasturlar yaratish.

### Nima o‘rganish kerak?

* Multi-command va sub-command tuzilmasi.
* Parallel va background jarayonlar.
* CLI uchun autocompletion qo‘shish (bash, zsh).
* CLI interaktivligini oshirish (ranglar, animatsiyalar).
* Qo‘shimcha interfeyslar yaratish (yaml, ini konfiguratsiya).

---

## 12. Deployment va tarqatish

### Asosiy tushunchalar

Yaratilgan CLI dasturini foydalanuvchilarga tarqatish va yangilash.

### Nima o‘rganish kerak?

* Dastur executable holatga keltirish (phar fayl, bash script).
* Tarqatish kanallari va versiyalarni boshqarish.
* Yangilanish (update) mexanizmini yaratish.
* Hujjat (dokumentatsiya) tayyorlash va foydalanuvchilarga taqdim etish.

---
