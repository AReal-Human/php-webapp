<?php

/**
 * ####################################################################################
 * SECTION 1 BELOW IS FOR PHP APP RUNNING ON AZURE WEB APP (APP SERVICE PLAN)
 * ####################################################################################
 * 
 * Requirements:
 * 1. App Service must have SystemAssigned identity enabled.
 * 2. Identity must have 'get' (and optionally 'list') access to Key Vault secrets.
 * 3. You must `composer require wapacro/az-keyvault-php` in your GitHub repo.
 */

// Include Composer autoload (installed via GitHub deployment)
// require __DIR__ . '/vendor/autoload.php';

// // Step 1: Update to your Key Vault URI
// $secret = new AzKeyVault\Secret('https://keyvault01-dsdfw2i83321.vault.azure.net');
//$secrets = $secret->getSecrets();

// $host     = $secret->getSecret('kv-db1-host');
// $username = $secret->getSecret('kv-db1-username');
// $password = $secret->getSecret('kv-db1-password');
// $db_name  = $secret->getSecret('kv-db1-dbname');

// $sslcert = 'ssl/DigiCertGlobalRootCA.crt.pem';

$host       = getenv('DB_HOST');
$username   = getenv('DB_USERNAME');
$password   = getenv('DB_PASSWORD');
$db_name     = getenv('DB_DATABASE');
$sslcert    = 'ssl/DigiCertGlobalRootCA.crt.pem';
#$sslcert   = getenv('DB_SSLCERT');