<p align="center">
  <a href="github.com/roshdiraed" target="_blank">
    <img src="./public/img/logostone.png" width="400" alt="Laravel Logo">
  </a>
</p>

<p align="center">
  <a href="https://github.com/laravel/framework/actions">
    <img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status">
  </a>
  <a href="https://packagist.org/packages/laravel/framework">
    <img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads">
  </a>
  <a href="https://packagist.org/packages/laravel/framework">
    <img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version">
  </a>
  <a href="https://packagist.org/packages/laravel/framework">
    <img src="https://img.shields.io/packagist/l/laravel/framework" alt="License">
  </a>
</p>

# Stone Team Laravel Project

This project is a professional website built with Laravel for **Stone Team**, designed to showcase their services, expertise, and projects. It incorporates modern web development techniques using Laravel, Laravel Breeze, and Tailwind CSS to deliver a fast, secure, and responsive web experience.

## About Stone Team

Stone Team is a dynamic and innovative company specializing in delivering high-quality solutions in web development, digital transformation, and IT consulting. Their mission is to help businesses grow by providing cutting-edge technology solutions tailored to their needs. With a team of experienced professionals, Stone Team ensures efficiency, scalability, and security in every project.

## Key Features

- **User Authentication:** Secure login, registration, password reset, and email verification powered by Laravel Breeze.
- **Dynamic UI:** Designed with Tailwind CSS for a sleek, mobile-responsive layout.
- **Service Showcase:** Highlighting the team's expertise and offerings.
- **Client Engagement:** Testimonials, case studies, and FAQs to establish trust.
- **Interactive Animations:** Enhanced user experience with AOS (Animate on Scroll) animations.

## About Laravel

Laravel is a powerful PHP framework known for its expressive syntax and developer-friendly tools, including:
- Routing
- ORM (Eloquent)
- Database migrations
- Background job processing
- Real-time event broadcasting

For more details, visit the official [Laravel Documentation](https://laravel.com/docs).

## Setup Guide

Follow these steps to set up the project locally:

1. **Clone the repository:**
   ```sh
   git clone https://github.com/STONE.git
   cd STONE
   ```
2. **Install dependencies:**
   ```sh
   composer install
   npm install
   ```
3. **Configure environment:**
   ```sh
   cp .env.example .env
   php artisan key:generate
   ```
4. **Set up the database:**
   - Update `.env` with database details
   - Run migrations:
     ```sh
     php artisan migrate
     ```
5. **Install Laravel Breeze:**
   ```sh
   php artisan breeze:install
   ```
6. **Compile assets:**
   ```sh
   npm run dev
   ```
7. **Start the server:**
   ```sh
   php artisan serve
   ```

## Contributing

Contributions are welcome! Please follow Laravel’s [contribution guidelines](https://laravel.com/docs/contributions).

## License

This project is open-source and follows the [MIT license](https://opensource.org/licenses/MIT).
