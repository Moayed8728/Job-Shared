# Job Shared

![Laravel](https://img.shields.io/badge/Laravel-12-FF2D20?style=for-the-badge&logo=laravel&logoColor=white)
![PHP](https://img.shields.io/badge/PHP-8.2%2B-777BB4?style=for-the-badge&logo=php&logoColor=white)
![Architecture](https://img.shields.io/badge/Architecture-Modular-blue?style=for-the-badge)
![Status](https://img.shields.io/badge/Status-Active-success?style=for-the-badge)

## Shared Laravel Package for Centralized Models & Business Logic

Built to support scalable multi-project architecture across the TalentConnect ecosystem.

---

## About The Project

**Job Shared** is a reusable Laravel package designed to centralize shared models, relationships, and business logic between multiple Laravel applications.

Instead of duplicating code across multiple systems, this package provides a clean and maintainable architecture where all common functionality exists in one centralized package.

The package is primarily integrated between:

- TalentConnect Platform
- Job Backoffice System
- Future Laravel-based internal services

---

## Key Features

- Centralized Eloquent models
- Shared business logic between applications
- Modular Laravel architecture
- PSR-4 compliant package structure
- Composer-based integration
- Laravel 12 compatible
- Clean and scalable backend structure
- Easier maintenance across projects

---

## Architecture Objective

This package was developed to solve common software engineering problems such as:

- Repeated code across projects
- Inconsistent database relationships
- Difficult maintenance workflows
- Poor scalability in growing systems

By moving shared functionality into a dedicated package, the entire ecosystem becomes:

- Easier to maintain
- Faster to scale
- More consistent
- Cleaner architecturally

---

## Included Shared Models

| Model | Responsibility |
|---|---|
| `Company` | Company management and relationships |
| `JobVacancy` | Vacancy and job posting management |
| `JobApplication` | Application tracking and handling |
| `JobCategory` | Job categorization system |
| `Resume` | Resume and applicant data |
| `User` | Shared user entity |

---

## Project Structure

```bash
Job-Shared/
│
├── src/
│   └── Models/
│       ├── Company.php
│       ├── JobApplication.php
│       ├── JobCategory.php
│       ├── JobVacancy.php
│       ├── Resume.php
│       └── User.php
│
├── composer.json
└── README.md
```

---

## Tech Stack

| Technology | Version |
|---|---|
| PHP | 8.2+ |
| Laravel | 12 |
| Composer | Latest |

---

## Installation

### 1. Add Repository Source

Inside your Laravel application's `composer.json`:

```json
"repositories": [
    {
        "type": "vcs",
        "url": "https://github.com/your-username/job-shared"
    }
]
```

---

### 2. Install The Package

```bash
composer require job/shared:dev-main
```

---

### 3. Install Dependencies

```bash
composer install
```

---

## Example Usage

```php
use App\Models\JobVacancy;

$jobs = JobVacancy::latest()->get();
```

---

## Composer Configuration

```json
{
    "name": "job/shared",
    "description": "Reusable Laravel package for shared models and business logic",
    "type": "library",
    "require": {
        "php": "^8.2",
        "laravel/framework": "^12"
    }
}
```

---

## Software Engineering Benefits

### Maintainability
Update shared functionality once and propagate changes across all connected applications.

### Scalability
Supports modular growth as the ecosystem expands into additional services.

### Reusability
Encourages reusable architecture instead of duplicated implementation.

### Consistency
Ensures all applications follow the same data structure and relationships.

---

## Future Enhancements

Planned improvements include:

- Shared service classes
- Repository pattern implementation
- Shared API resources
- Shared enums and constants
- Automated testing suite
- CI/CD integration
- Package service providers

---

## Development Philosophy

This package follows modern backend engineering practices:

- Modular architecture
- Separation of concerns
- Reusable components
- Maintainable codebase structure
- Clean Laravel conventions

---

## Author

### Moayed Altater

- Software Engineering Student
- Universiti Teknologi Malaysia (UTM)
- Focused on Backend Development, System Architecture, and Scalable Laravel Applications

---

## License

Licensed under the MIT License.
