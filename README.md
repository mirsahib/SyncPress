## SyncPress
=================================================

A minimal Docker-based setup for WordPress plugin and theme development using the WordPress source code (included in repo), MySQL, phpMyAdmin, and BrowserSync for live reloading.

### Project Structure
-----------------

```bash
.
├── wordpress/          # WordPress source
├── browsersync/        # BrowserSync config and environment
│   └── bs-config.js    # BrowserSync configuration
├── Dockerfile          # Custom minimal PHP Apache setup
└── docker-compose.yml  # Multi-service orchestration

```
### Prerequsite 
- You need to have [docker](https://docs.docker.com/get-started/get-docker/) installed in you system

### How to Start
------------
1. Clone (or use this repo as template) the repository
    ```bash
    git clone git@github.com:mirsahib/SyncPress.git
    cd SyncPress
    ```
   - Click on `Use this template` to create a new repository in you gihub.
2. Rename the .env.d file to .env file and and change the
   ```
   ROOT_DIR=<Your Root Directory Name>
   APP_CONTAINER=${ROOT_DIR}_app
   DB_CONTAINER=${ROOT_DIR}_db
   BS_CONTAINER=${ROOT_DIR}_browsersync
   PMA_CONTAINER=${ROOT_DIR}_phpmyadmin
   ```

2. Build and start all containers:

   ```bash
   docker ps prune -a # just to be sure no duplicate container exist
   docker-compose up --build
   ```

3. Access services:

   - WordPress:    http://localhost:8000
   - phpMyAdmin:   http://localhost:8080
   - BrowserSync:  http://localhost:3000 <=== development

WordPress DB Credentials
------------------------

- Database Host: db
- DB Name:       wordpress
- DB User:       wordpress
- DB Password:   wordpress

Plugin/Theme Development
------------------------

- Plugins: wordpress/wp-content/plugins/your-plugin/
- Themes:  wordpress/wp-content/themes/your-theme/

Live reload will trigger on changes to `.php`, `.js`, or `.css` files.

### Troubleshoot
- Can't create file and folder in wordpress directory
```bash
sudo chown -R $USER:$USER ./wordpress
sudo chmod -R u+rw ./wordpress
docker-compose down
docker-compose up --build
```
