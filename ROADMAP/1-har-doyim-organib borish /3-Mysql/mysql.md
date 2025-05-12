
---

## 🚀 30 KUNLIK KUCHLI **MySQL Roadmap** (Laravel asosida)

### 🎯 Maqsad:

* CRUD (Create, Read, Update, Delete) amallarni mukammal bilish
* Join’lar, Group by, Subquery, Index, Foreign Key va Transaction’lar bilan ishlay olish
* Laravel'da Query Builder va Eloquent orqali MySQL’dan to‘liq foydalanish

---

## 🗓️ KUNLIK REJA (kuniga 1–2 soat ajratsang yetarli)

### 🔵 **1–3 kun**: MySQL Asoslari

* MySQL nima? DBMS nima?
* `CREATE DATABASE`, `USE`, `SHOW DATABASES`
* `CREATE TABLE`, `DROP`, `DESCRIBE`
* Field types: `INT`, `VARCHAR`, `TEXT`, `DATE`, `BOOLEAN`, `FLOAT`
* Laravel’da `.env` orqali database ulash

### 🟠 **4–7 kun**: CRUD amallari (Laravel bilan)

* `INSERT INTO`, `SELECT`, `UPDATE`, `DELETE`
* Laravel’da: `DB::table()->insert()`, `get()`, `update()`, `delete()`
* Eloquent orqali CRUD (`Model::create()`, `find()`, `update()`...)

### 🟢 **8–11 kun**: WHERE, ORDER BY, LIMIT, LIKE

* `WHERE`, `AND`, `OR`, `IN`, `NOT IN`
* `ORDER BY ASC/DESC`
* `LIMIT`, `OFFSET`
* Laravel’da filterlash (`where()`, `orderBy()`, `take()`)

### 🔵 **12–15 kun**: JOIN’lar (tushunish + Laravel)

* `INNER JOIN`, `LEFT JOIN`, `RIGHT JOIN`, `CROSS JOIN`
* `ON` bilan bog‘lash
* Laravel’da `join()` va `hasOne()`, `belongsTo()` ishlatish

### 🟠 **16–18 kun**: GROUP BY, HAVING, Aggregate Functions

* `GROUP BY`, `HAVING`
* `COUNT()`, `SUM()`, `AVG()`, `MAX()`, `MIN()`
* Laravel: `groupBy()`, `having()`

### 🟢 **19–22 kun**: Subqueries, Nested Queries

* Ichki `SELECT` bilan ishlash
* Laravel’da `whereIn(DB::raw())` misollar

### 🔵 **23–25 kun**: Index, Primary/Foreign Key, Constraint

* `PRIMARY KEY`, `UNIQUE`, `AUTO_INCREMENT`
* `FOREIGN KEY` bilan bog‘lash
* Laravel’da migration orqali `foreignId()`, `constrained()`

### 🟠 **26–27 kun**: Transactions va Rollback

* `START TRANSACTION`, `COMMIT`, `ROLLBACK`
* Laravel’da `DB::transaction()` bilan muomala

### 🟢 **28–29 kun**: Backup, Export, Import

* `mysqldump`, `source`, `import`
* Laravel’da database seeding, migration reset

### 🟣 **30-kun**: Mini loyihacha: Laravel CRUD + Join + Search

* `products`, `categories` jadval
* CRUD
* Kategoriya bo‘yicha filter
* Search
* Laravel routing + Eloquent to‘liq ishlatish

---

## 📘 O‘rganish uchun RESURSLAR:

* [https://sqlzoo.net](https://sqlzoo.net) – interaktiv SQL mashqlar
* [https://laravel.com/docs/eloquent](https://laravel.com/docs/eloquent) – Laravel Eloquent
* YouTube: “MySQL Crash Course” (Programming with Mosh, Traversy Media)
* Kitob: *“SQL For Beginners”* – va PDF versiyasi ham bor

---

Agar xohlasang, **har kuni bajaradigan konkret vazifalar bilan PDF/Jadval ko‘rinishida** ham beraman. Qanday shakl xohlaysan?
