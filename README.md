![logo]
## Introduction

EnergyRate Navigator is an open source application developed by EnergyRate, a leading software company (not real) in the energy industry. The purpose of this application is to provide accurate predictions of fuel rates based on various criteria.

Our partner has approached us with the specific need for a software solution that can forecast fuel rates, enabling them to make informed decisions about their energy consumption and budgeting. With EnergyRate Navigator, we aim to meet this requirement by leveraging advanced algorithms and data analysis techniques.

This README provides an overview of the EnergyRate Navigator application, outlining its features, installation process, and usage guidelines. Whether you are a developer, energy analyst, or simply interested in understanding how fuel rates are predicted, this document will guide you through the application's functionalities.

## Requirements

This application uses the Laravel framework and has a few system requirements. You should ensure that your web server has the following minimum PHP version and extensions:

* PHP >= 8.1
* cURL PHP Extension
* DOM PHP Extension
* Fileinfo PHP Extension
* Filter PHP Extension
* Hash PHP Extension
* Mbstring PHP Extension
* OpenSSL PHP Extension
* PCRE PHP Extension
* PDO PHP Extension
* Session PHP Extension
* Tokenizer PHP Extension
* XML PHP Extension

## Installation

### on Windows

As per the requirements, PHP and MySQL will be needed along with its associated software. If you're on Windows it's recommended to use something like [Laragon](https://laragon.org) as it provides almost everything you'll need to get started (including a web server). If you're on macOS or Linux (which are similiar systems) you'll have to install each component by hand.

**Action required: It is HIGHLY recommended to use [Visual Studio Code](https://code.visualstudio.com/).**

Once you've completed the above steps, [you can move on to installing Composer](https://getcomposer.org/download/). It's recommended to use the installer so it can set Composer to your PATH without much work.

To clone the repository in its entirety, including the LICENSE.md file, you can use the following command in the command prompt or PowerShell on Windows, or Terminal on macOS or Linux:
```
git clone -b stable https://github.com/Zentro/navigator
```

If you plan contributing to the project, use this command instead to fetch the latest development branch:
```
git clone -b develop https://github.com/Zentro/navigator
```

We'll need to now use Composer to install our dependencies to run the application:
```
composer install --no-dev
```

To install with development and production dependencies run:
```
composer install
```

Rename the included `.env.example` file to `.env` and fill out variables according to your device's environment.

**Action required: Not changing the .env file will cause the app to error out because the database configuration will be blank by default.**

Be sure to have MySQL running before running the web server.

Run the application's database migrations, which will create the application's database tables:
```
php  artisan migrate
```

To render the application's frontend we use the Blade stack with Vite to compile the applications's frontend assets:
```
npm install
npm run dev
```

You can start a local PHP server (not meant for production) with:
```
php artisan serve
```

## License

**EnergyRate is NOT a real company. This project was made as part of the University of Houston's COSC 4353 Software Design course by Dr. Kevin Long. FUTURE STUDENTS OF SOFTWARE DESIGN ARE ADVISED AGAINST USING ANY PART OF THIS PROJECT OR RISK VIOLATING [UH ACADEMIC HONESTY POLICY](https://uh.edu/provost/policies-resources/honesty/).**


Code released under the [MIT License](LICENSE.md).