## 🚀 Laravel Advanced Developer Roadmap

Bu hujjat Laravel Middle darajasidan Advanced darajaga o‘tish uchun puxta ishlab chiqilgan. Har bir bo‘limda nazariy tushuncha, nimalarni o‘rganish kerakligi va mini loyiha yoki amaliy mashg‘ulotlar keltirilgan.

---

### 1. 🐳 Docker & Laravel Sail

#### 🎯 Maqsad:

Laravel ilovalarini konteynerda izolyatsiya qilingan tarzda yuritish va Docker muhiti bilan ishlashni o‘rganish.

#### Nimalarni o‘rganish kerak:

* Docker nima?
* Dockerfile, Image, Container, Volume, Network tushunchalari
* `docker-compose.yml` tuzish
* Laravel Sail orqali Laravel ilovasini dockerda ishga tushirish

#### Amaliy ish:

* Laravel loyihani Sail bilan sozla
* MySQL, Redis konteynerlarini ulab ishga tushir

---

### 2. 🔄 Laravel Horizon

#### 🎯 Maqsad:

Queue (navbat) bilan ishlash va uni real vaqt monitoring qilish

#### Nimalarni o‘rganish kerak:

* Queue nima, qachon kerak?
* Redis bilan Queue ishlatish
* Job yaratish va background’da ishga tushirish
* Horizon bilan kuzatish

#### Amaliy ish:

* Email yuborishni queue orqali amalga oshir
* Laravel Horizon bilan ish monitoringini qil

---

### 3. 🛠 CI/CD – Continuous Integration / Continuous Deployment

#### 🎯 Maqsad:

Kodni avtomatik testlash va serverga chiqarishni avtomatlashtirish

#### Nimalarni o‘rganish kerak:

* GitHub Actions nima?
* `.github/workflows/` fayllari yaratish
* Laravel testlarni ishga tushirish
* Deploy qilish uchun skriptlar yozish

#### Amaliy ish:

* GitHub repo och
* Push qilganda avtomatik test va deploy qiladigan CI/CD pipeline yoz

---

### 4. 📢 Laravel Echo + Redis + Broadcasting

#### 🎯 Maqsad:

Real-time (haqiqiy vaqt) ilovalar yaratish – chat, bildirishnoma

#### Nimalarni o‘rganish kerak:

* Laravel Broadcasting nima?
* Event – Listener – Broadcast flow
* Redis + Socket.io orqali real-time aloqa
* Laravel Echo bilan frontendga ulanadigan qismlar

#### Amaliy ish:

* Real-time chat yoki live notification tizimi yarat

---

### 5. 🧩 Microservices

#### 🎯 Maqsad:

Katta tizimlarni kichik mustaqil servislar asosida tuzishni o‘rganish

#### Nimalarni o‘rganish kerak:

* Microservices nima, afzalliklari va kamchiliklari
* RESTful API bilan xizmatlararo aloqa
* Passport yoki JWT bilan autentifikatsiya
* Service discovery, Load balancing tushunchalari
* gRPC haqida umumiy tushuncha

#### Amaliy ish:

* 2 ta Laravel servis yarat: biri foydalanuvchilar, biri kurslar uchun
* JWT orqali ularni bog‘la

---

### 6. 📦 Laravel Package Yaratish

#### 🎯 Maqsad:

Laravel uchun qayta ishlatiladigan komponent (package) yaratishni o‘rganish

#### Nimalarni o‘rganish kerak:

* Laravel package strukturasini tushunish
* `composer.json` bilan package ro‘yxatga olish
* ServiceProvider, config, migration, command qo‘shish
* GitHub’da open-source qilib ulashish

#### Amaliy ish:

* "Simple Contact Form" package yoz
* `azizbek/contact-form` nomi bilan Packagist’da och

---

### 7. 📌 Yakuniy Super Loyiha: Modular Laravel Platform

> **Online Education Platform – Modular tizimda**

#### Modulalar:

* User Service (JWT auth, profile)
* Course Service (CRUD + category)
* Notification Service (queue + email + broadcast)
* Admin Panel (Vue/React bilan yoki TALL stack)
* Docker + CI/CD bilan deploy qilinadi

---

### ✅ Tavsiyalar:

* Har bir bosqichdan keyin GitHub repo qil va portfolio sifatida saqla
* Laravel Docs va Laracasts’dan doimiy foydalan
* Har loyihaga README yoz – bu professional odat

---

