# University Application

## Setup and Usage Guide

### 1. Must Have Things Installed

- **Composer**
- **PHP**
- **XAMPP**
- **Laravel**
- **MySQL**
- **Any IDE (e.g., VSCode)**
- **Git**

### 2. How to Start This Project

1. **Run XAMPP (Apache)**
   - Start the Apache and MySQL services from the XAMPP Control Panel.

2. **Install Composer**
   - Download and install Composer from [getcomposer.org](https://getcomposer.org/).

3. **Install Laravel**
   - Open your command line interface (CLI) and run:

     ```sh
     composer global require laravel/installer
     ```

4. **Install MySQL**
   - Ensure MySQL is installed and running via XAMPP.

5. **Choose a Preferable IDE**
   - Install and configure your preferred IDE (e.g., VSCode).

6. **Install Git**
   - Download and install Git from [git-scm.com](https://git-scm.com/).

### 3. How This Project Works

1. **Open Your Project Directory**
   - Navigate to your project directory.

2. **Access the Public Folder**
   - Click on the `public` folder to be redirected to the login page.

3. **Create a User Account**
   - If you don't have an account, create one. After successful account creation, you will be redirected back to the login page.

4. **Login to the Application**
   - Use your credentials to log in.

5. **Navigate to the Students Module**
   - You will be redirected to the students module where you can:
     - **Create, View, Update, Delete** student records.
     - The index page utilizes **JS DataTable** for a clean layout with search and pagination.
     - **Bootstrap** and additional **jQuery** classes are used for styling.

6. **Use Auth Middleware**
   - Protect routes from unauthorized access using auth middleware.

7. **Migrations and Seeding**
   - **Migrations** are used for creating the students and teachers tables.
   - **Seeding** adds records to both tables.

8. **Common Layout**
   - View files are managed using a common layout named `app.blade.php`.

9. **Relationships**
   - The `Student` model has a `belongsTo` relationship with `ClassTeacher` to manage related data.

10. **Logout**
    - After completing your tasks, use the logout button located on the student index page.

### 4. Login Credentials

- **Username**: `moin@gmail.com`
- **Password**: `111`



Thank you for providing me this opportunity.
