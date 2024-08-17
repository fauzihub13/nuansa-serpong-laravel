# Laravel Project Setup

This is a basic setup guide for a Laravel project, including environment configuration, Filament installation, Livewire setup, and storage access configuration.

## Installation

Follow these steps to set up the project:

```bash
# Clone the repository
git clone <repository-url>
cd <repository-directory>

# Install dependencies
composer install
npm install

# Set up environment
cp .env.example .env
php artisan key:generate

# Set environment to production and disable debug mode
APP_ENV=production
APP_DEBUG=false

# Run migrations and seed the database
php artisan migrate --seed

# Install Filament
composer require filament/filament:"^3.2" -W
php artisan vendor:publish --tag=filament-config

# Install Livewire
composer require livewire/livewire
php artisan livewire:publish --config
php artisan vendor:publish --force --tag=livewire:assets

# Create symbolic link for storage
php artisan storage:link

# Serve the application locally
php artisan serve
