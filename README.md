# NexaByte Solutions — Company Profile Website

**Course:** ITST 302 – Client-Server Technologies
**Module:** Module 1 – Laravel MVC Architecture
**Mini Project:** MP02 – Company Profile Website
**Student:** Janel Fae O. Beltran (Bang) — BSIT 3B
**Repository:** `week03-company-profile`

---

## 1. Project Title

**NexaByte Solutions — Company Profile Website**
*A multi-page corporate website built with Laravel's MVC architecture.*

---

## 2. Introduction

A **Company Profile Website** is a business's official online presence — a set of pages (Home, About, Services, Contact) that introduce a company to potential clients, explain what it does, and provide a way to get in touch. It's often the first thing a prospective client sees, so it needs to communicate credibility, clarity, and professionalism at a glance.

Businesses need a company profile website because it:
- Establishes legitimacy and an online presence independent of social media.
- Gives a single, controlled place to present services, values, and contact details.
- Serves as a foundation for future features (client portals, blogs, booking systems, etc.).

The purpose of this project was to build such a website — for a fictional startup, **NexaByte Solutions** — using Laravel's routing, controllers, and Blade templating engine, applying proper MVC separation of concerns instead of mixing logic and presentation in a single file.

---

## 3. Objectives

By completing this project, the following objectives were accomplished:

- ✔ Explained and applied the Model-View-Controller (MVC) architecture in a real Laravel project.
- ✔ Created and configured four application routes using Laravel Routing.
- ✔ Built a `CompanyController` to handle client requests and return the correct views.
- ✔ Developed reusable Blade layouts and components (`layouts/app.blade.php`, `components/navbar.blade.php`, `components/footer.blade.php`) instead of duplicating navigation/footer markup across pages.
- ✔ Built four responsive pages (Home, About, Services, Contact) styled with Tailwind CSS.
- ✔ Practiced Git version control with meaningful, conventional commit messages.
- ✔ Published the project to a public GitHub repository and documented it in Markdown.
- ✔ Shared project progress via a LinkedIn post.

---

## 4. MVC Architecture

**What is MVC?**
MVC (Model-View-Controller) is a software design pattern that splits an application into three interconnected parts:
- **Model** — manages data and business logic (e.g., an Eloquent model representing a database table).
- **View** — the presentation layer; what the user actually sees (in Laravel, Blade templates).
- **Controller** — the middleman; receives incoming requests, decides what needs to happen, and returns a response (usually a View, optionally with data from a Model).

**Why does Laravel use MVC?**
Laravel is built around MVC because it forces a separation between *how data is handled*, *what the user sees*, and *how a request is processed*. This keeps the codebase predictable: a developer working on styling doesn't need to touch business logic, and a developer fixing a database query doesn't need to touch HTML.

**Advantages of MVC in software development**
- **Separation of concerns** — each layer has one job, making the app easier to reason about.
- **Maintainability** — changes to the UI don't risk breaking business logic, and vice versa.
- **Reusability** — Views and components (like the navbar/footer used here) can be reused across multiple pages.
- **Scalability** — as an app grows, new Models, Views, and Controllers can be added without restructuring existing code.
- **Team collaboration** — front-end and back-end work can proceed in parallel with minimal conflicts.

**Request Flow Diagram**

```
   Browser
      │
      ▼
    Route            (routes/web.php)
      │
      ▼
  Controller         (CompanyController)
      │
      ▼
  Blade View          (resources/views/pages/*.blade.php)
      │
      ▼
Response to Browser   (rendered HTML)
```

*(A formal version of this diagram, created in [Draw.io / Canva / Figma], is saved in `documentation/architecture-diagram.png`.)*

---

## 5. Laravel Routing

**What is Routing?**
Routing is how Laravel maps an incoming URL (and HTTP method) to the code that should handle it. Every route is defined in `routes/web.php` and points to either a closure or, more commonly in larger apps, a controller method.

**GET Requests**
All four routes in this project use `Route::get()`, since each one simply *retrieves and displays* a page — no data is being created, updated, or deleted.

**Named Routes**
Each route was given a `->name()`, which allows referring to it elsewhere in the app (e.g., in Blade with `route('contact')`) instead of hardcoding URLs. This means if a URL ever changes, only the route definition needs updating.

**Route Definitions**

```php
Route::get('/', [CompanyController::class, 'home'])->name('home');
Route::get('/about', [CompanyController::class, 'about'])->name('about');
Route::get('/services', [CompanyController::class, 'services'])->name('services');
Route::get('/contact', [CompanyController::class, 'contact'])->name('contact');
```

*(Screenshot: `screenshots/web-php-routes.png`)*

---

## 6. Controllers

**Purpose of Controllers**
A Controller groups related request-handling logic together. Instead of writing the logic for every page directly inside `routes/web.php`, the routes simply point to controller methods, keeping the routes file short and readable.

**Benefits of Controllers**
- Keeps route definitions clean and declarative.
- Groups related actions (all four company pages) under one class.
- Makes it easy to later add logic — e.g., pulling services from a database — without touching the routes file.

**Controller Methods**
`CompanyController` has one method per page, and each simply returns the corresponding Blade view:

```php
class CompanyController extends Controller
{
    public function home()
    {
        return view('pages.home');
    }

    public function about()
    {
        return view('pages.about');
    }

    public function services()
    {
        return view('pages.services');
    }

    public function contact()
    {
        return view('pages.contact');
    }
}
```

*(Screenshot: `screenshots/company-controller.png`)*

---

## 7. Blade Templating Engine

**Blade Layouts**
A layout is a "master template" that defines the shared page skeleton (`<head>`, navbar, footer) so individual pages don't have to repeat it. In this project, `layouts/app.blade.php` holds the shared structure, and every page extends it.

**Blade Components**
Components are small, reusable Blade files. `components/navbar.blade.php` and `components/footer.blade.php` are rendered with `<x-navbar />` and `<x-footer />` inside the layout — Laravel auto-discovers any file inside `resources/views/components/` as an anonymous component.

**`@extends`**
Used at the top of each page (e.g., `pages/home.blade.php`) to declare which layout it should be inserted into:
```blade
@extends('layouts.app')
```

**`@section` / `@yield`**
`@section('content') ... @endsection` in a page defines a named block of content. `@yield('content')` in the layout marks *where* that block should be inserted. This is how page-specific content is injected into the shared layout.

**`@include`**
Used to pull in a smaller partial view without passing it through the component system — useful for things like the map placeholder block on the Contact page if it were extracted into its own file.

*(Screenshots: `screenshots/blade-layout.png`, sample code snippets from `home.blade.php`)*

---

## 8. Laravel Folder Structure

| Folder | Purpose |
|---|---|
| `app/` | Contains the application's core code — Models, Controllers, and other classes like `CompanyController.php`. |
| `routes/` | Defines how URLs map to controller actions (`web.php` for browser-facing routes). |
| `resources/` | Holds uncompiled assets and Blade views — `views/layouts`, `views/components`, `views/pages` in this project. |
| `public/` | The web server's document root; contains `index.php` (the single entry point for every request) plus compiled CSS/JS and public assets. |
| `bootstrap/` | Bootstraps the framework on every request and caches framework files for performance. |
| `config/` | Configuration files for the app (database, mail, services, etc.), typically populated from `.env`. |

---

## 9. Screenshots

> Place all screenshots in the `screenshots/` folder and reference them below.

- Home Page — `screenshots/home.png`
- About Page — `screenshots/about.png`
- Services Page — `screenshots/services.png`
- Contact Page — `screenshots/contact.png`
- Navigation Bar — `screenshots/navbar.png`
- Footer — `screenshots/footer.png`
- Route Definitions (`web.php`) — `screenshots/web-php-routes.png`
- Controller (`CompanyController.php`) — `screenshots/company-controller.png`
- Blade Layout — `screenshots/blade-layout.png`
- VS Code Project — `screenshots/vscode-project.png`
- Laravel Folder Structure — `screenshots/folder-structure.png`
- GitHub Repository — `screenshots/github-repo.png`
- Browser Output — `screenshots/browser-output.png`

---

## 10. Problems Encountered

1. **Route not found (404) on initial setup.**
   After creating the four routes, visiting `/services` returned a 404. The route was defined correctly, but the local server had been started before the route file was saved.

2. **View not found error.**
   The controller initially called `return view('services')` instead of `return view('pages.services')`, since the Blade files live inside a `pages` subfolder. Laravel couldn't resolve the dot-notation path correctly until it matched the actual folder structure.

3. **Component not found (`<x-navbar />` failed to render).**
   The navbar component wasn't rendering initially because the file was named `Navbar.blade.php` (capitalized) instead of `navbar.blade.php`. Laravel's anonymous component resolution is case-sensitive to the file name used in the tag.

4. **VS Code terminal / Git workflow friction.**
   Running Artisan and Git commands directly inside VS Code's integrated terminal occasionally lost track of the working directory after switching branches, requiring commands to be run from a separate terminal window instead.

---

## 11. Solutions

1. Restarted `php artisan serve` after confirming the route file was saved, which resolved the 404 immediately.
2. Corrected the `view()` call in every controller method to use dot notation matching the real folder path: `pages.home`, `pages.about`, `pages.services`, `pages.contact`.
3. Renamed the component file to lowercase (`navbar.blade.php`) to match the tag `<x-navbar />`, since Blade's anonymous component lookup expects the kebab/lowercase file name.
4. Switched to running Git and Artisan commands from a standalone terminal (outside VS Code's integrated terminal) for the remainder of the project to avoid directory-tracking issues.

---

## 12. Reflection

Working on this project gave me a much clearer, hands-on understanding of what MVC actually means beyond the textbook definition. Before this, I understood MVC conceptually — models hold data, views display it, controllers connect them — but I hadn't felt *why* that separation matters until I was the one building all three layers myself. Once the navbar and footer were pulled into their own components and the four pages extended a single shared layout, I could see immediately how much repetitive markup that saved, and how much easier it would be to update the site's branding in one place instead of four.

Separation of concerns turned out to be more than a best practice to memorize — it's what made debugging manageable. When the view-not-found error came up, I knew exactly where to look: not the route, not the styling, but the controller's `view()` call. If everything had been mixed together in one file, tracing that error would have taken far longer. Each layer having a single responsibility meant each bug had an obvious "home."

I also came to appreciate how routes, controllers, and views work together as a pipeline rather than three disconnected pieces. A request comes in, the route decides which controller method should handle it, the controller decides which view to return (and, in bigger apps, what data to hand it), and the view is responsible only for how that data is displayed. Nothing in that chain needs to know the internal details of the step before or after it — the route doesn't care how the view is styled, and the view doesn't care how the URL was matched. That loose coupling is what makes the architecture flexible.

Thinking about how this scales to larger enterprise systems, I can see how this same pattern — just with far more Models, Controllers, and Views — is what keeps massive codebases maintainable. In a real company, dozens of developers might be working on the same application simultaneously; MVC lets a front-end developer redesign a Blade view without touching business logic, and a back-end developer optimize a database query without breaking the UI. Without that separation, a codebase of any real size becomes unmanageable, since every change risks breaking something unrelated.

Overall, this project reinforced that MVC isn't just a Laravel convention — it's a discipline for keeping software organized as it grows, and this small four-page company profile site was a manageable way to feel that discipline in practice before applying it to something larger.

*(≈470 words)*

---

## 13. References

Laravel. (2024). *Laravel 11.x documentation*. Laravel LLC. https://laravel.com/docs

Mozilla Developer Network. (2024). *MDN Web Docs*. Mozilla Foundation. https://developer.mozilla.org

PHP Group. (2024). *PHP manual*. The PHP Group. https://www.php.net/docs.php

Tailwind Labs. (2024). *Tailwind CSS documentation*. Tailwind Labs Inc. https://tailwindcss.com/docs
