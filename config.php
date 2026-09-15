<?php
/**
 * config.php
 *
 * Central place for site-wide settings. Every page includes this file
 * (indirectly, through includes/header.php) instead of hard-coding the
 * company name, email address or phone number in multiple places.
 *
 * If any of these details change, this is the only file that needs editing.
 */

declare(strict_types=1);

// --- Company details ------------------------------------------------------
define('SITE_NAME', 'Vexcon Resources Limited');
define('SITE_SHORT_NAME', 'Vexcon');
define('SITE_TAGLINE', 'Reliable Oil & Gas Supply, Diesel, Logistics & Procurement');
define('SITE_EMAIL', 'vexconresoursces@gmail.com');
define('SITE_PHONE_DISPLAY', '0806 2258 369');
define('SITE_PHONE_TEL', '08062258369'); // digits only, used inside tel: links

// --- Where quote / contact form submissions should be sent ----------------
define('QUOTE_RECIPIENT_EMAIL', SITE_EMAIL);

// --- Primary navigation (shared by the header and footer) -----------------
// Using one array for both means a new page only has to be added here once.
$GLOBALS['nav_links'] = [
    'index.php'         => 'Home',
    'about.php'         => 'About',
    'services.php'      => 'Services',
    'diesel-supply.php' => 'Diesel Supply',
    'oil-gas-supply.php'=> 'Oil & Gas',
    'logistics.php'     => 'Logistics',
    'procurement.php'   => 'Procurement',
    'contact.php'       => 'Contact',
];

// --- Small helper used throughout the templates ----------------------------
/**
 * Escape a string for safe HTML output.
 */
function vx_e(string $value): string
{
    return htmlspecialchars($value, ENT_QUOTES, 'UTF-8');
}
