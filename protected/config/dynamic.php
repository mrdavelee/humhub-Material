<?php return array (
  'components' => 
  array (
    'db' => 
    array (
      'class' => 'yii\\db\\Connection',
      'dsn' => 'mysql:host=localhost;dbname=eventhub',
      'username' => 'eventhub_dbuser',
      'password' => 'Platinumsun1',
      'charset' => 'utf8',
    ),
    'user' => 
    array (
    ),
    'mailer' => 
    array (
      'transport' => 
      array (
        'class' => 'Swift_MailTransport',
      ),
      'view' => 
      array (
        'theme' => 
        array (
          'name' => 'Material',
          'basePath' => '/Applications/MAMP/htdocs/humhub/themes/Material',
        ),
      ),
    ),
    'view' => 
    array (
      'theme' => 
      array (
        'name' => 'Material',
        'basePath' => '/Applications/MAMP/htdocs/humhub/themes/Material',
      ),
    ),
    'formatter' => 
    array (
      'defaultTimeZone' => 'Europe/Berlin',
    ),
    'formatterApp' => 
    array (
      'defaultTimeZone' => 'Europe/Berlin',
      'timeZone' => 'Europe/Berlin',
    ),
  ),
  'params' => 
  array (
    'installer' => 
    array (
      'db' => 
      array (
        'installer_hostname' => 'localhost',
        'installer_database' => 'eventhub',
      ),
    ),
    'settings' => 
    array (
      'core' => 
      array (
        'colorDefault' => '#ededed',
        'colorPrimary' => '#00868B',
        'colorInfo' => '#308014',
        'colorSuccess' => '#97d271',
        'colorWarning' => '#fdd198',
        'colorDanger' => '#ff8989',
        'oembedProviders' => '{"vimeo.com":"http:\\/\\/vimeo.com\\/api\\/oembed.json?scheme=https&url=%url%&format=json&maxwidth=450","youtube.com":"http:\\/\\/www.youtube.com\\/oembed?scheme=https&url=%url%&format=json&maxwidth=450","youtu.be":"http:\\/\\/www.youtube.com\\/oembed?scheme=https&url=%url%&format=json&maxwidth=450","soundcloud.com":"https:\\/\\/soundcloud.com\\/oembed?url=%url%&format=json&maxwidth=450","slideshare.net":"https:\\/\\/www.slideshare.net\\/api\\/oembed\\/2?url=%url%&format=json&maxwidth=450"}',
        'name' => 'EventHub',
        'baseUrl' => 'http://localhost:8888/humhub',
        'paginationSize' => '10',
        'displayNameFormat' => '{profile.firstname} {profile.lastname}',
        'theme' => 'Material',
        'defaultLanguage' => 'en_gb',
        'useCase' => 'community',
        'secret' => 'ab970963-82d1-4a1e-bea8-b0815c43c325',
        'timeZone' => 'Europe/Berlin',
      ),
      'space' => 
      array (
        'defaultVisibility' => '1',
        'defaultJoinPolicy' => '1',
        'spaceOrder' => '0',
      ),
      'authentication' => 
      array (
        'authInternal' => '1',
        'authLdap' => '0',
      ),
      'authentication_ldap' => 
      array (
        'refreshUsers' => '1',
      ),
      'authentication_internal' => 
      array (
        'needApproval' => '0',
        'anonymousRegistration' => '1',
        'internalUsersCanInvite' => '1',
        'allowGuestAccess' => '1',
      ),
      'mailing' => 
      array (
        'transportType' => 'php',
        'systemEmailAddress' => 'mrdavelee2012@gmail.com',
        'systemEmailName' => 'EventHub',
        'receive_email_activities' => '1',
        'receive_email_notifications' => '2',
        'hostname' => 'smtp.gmail.com',
        'username' => 'mrdavelee2012@gmail.com',
        'password' => 'platinumsun',
        'port' => '587',
        'encryption' => 'tls',
        'allowSelfSignedCerts' => '0',
      ),
      'file' => 
      array (
        'maxFileSize' => '1048576',
        'maxPreviewImageWidth' => '200',
        'maxPreviewImageHeight' => '200',
        'hideImageFileInfo' => '0',
      ),
      'cache' => 
      array (
        'type' => 'CFileCache',
        'expireTime' => '3600',
      ),
      'admin' => 
      array (
        'installationId' => '94b813b9fc6000c943cae6cba6eb3809',
      ),
      'tour' => 
      array (
        'enable' => '1',
      ),
      'share' => 
      array (
        'enable' => '1',
      ),
      'notification' => 
      array (
        'enable_html5_desktop_notifications' => '0',
      ),
      'birthday' => 
      array (
        'shownDays' => '2',
      ),
      'mostactiveusers' => 
      array (
        'noUsers' => '5',
      ),
      'installer' => 
      array (
        'sampleData' => '1',
      ),
    ),
    'config_created_at' => 1456339164,
    'databaseInstalled' => true,
    'installed' => true,
  ),
  'name' => 'EventHub',
  'language' => 'en_gb',
  'timeZone' => 'Europe/Berlin',
); ?>