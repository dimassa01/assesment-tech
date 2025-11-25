# To-Do Manager (Laravel + Oracle + Passport + Tailwind)

Small web app to manage to-do lists (final project).

## Live
- GitHub repo: https://github.com/dimassa01/assesment-tech.git
- App URL: 

## Demo credentials (example)
- Email: admin@test.com
- Password: password

> Make sure you DO NOT include real secrets in repo. Use `.env` locally and set env vars in production.

---

## Requirements (local)
- PHP 8.1 / 8.2 (recommended)
- Composer
- Node.js & npm
- XAMPP (or other web server) — project has Oracle DB connection (OCI)
- Oracle DB (or use other DB with small config changes)
- Git

## Quick local setup

1. Clone repo (if not already):
```bash
git clone https://github.com/dimassa01/assesment-tech.git
cd assesment-tech
Install PHP deps:
composer install

Install JS deps:
npm ci
npm run dev


Copy env file:
cp .env.example .env
# then edit .env with DB credentials and APP_KEY / OPENWEATHER_API_KEY
php artisan key:generate


Database:
Create database and user (Oracle or MySQL depending on your config).

Run migrations:
php artisan migrate
# if using seed:
php artisan db:seed


Passport (OAuth2):

php artisan passport:install


Save generated client id / secret to your production env if needed.

Serve app locally:

php artisan serve
# open http://127.0.0.1:8000

API Endpoints (Postman collection included)

POST /api/register — register user

POST /api/login — login, returns token

GET /api/tasks — list user tasks (protected)

POST /api/tasks — create task (protected)

GET /api/tasks/{id} — show task (protected)

PUT /api/tasks/{id} — update task (protected)

DELETE /api/tasks/{id} — delete task (protected)

Use header:

Authorization: Bearer <token>
Content-Type: application/json