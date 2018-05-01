<?php

$vendorDir = dirname(__DIR__);

return array (
  'charliedev/advanced-url-field' => 
  array (
    'class' => 'charliedev\\advancedurl\\AdvancedUrl',
    'basePath' => $vendorDir . '/charliedev/advanced-url-field/src',
    'handle' => 'advanced-url-field',
    'aliases' => 
    array (
      '@charliedev/advancedurl' => $vendorDir . '/charliedev/advanced-url-field/src',
    ),
    'name' => 'Advanced Url Field',
    'version' => '1.0.0',
    'schemaVersion' => '1.0.0',
    'description' => 'Configurable URL field that provides multiple format restrictions and validation.',
    'developer' => 'Charlie Development',
    'developerUrl' => 'http://charliedev.com/',
    'developerEmail' => 'support@charliedev.com',
    'changelogUrl' => 'https://raw.githubusercontent.com/charliedevelopment/craft3-advanced-url-field/master/CHANGELOG.md',
    'downloadUrl' => 'https://github.com/charliedevelopment/craft3-advanced-url-field/archive/master.zip',
    'hasCpSettings' => false,
    'hasCpSection' => false,
  ),
  'craftcms/ckeditor' => 
  array (
    'class' => 'craft\\ckeditor\\Plugin',
    'basePath' => $vendorDir . '/craftcms/ckeditor/src',
    'handle' => 'ckeditor',
    'aliases' => 
    array (
      '@craft/ckeditor' => $vendorDir . '/craftcms/ckeditor/src',
    ),
    'name' => 'CKEditor',
    'version' => '1.0.0-beta.2',
    'description' => 'Edit rich text content in Craft CMS using CKEditor.',
    'developer' => 'Pixel & Tonic',
    'developerUrl' => 'https://pixelandtonic.com/',
    'developerEmail' => 'support@craftcms.com',
    'documentationUrl' => 'https://github.com/craftcms/ckeditor',
    'changelogUrl' => 'https://raw.githubusercontent.com/craftcms/ckeditor/master/CHANGELOG.md',
    'downloadUrl' => 'https://github.com/craftcms/ckeditor/archive/master.zip',
  ),
  'craftcms/contact-form' => 
  array (
    'class' => 'craft\\contactform\\Plugin',
    'basePath' => $vendorDir . '/craftcms/contact-form/src',
    'handle' => 'contact-form',
    'aliases' => 
    array (
      '@craft/contactform' => $vendorDir . '/craftcms/contact-form/src',
    ),
    'name' => 'Contact Form',
    'version' => '2.1.1',
    'description' => 'Add a simple contact form to your Craft CMS site',
    'developer' => 'Pixel & Tonic',
    'developerUrl' => 'https://pixelandtonic.com/',
    'changelogUrl' => 'https://raw.githubusercontent.com/craftcms/contact-form/v2/CHANGELOG.md',
    'downloadUrl' => 'https://github.com/craftcms/contact-form/archive/v2.zip',
    'components' => 
    array (
      'mailer' => 'craft\\contactform\\Mailer',
    ),
  ),
  'craftcms/mailgun' => 
  array (
    'class' => 'craft\\mailgun\\Plugin',
    'basePath' => $vendorDir . '/craftcms/mailgun/src',
    'handle' => 'mailgun',
    'aliases' => 
    array (
      '@craft/mailgun' => $vendorDir . '/craftcms/mailgun/src',
    ),
    'name' => 'Mailgun',
    'version' => '1.2.0',
    'description' => 'Mailgun integration for Craft CMS',
    'developer' => 'Pixel & Tonic',
    'developerUrl' => 'https://pixelandtonic.com/',
    'developerEmail' => 'support@craftcms.com',
    'documentationUrl' => 'https://github.com/craftcms/mailgun',
    'changelogUrl' => 'https://raw.githubusercontent.com/craftcms/mailgun/master/CHANGELOG.md',
    'downloadUrl' => 'https://github.com/craftcms/mailgun/archive/master.zip',
  ),
  'lukeyouell/craft-mailgunevents' => 
  array (
    'class' => 'lukeyouell\\mailgunevents\\MailgunEvents',
    'basePath' => $vendorDir . '/lukeyouell/craft-mailgunevents/src',
    'handle' => 'mailgun-events',
    'aliases' => 
    array (
      '@lukeyouell/mailgunevents' => $vendorDir . '/lukeyouell/craft-mailgunevents/src',
    ),
    'name' => 'Mailgun Events',
    'version' => '1.0.1',
    'description' => 'Track Mailgun events from the utilities section',
    'developer' => 'Luke Youell',
    'developerUrl' => 'https://github.com/lukeyouell',
    'documentationUrl' => 'https://github.com/lukeyouell/craft-mailgunevents/blob/master/README.md',
    'changelogUrl' => 'https://raw.githubusercontent.com/lukeyouell/craft-mailgunevents/master/CHANGELOG.md',
    'hasCpSettings' => true,
    'hasCpSection' => false,
  ),
);
