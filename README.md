### WordPress Docker Dev Environment with Live Reload
=================================================

A minimal Docker-based setup for WordPress plugin and theme development using the WordPress source code (included in repo), MySQL, phpMyAdmin, and BrowserSync for live reloading.

### Project Structure
-----------------

.
├── wordpress/          # WordPress source
├── browsersync/        # BrowserSync config and environment
│   └── bs-config.js    # BrowserSync configuration
├── Dockerfile          # Custom minimal PHP Apache setup
└── docker-compose.yml  # Multi-service orchestration

### Prerequsite 
- You need to have docker installed in you system

### How to Start
------------
1. Clone the repository
    ```
    git@github.com:mirsahib/SyncPress.git
    cd SyncPress
    ```
2. Build and start all containers:

   docker-compose up --build

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
