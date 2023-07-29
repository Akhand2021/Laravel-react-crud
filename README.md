# Laravel API for React Native App

This repository contains the backend API built using Laravel to support the React Native app for login and registration functionality. The React Native app interacts with this API to handle user authentication and registration.

## React Native App Repository

The React Native app that uses this Laravel API as the backend can be found in the following repository:

- [React Native App Repository](https://github.com/Akhand2021/reactnative-login-registration-app.git)

## Installation

To get started with the Laravel API and link it with the React Native app, follow these steps:

1. Clone this Laravel API repository: `git clone https://github.com/Akhand2021/Laravel-reactnative-api.git`
2. Navigate to the project directory: `cd Laravel-reactnative-api`
3. Install PHP dependencies: `composer install`
4. Set up your database in the `.env` file and run the migrations: `php artisan migrate`
5. Start the Laravel server: `php artisan serve`

The Laravel API will now be up and running on your specified server.

## Connecting with the React Native App

1. Clone the React Native app repository mentioned above: `git clone https://github.com/Akhand2021/reactnative-login-registration-app.git`
2. Navigate to the project directory: `cd reactnative-login-registration-app`
3. Install Node.js dependencies: `npm install` or `yarn install`

You are now ready to use the React Native app with the Laravel API. Make sure to update the API endpoint in the React Native app to match the URL of the Laravel API server.

## Usage

1. Launch the React Native app on your device or emulator.
2. You will see the login and registration screens.
3. Register a new account or log in with an existing account.
4. The React Native app will interact with the Laravel API for authentication and registration.

## Acknowledgments

- [Laravel](https://laravel.com/)
- [React Native](https://reactnative.dev/)

Feel free to use, modify, and extend this code for your own projects. If you encounter any issues or have any suggestions, please open an issue on the respective repositories. Happy coding!
