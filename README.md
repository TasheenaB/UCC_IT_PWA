# UCC IT Department Web App (PWA)

ITT307 Internet Authoring II - Major Project (2026 Term 7)
Assignment title: UCC IT Web App

A progressive web app (PWA) for the UCC Department of Information Technology built with HTML, CSS, JavaScript and Laravel PHP. It uses the `erag/laravel-pwa` package.

## Group members

- Tasheena Brown (Student ID: 20246164)

## Features

- **Main menu** with Staff Directory, Courses, Admissions and Social Media
- **Staff Directory** - photo, phone number (with extension) and email for each person in the IT department, with Call and Email buttons (`tel:` and `mailto:` links)
- **Courses** - 10 IT courses (code, name, credits, pre-requisites, description) stored in the database (`courses` table) and shown with a search box
- **Admissions** - admission requirements and a link to UCC's application page
- **Social Media** - UCC's Facebook, X (Twitter) and Instagram pages shown inside the app using tabs
- **Email FAB** - the red envelope button opens an email to the HOD, Mr. Otis Osbourne (ithod@ucc.edu.jm)
- **PWA** - manifest, service worker, offline page and install button from `erag/laravel-pwa`

## How to run it (XAMPP / Windows)

You need PHP 8.3 or higher and Composer. (Check with `php -v`. XAMPP has PHP, but you must have a version that is 8.3+.)

1. Open a terminal inside this project folder
2. `composer install`
3. `copy .env.example .env`
4. `php artisan key:generate`
5. Make sure the file `database/database.sqlite` exists (it is included, if not create an empty one)
6. `php artisan migrate --seed` (creates the tables and adds the staff and 10 courses)
7. `php artisan serve`
8. Open http://localhost:8000 in Chrome or Edge

Run it with `php artisan serve` (not from the htdocs sub-folder) so the service worker can use the root `/` scope. PWAs work on `localhost` or HTTPS only.

## Installing the PWA

Open the site in Chrome or Edge, then click the install icon in the address bar or the round install button on the page. Turn off the network afterwards and refresh to see the offline page / cached pages.

## PWA setup (erag/laravel-pwa)

- `composer require erag/laravel-pwa` (it is already listed in `composer.json`)
- Service provider is registered in `bootstrap/providers.php`
- `config/pwa.php` has the app name, colours and icon
- `public/manifest.json`, `public/sw.js`, `public/offline.html` and `public/logo.png` are the published PWA files (I edited `sw.js` to cache the pages and files)
- `@PwaHead` is in the `<head>` and `@RegisterServiceWorkerScript` is before `</body>` in `resources/views/layouts/app.blade.php`

Do not run `php artisan erag:install-pwa` again as it will overwrite my changed files. If the manifest part of `config/pwa.php` is changed, run `php artisan erag:update-manifest`.

## Data sources

- Staff names, positions, extensions and emails come from the UCC Students' Help Desk Directory (https://www.ucc.edu.jm/beta/help-desk-directory and the Help Desk PDF, Spring 2025). The main number is 876-906-3000.
- Social media and application links are from the UCC website.
- The staff photos are in `public/images/staff/` (staff1.png to staff4.png, in the same order as the seeder). To change one, replace the file with the same name.
- After changing a seeder run `php artisan migrate:fresh --seed`.

## Project files

- `routes/web.php` - the routes
- `app/Http/Controllers` - PageController, StaffController, CourseController
- `app/Models` - Staff and Course models
- `database/migrations` and `database/seeders` - tables and data
- `resources/views` - Blade pages (`layouts/app.blade.php` is the main layout)
- `public/css/style.css` and `public/js/app.js` - CSS and JavaScript

## Declaration

I CERTIFY THAT I HAVE NOT GIVEN OR RECEIVED ANY UNAUTHORIZED ASSISTANCE ON THIS ASSIGNMENT

Signed: Tasheena Brown
