<p align="center">
  <a href="https://laravel.com" target="_blank">
    <img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo">
  </a>
</p>

<h2 align="center">🔧 Laravel Snippets</h2>

<p align="center">
  A collection of useful and uncommon Laravel customizations & snippets — from Filament tweaks to validation rules and middleware.
</p>

---

## 🌐 Language | زبان

- [🇬🇧 English](#-english-documentation)
- [🇮🇷 فارسی](#-مستندات-فارسی)

---

## 📘 English Documentation

### ✨ What's Inside?

- 🔐 **Custom Filament Login**  
  Replace default Filament login view with your own.

- 🧑‍💼 **Customize Filament User Display**  
  Show full name or custom attribute in Filament panel.

- ⏰ **Middleware: Time Restricted Access**  
  Restrict route access to a specific time range.

- ✅ **Middleware: Check Active User**  
  Block deactivated users from accessing the system.

- ☎️ **Custom Validation Rule: PhoneNumberByCountry**  
  Validate phone numbers based on selected country (e.g., Iran, USA, Iraq, Saudi Arabia, Russia).

- 📦 **Standard API Response Helper**  
  A simple utility class (`App\Core\Api\API`) to send consistent success, error, or data-fetched JSON responses.

🔎 New: Simple API Endpoint for User Listing
A sample REST API for fetching users with a custom resource and pagination metadata.

---

### 📁 Example Structure

```bash
.
├── app/
│   ├── Filament/
│   │   └── Auth/
│   │       └── CustomLogin.php
│   ├── Http/
│   │   └── Api/
│   │       ├── V1/
│   │       ├── Users/
│   │       └── UserApiV1Controller.php
|   |
│   │   └── Resources/
│   │       ├── V1/
│   │       ├── Users/
│   │       ├── UserV1Resource.php
│   │       ├── Collections/
│   │       └── UserV1Collection.php
|   |
│   │   └── Middleware/
│   │       ├── CheckActiveUser.php
│   │       └── AccessTimeMiddleware.php
│   ├── Core/
│   │   └── Api/
│   │       └── API.php
|   └── Rules/
│       └── PhoneNumberByCountry.php
|
├── resources/
│   └── views/
│       └── filament/
│           └── auth/
│               └── custom-login.blade.php
├── routes/
│   └── web.php
```

---

## 📙 مستندات فارسی

<div dir="rtl">

### ✨ چه چیزهایی داخل مخزن هست؟

- 🔐 **ورود سفارشی در فیلامنت**
- 🧑‍💼 **نمایش نام دلخواه کاربر در پنل**
- ⏰ **میدلور محدودیت زمانی برای دسترسی**
- ✅ **میدلور بررسی فعال بودن کاربر**
- ☎️ **قانون اعتبارسنجی شماره موبایل براساس کشور انتخابی**
- 📦 **کلاس پاسخ‌دهی استاندارد API**  
- **ابزاری ساده برای ارسال پاسخ‌های موفق، خطا یا دریافت داده‌ها به‌صورت استاندارد و یکپارچه.**
- **🔎 جدید: API ساده برای لیست کاربران
  یک مثال از API برای گرفتن لیست کاربران همراه با Resource سفارشی و اطلاعات صفحه‌بندی (pagination).**
---

### 📁 ساختار پروژه

```bash
.
├── app/
│   ├── Filament/
│   │   └── Auth/
│   │       └── CustomLogin.php
│   ├── Http/
│   │   └── Api/
│   │       ├── V1/
│   │       ├── Users/
│   │       └── UserApiV1Controller.php
|   |
│   │   └── Resources/
│   │       ├── V1/
│   │       ├── Users/
│   │       ├── UserV1Resource.php
│   │       ├── Collections/
│   │       └── UserV1Collection.php
|   |
│   │   └── Middleware/
│   │       ├── CheckActiveUser.php
│   │       └── AccessTimeMiddleware.php
│   ├── Core/
│   │   └── Api/
│   │       └── API.php
|   └── Rules/
│       └── PhoneNumberByCountry.php
|
├── resources/
│   └── views/
│       └── filament/
│           └── auth/
│               └── custom-login.blade.php
├── routes/
│   └── web.php
```

---

### 📄 لایسنس

این پروژه تحت لایسنس [MIT](https://opensource.org/licenses/MIT) منتشر شده است.

---

### 🙌 سازنده

توسعه داده شده توسط [طاها زارع](https://github.com/TahaaZare) — اگه مفید بود ستاره یادت نره ⭐

</div>
