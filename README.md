# Blogging Platform
Index
1. [Description]()
1. [Requirements]
1. [How To run this project](How To run this project)
    1. [Prepare .env](Prepare .env)
    1. [Run updates](Run updates)
    1. [Adding APP_KEY into .env file](Adding APP_KEY into .env file)
    1. [Run Artisan Migration & testing server](Run Artisan Migration & testing server)
    1. [Login with and existing user](Login with and existing user)
    1. [Configure Task Schedule](Configure Task Schedule)
    
## Description

This is a simple laravel blog project develop.

To know more about this development work You can access the kanban board made for this project [here](https://trello.com/b/869WYhLZ) and go back in time and read the activity log.


## Requirements

1. Show blog post. (COMPLETED)
1. User Authentication. (COMPLETED)
1. Create blog post. (COMPLETED)
1. Author can see Its own Posts. (COMPLETED) 
1. Auto Import post from restful API. (COMPLETED)

## How To run this project

### Prepare .env

- Create a mysql (mariaDB) database.
- Add your database configuration (database name, username and password) into your .env.

### Run updates

- Throught command line go where you cloned this project to run all the commands that I will suggest to run the project safe and sound.
- For git improvements all the packages from the differents vendors are not loaded, now You have to run this command add them.
```
composer update
```

### Adding APP_KEY into .env file

- For security messures You have to create a new app key for this project, to generate it please run this command
```
php artisan key:generate
```

### Run Artisan Migration & testing server

Now that you have Your database I suggest to add some mock data from the project To insert the mock into the database I've created some seeds to populate the platform
- Create the necesaries tables for the project and insert some mock data with the following command
```
php artisan migrate:fresh --seed
```
- Now that you database is ready and you have've added some data now go and run the project with the following command
```
php artisan serve
```

### Login with and existing user

- This are the credentials for the user generated from the seed:
```
email: ivanatista@gmail.com
password: 12345678
```

### Configure Task Schedule

- To configure the automatic import from the API you have to add the following cron entry into your server.

```
* * * * * cd /path-to-your-project && php artisan schedule:run >> /dev/null 2>&1
```