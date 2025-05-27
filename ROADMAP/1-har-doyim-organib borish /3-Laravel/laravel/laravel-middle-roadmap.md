Tushunarli Azizbek! Seni hozirgi bosqichingga qaraganda, **Laravel Middle Developer** bo‘lish sari qadam qo‘yayapsan, lekin hali Docker, Microservices, CI/CD, Horizon, va shunga o‘xshagan yuqori darajadagi texnologiyalarni bilmas ekansan. Shu sababli men senga **realistik va step-by-step Laravel roadmap** yozaman – **docker, microservices, advanced tools** ni keyingi bosqichga qo‘yaman. Hozirgi yo‘nalish quyidagilarga qaratilgan:

> 🔹 Laravel Core'ni chuqur tushunish
> 🔹 Real loyiha qilish orqali tajriba
> 🔹 Kod sifatini oshirish
> 🔹 Tizimni kengaytirish (Events, Service Layer, Observer)
> 🔹 Yaxshi Laravel developer bo‘lish uchun zarur asoslar

---

## 🧱 Laravel Middle Developer Roadmap (Docker va Microservice bilmaganlar uchun)

---

### 1. 📌 Laravel'ni Chuqur Tushunish

#### 🎯 Maqsad:

Laravel qanday ishlashini ichki tomondan tushunish.

#### Nimalarni o‘rganasan:

* Laravel lifecycle (Request → Middleware → Controller → Response)
* Service Container (`bind`, `singleton`, `make`)
* Service Provider’lar
* Config va .env bilan ishlash
* Route, Controller, Middleware’lar ichki ishlashini
* Facades va static facade nima

#### 🎯 Mini Loyiha:

**Custom Service Class** bilan `WeatherService` yoz (API chaqiradi, config o‘qiydi, cache qiladi).

---

### 2. 🔄 Eloquent + Observer + Events

#### 🎯 Maqsad:

Model bilan ishlashda kuchli tizimlar yaratish.

#### Nimalarni o‘rganasan:

* Observer: `creating`, `updating`, `deleting`
* Event va Listener yaratish
* Mass Assignment (`$fillable`, `$guarded`)
* Accessor & Mutator
* Query Scope
* Relationship: one-to-many, many-to-many, morph

#### 🎯 Mini Loyiha:

**Blog tizimi**: `Post` → `Comment` → `User`

* Post yaratilganda event chaqirilsin
* Observer bilan comment sanog‘i hisoblanadi

---

### 3. 🗂 Service Layer va Clean Architecture

#### 🎯 Maqsad:

Kodning toza, tartibli va kengaytiriladigan bo‘lishi.

#### Nimalarni o‘rganasan:

* Controller logikani o‘z ichiga olmaydi
* `App\Services\` ichida business logika
* Interface va Contract’lar
* Repository pattern (optional)

#### 🎯 Mini Loyiha:

**UserService + AuthService**: foydalanuvchi ro‘yxatdan o‘tadi, email yuboriladi, xizmatlar orqali.

---

### 4. 🧪 Validation, Error Handling, Logging

#### 🎯 Maqsad:

Xatolarni boshqarish va foydalanuvchiga to‘g‘ri xabar berish.

#### Nimalarni o‘rganasan:

* Form Request Validation
* Custom Rule yaratish
* Exception handle qilish
* Loglar: `info()`, `warning()`, `error()` larni yozish
* Laravel Debugbar (dev uchun)

#### 🎯 Mini Loyiha:

**Register form**:

* Foydalanuvchi emailini tekshiruvchi custom rule
* Exception bo‘lsa, logga yozilsin

---

### 5. 📊 Seeder, Factory, Fake Ma’lumotlar

#### 🎯 Maqsad:

Test yoki dev muhitda tez sample ma’lumot olish.

#### Nimalarni o‘rganasan:

* Seeder bilan ko‘p data yaratish
* Factory orqali model create qilish
* Faker kutubxonasi
* `DatabaseSeeder` orqali ularni chaqirish

#### 🎯 Mini Loyiha:

**Online kurslar**: `Course`, `Category`, `User` – 100ta kurs, 20ta category va ularga random assign

---

### 6. 💡 Authentication & Authorization

#### 🎯 Maqsad:

Foydalanuvchi kirishi, huquq nazorati

#### Nimalarni o‘rganasan:

* Laravel Breeze yoki Fortify (UI kerak bo‘lsa)
* Auth middleware
* Role-based auth (Gate, Policy)
* Email verification
* Password reset

#### 🎯 Mini Loyiha:

**Admin panel** – faqat `admin` roli kiradi, oddiy foydalanuvchi kirsa, error chiqadi

---

### 7. 📬 Notification va Email

#### 🎯 Maqsad:

Foydalanuvchiga xabar yuborish

#### Nimalarni o‘rganasan:

* Laravel Notification (mail, database, sms)
* Mail Template yaratish
* `.env` orqali mailgun yoki smtp sozlash

#### 🎯 Mini Loyiha:

**Comment bo‘lsa → Email yuborilsin**
Yangi comment qo‘shilganda foydalanuvchiga habar boradi

---

### 8. 📁 File Upload va Storage

#### 🎯 Maqsad:

Fayllar bilan ishlash: rasm yuklash, media saqlash

#### Nimalarni o‘rganasan:

* Laravel Storage API (`Storage::disk('local')`)
* Public va Private fayllar
* Validation (file size, mime type)
* Image Intervention bilan rasm o‘lchamini o‘zgartirish (optional)

#### 🎯 Mini Loyiha:

**Profil rasmi yuklash** – validatsiya, fayl saqlash, eski faylni o‘chirish

---

### 9. 🛠 Qo‘shimcha Laravel Asboblar

| Asbob              | Foydasi                                          |
| ------------------ | ------------------------------------------------ |
| Laravel Tinker     | Terminalda model bilan ishlash                   |
| Laravel Debugbar   | Dev uchun xatolarni ko‘rish                      |
| Laravel IDE Helper | Kod yozishda yordam                              |
| Laravel Telescope  | So‘rovlarni, Exception’larni, Mail’ni ko‘rish    |
| Laravel Backup     | Ma’lumotlarni zaxiralash (spatie/laravel-backup) |

---

### 10. 🔚 Keyingi Bosqichga O‘tish Uchun Tayyorgarlik

Hozircha quyidagilarni bilmasang ham bo‘ladi, lekin bu roadmapdan keyin **senga tayyor bo‘lib qoladi**:

* Docker & Laravel Sail
* Laravel Horizon
* CI/CD (GitHub Actions)
* Laravel Echo + Redis
* Microservices (Passport, JWT, gRPC)
* Laravel Package yaratish

---

## 💼 Yakuniy Loyiha Taklifi

> **Laravel School Management System**
> Funktsiyalar:

* O‘quvchi ro‘yxatdan o‘tadi
* O‘qituvchi qo‘shadi, jadval tuzadi
* Uy ishlari qo‘shiladi
* Admin panel (auth, role, ruxsatlar)

---

Agar xohlasang, ushbu roadmap bo‘yicha PDF shaklida chiqarib beraman yoki **Notion jadvaliga aylantirib**, reja qilishga yordam beraman.

Xohlagan shaklda beraymi? (PDF, Trello board, Notion)? Yoki o‘sha Laravel school loyihasining to‘liq strukturasi kerakmi?
