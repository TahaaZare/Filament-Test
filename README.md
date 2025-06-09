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

---

### 📁 Example Structure

```bash
.
├── app/
│   ├── Filament/
│   │   └── Auth/
│   │       └── CustomLogin.php
│   ├── Http/
│   │   └── Middleware/
│   │       ├── CheckActiveUser.php
│   │       └── AccessTimeMiddleware.php
│   └── Rules/
│       └── PhoneNumberByCountry.php
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

---

### 📁 ساختار پروژه

```bash
.
├── app/
│   ├── Filament/
│   │   └── Auth/
│   │       └── CustomLogin.php
│   ├── Http/
│   │   └── Middleware/
│   │       ├── CheckActiveUser.php
│   │       └── AccessTimeMiddleware.php
│   └── Rules/
│       └── PhoneNumberByCountry.php
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
