Instructions

- run 'php artisan migrate' to create the database and the crosswords table
- run 'php artisan serve' to start the laravel server
- I assumed that crosswords data will be filled manually and add to db
- to add new crosswords table record use the /add route
- to search crosswords by date access the /date-search route

Which infrastructure resources you would need to run the utility daily in an automated fashion?

    I assume that we want to bring the NY times crosswords daily to our platform. Here how I would do:
    - If we had access to a REST API from NY times, I would cron a script on our server which runs daily and calls the API in order to bring the data in our hands, and save it in our DB. Now we have the data saved and ready to be shown
    - In case we don't have access to NY API, I would use a Python script with selenium, which runs daily (cron on the server) and accesses the web site, clicks on show results button in order to have the data in the html structure, then save it to DB.

How would you deploy your code to the infrastructure?

    1. We need a server on which we store our project. I used DigitalOcean before, so I would choose it to provide the server.
    2. Setting up the server (configuration): php, composer, database server, env vars and the web server (I would use nginx).
    3. Clone the code repository to our server.
    4. Install dependencies.
    5. Generate application key and migrate our database to create the required tables.
    6. Web server configuration (nginx conf)
    7. Set permissions to ensure nginx has the necessary permissions to write to specific directories.
    8. Configure the domain and DNS in Digital Ocean and sync it with nginx.
    9. Set up a deployment workflow with Deployer.
    10. Set up monitoring and alerting tools to detect and respond to issues.
    11. Implement regular backups to our app data and server configuration.

How would you automate your deployments so that each push to your default branch will trigger a deployment to your production environment?

    First, we need our laravel project to be hosted on a version control platform. Then we need a CI/CD service like Github Actions.
    I would create a deployment script in Bash that: 
        - Clone the latest code from the Git repository.
        - Install Composer dependencies.
        - Set up environment variables.
        - Run database migrations (if needed).
        - Configure the web server to point to the new code.
        - Restart or reload the web server.
    Then I would configure the deployment workflow for GitHub Actions.


