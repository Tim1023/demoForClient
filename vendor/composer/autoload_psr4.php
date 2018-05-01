<?php

// autoload_psr4.php @generated by Composer

$vendorDir = dirname(dirname(__FILE__));
$baseDir = dirname($vendorDir);

return array(
    'yii\\swiftmailer\\' => array($vendorDir . '/yiisoft/yii2-swiftmailer/src'),
    'yii\\queue\\sync\\' => array($vendorDir . '/yiisoft/yii2-queue/src/drivers/sync'),
    'yii\\queue\\redis\\' => array($vendorDir . '/yiisoft/yii2-queue/src/drivers/redis'),
    'yii\\queue\\gearman\\' => array($vendorDir . '/yiisoft/yii2-queue/src/drivers/gearman'),
    'yii\\queue\\file\\' => array($vendorDir . '/yiisoft/yii2-queue/src/drivers/file'),
    'yii\\queue\\db\\' => array($vendorDir . '/yiisoft/yii2-queue/src/drivers/db'),
    'yii\\queue\\beanstalk\\' => array($vendorDir . '/yiisoft/yii2-queue/src/drivers/beanstalk'),
    'yii\\queue\\amqp_interop\\' => array($vendorDir . '/yiisoft/yii2-queue/src/drivers/amqp_interop'),
    'yii\\queue\\amqp\\' => array($vendorDir . '/yiisoft/yii2-queue/src/drivers/amqp'),
    'yii\\queue\\' => array($vendorDir . '/yiisoft/yii2-queue/src'),
    'yii\\debug\\' => array($vendorDir . '/yiisoft/yii2-debug'),
    'yii\\composer\\' => array($vendorDir . '/yiisoft/yii2-composer'),
    'yii\\bootstrap\\' => array($vendorDir . '/yiisoft/yii2-bootstrap/src'),
    'yii\\' => array($vendorDir . '/yiisoft/yii2'),
    'modules\\' => array($baseDir . '/modules'),
    'mikehaertl\\shellcommand\\' => array($vendorDir . '/mikehaertl/php-shellcommand/src'),
    'lukeyouell\\mailgunevents\\' => array($vendorDir . '/lukeyouell/craft-mailgunevents/src'),
    'enshrined\\svgSanitize\\' => array($vendorDir . '/enshrined/svg-sanitize/src'),
    'cspoo\\Swiftmailer\\MailgunBundle\\' => array($vendorDir . '/cspoo/swiftmailer-mailgun-bundle'),
    'creocoder\\nestedsets\\' => array($vendorDir . '/creocoder/yii2-nested-sets/src'),
    'craftcms\\oauth2\\client\\' => array($vendorDir . '/craftcms/oauth2-craftid/src'),
    'craft\\mailgun\\' => array($vendorDir . '/craftcms/mailgun/src'),
    'craft\\contactform\\' => array($vendorDir . '/craftcms/contact-form/src'),
    'craft\\composer\\' => array($vendorDir . '/craftcms/plugin-installer/src'),
    'craft\\ckeditor\\' => array($vendorDir . '/craftcms/ckeditor/src'),
    'craft\\' => array($vendorDir . '/craftcms/cms/src'),
    'charliedev\\advancedurl\\' => array($vendorDir . '/charliedev/advanced-url-field/src'),
    'cebe\\markdown\\' => array($vendorDir . '/cebe/markdown'),
    'Zend\\Stdlib\\' => array($vendorDir . '/zendframework/zend-stdlib/src'),
    'Zend\\Feed\\' => array($vendorDir . '/zendframework/zend-feed/src'),
    'Zend\\Escaper\\' => array($vendorDir . '/zendframework/zend-escaper/src'),
    'Webmozart\\Assert\\' => array($vendorDir . '/webmozart/assert/src'),
    'Twig\\' => array($vendorDir . '/twig/twig/src'),
    'Symfony\\Polyfill\\Mbstring\\' => array($vendorDir . '/symfony/polyfill-mbstring'),
    'Symfony\\Component\\Process\\' => array($vendorDir . '/symfony/process'),
    'Symfony\\Component\\OptionsResolver\\' => array($vendorDir . '/symfony/options-resolver'),
    'Symfony\\Component\\Finder\\' => array($vendorDir . '/symfony/finder'),
    'Symfony\\Component\\Filesystem\\' => array($vendorDir . '/symfony/filesystem'),
    'Symfony\\Component\\DependencyInjection\\' => array($vendorDir . '/symfony/dependency-injection'),
    'Symfony\\Component\\Debug\\' => array($vendorDir . '/symfony/debug'),
    'Symfony\\Component\\Console\\' => array($vendorDir . '/symfony/console'),
    'Stringy\\' => array($vendorDir . '/danielstjules/stringy/src'),
    'Stichoza\\GoogleTranslate\\' => array($vendorDir . '/stichoza/google-translate-php/src/Stichoza/GoogleTranslate'),
    'Seld\\PharUtils\\' => array($vendorDir . '/seld/phar-utils/src'),
    'Seld\\JsonLint\\' => array($vendorDir . '/seld/jsonlint/src/Seld/JsonLint'),
    'Seld\\CliPrompt\\' => array($vendorDir . '/seld/cli-prompt/src'),
    'Psr\\Log\\' => array($vendorDir . '/psr/log/Psr/Log'),
    'Psr\\Http\\Message\\' => array($vendorDir . '/psr/http-message/src'),
    'Psr\\Container\\' => array($vendorDir . '/psr/container/src'),
    'LitEmoji\\' => array($vendorDir . '/elvanto/litemoji/src'),
    'League\\OAuth2\\Client\\' => array($vendorDir . '/league/oauth2-client/src'),
    'League\\Flysystem\\' => array($vendorDir . '/league/flysystem/src'),
    'JsonSchema\\' => array($vendorDir . '/justinrainbow/json-schema/src/JsonSchema'),
    'Http\\Promise\\' => array($vendorDir . '/php-http/promise/src'),
    'Http\\Message\\MultipartStream\\' => array($vendorDir . '/php-http/multipart-stream-builder/src'),
    'Http\\Message\\' => array($vendorDir . '/php-http/message/src', $vendorDir . '/php-http/message-factory/src'),
    'Http\\Discovery\\' => array($vendorDir . '/php-http/discovery/src'),
    'Http\\Client\\Common\\' => array($vendorDir . '/php-http/client-common/src'),
    'Http\\Client\\' => array($vendorDir . '/php-http/httplug/src'),
    'Http\\Adapter\\Guzzle6\\' => array($vendorDir . '/php-http/guzzle6-adapter/src'),
    'GuzzleHttp\\Psr7\\' => array($vendorDir . '/guzzlehttp/psr7/src'),
    'GuzzleHttp\\Promise\\' => array($vendorDir . '/guzzlehttp/promises/src'),
    'GuzzleHttp\\' => array($vendorDir . '/guzzlehttp/guzzle/src'),
    'GoogleTranslate\\' => array($vendorDir . '/viniciusgava/google-translate-api/src'),
    'Egulias\\EmailValidator\\' => array($vendorDir . '/egulias/email-validator/EmailValidator'),
    'Dotenv\\' => array($vendorDir . '/vlucas/phpdotenv/src'),
    'Composer\\Spdx\\' => array($vendorDir . '/composer/spdx-licenses/src'),
    'Composer\\Semver\\' => array($vendorDir . '/composer/semver/src'),
    'Composer\\CaBundle\\' => array($vendorDir . '/composer/ca-bundle/src'),
    'Composer\\' => array($vendorDir . '/composer/composer/src/Composer'),
    'Clue\\StreamFilter\\' => array($vendorDir . '/clue/stream-filter/src'),
    'Beeyev\\YaTranslate\\' => array($vendorDir . '/beeyev/yandex-translate/src'),
);