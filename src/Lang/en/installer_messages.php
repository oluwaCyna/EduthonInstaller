<?php

return [

    /*
     *
     * Shared translations.
     *
     */
    'title' => 'Laravel Installer',
    'next' => 'Next Step',
    'back' => 'Previous',
    'finish' => 'Install',
    'forms' => [
        'errorTitle' => 'The Following errors occurred:',
    ],

    /*
     *
     * Home page translations.
     *
     */
    'welcome' => [
        'templateTitle' => 'Welcome',
        'title'   => 'Laravel Installer',
        'message' => 'Easy Installation and Setup Wizard.',
        'next'    => 'Verify Purchase Code',
    ],

    /*
     *
     * Purchase page translations.
     *
     */
    'purchase' => [
        'menu' => [
            'templateTitle' => 'Step 1 | Purchase Code',
            'title' => 'Verify Purchase Code',
            'desc' => 'Please enter the secret key and purchase code provided for you to verify this application.',
            'wizard-button' => 'Form Wizard Setup',
            'classic-button' => 'Classic Text Editor'
        ],

        'form' => [
            'secret_key_required' => 'Scret key is required.',
            'secret_key_label' => 'Scret Key',
            'secret_key_placeholder' => 'Enter your secret key',
            'purchase_code_required' => 'Secret key is required.',
            'purchase_code_label' => 'Purchase Code',
            'purchase_code_placeholder' => 'Enter your purchase code',

            'buttons' => [
                'install' => 'Verify',
            ],
        ],
        'success' => 'Your purchase code has been saved.',
        'errors' => 'Unable to verify the purchase code, Please make sure you input the correct data.',
    ],


    /*
     *
     * Requirements page translations.
     *
     */
    'requirements' => [
        'templateTitle' => 'Step 2 | Server Requirements',
        'title' => 'Server Requirements',
        'next'    => 'Check Permissions',
    ],

    /*
     *
     * Permissions page translations.
     *
     */
    'permissions' => [
        'templateTitle' => 'Step 3 | Permissions',
        'title' => 'Permissions',
        'next' => 'Configure Application details',
    ],

    /*
     *
     * Environment page translations.
     *
     */
    'environment' => [
        'menu' => [
            'templateTitle' => 'Step 4 | Environment Settings',
            'title' => 'Environment Settings',
            'desc' => 'Please select how you want to configure the apps <code>.env</code> file.',
            'wizard-button' => 'Form Wizard Setup',
            'classic-button' => 'Classic Text Editor',
        ],
        'wizard' => [
            'templateTitle' => 'Step 4 | Environment Settings | Guided Wizard',
            'title' => 'Guided <code>.env</code> Wizard',
            'tabs' => [
                'environment' => 'Environment',
                'database' => 'Database',
                'application' => 'Application',
            ],
            'form' => [
                'name_required' => 'An environment name is required.',
                'app_name_label' => 'App Name',
                'app_name_placeholder' => 'App Name',
                'app_environment_label' => 'App Environment',
                'app_environment_label_local' => 'Local',
                'app_environment_label_developement' => 'Development',
                'app_environment_label_qa' => 'Qa',
                'app_environment_label_production' => 'Production',
                'app_environment_label_other' => 'Other',
                'app_environment_placeholder_other' => 'Enter your environment...',
                'app_debug_label' => 'App Debug',
                'app_debug_label_true' => 'True',
                'app_debug_label_false' => 'False',
                'app_log_level_label' => 'App Log Level',
                'app_log_level_label_debug' => 'debug',
                'app_log_level_label_info' => 'info',
                'app_log_level_label_notice' => 'notice',
                'app_log_level_label_warning' => 'warning',
                'app_log_level_label_error' => 'error',
                'app_log_level_label_critical' => 'critical',
                'app_log_level_label_alert' => 'alert',
                'app_log_level_label_emergency' => 'emergency',
                'app_url_label' => 'App Url',
                'app_url_placeholder' => 'App Url',
                'db_connection_failed' => 'Could not connect to the database.',
                'db_connection_label' => 'Database Connection',
                'db_connection_label_mysql' => 'mysql',
                'db_connection_label_sqlite' => 'sqlite',
                'db_connection_label_pgsql' => 'pgsql',
                'db_connection_label_sqlsrv' => 'sqlsrv',
                'db_host_label' => 'Database Host',
                'db_host_placeholder' => 'Database Host',
                'db_port_label' => 'Database Port',
                'db_port_placeholder' => 'Database Port',
                'db_name_label' => 'Database Name',
                'db_name_placeholder' => 'Database Name',
                'db_username_label' => 'Database User Name',
                'db_username_placeholder' => 'Database User Name',
                'db_password_label' => 'Database Password',
                'db_password_placeholder' => 'Database Password',

                'app_tabs' => [
                    'more_info' => 'More Info',
                    'broadcasting_title' => 'Broadcasting, Caching, Session, &amp; Queue',
                    'broadcasting_label' => 'Broadcast Driver',
                    'broadcasting_placeholder' => 'Broadcast Driver',
                    'cache_label' => 'Cache Driver',
                    'cache_placeholder' => 'Cache Driver',
                    'session_label' => 'Session Driver',
                    'session_placeholder' => 'Session Driver',
                    'queue_label' => 'Queue Driver',
                    'queue_placeholder' => 'Queue Driver',
                    'redis_label' => 'Redis Driver',
                    'redis_host' => 'Redis Host',
                    'redis_password' => 'Redis Password',
                    'redis_port' => 'Redis Port',

                    'mail_label' => 'Mail',
                    'mail_driver_label' => 'Mail Driver',
                    'mail_driver_placeholder' => 'Mail Driver',
                    'mail_host_label' => 'Mail Host',
                    'mail_host_placeholder' => 'Mail Host',
                    'mail_port_label' => 'Mail Port',
                    'mail_port_placeholder' => 'Mail Port',
                    'mail_username_label' => 'Mail Username',
                    'mail_username_placeholder' => 'Mail Username',
                    'mail_password_label' => 'Mail Password',
                    'mail_password_placeholder' => 'Mail Password',
                    'mail_encryption_label' => 'Mail Encryption',
                    'mail_encryption_placeholder' => 'Mail Encryption',

                    'pusher_label' => 'Pusher',
                    'pusher_app_id_label' => 'Pusher App Id',
                    'pusher_app_id_palceholder' => 'Pusher App Id',
                    'pusher_app_key_label' => 'Pusher App Key',
                    'pusher_app_key_palceholder' => 'Pusher App Key',
                    'pusher_app_secret_label' => 'Pusher App Secret',
                    'pusher_app_secret_palceholder' => 'Pusher App Secret',
                ],
                'buttons' => [
                    'setup_database' => 'Setup Database',
                    'setup_application' => 'Setup Application',
                    'install' => 'Install',
                ],
            ],
        ],
        'classic' => [
            'templateTitle' => 'Step 4 | Environment Settings | Classic Editor',
            'title' => 'Classic Environment Editor',
            'save' => 'Save .env',
            'back' => 'Use Form Wizard',
            'install' => 'Save and Install',
        ],
        'success' => 'Your .env file settings have been saved.',
        'errors' => 'Unable to save the .env file, Please create it manually.',
    ],

    /*
     *
     * Application details page translations.
     *
     */
    'application_details' => [
        'menu' => [
            'templateTitle' => 'Step 5 | Application Details',
            'title' => 'Application Details',
            'desc' => 'Please enter the details as you want.',
            'tabs' => [
                'login' => 'Login Details',
                'school_info' => 'School Information',
                'school_owner' => 'School Owner\'s details',
            ],
            'form' => [
                'app_url_required' => 'An App URL is required.',
                'app_url_label' => 'App URL',
                'app_url_placeholder' => 'Enter your app url...',
                'app_email_required' => 'App Login Email is required.',
                'app_email_label' => 'App Login Email',
                'app_email_placeholder' => 'Enter your app login email address...',
                'app_password_required' => 'App Login Password is required.',
                'app_password_label' => 'App Login Password',
                'app_password_placeholder' => 'Enter your app login password...',

                'school_name_required' => 'School Name is required.',
                'school_name_label' => 'School Name',
                'school_name_placeholder' => 'Enter your school name...',
                'site_title_required' => 'Website Title is required.',
                'site_title_label' => 'Site Title',
                'site_title_placeholder' => 'Enter website title...',
                'site_desc_required' => 'Website Description is required.',
                'site_desc_label' => 'Website Description',
                'site_desc_placeholder' => 'Enter website description...',
                'site_keyword_required' => 'Website Keyword is required.',
                'site_keyword_label' => 'Website Keyword',
                'site_keyword_placeholder' => 'Enter website keywords...',
                'support_email_required' => 'School Support Email Address is required.',
                'support_email_label' => 'School Support Email Address',
                'support_email_placeholder' => 'Enter school support email address...',
                'support_phone_required' => 'School Support Phone Number is required.',
                'support_phone_label' => 'School Support Phone Number',
                'support_phone_placeholder' => 'Enter school support phone number...',
                'session_required' => 'Start Session is required.',
                'session_label' => 'Start Session',
                'session_placeholder' => 'Enter school start session like 2021-2022',
                'currency_required' => 'Currency is required.',
                'currency_label' => 'Currency',
                'currency_label_none' => 'Select currency',
                'currency_label_naira' => 'Naira',
                'currency_label_usd' => 'US Dollar',
                'currency_label_euro' => 'Euro',
                'currency_label_pounds' => 'Pounds',

                'owner_fname_required' => 'First Name is required.',
                'owner_fname_label' => 'First Name',
                'owner_fname_placeholder' => 'Enter your first name...',
                'owner_lname_required' => 'Last Name is required.',
                'owner_lname_label' => 'Last Name',
                'owner_lname_placeholder' => 'Enter your last name...',
                'owner_gender_required' => 'Gender is required.',
                'owner_gender_label' => 'Gender',
                'owner_gender_label_male' => 'Male',
                'owner_gender_label_female' => 'Female',
                'owner_gender_label_none' => 'Select a gender',
                'owner_phone_required' => 'Phone number is required.',
                'owner_phone_label' => 'Phone Number',
                'owner_phone_placeholder' => 'Enter your phone number...',
                
                'buttons' => [
                    'setup_school_info' => 'Setup School Information',
                    'setup_owner_details' => 'Setup Owner\'s Details',
                    'save' => 'Setup Environment',
                ],
            ],
        ],
        'success' => 'Your .env file settings have been saved.',
        'errors' => 'Unable to save the .env file, Please create it manually.',
    ],

    'install' => 'Install',

    /*
     *
     * Installed Log translations.
     *
     */
    'installed' => [
        'success_log_message' => 'Laravel Installer successfully INSTALLED on ',
    ],

    /*
     *
     * Final page translations.
     *
     */
    'final' => [
        'title' => 'Installation Finished',
        'templateTitle' => 'Installation Finished',
        'finished' => 'Application has been successfully installed.',
        'migration' => 'Migration &amp; Seed Console Output:',
        'console' => 'Application Console Output:',
        'log' => 'Installation Log Entry:',
        'env' => 'Final .env File:',
        'exit' => 'Click here to exit',
    ],

    /*
     *
     * Update specific translations
     *
     */
    'updater' => [
        /*
         *
         * Shared translations.
         *
         */
        'title' => 'Laravel Updater',

        /*
         *
         * Welcome page translations for update feature.
         *
         */
        'welcome' => [
            'title'   => 'Welcome To The Updater',
            'message' => 'Welcome to the update wizard.',
        ],

        /*
         *
         * Welcome page translations for update feature.
         *
         */
        'overview' => [
            'title'   => 'Overview',
            'message' => 'There is 1 update.|There are :number updates.',
            'install_updates' => 'Install Updates',
        ],

        /*
         *
         * Final page translations.
         *
         */
        'final' => [
            'title' => 'Finished',
            'finished' => 'Application\'s database has been successfully updated.',
            'exit' => 'Click here to exit',
        ],

        'log' => [
            'success_message' => 'Laravel Installer successfully UPDATED on ',
        ],
    ],
];
