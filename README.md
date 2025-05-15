# LaravelEditor [Vite Build]
---

## 🧐 What Is LaravelEditor?
**LaravelEditor** is a Laravel project that seamlessly integrates the [Gutenberg editor](https://github.com/VanOns/laraberg). Based on Laraberg, this project provides all the necessary communication and data to ensure the editor functions optimally within a Laravel environment, making text management and editing more intuitive.

---


## ⚙️ Installation

### 1️⃣ Clone Repository
```sh
git clone https://github.com/dahlan1991/LaravelEditor.git
cd laraveleditor
```

### 2️⃣ Environment Configuration
```sh
cp .env.example .env
```
Edit the .env file to customize the database connection.

### 3️⃣ Install Dependencies
```sh
composer install
npm install
```

### 4️⃣ Generate Key & Database Migration
```sh
php artisan key:generate
php artisan migrate --seed
```
### 4️⃣ Symbolic Link the storage to public (MUST)
```sh
php artisan storage:link
```


### 4️⃣ Clear the Cache and Config
```sh
php artisan cache:clear
php artisan config:clear
php artisan optimize:clear
```

### 5️⃣ Running the Server
```sh
php artisan serve
# using build for css development
dev: "npm run dev",
production: "npm run build" # for production
```

### 🧑‍💻 Akun Demo
To try the PRISMA application, here is a demo account that can be used::

| Email            | Password    |
|------------------|-------------|
| user@example.com | `123456789` |

> ⚠ Note: The password above has been hashed—use the original value when logging in.



### 📜 Lisensi
The project uses an MIT license or as selected.
