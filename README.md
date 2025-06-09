<p align="center">
  <a href="https://laravel.com" target="_blank">
    <img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo">
  </a>
</p>

<h2 align="center">🚀 Filament Custom Auth & UI Enhancements</h2>

<p align="center">
  A simple project or guide to customize authentication and user display in the <strong>Laravel Filament</strong> admin panel.
</p>

<hr>

## ✨

- 🔐 **Custom Login with Filament**  
  Replace the default Filament login with your own design and logic.

- 🧑‍💼 **Display Custom User Name in Filament Panel**  
  Easily change the display name (e.g., show `UserModel` name field instead of email).

---

## 📂 CustomLogin Folder Structure

```bash
.
├── app/
│   └── Filament/
│       └── Auth/
│           └── CustomLogin.php
├── resources/
│   └── views/
│       └── filament/
│           └── auth/
│               └── custom-login.blade.php
├── routes/
│   └── web.php
|
