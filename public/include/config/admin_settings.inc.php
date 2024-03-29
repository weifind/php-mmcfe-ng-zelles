<?php

// Make sure we are called from index.php
if (!defined('SECURITY')) die('Hacking attempt');

// Load a list of themes available
$aTmpThemes = glob(THEME_DIR . '/*');
$aThemes = array();
foreach ($aTmpThemes as $dir) {
  if (basename($dir) != 'cache' && basename($dir) != 'compile' && basename($dir) != 'mail') $aThemes[basename($dir)] = basename($dir);
}

// Load the settings available in this system
$aSettings['website'][] = array(
  'display' => 'Maintenance Mode', 'type' => 'select',
  'options' => array( 0 => 'No', 1 => 'Yes' ),
  'default' => 0,
  'name' => 'maintenance', 'value' => $setting->getValue('maintenance'),
  'tooltip' => 'Enable or Disable maintenance mode. Only admins can still login.'
);
$aSettings['website'][] = array(
  'display' => 'Message of the Day', 'type' => 'text',
  'size' => 25,
  'default' => '',
  'name' => 'system_motd', 'value' => $setting->getValue('system_motd'),
  'tooltip' => 'Display a message of the day as information popup if set.'
);
$aSettings['website'][] = array(
  'display' => 'Website Name', 'type' => 'text',
  'size' => 25,
  'default' => 'The Pool',
  'name' => 'website_name', 'value' => $setting->getValue('website_name'),
  'tooltip' => 'The name of you pool page, displayed in the header of the page.'
);
$aSettings['website'][] = array(
  'display' => 'Website Title', 'type' => 'text',
  'size' => 25,
  'default' => 'The Pool - Mining Evolved',
  'name' => 'website_title', 'value' => $setting->getValue('website_title'),
  'tooltip' => 'The title of you pool page, displayed in the browser window header.'
);
$aSettings['website'][] = array(
  'display' => 'Website Slogan', 'type' => 'text',
  'size' => 25,
  'default' => 'Resistance is Futile',
  'name' => 'website_slogan', 'value' => $setting->getValue('website_slogan'),
  'tooltip' => 'The slogan of you pool page, displayed in the browser window header.'
);
$aSettings['website'][] = array(
  'display' => 'Website e-mail', 'type' => 'text',
  'size' => 25,
  'default' => 'test@example.com',
  'name' => 'website_email', 'value' => $setting->getValue('website_email'),
  'tooltip' => 'The email address for your pool, used in mail templates and notifications.'
);
$aSettings['website'][] = array(
  'display' => 'Website theme', 'type' => 'select',
  'options' => $aThemes,
  'default' => 'zelles',
  'name' => 'website_theme', 'value' => $setting->getValue('website_theme'),
  'tooltip' => 'The default theme used on your pool.'
);
$aSettings['website'][] = array(
  'display' => 'Website mobile theme', 'type' => 'select',
  'options' => $aThemes,
  'default' => 'zelles',
  'name' => 'website_mobile_theme', 'value' => $setting->getValue('website_mobile_theme'),
  'tooltip' => 'The mobile theme used for your pool.'
);
$aSettings['website'][] = array(
  'display' => 'Blockexplorer URL', 'type' => 'text',
  'size' => 50,
  'default' => 'http://explorer.litecoin.net/block/',
  'name' => 'website_blockexplorer_url', 'value' => $setting->getValue('website_blockexplorer_url'),
  'tooltip' => 'URL to the blockexplorer website for your blockchain. Will append the blockhash to the URL. Leave empty to disabled this.'
);
$aSettings['website'][] = array(
  'display' => 'Disable Blockexplorer', 'type' => 'select',
  'options' => array( 0 => 'No', 1 => 'Yes' ),
  'name' => 'website_blockexplorer_disabled', 'value' => $setting->getValue('website_blockexplorer_disabled'),
  'tooltip' => 'Enabled or disable the blockexplorer URL feature. Will remove any links using the blockexplorer URL.'
);
$aSettings['website'][] = array(
  'display' => 'Chaininfo URL', 'type' => 'text',
  'size' => 50,
  'default' => 'http://allchains.info',
  'name' => 'website_chaininfo_url', 'value' => $setting->getValue('website_chaininfo_url'),
  'tooltip' => 'URL to the chaininfo website for your blockchain. Leave empty to disabled this.'
);
$aSettings['website'][] = array(
  'display' => 'Disable Chaininfo', 'type' => 'select',
  'options' => array( 0 => 'No', 1 => 'Yes' ),
  'name' => 'website_chaininfo_disabled', 'value' => $setting->getValue('website_chaininfo_disabled'),
  'tooltip' => 'Enabled or disable the chainfo URL feature. Will remove any links using the chaininfo URL.'
);
$aSettings['statistics'][] = array(
  'display' => 'Block Statistics Count', 'type' => 'text',
  'size' => 25,
  'default' => 20,
  'name' => 'statistics_block_count', 'value' => $setting->getValue('statistics_block_count'),
  'tooltip' => 'Blocks to fetch for the block statistics page.'
);
$aSettings['acl'][] = array(
  'display' => 'Pool Statistics', 'type' => 'select',
  'options' => array( 0 => 'Private', 1 => 'Public'),
  'default' => 1,
  'name' => 'acl_pool_statistics', 'value' => $setting->getValue('acl_pool_statistics'),
  'tooltip' => 'Make the pool statistics page private (users only) or public.'
);
$aSettings['acl'][] = array(
  'display' => 'Blcok Statistics', 'type' => 'select',
  'options' => array( 0 => 'Private', 1 => 'Public'),
  'default' => 1,
  'name' => 'acl_block_statistics', 'value' => $setting->getValue('acl_block_statistics'),
  'tooltip' => 'Make the block statistics page private (users only) or public.'
);
$aSettings['system'][] = array(
  'display' => 'Disable e-mail confirmations', 'type' => 'select',
  'options' => array( 0 => 'No', 1 => 'Yes' ),
  'default' => 0,
  'name' => 'accounts_confirm_email_disabled', 'value' => $setting->getValue('accounts_confirm_email_disabled'),
  'tooltip' => 'Should users supply a valid e-mail address upon registration. Requires them to confirm the address before accounts are activated.'
);
$aSettings['system'][] = array(
  'display' => 'Disable registrations', 'type' => 'select',
  'options' => array( 0 => 'No', 1 => 'Yes' ),
  'default' => 0,
  'name' => 'lock_registration', 'value' => $setting->getValue('lock_registration'),
  'tooltip' => 'Enable or Disable registrations. Useful to create an invitation only pool.'
);
$aSettings['system'][] = array(
  'display' => 'Disable Invitations', 'type' => 'select',
  'options' => array( 0 => 'No', 1 => 'Yes' ),
  'default' => 0,
  'name' => 'disable_invitations', 'value' => $setting->getValue('disable_invitations'),
  'tooltip' => 'Enable or Disable invitations. Users will not be able to invite new users via email if disabled.'
);
$aSettings['system'][] = array(
  'display' => 'Disable Manual Payouts', 'type' => 'select',
  'options' => array( 0 => 'No', 1 => 'Yes' ),
  'default' => 0,
  'name' => 'disable_mp', 'value' => $setting->getValue('disable_mp'),
  'tooltip' => 'Enable or Disable the manual payout processing. Users will not be able to withdraw any funds if disabled.'
);
$aSettings['system'][] = array(
  'display' => 'Disable Automatic Payouts', 'type' => 'select',
  'options' => array( 0 => 'No', 1 => 'Yes' ),
  'default' => 0,
  'name' => 'disable_ap', 'value' => $setting->getValue('disable_ap'),
  'tooltip' => 'Enable or Disable the automatic payout processing. Users exceeding their thresholds will not be paid out if disabled.'
);
$aSettings['system'][] = array(
  'display' => 'Disable notifications', 'type' => 'select',
  'options' => array( 0 => 'No', 1 => 'Yes' ),
  'default' => 0,
  'name' => 'disable_notifications', 'value' => $setting->getValue('disable_notifications'),
  'tooltip' => 'Enable or Disable system notifications. This includes new found blocks, monitoring and all other notifications.'
);
$aSettings['system'][] = array(
  'display' => 'Disable API', 'type' => 'select',
  'options' => array( 0 => 'No', 1 => 'Yes' ),
  'default' => 0,
  'name' => 'disable_api', 'value' => $setting->getValue('disable_api'),
  'tooltip' => 'Enable or Disable the pool wide API functions. See API reference on Github for details.'
);
$aSettings['recaptcha'][] = array(
  'display' => 'Enable re-Captcha', 'type' => 'select',
  'options' => array( 0 => 'No', 1 => 'Yes' ),
  'default' => 0,
  'name' => 'recaptcha_enabled', 'value' => $setting->getValue('recaptcha_enabled'),
  'tooltip' => 'Enable or Disable re-Captcha. This will require user input on registraion and other forms.'
);
$aSettings['recaptcha'][] = array(
  'display' => 're-Captcha Private Key', 'type' => 'text',
  'size' => 25,
  'default' => 'YOUR_PRIVATE_KEY',
  'name' => 'recaptcha_private_key', 'value' => $setting->getValue('recaptcha_private_key'),
  'tooltip' => '.'
);
$aSettings['recaptcha'][] = array(
  'display' => 're-Captcha Public Key', 'type' => 'text',
  'size' => 25,
  'default' => 'YOUR_PUBLIC_KEY',
  'name' => 'recaptcha_public_key', 'value' => $setting->getValue('recaptcha_public_key'),
  'tooltip' => 'Your public key as given by your re-Captcha account.'
);

?>
