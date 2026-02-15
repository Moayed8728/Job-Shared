# Job Shared Package

1. Introduction
  
  Job Shared is a reusable Laravel package that centralizes shared business logic across TalentConnect and Job Backoffice applications.

2. Purpose

  1. Avoid code duplication.
  2. Centralize shared models.
  3. Standardize business rules.
  4. Provide reusable services.

3. Installation

  1. Require the package using Composer.
  2. Ensure the repository is linked in composer.json.
  3. Run composer install.

4. Structure

  1. src directory contains all package logic.
  2. Service providers register package components.
  3. Models and services are framework-independent where possible.

5. Versioning

  1. Managed via GitHub repository.
  2. Installed via Composer as dev-main or tagged releases.

6. Usage

  1. Imported inside Laravel apps.
  2. Used for shared domain logic.
  3. Ensures consistency between frontend app and backoffice.

7. License

Internal package for TalentConnect ecosystem.
