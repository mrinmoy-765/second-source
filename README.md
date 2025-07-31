# Laravel Project: Registration & Task Management API

This Laravel API handles user registration and task management, including:

1. ✅ Create and view(all & individual) post
2. ✅ User registration with password hashing
3. ✅ Add a Task
4. ✅ Mark Task as Completed/Incomplete
5. ✅ Get Pending Tasks

---

## Setup Instructions

### 1. Clone the Repository

```bash
git clone <repo-url>
cd <project-directory>
```

### 2. Install Dependencies

```bash
composer install
```

### 3. Configure Environment

```bash
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=your_database_name
DB_USERNAME=your_database_user
DB_PASSWORD=your_database_password
```

### 4. Generate App Key

```bash
php artisan key:generate
```

### 5. Run Migrations

```bash
php artisan migrate
```

### 6. Start the Server

```bash
php artisan serve
Server will run at: http://localhost:8000
```
