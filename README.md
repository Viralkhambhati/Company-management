# Pro User Management System with PHP, MySQL and Ajax

Pro User Management System is a PHP and MySQL-based application for managing users, roles, permissions, and account status from a simple admin interface. It includes user authentication, profile management, role-based access control, and account moderation features built with Ajax-powered interactions.

## Key Features

- User registration and login
- Remember-me login support
- Password reset and change password
- User profile view and profile editing
- Admin dashboard with user summary cards
- Create, edit, and delete users
- Role management with permissions
- Active and deactive user handling
- User list, filtered views, and search support
- Ajax-based workflows for a smoother admin experience

## Screenshots

<table>
  <tr>
    <td align="center">
      <img src="Screenshots/Screenshot%202026-04-14%20144631.png" alt="Login screen" width="100%">
      <br><sub>Login screen</sub>
    </td>
    <td align="center">
      <img src="Screenshots/Screenshot%202026-04-14%20144733.png" alt="Registration screen" width="100%">
      <br><sub>Registration screen</sub>
    </td>
  </tr>
  <tr>
    <td align="center">
      <img src="Screenshots/Screenshot%202026-04-14%20145342.png" alt="Role list" width="100%">
      <br><sub>Role list</sub>
    </td>
    <td align="center">
      <img src="Screenshots/Screenshot%202026-04-14%20145537.png" alt="Edit role permissions" width="100%">
      <br><sub>Edit role permissions</sub>
    </td>
  </tr>
  <tr>
    <td align="center">
      <img src="Screenshots/Screenshot%202026-04-14%20145631.png" alt="Users list" width="100%">
      <br><sub>Users list</sub>
    </td>
    <td align="center">
      <img src="Screenshots/Screenshot%202026-04-14%20145758.png" alt="Active users list" width="100%">
      <br><sub>Active users list</sub>
    </td>
  </tr>
  <tr>
    <td align="center">
      <img src="Screenshots/Screenshot%202026-04-14%20145847.png" alt="Deactive users list" width="100%">
      <br><sub>Deactive users list</sub>
    </td>
    <td align="center">
      <img src="Screenshots/Screenshot%202026-04-14%20151656.png" alt="Dashboard overview" width="100%">
      <br><sub>Dashboard overview</sub>
    </td>
  </tr>
</table>

## Requirements

- PHP 7.x or later
- MySQL / MariaDB
- Apache or any compatible local web server

## Installation

1. Clone or download the project into your web server directory.
2. Import `pro_usermanagent.sql` into your MySQL database.
3. Update the database credentials in `app/config/config.php`.
4. Place the project files in the web root and start your server.
5. Open the application in your browser and log in with an admin account.

## Project Structure

- `app/` - Core application classes, config, helpers, and Ajax handlers
- `assets/` - CSS, JavaScript, icons, and frontend assets
- `Screenshots/` - README screenshots
- `login.php`, `register.php`, `dashboard.php`, `users.php` - Main application pages
- `pro_usermanagent.sql` - Database schema and sample data

## Notes

- The application uses a role-and-permission workflow for admin access control.
- User status management includes active and deactive account handling.
- If you extend the project, keep the database schema and config file in sync.
