## About Contactform
	This package provide a feature to submit user inquiry and send an inquiry email to admin.

## Installation

Install via composer:

```
composer require budhaspec/contactform
```

Run the database migrations (**Set the database connection in .env before migrating**)

```
php artisan migrate
```

Publish contactform email config.

```
php artisan vendor:publish --tag=contactform-config
```

Configure ADMIN_EMAIL variable value in .env file.

```
ADMIN_EMAIL="budha.jethava@example.com"
```

Configure SMTP credentials in .env if not set.

```
MAIL_MAILER=
MAIL_HOST=
MAIL_PORT=
MAIL_USERNAME=
MAIL_PASSWORD=
MAIL_FROM_ADDRESS=
```

Start the local development server.

```
php artisan serve
```

You can now access the server at http://127.0.0.1:8000/ and contact form at http://127.0.0.1:8000/contact
