<?php
/**
 * Obsolete constants
 *
 * Format: array(<constant_name>[, <class_scope> = ''[, <replacement>]])
 *
 * Copyright © 2015 Magento. All rights reserved.
 * See COPYING.txt for license details.
 */

// @codingStandardsIgnoreFile

return [
    ['ADMIN_STORE_ID', 'Magento\Framework\AppInterface'],
    ['BACKORDERS_BELOW'],
    ['DS'],
    ['BACKORDERS_YES'],
    ['CACHE_TAG', 'Magento\Api\Model\Config', 'Magento_Api_Model_Cache_Type::CACHE_TAG'],
    ['CACHE_TAG', 'Magento\Framework\AppInterface'],
    [
        'CACHE_TAG',
        'Magento\Framework\Model\Resource\Db\Collection\AbstractCollection',
        'Magento_Core_Model_Cache_Type_Collection::CACHE_TAG'
    ],
    ['CACHE_TAG', 'Magento\Framework\Translate', 'Magento_Core_Model_Cache_Type_Translate::CACHE_TAG'],
    ['CACHE_TAG', 'Magento\Rss\Block\Catalog\NotifyStock'],
    ['CACHE_TAG', 'Magento\Rss\Block\Catalog\Review'],
    ['CACHE_TAG', 'Magento\Rss\Block\Order\NewOrder'],
    ['CATEGORY_APPLY_CATEGORY_AND_PRODUCT_ONLY'],
    ['CATEGORY_APPLY_CATEGORY_AND_PRODUCT_RECURSIVE'],
    ['CATEGORY_APPLY_CATEGORY_ONLY'],
    ['CATEGORY_APPLY_CATEGORY_RECURSIVE'],
    ['CHECKOUT_METHOD_GUEST'],
    ['CHECKOUT_METHOD_REGISTER'],
    ['CHECKSUM_KEY_NAME'],
    ['CONFIG_TEMPLATE_INSTALL_DATE'],
    ['CONFIG_XML_PATH_DEFAULT_PRODUCT_TAX_GROUP'],
    ['CONFIG_XML_PATH_DISPLAY_FULL_SUMMARY'],
    ['CONFIG_XML_PATH_DISPLAY_TAX_COLUMN'],
    ['CONFIG_XML_PATH_DISPLAY_ZERO_TAX'],
    ['CONFIG_XML_PATH_SHOW_IN_CATALOG'],
    [
        'DEFAULT_SETUP_RESOURCE',
        'Mage_Core_Model_Resource',
        'Magento_Core_Model_Config_Resource::DEFAULT_SETUP_CONNECTION'
    ],
    [
        'DEFAULT_READ_RESOURCE',
        'Mage_Core_Model_Resource',
        'Magento_Core_Model_Config_Resource::DEFAULT_READ_CONNECTION'
    ],
    [
        'DEFAULT_WRITE_RESOURCE',
        'Mage_Core_Model_Resource',
        'Magento_Core_Model_Config_Resource::DEFAULT_WRITE_CONNECTION'
    ],
    ['DEFAULT_CURRENCY', 'Magento\Framework\Locale', 'Magento_Core_Model_LocaleInterface::DEFAULT_CURRENCY'],
    ['DEFAULT_READ_CONNECTION', 'Magento\Framework\App\Resource\Config'],
    ['DEFAULT_WRITE_CONNECTION', 'Magento\Framework\App\Resource\Config'],
    ['DEFAULT_ERROR_HANDLER', 'Mage'],
    ['DEFAULT_LOCALE', 'Magento\Framework\Locale', 'Magento_Core_Model_LocaleInterface::DEFAULT_LOCALE'],
    ['DEFAULT_THEME_NAME', 'Magento\Core\Model\Design\PackageInterface'],
    ['DEFAULT_THEME_NAME', 'Magento\Core\Model\Design\Package'],
    ['DEFAULT_TIMEZONE', 'Magento\Framework\Locale', 'Magento_Core_Model_LocaleInterface::DEFAULT_TIMEZONE'],
    ['DEFAULT_STORE_ID', 'Magento\Catalog\Model\AbstractModel', 'Magento\Store\Model\Store::DEFAULT_STORE_ID'],
    ['DEFAULT_VALUE_TABLE_PREFIX'],
    ['DIVIDE_EPSILON', 'Magento\Core\Helper\Data'],
    ['ENTITY_PRODUCT', 'Magento\Review\Model\Review'],
    ['EXCEPTION_CODE_IS_GROUPED_PRODUCT'],
    ['FALLBACK_MAP_DIR', 'Magento\Core\Model\Design\PackageInterface'],
    ['FORMAT_TYPE_FULL', 'Magento\Framework\Locale', 'Magento_Core_Model_LocaleInterface::FORMAT_TYPE_FULL'],
    ['FORMAT_TYPE_LONG', 'Magento\Framework\Locale', 'Magento_Core_Model_LocaleInterface::FORMAT_TYPE_LONG'],
    ['FORMAT_TYPE_MEDIUM', 'Magento\Framework\Locale', 'Magento_Core_Model_LocaleInterface::FORMAT_TYPE_MEDIUM'],
    ['FORMAT_TYPE_SHORT', 'Magento\Framework\Locale', 'Magento_Core_Model_LocaleInterface::FORMAT_TYPE_SHORT'],
    ['GALLERY_IMAGE_TABLE', 'Magento\Catalog\Model\Resource\Product\Attribute\Backend\Media'],
    ['HASH_ALGO'],
    ['INIT_OPTION_DIRS', 'Magento\Core\Model\App', 'Magento_Core_Model_App::PARAM_APP_DIRS'],
    ['INIT_OPTION_REQUEST', 'Magento\Core\Model\App'],
    ['INIT_OPTION_RESPONSE', 'Magento\Core\Model\App'],
    ['INIT_OPTION_SCOPE_CODE', 'Magento\Core\Model\App', 'Magento_Core_Model_App::PARAM_RUN_CODE'],
    ['INIT_OPTION_SCOPE_TYPE', 'Magento\Core\Model\App', 'Magento_Core_Model_App::PARAM_RUN_TYPE'],
    ['INIT_OPTION_URIS', 'Magento\Core\Model\App'],
    ['INSTALLER_HOST_RESPONSE', 'Magento\Install\Model\Installer'],
    [
        'LAYOUT_GENERAL_CACHE_TAG',
        'Magento\Core\Model\Layout\Merge',
        'Magento_Core_Model_Cache_Type_Layout::CACHE_TAG'
    ],
    ['LOCALE_CACHE_KEY', 'Magento\Backend\Block\Page\Footer'],
    ['LOCALE_CACHE_LIFETIME', 'Magento\Backend\Block\Page\Footer'],
    ['LOCALE_CACHE_TAG', 'Magento\Backend\Block\Page\Footer'],
    ['PARAM_CACHE_OPTIONS', '\Magento\Core\Model\App', '\Magento\Core\Model\App::PARAM_CACHE_FORCED_OPTIONS'],
    ['PATH_PREFIX_CUSTOMIZATION', 'Magento\Core\Model\Theme'],
    ['PATH_PREFIX_CUSTOMIZED', 'Magento\Core\Model\Theme\Files'],
    ['PUBLIC_BASE_THEME_DIR', 'Magento\Core\Model\Design\PackageInterface'],
    ['PUBLIC_CACHE_TAG', 'Magento\Core\Model\Design\PackageInterface'],
    [
        'PUBLIC_MODULE_DIR',
        'Magento\Core\Model\Design\PackageInterface',
        'Magento_Core_Model_Design_Package::PUBLIC_MODULE_DIR'
    ],
    ['PUBLIC_MODULE_DIR', 'Magento\Framework\View\Publisher', 'Magento\Framework\View\Publisher\FileInterface::PUBLIC_MODULE_DIR'],
    [
        'PUBLIC_THEME_DIR',
        'Magento\Core\Model\Design\PackageInterface',
        'Magento_Core_Model_Design_Package::PUBLIC_THEME_DIR'
    ],
    ['PUBLIC_THEME_DIR', 'Magento\Framework\View\Publisher', 'Magento\Framework\View\Publisher\FileInterface::PUBLIC_THEME_DIR'],
    [
        'PUBLIC_VIEW_DIR',
        'Magento\Core\Model\Design\PackageInterface',
        'Magento_Core_Model_Design_Package::PUBLIC_VIEW_DIR'
    ],
    ['PUBLIC_VIEW_DIR', 'Magento\Framework\View\Publisher', 'Magento\Framework\View\Publisher\FileInterface::PUBLIC_VIEW_DIR'],
    ['REGISTRY_FORM_PARAMS_KEY', null, 'direct value'],
    ['RULE_PERM_ALLOW', '\Magento\Framework\Math\Random'],
    ['RULE_PERM_DENY', '\Magento\Framework\Math\Random'],
    ['RULE_PERM_INHERIT', '\Magento\Framework\Math\Random'],
    ['SCOPE_TYPE_GROUP', 'Magento\Core\Model\App', 'Magento\Store\Model\ScopeInterface::SCOPE_GROUP'],
    ['SCOPE_TYPE_STORE', 'Magento\Core\Model\App', 'Magento\Store\Model\ScopeInterface::SCOPE_STORE'],
    [
        'SCOPE_TYPE_WEBSITE',
        'Magento\Core\Model\App',
        'Magento\Store\Model\ScopeInterface::SCOPE_WEBSITE'
    ],
    ['SEESION_MAX_COOKIE_LIFETIME'],
    ['TYPE_BINARY', null, 'Magento_DB_Ddl_Table::TYPE_BLOB'],
    ['TYPE_CHAR', null, 'Magento_DB_Ddl_Table::TYPE_TEXT'],
    ['TYPE_CLOB', null, 'Magento_DB_Ddl_Table::TYPE_TEXT'],
    ['TYPE_DOUBLE', null, 'Magento_DB_Ddl_Table::TYPE_FLOAT'],
    ['TYPE_LONGVARBINARY', null, 'Magento_DB_Ddl_Table::TYPE_BLOB'],
    ['TYPE_LONGVARCHAR', null, 'Magento_DB_Ddl_Table::TYPE_TEXT'],
    ['TYPE_REAL', null, 'Magento_DB_Ddl_Table::TYPE_FLOAT'],
    ['TYPE_TIME', null, 'Magento_DB_Ddl_Table::TYPE_TIMESTAMP'],
    ['TYPE_TINYINT', null, 'Magento_DB_Ddl_Table::TYPE_SMALLINT'],
    ['TYPE_VARCHAR', null, 'Magento_DB_Ddl_Table::TYPE_TEXT'],
    ['URL_TYPE_SKIN'],
    ['URL_TYPE_CACHE'],
    ['XML_NODE_PAGE_TEMPLATE_FILTER', 'Magento\Cms\Helper\Data'],
    ['XML_NODE_BLOCK_TEMPLATE_FILTER', 'Magento\Cms\Helper\Data'],
    ['XML_NODE_RELATED_CACHE', 'Magento\Widget\Model\Widget\Instance'],
    ['XML_CHARSET_NODE', 'Magento\SalesRule\Helper\Coupon'],
    ['XML_CHARSET_SEPARATOR', 'Magento\SalesRule\Helper\Coupon'],
    ['XML_NODE_RELATED_CACHE', 'Magento\CatalogRule\Model\Rule'],
    [
        'XML_NODE_ATTRIBUTE_NODES',
        'Magento\Catalog\Model\Resource\Product\Flat\Indexer',
        'XML_NODE_ATTRIBUTE_GROUPS'
    ],
    [
        'XML_PATH_ALLOW_CURRENCIES',
        'Magento\Framework\Locale',
        'Magento_Core_Model_LocaleInterface::XML_PATH_ALLOW_CURRENCIES'
    ],
    ['XML_PATH_ALLOW_CODES', 'Magento\Framework\LocaleInterface'],
    [
        'XML_PATH_ALLOW_DUPLICATION',
        'Magento\Core\Model\Design\PackageInterface',
        'Magento_Core_Model_Design_Package::XML_PATH_ALLOW_DUPLICATION'
    ],
    ['XML_PATH_ALLOW_MAP_UPDATE', 'Mage_Core_Model_Design_PackageInterface'],
    ['XML_PATH_BACKEND_FRONTNAME', 'Mage_Backend_Helper_Data'],
    ['XML_PATH_CACHE_BETA_TYPES'],
    ['XML_PATH_CHECK_EXTENSIONS', 'Magento\Install\Model\Config'],
    ['XML_PATH_CONNECTION_TYPE', 'Magento\Framework\App\Resource\Config'],
    ['XML_PATH_CONNECTION_TYPE', 'Magento\Core\Helper\Data'],
    ['XML_PATH_COUNTRY_DEFAULT', 'Magento\Paypal\Model\System\Config\Backend\MerchantCountry'],
    [
        'XML_PATH_DEBUG_TEMPLATE_HINTS',
        'Magento\Framework\View\Element\Template',
        'Magento\Core\Model\TemplateEngine\Plugin::XML_PATH_DEBUG_TEMPLATE_HINTS'
    ],
    [
        'XML_PATH_DEBUG_TEMPLATE_HINTS_BLOCKS',
        'Magento\Framework\View\Element\Template',
        'Magento\Core\Model\TemplateEngine\Plugin::XML_PATH_DEBUG_TEMPLATE_HINTS_BLOCKS'
    ],
    ['XML_PATH_DEFAULT_COUNTRY', 'Magento\Framework\Locale'],
    ['XML_PATH_DEFAULT_COUNTRY', 'Magento\Core\Helper\Data', 'Magento\Directory\Helper\Data::XML_PATH_DEFAULT_COUNTRY'],
    ['XML_PATH_DEFAULT_LOCALE', 'Magento\Framework\Locale', 'Magento\Directory\Helper\Data::XML_PATH_DEFAULT_LOCALE'],
    ['XML_PATH_DEFAULT_LOCALE', 'Magento\Core\Helper\Data', 'Magento\Directory\Helper\Data::XML_PATH_DEFAULT_LOCALE'],
    [
        'XML_PATH_DEFAULT_TIMEZONE',
        'Magento\Framework\Locale',
        'Magento\Directory\Helper\Data::XML_PATH_DEFAULT_TIMEZONE'
    ],
    [
        'XML_PATH_DEFAULT_TIMEZONE',
        'Magento\Core\Helper\Data',
        'Magento\Directory\Helper\Data::XML_PATH_DEFAULT_TIMEZONE'
    ],
    [
        'XML_PATH_DEV_ALLOW_IPS',
        'Magento\Core\Helper\Data',
        'Magento\Developer\Helper\Data::XML_PATH_DEV_ALLOW_IPS'
    ],
    ['XML_PATH_INSTALL_DATE', 'Mage_Core_Model_App', 'Mage_Core_Model_Config_Primary::XML_PATH_INSTALL_DATE'],
    ['XML_PATH_LOCALE_INHERITANCE', 'Mage_Core_Model_Translate'],
    ['XML_PATH_PRODUCT_ATTRIBUTES', 'Magento\Wishlist\Model\Config'],
    ['XML_PATH_PRODUCT_COLLECTION_ATTRIBUTES', 'Magento\Catalog\Model\Config'],
    ['XML_PATH_QUOTE_PRODUCT_ATTRIBUTES', 'Magento\Quote\Model\Quote\Config'],
    ['XML_PATH_SENDING_SET_RETURN_PATH', 'Mage_Newsletter_Model_Subscriber'],
    [
        'XML_PATH_SKIP_PROCESS_MODULES_UPDATES',
        'Mage_Core_Model_App',
        'Mage_Core_Model_Db_UpdaterInterface::XML_PATH_SKIP_PROCESS_MODULES_UPDATES'
    ],
    [
        'XML_PATH_STATIC_FILE_SIGNATURE',
        'Magento\Core\Helper\Data',
        'Magento_Core_Model_Design_Package::XML_PATH_STATIC_FILE_SIGNATURE'
    ],
    [
        'XML_PATH_STORE_ADDRESS1',
        'Magento\Shipping\Model\Shipping',
        'Magento\Sales\Model\Order\Shipment::XML_PATH_STORE_ADDRESS1'
    ],
    [
        'XML_PATH_STORE_ADDRESS2',
        'Magento\Shipping\Model\Shipping',
        'Magento\Sales\Model\Order\Shipment::XML_PATH_STORE_ADDRESS2'
    ],
    [
        'XML_PATH_STORE_CITY',
        'Magento\Shipping\Model\Shipping',
        'Magento\Sales\Model\Order\Shipment::XML_PATH_STORE_CITY'
    ],
    [
        'XML_PATH_STORE_REGION_ID',
        'Magento\Shipping\Model\Shipping',
        'Magento\Sales\Model\Order\Shipment::XML_PATH_STORE_REGION_ID'
    ],
    [
        'XML_PATH_STORE_ZIP',
        'Magento\Shipping\Model\Shipping',
        'Magento\Sales\Model\Order\Shipment::XML_PATH_STORE_ZIP'
    ],
    [
        'XML_PATH_STORE_COUNTRY_ID',
        'Magento\Shipping\Model\Shipping',
        'Magento\Sales\Model\Order\Shipment::XML_PATH_STORE_COUNTRY_ID'
    ],
    ['XML_PATH_TEMPLATE_EMAIL', 'Magento\Core\Model\Email\Template'],
    [
        'XML_PATH_TEMPLATE_FILTER',
        'Magento\Newsletter\Helper\Data',
        'Use directly model \Magento\Newsletter\Model\Template\Filter'
    ],
    [
        'XML_PATH_THEME',
        'Magento\Core\Model\Design\PackageInterface',
        'Magento_Core_Model_Design_Package::XML_PATH_THEME'
    ],
    [
        'XML_PATH_THEME_ID',
        'Magento\Core\Model\Design\PackageInterface',
        'Magento_Core_Model_Design_Package::XML_PATH_THEME_ID'
    ],
    ['XML_STORE_ROUTERS_PATH', 'Mage_Core_Controller_Varien_Front'],
    ['XML_PATH_SESSION_MESSAGE_MODELS', 'Magento\Catalog\Helper\Product\View'],
    [
        'VALIDATOR_KEY',
        'Magento\Core\Model\Session\AbstractSession',
        'Magento_Core_Model_Session_Validator::VALIDATOR_KEY'
    ],
    [
        'VALIDATOR_HTTP_USER_AGENT_KEY',
        'Magento\Core\Model\Session\AbstractSession',
        'Magento_Core_Model_Session_Validator::VALIDATOR_HTTP_USER_AGENT_KEY'
    ],
    [
        'VALIDATOR_HTTP_X_FORVARDED_FOR_KEY',
        'Magento\Core\Model\Session\AbstractSession',
        'Magento_Core_Model_Session_Validator::VALIDATOR_HTTP_X_FORWARDED_FOR_KEY'
    ],
    [
        'VALIDATOR_HTTP_VIA_KEY',
        'Magento\Core\Model\Session\AbstractSession',
        'Magento_Core_Model_Session_Validator::VALIDATOR_HTTP_VIA_KEY'
    ],
    [
        'VALIDATOR_REMOTE_ADDR_KEY',
        'Magento\Core\Model\Session\AbstractSession',
        'Magento_Core_Model_Session_Validator::VALIDATOR_REMOTE_ADDR_KEY'
    ],
    [
        'XML_PATH_USE_REMOTE_ADDR',
        'Magento\Core\Model\Session\AbstractSession',
        'Magento_Core_Model_Session_Validator::XML_PATH_USE_REMOTE_ADDR'
    ],
    [
        'XML_PATH_USE_HTTP_VIA',
        'Magento\Core\Model\Session\AbstractSession',
        'Magento_Core_Model_Session_Validator::XML_PATH_USE_HTTP_VIA'
    ],
    [
        'XML_PATH_USE_X_FORWARDED',
        'Magento\Core\Model\Session\AbstractSession',
        'Magento_Core_Model_Session_Validator::XML_PATH_USE_X_FORWARDED'
    ],
    [
        'XML_PATH_USE_USER_AGENT',
        'Magento\Core\Model\Session\AbstractSession',
        'Magento_Core_Model_Session_Validator::XML_PATH_USE_USER_AGENT'
    ],
    ['XML_NODE_DIRECT_FRONT_NAMES', 'Magento\Framework\App\Request\Http'],
    ['XML_NODE_USET_AGENT_SKIP', 'Magento\Core\Model\Session\AbstractSession'],
    ['XML_PAGE_TYPE_RENDER_INHERITED', 'Magento\Framework\App\Action\Action'],
    ['XML_PATH_ALLOW_MAP_UPDATE', 'Magento\Core\Model\Design\FileResolution\StrategyPool'],
    ['XML_PATH_WEBAPI_REQUEST_INTERPRETERS', 'Magento\Webapi\Controller\Request\Rest\Interpreter\Factory'],
    ['XML_PATH_WEBAPI_RESPONSE_RENDERS', 'Magento\Webapi\Controller\Response\Rest\Renderer\Factor'],
    ['XML_PATH_THEME'],
    ['XML_PATH_ALLOW_DUPLICATION'],
    ['XML_NODE_BUNDLE_PRODUCT_TYPE', 'Magento\Bundle\Helper\Data'],
    ['XML_PATH_CONFIGURABLE_ALLOWED_TYPES', 'Magento\Catalog\Helper\Product\Configuration'],
    ['XML_PATH_GROUPED_ALLOWED_PRODUCT_TYPES', 'Magento\Catalog\Model\Config'],
    ['PRODUCT_OPTIONS_GROUPS_PATH', 'Magento\Catalog\Model\Config\Source\Product\Options\Type'],
    ['XML_NODE_ADD_FILTERABLE_ATTRIBUTES', 'Magento\Catalog\Helper\Product\Flat'],
    ['XML_NODE_ADD_CHILD_DATA', 'Magento\Catalog\Helper\Product\Flat'],
    ['XML_PATH_CONTENT_TEMPLATE_FILTER', 'Magento\Catalog\Helper\Data'],
    ['XML_NODE_MAX_INDEX_COUNT', 'Magento\Catalog\Model\Resource\Product\Flat\Indexer'],
    ['XML_NODE_ATTRIBUTE_GROUPS', 'Magento\Catalog\Model\Resource\Product\Flat\Indexer'],
    ['XML_PATH_UNASSIGNABLE_ATTRIBUTES', 'Magento\Catalog\Helper\Product'],
    ['XML_PATH_ATTRIBUTES_USED_IN_AUTOGENERATION', 'Magento\Catalog\Helper\Product'],
    ['XML_PATH_PRODUCT_TYPE_SWITCHER_LABEL', 'Magento\Catalog\Helper\Product'],
    ['CONFIG_KEY_ENTITIES', 'Magento\ImportExport\Model\Export'],
    ['CONFIG_KEY_FORMATS', 'Magento\ImportExport\Model\Export'],
    ['CONFIG_KEY_ENTITIES', 'Magento\ImportExport\Model\Import'],
    ['REGEX_RUN_MODEL', 'Magento\Cron\Model\Observer'],
    ['XML_PATH_FRONT_NAME', 'Magento\DesignEditor\Helper\Data'],
    ['XML_PATH_DISABLED_CACHE_TYPES', 'Magento\DesignEditor\Helper\Data'],
    ['XML_PATH_ENCRYPTION_MODEL', 'Magento\Core\Helper\Data'],
    ['CONFIG_KEY_PATH_TO_MAP_FILE', 'Magento\Framework\Module\Setup\Migration'],
    ['XML_PATH_SKIP_PROCESS_MODULES_UPDATES', 'Magento\Framework\App\UpdaterInterface'],
    ['XML_PATH_IGNORE_DEV_MODE', 'Magento\Framework\Module\UpdaterInterface'],
    ['XML_PATH_SKIP_PROCESS_MODULES_UPDATES', 'Magento\Framework\Module\UpdaterInterface'],
    ['XML_PATH_USE_CUSTOM_ADMIN_PATH', 'Magento\Backend\Helper\Data'],
    ['XML_PATH_CUSTOM_ADMIN_PATH', 'Magento\Backend\Helper\Data'],
    ['XML_PATH_BACKEND_AREA_FRONTNAME', 'Magento\Backend\Helper\Data'],
    ['PARAM_BACKEND_FRONT_NAME', 'Magento\Backend\Helper\Data'],
    ['CHARS_LOWERS', '\Magento\Core\Helper\Data', '\Magento\Framework\Math\Random::CHARS_LOWERS'],
    ['CHARS_UPPERS', '\Magento\Core\Helper\Data', '\Magento\Framework\Math\Random::CHARS_UPPERS'],
    ['CHARS_DIGITS', '\Magento\Core\Helper\Data', '\Magento\Framework\Math\Random::CHARS_DIGITS'],
    ['CHARS_SPECIALS', '\Magento\Core\Helper\Data'],
    ['CHARS_SPECIALS', '\Magento\Framework\Math\Random'],
    ['CHARS_PASSWORD_LOWERS', '\Magento\Core\Helper\Data'],
    ['CHARS_PASSWORD_LOWERS', '\Magento\Framework\Math\Random'],
    ['CHARS_PASSWORD_UPPERS', '\Magento\Core\Helper\Data'],
    ['CHARS_PASSWORD_UPPERS', '\Magento\Framework\Math\Random'],
    ['CHARS_PASSWORD_DIGITS', '\Magento\Core\Helper\Data'],
    ['CHARS_PASSWORD_DIGITS', '\Magento\Framework\Math\Random'],
    ['CHARS_PASSWORD_SPECIALS', '\Magento\Core\Helper\Data'],
    ['CHARS_PASSWORD_SPECIALS', '\Magento\Framework\Math\Random'],
    ['XML_NODE_REMOTE_ADDR_HEADERS', '\Magento\Core\Helper\Http'],
    [
        'XML_PATH_EU_COUNTRIES_LIST',
        '\Magento\Core\Helper\Data',
        'Magento\Customer\Helper\Data::XML_PATH_EU_COUNTRIES_LIST'
    ],
    [
        'XML_PATH_MERCHANT_COUNTRY_CODE',
        '\Magento\Core\Helper\Data',
        'Magento\Customer\Helper\Data::XML_PATH_MERCHANT_COUNTRY_CODE'
    ],
    [
        'XML_PATH_MERCHANT_VAT_NUMBER',
        '\Magento\Core\Helper\Data',
        'Magento\Customer\Helper\Data::XML_PATH_MERCHANT_VAT_NUMBER'
    ],
    [
        'XML_PATH_PROTECTED_FILE_EXTENSIONS',
        '\Magento\Core\Helper\Data',
        '\Magento\Core\Model\File\Validator\NotProtectedExtension::XML_PATH_PROTECTED_FILE_EXTENSIONS'
    ],
    [
        'XML_PATH_PUBLIC_FILES_VALID_PATHS',
        '\Magento\Core\Helper\Data',
        '\Magento\Catalog\Helper\Catalog::XML_PATH_PUBLIC_FILES_VALID_PATHS'
    ],
    [
        'XML_PATH_PUBLIC_FILES_VALID_PATHS',
        'Magento\Catalog\Helper\Catalog',
        '\Magento\Sitemap\Helper\Data::XML_PATH_PUBLIC_FILES_VALID_PATHS'
    ],
    [
        'XML_PATH_SITEMAP_VALID_PATHS',
        '\Magento\Catalog\Helper\Catalog',
        '\Magento\Sitemap\Helper\Data::XML_PATH_SITEMAP_VALID_PATHS'
    ],
    ['TYPE_PHYSICAL', '\Magento\Core\Model\Theme', '\Magento\Framework\View\Design\ThemeInterface::TYPE_PHYSICAL'],
    ['TYPE_VIRTUAL', '\Magento\Core\Model\Theme', '\Magento\Framework\View\Design\ThemeInterface::TYPE_VIRTUAL'],
    ['TYPE_STAGING', '\Magento\Core\Model\Theme', '\Magento\Framework\View\Design\ThemeInterface::TYPE_STAGING'],
    ['PATH_SEPARATOR', '\Magento\Core\Model\Theme', '\Magento\Framework\View\Design\ThemeInterface::PATH_SEPARATOR'],
    ['CODE_SEPARATOR', '\Magento\Core\Model\Theme', '\Magento\Framework\View\Design\ThemeInterface::CODE_SEPARATOR'],
    [
        'XML_PATH_IMAGE_ADAPTER',
        '\Magento\Core\Model\Image\AdapterFactory',
        '\Magento\Core\Model\Image\Adapter\Config::XML_PATH_IMAGE_ADAPTER'
    ],
    [
        'ADAPTER_IM',
        '\Magento\Core\Model\Image\AdapterFactory',
        '\Magento\Framework\Image\Adapter\AdapterInterface::ADAPTER_IM'
    ],
    [
        'ADAPTER_GD2',
        '\Magento\Core\Model\Image\AdapterFactory',
        '\Magento\Framework\Image\Adapter\AdapterInterface::ADAPTER_GD2'
    ],
    ['XML_PATH_IMAGE_TYPES', 'Magento\Adminhtml\Block\Catalog\Product\Frontend\Product\Watermark'],
    ['XML_PATH_WEBHOOK', 'Magento\Webhook\Model\Source\Hook'],
    ['XML_PATH_SUBSCRIPTIONS', 'Magento\Webhook\Model\Subscription\Config'],
    ['PAYMENT_INFO_TRANSPORT_SHIPPING_OVERRIDEN', 'Magento\Paypal\Model\Express\Checkout'],
    [
        'XML_PATH_USE_FRONTEND_SID',
        '\Magento\Core\Model\Session\AbstractSession',
        '\Magento\Framework\Session\SidResolver::XML_PATH_USE_FRONTEND_SID'
    ],
    [
        'SESSION_ID_QUERY_PARAM',
        '\Magento\Core\Model\Session\AbstractSession',
        '\Magento\Framework\Session\SidResolverInterface::SESSION_ID_QUERY_PARAM'
    ],
    [
        'XML_PATH_COOKIE_DOMAIN',
        '\Magento\Framework\Stdlib\Cookie',
        '\Magento\Core\Model\Session\Config::XML_PATH_COOKIE_DOMAIN'
    ],
    [
        'XML_PATH_COOKIE_PATH',
        '\Magento\Framework\Stdlib\Cookie',
        '\Magento\Core\Model\Session\Config::XML_PATH_COOKIE_PATH'
    ],
    [
        'XML_PATH_COOKIE_LIFETIME',
        '\Magento\Framework\Stdlib\Cookie',
        '\Magento\Core\Model\Session\Config::XML_PATH_COOKIE_LIFETIME'
    ],
    [
        'XML_PATH_COOKIE_HTTPONLY',
        '\Magento\Framework\Stdlib\Cookie',
        '\Magento\Core\Model\Session\Config::XML_PATH_COOKIE_HTTPONLY'
    ],
    [
        'PARAM_SESSION_SAVE_METHOD',
        '\Magento\Core\Model\Session\AbstractSession',
        '\Magento\Core\Model\Session\Config::PARAM_SESSION_SAVE_METHOD'
    ],
    [
        'PARAM_SESSION_SAVE_PATH',
        '\Magento\Core\Model\Session\AbstractSession',
        '\Magento\Core\Model\Session\Config::PARAM_SESSION_SAVE_PATH'
    ],
    [
        'PARAM_SESSION_CACHE_LIMITER',
        '\Magento\Core\Model\Session\AbstractSession',
        '\Magento\Core\Model\Session\Config::PARAM_SESSION_CACHE_LIMITER'
    ],
    [
        'XML_NODE_SESSION_SAVE_PATH',
        'Magento\Core\Model\Session\AbstractSession',
        'Magento\Core\Model\Session\Config::PARAM_SESSION_SAVE_PATH'
    ],
    [
        'XML_NODE_SESSION_SAVE',
        'Magento\Core\Model\Session\AbstractSession',
        'Magento\Core\Model\Session\Config::PARAM_SESSION_SAVE_METHOD'
    ],
    ['XML_PATH_LOG_EXCEPTION_FILE', 'Magento\Core\Model\Session\AbstractSession'],
    [
        'XML_PATH_ROBOTS_DEFAULT_CUSTOM_INSTRUCTIONS',
        'Magento\Theme\Helper\Robots',
        'Magento\Backend\Block\Page\System\Config\Robots::XML_PATH_ROBOTS_DEFAULT_CUSTOM_INSTRUCTIONS'
    ],
    [
        'XML_PATH_MERGE_CSS_FILES',
        'Magento\Framework\View\Asset\MergeService',
        'Magento\Core\Model\Asset\Config::XML_PATH_MERGE_CSS_FILES'
    ],
    [
        'XML_PATH_MERGE_JS_FILES',
        'Magento\Framework\View\Asset\MergeService',
        'Magento\Core\Model\Asset\Config::XML_PATH_MERGE_JS_FILES'
    ],
    [
        'XML_PATH_MINIFICATION_ENABLED',
        'Magento\Framework\View\Asset\MinifyService',
        'Magento\Core\Model\Asset\Config::XML_PATH_MINIFICATION_ENABLED'
    ],
    [
        'XML_PATH_MINIFICATION_ADAPTER',
        'Magento\Framework\View\Asset\MinifyService',
        'Magento\Core\Model\Asset\Config::XML_PATH_MINIFICATION_ADAPTER'
    ],
    [
        'USE_PARENT_IMAGE',
        'Magento\ConfigurableProduct\Block\Cart\Item\Renderer\Configurable',
        'Magento\Catalog\Model\Config\Source\Product\Thumbnail::OPTION_USE_PARENT_IMAGE'
    ],
    [
        'USE_PARENT_IMAGE',
        'Magento\GroupedProduct\Block\Cart\Item\Renderer\Grouped',
        'Magento\Catalog\Model\Config\Source\Product\Thumbnail::OPTION_USE_PARENT_IMAGE'
    ],
    [
        'CONFIGURABLE_PRODUCT_IMAGE',
        'Magento\ConfigurableProduct\Block\Cart\Item\Renderer\Configurable',
        'Magento\ConfigurableProduct\Block\Cart\Item\Renderer\Configurable::CONFIG_THUMBNAIL_SOURCE'
    ],
    [
        'GROUPED_PRODUCT_IMAGE',
        'Magento\GroupedProduct\Block\Cart\Item\Renderer\Grouped',
        'Magento\GroupedProduct\Block\Cart\Item\Renderer\Grouped::CONFIG_THUMBNAIL_SOURCE'
    ],
    ['TYPE_BLOCK', 'Magento\Framework\View\Layout', '\Magento\Framework\View\Layout\Element'],
    ['TYPE_CONTAINER', 'Magento\Framework\View\Layout', '\Magento\Framework\View\Layout\Element'],
    ['TYPE_ACTION', 'Magento\Framework\View\Layout', '\Magento\Framework\View\Layout\Element'],
    ['TYPE_ARGUMENTS', 'Magento\Framework\View\Layout', '\Magento\Framework\View\Layout\Element'],
    ['TYPE_ARGUMENT', 'Magento\Framework\View\Layout', '\Magento\Framework\View\Layout\Element'],
    ['TYPE_REFERENCE_BLOCK', 'Magento\Framework\View\Layout', '\Magento\Framework\View\Layout\Element'],
    ['TYPE_REFERENCE_CONTAINER', 'Magento\Framework\View\Layout', '\Magento\Framework\View\Layout\Element'],
    ['TYPE_REMOVE', 'Magento\Framework\View\Layout', '\Magento\Framework\View\Layout\Element'],
    ['TYPE_MOVE', 'Magento\Framework\View\Layout', '\Magento\Framework\View\Layout\Element'],
    ['CONTAINER_OPT_HTML_TAG', 'Magento\Framework\View\Layout', '\Magento\Framework\View\Layout\Element'],
    ['CONTAINER_OPT_HTML_CLASS', 'Magento\Framework\View\Layout', '\Magento\Framework\View\Layout\Element'],
    ['CONTAINER_OPT_HTML_ID', 'Magento\Framework\View\Layout', '\Magento\Framework\View\Layout\Element'],
    ['CONTAINER_OPT_LABEL', 'Magento\Framework\View\Layout', '\Magento\Framework\View\Layout\Element'],
    ['XML_PATH_THEME_ID', 'Magento\Core\Model\View\Design', '\Magento\Framework\View\DesignInterface::XML_PATH_THEME_ID'],
    ['UPLOAD_ROOT', 'Magento\Backend\Model\Config\Backend\Logo'],
    ['UPLOAD_ROOT', 'Magento\Backend\Model\Config\Backend\Favicon'],
    ['DIRECTORY_SEPARATOR', 'Magento\Framework\Filesystem'],
    [
        'MAX_QTY_VALUE',
        '\Magento\Catalog\Controller\Adminhtml\Product',
        'Magento\Catalog\Controller\Adminhtml\Product\Initialization\StockDataFilter::MAX_QTY_VALUE'
    ],
    [
        'LINK_TYPE_GROUPED',
        '\Magento\Catalog\Model\Product\Link',
        '\Magento\GroupedProduct\Model\Resource\Product\Link::LINK_TYPE_GROUPED'
    ],
    [
        'TYPE_GROUPED',
        '\Magento\Catalog\Model\Product\Type',
        '\Magento\GroupedProduct\Model\Resource\Product\Link::LINK_TYPE_GROUPED'
    ],
    ['PARAM_APP_URIS', 'Magento\Framework\Filesystem'],
    ['ROOT_DIR', '\Magento\Framework\App\Filesystem', '\Magento\Framework\App\Filesystem\DirectoryList::ROOT'],
    ['APP_DIR', '\Magento\Framework\App\Filesystem', '\Magento\Framework\App\Filesystem\DirectoryList::APP'],
    ['MODULES_DIR',
        '\Magento\Framework\App\Filesystem',
        '\Magento\Framework\App\Filesystem\DirectoryList::MODULES'
    ],
    ['THEMES_DIR',
        '\Magento\Framework\App\Filesystem',
        '\Magento\Framework\App\Filesystem\DirectoryList::THEMES'
    ],
    ['CONFIG_DIR',
        '\Magento\Framework\App\Filesystem',
        '\Magento\Framework\App\Filesystem\DirectoryList::CONFIG'
    ],
    ['LIB_INTERNAL',
        '\Magento\Framework\App\Filesystem',
        '\Magento\Framework\App\Filesystem\DirectoryList::LIB_INTERNAL'
    ],
    ['LOCALE_DIR', '\Magento\Framework\App\Filesystem', '\Magento\Framework\App\Filesystem\DirectoryList::LOCALE'],
    ['PUB_DIR', '\Magento\Framework\App\Filesystem', '\Magento\Framework\App\Filesystem\DirectoryList::PUB'],
    ['LIB_WEB', '\Magento\Framework\App\Filesystem', '\Magento\Framework\App\Filesystem\DirectoryList::LIB_WEB'],
    ['MEDIA_DIR', '\Magento\Framework\App\Filesystem', '\Magento\Framework\App\Filesystem\DirectoryList::MEDIA'],
    ['STATIC_VIEW_DIR',
        '\Magento\Framework\App\Filesystem',
        '\Magento\Framework\App\Filesystem\DirectoryList::STATIC_VIEW'
    ],
    ['VAR_DIR', '\Magento\Framework\App\Filesystem', '\Magento\Framework\App\Filesystem\DirectoryList::VAR_DIR'],
    ['TMP_DIR', '\Magento\Framework\App\Filesystem', '\Magento\Framework\App\Filesystem\DirectoryList::TMP'],
    ['CACHE_DIR', '\Magento\Framework\App\Filesystem', '\Magento\Framework\App\Filesystem\DirectoryList::CACHE'],
    ['LOG_DIR', '\Magento\Framework\App\Filesystem', '\Magento\Framework\App\Filesystem\DirectoryList::LOG'],
    ['SESSION_DIR',
        '\Magento\Framework\App\Filesystem',
        '\Magento\Framework\App\Filesystem\DirectoryList::SESSION'
    ],
    ['DI_DIR', '\Magento\Framework\App\Filesystem', '\Magento\Framework\App\Filesystem\DirectoryList::DI'],
    ['GENERATION_DIR',
        '\Magento\Framework\App\Filesystem',
        '\Magento\Framework\App\Filesystem\DirectoryList::GENERATION'
    ],
    ['UPLOAD_DIR',
        '\Magento\Framework\App\Filesystem',
        '\Magento\Framework\App\Filesystem\DirectoryList::UPLOAD'
    ],
    ['SYS_TMP_DIR',
        '\Magento\Framework\App\Filesystem',
        '\Magento\Framework\Filesystem\DirectoryList::SYS_TMP'
    ],
    ['LAYOUT_NAVIGATION_CLASS_NAME', 'Magento\DesignEditor\Model\State'],
    [
        'TYPE_CONFIGURABLE',
        '\Magento\Catalog\Model\Product\Type',
        '\Magento\ConfigurableProduct\Model\Product\Type\Configurable::TYPE_CODE'
    ],
    [
        'XML_PATH_IS_ENABLED_FLAT_CATALOG_CATEGORY',
        '\Magento\Catalog\Helper\Category\Flat',
        '\Magento\Catalog\Model\Indexer\Category\Flat\Config::XML_PATH_IS_ENABLED_FLAT_CATALOG_CATEGORY'
    ],
    ['CSV_SEPARATOR', 'Magento\Framework\Translate'],
    ['SCOPE_SEPARATOR', 'Magento\Framework\Translate'],
    ['CONFIG_KEY_AREA', 'Magento\Framework\Translate'],
    ['CONFIG_KEY_LOCALE', 'Magento\Framework\Translate'],
    ['CONFIG_KEY_SCOPE', 'Magento\Framework\Translate'],
    ['CONFIG_KEY_DESIGN_THEME', 'Magento\Framework\Translate'],
    [
        'XML_NODE_MAX_INDEX_COUNT',
        'Magento\Catalog\Model\Indexer\Product\Flat\AbstractAction',
        'Magento\Catalog\Model\Indexer\Product\Flat\FlatTableBuilder'
    ],
    [
        'ATTRIBUTES_CHUNK_SIZE',
        'Magento\Catalog\Model\Indexer\Product\Flat\AbstractAction',
        'Magento\Catalog\Model\Indexer\Product\Flat\Action\Indexer'
    ],
    [
        'CACHE_CATEGORY_TAG',
        'Magento\Catalog\Model\Product',
        'Magento\Catalog\Model\Product::CACHE_PRODUCT_CATEGORY_TAG'
    ],
    ['XML_PATH_UNSECURE_BASE_LIB_URL'],
    ['XML_PATH_SECURE_BASE_LIB_URL'],
    ['XML_PATH_SECURE_BASE_CACHE_URL'],
    ['XML_PATH_UNSECURE_BASE_CACHE_URL'],
    ['PUBLIC_MERGE_DIR', '', '\Magento\Framework\View\Asset\Merged::getRelativeDir'],
    ['PUBLIC_MINIFY_DIR', '', '\Magento\Framework\View\Asset\MinifyService::getRelativeDir'],
    ['CONTENT_TYPE_CSS', 'Magento\Framework\View\Publisher'],
    ['CONTENT_TYPE_JS', 'Magento\Framework\View\Publisher'],
    ['CONTENT_TYPE_PHP', 'Magento\Framework\View\Publisher'],
    ['CONTENT_TYPE_PHTML', 'Magento\Framework\View\Publisher'],
    ['CONTENT_TYPE_XML', 'Magento\Framework\View\Publisher'],
    ['MAX_QUERY_LEN', 'Magento\CatalogSearch\Helper\Data'],
    ['QUERY_VAR_NAME', 'Magento\CatalogSearch\Helper\Data'],
    ['XML_PATH_CUSTOMER_VIV_GROUP_AUTO_ASSIGN', 'Magento\Customer\Helper\Data'],
    [
        'PARAM_APP_DIRS',
        'Magento\Framework\App\Filesystem',
        '\Magento\Framework\App\Bootstrap::INIT_PARAM_FILESYSTEM_DIR_PATHS'
    ],
    [
        'CACHE_VIEW_REL_DIR',
        'Magento\Framework\App\Filesystem',
        '\Magento\Framework\View\Asset\Minified::CACHE_VIEW_REL'
    ],
    ['WRAPPER_CONTENT_ZLIB', 'Magento\Framework\Filesystem', '\Magento\Framework\Filesystem\DriverPool::ZLIB'],
    ['WRAPPER_CONTENT_PHAR', 'Magento\Framework\Filesystem'],
    ['WRAPPER_CONTENT_RAR', 'Magento\Framework\Filesystem'],
    ['WRAPPER_CONTENT_OGG', 'Magento\Framework\Filesystem'],
    ['FTP', 'Magento\Framework\Filesystem'],
    ['FTPS', 'Magento\Framework\Filesystem'],
    ['SSH2', 'Magento\Framework\Filesystem'],
    ['HTTP', 'Magento\Framework\Filesystem', '\Magento\Framework\Filesystem\DriverPool::HTTP'],
    ['HTTPS', 'Magento\Framework\Filesystem', '\Magento\Framework\Filesystem\DriverPool::HTTPS'],
    ['SEARCH_TYPE_LIKE', 'Magento\CatalogSearch\Model\Fulltext'],
    ['SEARCH_TYPE_FULLTEXT', 'Magento\CatalogSearch\Model\Fulltext'],
    ['SEARCH_TYPE_COMBINE', 'Magento\CatalogSearch\Model\Fulltext'],
    ['XML_PATH_CATALOG_SEARCH_TYPE', 'Magento\CatalogSearch\Model\Fulltext'],
    ['VAT_CLASS_ERROR', 'Magento\Customer\Helper\Data', 'Magento\Customer\Model\Vat::VAT_CLASS_ERROR'],
    ['VAT_CLASS_INVALID', 'Magento\Customer\Helper\Data', 'Magento\Customer\Model\Vat::VAT_CLASS_INVALID'],
    ['VAT_CLASS_INTRA_UNION', 'Magento\Customer\Helper\Data', 'Magento\Customer\Model\Vat::VAT_CLASS_INTRA_UNION'],
    ['VAT_CLASS_DOMESTIC', 'Magento\Customer\Helper\Data', 'Magento\Customer\Model\Vat::VAT_CLASS_DOMESTIC'],
    ['XML_PATH_CUSTOMER_VIV_INTRA_UNION_GROUP', 'Magento\Customer\Helper\Data', 'Magento\Customer\Model\Vat::XML_PATH_CUSTOMER_VIV_INTRA_UNION_GROUP'],
    ['XML_PATH_CUSTOMER_VIV_DOMESTIC_GROUP', 'Magento\Customer\Helper\Data', 'Magento\Customer\Model\Vat::XML_PATH_CUSTOMER_VIV_DOMESTIC_GROUP'],
    ['XML_PATH_CUSTOMER_VIV_INVALID_GROUP', 'Magento\Customer\Helper\Data', 'Magento\Customer\Model\Vat::XML_PATH_CUSTOMER_VIV_INVALID_GROUP'],
    ['XML_PATH_CUSTOMER_VIV_ERROR_GROUP', 'Magento\Customer\Helper\Data', 'Magento\Customer\Model\Vat::XML_PATH_CUSTOMER_VIV_ERROR_GROUP'],
    ['VAT_VALIDATION_WSDL_URL', 'Magento\Customer\Helper\Data', 'Magento\Customer\Model\Vat::VAT_VALIDATION_WSDL_URL'],
    ['XML_PATH_CUSTOMER_GROUP_AUTO_ASSIGN', 'Magento\Customer\Helper\Data', 'Magento\Customer\Model\Vat::XML_PATH_CUSTOMER_GROUP_AUTO_ASSIGN'],
    ['XML_PATH_EU_COUNTRIES_LIST', 'Magento\Customer\Helper\Data', 'Magento\Customer\Model\Vat::XML_PATH_EU_COUNTRIES_LIST'],
    ['XML_PATH_MERCHANT_COUNTRY_CODE', 'Magento\Customer\Helper\Data', 'Magento\Customer\Model\Vat::XML_PATH_MERCHANT_COUNTRY_CODE'],
    ['XML_PATH_MERCHANT_VAT_NUMBER', 'Magento\Customer\Helper\Data', 'Magento\Customer\Model\Vat::XML_PATH_MERCHANT_VAT_NUMBER'],
    ['ROUTE_ACCOUNT_LOGIN', 'Magento\Customer\Helper\Data', 'Magento\Customer\Model\Url::ROUTE_ACCOUNT_LOGIN'],
    ['XML_PATH_CUSTOMER_STARTUP_REDIRECT_TO_DASHBOARD', 'Magento\Customer\Helper\Data', 'Magento\Customer\Model\Url::XML_PATH_CUSTOMER_STARTUP_REDIRECT_TO_DASHBOARD'],
    ['REFERER_QUERY_PARAM_NAME', 'Magento\Customer\Helper\Data', 'Magento\Customer\Model\Url::REFERER_QUERY_PARAM_NAME'],
    ['XML_PATH_CUSTOMER_RESET_PASSWORD_LINK_EXPIRATION_PERIOD', 'Magento\Customer\Helper\Data', 'Magento\Customer\Model\Customer::XML_PATH_CUSTOMER_RESET_PASSWORD_LINK_EXPIRATION_PERIOD'],
    ['XML_PATH_SUPPORT_EMAIL', 'Magento\Customer\Helper\Data'],
    ['CONTEXT_AUTH', 'Magento\Customer\Helper\Data', 'Magento\Customer\Model\Context::CONTEXT_AUTH'],
    ['CONTEXT_CURRENCY', 'Magento\Customer\Helper\Data', 'Magento\Framework\App\Http\Context::CONTEXT_CURRENCY'],
    ['CONTEXT_GROUP', 'Magento\Customer\Helper\Data', 'Magento\Customer\Model\Context::CONTEXT_GROUP'],
    ['CONTEXT_STORE', 'Magento\Customer\Helper\Data', 'Magento\Framework\App\Http\Context::CONTEXT_STORE'],
    ['DEBUG_CONNECT', 'Magento\Framework\DB\Adapter\Pdo\Mysql', 'Magento\Framework\DB\LoggerInterface::TYPE_CONNECT'],
    ['DEBUG_TRANSACTION', 'Magento\Framework\DB\Adapter\Pdo\Mysql', 'Magento\Framework\DB\LoggerInterface::TYPE_TRANSACTION'],
    ['DEBUG_QUERY', 'Magento\Framework\DB\Adapter\Pdo\Mysql', 'Magento\Framework\DB\LoggerInterface::TYPE_QUERY'],
    [
        'PARAM_ALLOWED_MODULES',
        'Magento\Framework\Module\Declaration\Reader\Filesystem',
        'Magento\Framework\App\ObjectManagerFactory::INIT_PARAM_DEPLOYMENT_CONFIG'
    ],
    [
        'NOT_INSTALLED_URL_PATH_PARAM',
        'Magento\Framework\App\Http',
        'Magento\Framework\App\SetupInfo::PARAM_NOT_INSTALLED_URL_PATH'
    ],
    [
        'NOT_INSTALLED_URL_PARAM',
        'Magento\Framework\App\Http',
        'Magento\Framework\App\SetupInfo::PARAM_NOT_INSTALLED_URL'
    ],
    [
        'NOT_INSTALLED_URL_PATH',
        'Magento\Framework\App\Http',
        'Magento\Framework\App\SetupInfo::DEFAULT_PATH'
    ],
];
