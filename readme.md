# Project Title

Brief description of your project.

## Table of Contents

- [About](#about)
- [Installation](#installation)
- [Usage](#usage))
- [License](#license)

## About

This project is a simple web application demonstrating user authentication using PHP and session management. It consists of two pages:

Login Page (login.php): This page allows users to enter any username and password. Upon submission, it simulates authentication (accepting any credentials) and sets the authenticated status, username, and password in the session.
Index Page (index.php): This page displays the user details if the user is authenticated. It checks the authenticated status in the session to determine whether the user is logged in. If the user is not authenticated, they are redirected back to the login page.

This project serves as a basic example of implementing user authentication and session management in a web application using PHP with Bootstrap 5 for styling. It can be used as a starting point for building more complex web applications that require user login functionality.

## Installation

### Prerequisites 

Tested with:
* nginx/1.18.0
* PHP 7.4.33

## Usage

### With CSRF Token
Login Page (csrf-auth/login.php)
The login page with CSRF token allows users to enter their username and password. Once submitted, the page simulates authentication and sets the authenticated status, username, and password in the session. It also generates and validates a CSRF token for security. If authentication is successful, the user is redirected to the index page (index.php). If authentication fails, an error message is displayed.

Index Page (csrf-auth/index.php)
The index page with CSRF token displays the user details (username, password, and CSRF token) if the user is authenticated. It checks the authenticated status in the session to determine whether the user is logged in. If the user is not authenticated, they are redirected back to the login page. The index page also generates and stores a CSRF token in the session for security purposes.

### Without CSRF Token
Login Page (static-auth/login.php)
The login page without CSRF token allows users to enter their username and password. Once submitted, the page simulates authentication and sets the authenticated status, username, and password in the session. If authentication is successful, the user is redirected to the index page (index.php). If authentication fails, an error message is displayed.

Index Page (static-auth/index.php)
The index page without CSRF token displays the user details (username and password) if the user is authenticated. It checks the authenticated status in the session to determine whether the user is logged in. If the user is not authenticated, they are redirected back to the login page.

## License

GNU GPLv3, I guess
