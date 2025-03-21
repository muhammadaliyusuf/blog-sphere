# Blogsphere

A web-based Blog Platform that empowers writers, bloggers, and content creators to share their ideas with a global audience. With features like user authentication, and category tagging. it provides a dynamic and engaging blogging experience.

## Application Overview

<div style="display: flex; flex-wrap: wrap; gap: 10px; margin-bottom: 20px;">
  <img src="https://github.com/muhammadaliyusuf/blog-sphere/blob/master/.ApplicationOverview/Homepage.png" style="width: 48%; height: auto;">
  <img src="https://github.com/muhammadaliyusuf/blog-sphere/blob/master/.ApplicationOverview/Blog-List.png" style="width: 48%; height: auto;">
</div>
<br>
<div style="display: flex; flex-wrap: wrap; gap: 10px; margin-bottom: 20px;">
  <img src="https://github.com/muhammadaliyusuf/blog-sphere/blob/master/.ApplicationOverview/Show-Blogpost.png" style="width: 48%; height: auto;">
  <img src="https://github.com/muhammadaliyusuf/blog-sphere/blob/master/.ApplicationOverview/Create-Post.png" style="width: 48%; height: auto;">
</div>
<br>
<div style="display: flex; flex-wrap: wrap; gap: 10px; margin-bottom: 20px;">
  <img src="https://github.com/muhammadaliyusuf/blog-sphere/blob/master/.ApplicationOverview/Admin-Dashboard.png" style="width: 48%; height: auto;">
  <img src="https://github.com/muhammadaliyusuf/blog-sphere/blob/master/.ApplicationOverview/User-Dashboard.png" style="width: 48%; height: auto;">
</div>

## Features

- User authentication and authorization (admin and regular users)
- Create, read, update, and delete blog posts
- Category management for organizing content
- Rich text editor for content creation
- Image uploads for blog posts
- User dashboard for managing personal content
- Admin dashboard for site management
- Responsive design for mobile and desktop viewing

## Prerequisites

- PHP >= 7.3
- Composer
- MySQL

## Installation Steps

1. **Clone the repository:**
```bash
git clone https://github.com/muhammadaliyusuf/blog-sphere.git
cd blog-sphere
```

2. **Install PHP dependencies:**
```bash
composer install
```

3. **Create environment file:**
```bash
cp .env.example .env
```

4. **Generate application key:**
```bash
php artisan key:generate
```

5. **Copy the generated key:**
   
   - The key will be automatically added to your .env file
   - If not added automatically, copy the generated key (it will look like: base64:xxxxxxxxx...)
   - Open your .env file and paste the key in the APP_KEY field:
     
```
APP_KEY=base64:your_generated_key_here
```

6. **Configure database connection in `.env` file:**
```
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=set_database_name
DB_USERNAME=your_username
DB_PASSWORD=your_password
```

7. **Run database migrations:**
```bash
php artisan migrate
```

8. **Run database seeders:**
```bash
php artisan db:seed
```

9. **Set up storage link for file uploads:**
```bash
php artisan storage:link
```

## Additional Setup

Since the `/vendor` directory is not included in version control (as specified in `.gitignore`), make sure to:

1. Run `composer update` after cloning to install all required dependencies
2. If you encounter any issues with dependencies, try:
   - Clearing composer cache: `composer clear-cache`
   - Removing `composer.lock` and running `composer install` again

## Usage

1. Start the Laravel development server:
```bash
php artisan serve
```

2. Access the application in your browser at `http://localhost:8000`

3. Login with the default admin credentials:
```
Username: admin
Password: admin
```

## Database Schema

The database migrations will create the following structure:

### Tables

1. **users**
   - Stores user information
   - Fields:
     - `id`: Unique identifier
     - `name`: User's full name
     - `username`: Unique username
     - `email`: Unique email address
     - `email_verified_at`: Timestamp when the email was verified (nullable)
     - `password`: Hashed password
     - `remember_token`: Token for authentication persistence
     - `timestamps`: Created and updated timestamps

2. **posts**
   - Stores blog posts created by users
   - Fields:
     - `id`: Unique identifier
     - `category_id`: Reference to the category of the post
     - `user_id`: Reference to the author (user) of the post
     - `title`: Title of the post
     - `slug`: Unique identifier for the post URL
     - `image`: Image associated with the post (nullable)
     - `excerp`: Short excerpt or summary of the post
     - `body`: Full content of the post
     - `published_at`: Timestamp when the post was published (nullable)
     - `timestamps`: Created and updated timestamps

3. **categories**
   - Stores different categories for blog posts
   - Fields:
     - `id`: Unique identifier
     - `name`: Unique name of the category
     - `slug`: Unique identifier for category URL
     - `timestamps`: Created and updated timestamps

### Relationships

- Each **post** belongs to one **category** (`category_id` as foreign key)
- Each **post** is authored by one **user** (`user_id` as foreign key)
- Each **category** can have multiple **posts**
- Each **user** can create multiple **posts**

## Troubleshooting

- **Issues with file uploads**:
  - Check storage directory permissions
  - Verify symlink creation with `php artisan storage:link`
  - Ensure PHP configuration allows for the file size you're uploading

- **Database connection errors**:
  - Verify credentials in `.env` file
  - Check if MySQL server is running
  - Ensure database exists before migration

## Contributing

1. Fork the repository
2. Create your feature branch (`git checkout -b feature/amazing-feature`)
3. Commit your changes (`git commit -m 'Add some amazing feature'`)
4. Push to the branch (`git push origin feature/amazing-feature`)
5. Open a Pull Request

## Contact

Muhammad Ali Yusuf - muhammadaliyusuff22@gmail.com
