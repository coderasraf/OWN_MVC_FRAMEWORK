# Own MVC Framework (PHP)

A tiny Model-View-Controller framework written from scratch in plain PHP to understand how frameworks like CodeIgniter and Laravel route requests, load controllers and talk to the database.

![PHP](https://img.shields.io/badge/PHP-7-777BB4?logo=php&logoColor=white) ![MySQL](https://img.shields.io/badge/MySQL-PDO-4479A1?logo=mysql&logoColor=white)

## Overview

Built in June 2021 as a learning project while studying object-oriented PHP and the MVC pattern. It is not intended for production use; it demonstrates the core pieces of an MVC framework in a few hundred lines.

## Features

- Front controller (`index.php`) that parses `?url=controller/method/param` and dispatches to the matching controller method
- Class autoloading for core libraries via `spl_autoload_register`
- `DController` base controller with a `Load` helper for views and models
- `Load::view()` passes an associative array to the view as variables (`extract`)
- `DModel` base model that opens the database connection
- `Database` class extending PDO with `select`, `insert`, `update` and `delete` helpers built on prepared statements
- Sample `Category` controller + `CatModel` showing list, get-by-id, insert (form), update and delete

## Tech Stack

- PHP (OOP, PDO)
- MySQL / MariaDB
- Apache (XAMPP/WAMP or similar)

## Getting Started

1. Copy the project into your web root, e.g. `htdocs/OWN_MVC_FRAMEWORK`.
2. Create a MySQL database named `db_lr` with a `tbl_users` table (columns `id`, `name`, `email`) – the sample controller uses it. No SQL dump is included.
3. Adjust the connection settings in `system/libs/DModel.php` if your credentials differ from `root` with an empty password.
4. Open the app in the browser:

```text
http://localhost/OWN_MVC_FRAMEWORK/                                  # default Index controller
http://localhost/OWN_MVC_FRAMEWORK/index.php?url=category/category   # list records
http://localhost/OWN_MVC_FRAMEWORK/index.php?url=category/addCategory
http://localhost/OWN_MVC_FRAMEWORK/index.php?url=asraf/siddik/hello  # controller/method/param demo
```

The `.htaccess` file is currently empty, so URLs use the `?url=` query parameter rather than pretty URLs.

## Project Structure

```text
index.php            # Front controller / router
system/libs/
├── DController.php  # Base controller
├── DModel.php       # Base model (DB connection)
├── Database.php     # PDO wrapper
└── Load.php         # View and model loader
app/
├── controllers/     # Index, Category, Asraf, Test
├── models/          # CatModel
└── views/           # home, category, catById, addCategory, catupdate
inc/                 # header.php, footer.php
```

## Author

Built by **Ashraf Siddik**, Shopify developer & CRO specialist.
- Website: [ashraf-siddik.com](https://ashraf-siddik.com)
- GitHub: [@coderasraf](https://github.com/coderasraf)
