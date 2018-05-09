<?php
return [
  'backend' => [
    'frontName' => 'admin'
  ],
  'crypt' => [
    'key' => '96cb6519a82be63d07eb64ab22b6849b'
  ],
  'db' => [
    'table_prefix' => '',
    'connection' => [
      'default' => [
        'host' => 'localhost',
        'dbname' => 'test_aws_magento',
        'username' => 'root',
        'password' => 'root',
        'active' => '1'
      ]
    ]
  ],
  'resource' => [
    'default_setup' => [
      'connection' => 'default'
    ]
  ],
  'x-frame-options' => 'SAMEORIGIN',
  'MAGE_MODE' => 'default',
  'session' => [
    'save' => 'files'
  ],
  'cache_types' => [
    'config' => 1,
    'layout' => 1,
    'block_html' => 1,
    'collections' => 1,
    'reflection' => 1,
    'db_ddl' => 1,
    'eav' => 1,
    'customer_notification' => 1,
    'config_integration' => 1,
    'config_integration_api' => 1,
    'full_page' => 1,
    'translate' => 1,
    'config_webservice' => 1,
    'compiled_config' => 1
  ],
  'install' => [
    'date' => 'Mon, 07 May 2018 16:55:38 +0000'
  ],
  'system' => [
    'default' => [
      'dev' => [
        'js' => [
          'session_storage_key' => 'collected_errors'
        ],
        'restrict' => [
          'allow_ips' => NULL
        ]
      ],
      'system' => [
        'smtp' => [
          'host' => 'localhost',
          'port' => '25'
        ]
      ],
      'web' => [
        'unsecure' => [
          'base_url' => 'http://test-aws.dev/',
          'base_link_url' => '{{unsecure_base_url}}',
          'base_static_url' => NULL,
          'base_media_url' => NULL
        ],
        'secure' => [
          'base_url' => 'https://test-aws.dev/',
          'base_link_url' => '{{secure_base_url}}',
          'base_static_url' => NULL,
          'base_media_url' => NULL
        ],
        'default' => [
          'front' => 'cms'
        ],
        'cookie' => [
          'cookie_path' => NULL,
          'cookie_domain' => NULL
        ]
      ],
      'admin' => [
        'url' => [
          'custom' => NULL
        ]
      ],
      'currency' => [
        'import' => [
          'error_email' => NULL
        ]
      ],
      'customer' => [
        'create_account' => [
          'email_domain' => 'example.com'
        ]
      ],
      'catalog' => [
        'productalert_cron' => [
          'error_email' => NULL
        ]
      ],
      'payment' => [
        'authorizenet_directpost' => [
          'debug' => '0',
          'email_customer' => '0',
          'login' => NULL,
          'merchant_email' => NULL,
          'test' => '1',
          'trans_key' => NULL,
          'trans_md5' => NULL,
          'cgi_url' => 'https://secure.authorize.net/gateway/transact.dll',
          'cgi_url_td' => 'https://api2.authorize.net/xml/v1/request.api'
        ],
        'payflowpro' => [
          'user' => NULL,
          'pwd' => NULL
        ],
        'payflow_link' => [
          'pwd' => NULL,
          'url_method' => 'GET'
        ],
        'payflow_advanced' => [
          'user' => 'PayPal',
          'pwd' => NULL,
          'url_method' => 'GET'
        ],
        'braintree' => [
          'private_key' => NULL
        ]
      ],
      'contact' => [
        'email' => [
          'recipient_email' => 'hello@example.com'
        ]
      ],
      'carriers' => [
        'dhl' => [
          'account' => NULL,
          'gateway_url' => 'https://xmlpi-ea.dhl.com/XMLShippingServlet',
          'id' => NULL,
          'password' => NULL
        ],
        'fedex' => [
          'account' => NULL,
          'meter_number' => NULL,
          'key' => NULL,
          'password' => NULL,
          'sandbox_mode' => '0',
          'production_webservices_url' => 'https://ws.fedex.com:443/web-services/',
          'sandbox_webservices_url' => 'https://wsbeta.fedex.com:443/web-services/'
        ],
        'ups' => [
          'access_license_number' => NULL,
          'gateway_url' => 'http://www.ups.com/using/services/rave/qcostcgi.cgi',
          'gateway_xml_url' => 'https://onlinetools.ups.com/ups.app/xml/Rate',
          'tracking_xml_url' => 'https://www.ups.com/ups.app/xml/Track',
          'username' => NULL,
          'password' => NULL,
          'is_account_live' => '0'
        ],
        'usps' => [
          'gateway_url' => 'http://production.shippingapis.com/ShippingAPI.dll',
          'gateway_secure_url' => 'https://secure.shippingapis.com/ShippingAPI.dll',
          'userid' => NULL,
          'password' => NULL
        ]
      ],
      'trans_email' => [
        'ident_custom1' => [
          'email' => 'custom1@example.com',
          'name' => 'Custom 1'
        ],
        'ident_custom2' => [
          'email' => 'custom2@example.com',
          'name' => 'Custom 2'
        ],
        'ident_general' => [
          'email' => 'owner@example.com',
          'name' => 'Owner'
        ],
        'ident_sales' => [
          'email' => 'sales@example.com',
          'name' => 'Sales'
        ],
        'ident_support' => [
          'email' => 'support@example.com',
          'name' => 'CustomerSupport'
        ]
      ],
      'analytics' => [
        'url' => [
          'signup' => 'https://advancedreporting.rjmetrics.com/signup',
          'update' => 'https://advancedreporting.rjmetrics.com/update',
          'bi_essentials' => 'https://dashboard.rjmetrics.com/v2/magento/signup',
          'otp' => 'https://advancedreporting.rjmetrics.com/otp',
          'report' => 'https://advancedreporting.rjmetrics.com/report',
          'notify_data_changed' => 'https://advancedreporting.rjmetrics.com/report'
        ]
      ],
      'newrelicreporting' => [
        'general' => [
          'api_url' => 'https://api.newrelic.com/deployments.xml',
          'insights_api_url' => 'https://insights-collector.newrelic.com/v1/accounts/%s/events'
        ]
      ],
      'fraud_protection' => [
        'signifyd' => [
          'api_url' => 'https://api.signifyd.com/v2/',
          'api_key' => NULL
        ]
      ],
      'sitemap' => [
        'generate' => [
          'error_email' => NULL
        ]
      ],
      'paypal' => [
        'wpp' => [
          'api_password' => NULL,
          'api_signature' => NULL,
          'api_username' => NULL
        ],
        'fetch_reports' => [
          'ftp_login' => NULL,
          'ftp_password' => NULL
        ]
      ],
      'crontab' => [
        'default' => [
          'jobs' => [
            'analytics_subscribe' => [
              'schedule' => [
                'cron_expr' => '0 * * * *'
              ]
            ]
          ]
        ]
      ]
    ]
  ]
];
