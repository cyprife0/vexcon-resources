<?php
/**
 * includes/icons.php
 *
 * All decorative line-icons used across the site live here as a single
 * lookup function. Pages call vx_icon('diesel') instead of pasting the
 * same <svg> markup in five different files.
 */

declare(strict_types=1);

/**
 * Return inline SVG markup for a named icon.
 *
 * @param string $name  Icon key, e.g. "diesel", "phone", "check".
 * @param string $class Optional CSS class applied to the <svg> element.
 */
function vx_icon(string $name, string $class = ''): string
{
    $icons = [
        'diesel' => '<path d="M18 42h12M24 42V22M16 22h16l-2-14h-12l-2 14z" stroke="currentColor" stroke-width="2" stroke-linejoin="round"/><path d="M24 14v-6M20 8h8" stroke="currentColor" stroke-width="2" stroke-linecap="round"/>',
        'oilgas' => '<path d="M24 6c6 8 12 14 12 22a12 12 0 0 1-24 0c0-8 6-14 12-22z" stroke="currentColor" stroke-width="2" stroke-linejoin="round"/><path d="M24 20c2.5 3.5 5 6 5 9a5 5 0 0 1-10 0c0-3 2.5-5.5 5-9z" fill="currentColor" opacity="0.35"/>',
        'logistics' => '<rect x="4" y="20" width="24" height="14" rx="1.5" stroke="currentColor" stroke-width="2"/><path d="M28 24h8l6 6v4h-14z" stroke="currentColor" stroke-width="2" stroke-linejoin="round"/><circle cx="14" cy="38" r="4" stroke="currentColor" stroke-width="2"/><circle cx="36" cy="38" r="4" stroke="currentColor" stroke-width="2"/>',
        'procurement' => '<rect x="12" y="8" width="24" height="34" rx="2" stroke="currentColor" stroke-width="2"/><path d="M18 8v-2a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v2" stroke="currentColor" stroke-width="2"/><path d="M17 20l4 4 8-9" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"/><line x1="17" y1="32" x2="31" y2="32" stroke="currentColor" stroke-width="2"/>',
        'distribution' => '<circle cx="24" cy="10" r="4" stroke="currentColor" stroke-width="2"/><circle cx="10" cy="36" r="4" stroke="currentColor" stroke-width="2"/><circle cx="38" cy="36" r="4" stroke="currentColor" stroke-width="2"/><path d="M24 14v10M24 24l-14 8M24 24l14 8" stroke="currentColor" stroke-width="2"/>',
        'supply' => '<path d="M20 8l-4 4 4 4M28 8l4 4-4 4" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/><rect x="10" y="22" width="28" height="16" rx="2" stroke="currentColor" stroke-width="2"/><line x1="10" y1="30" x2="38" y2="30" stroke="currentColor" stroke-width="1.5" opacity="0.6"/>',
        'phone' => '<path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z" stroke="currentColor" stroke-width="2" fill="none"/>',
        'mail' => '<path d="M4 4h16v16H4z" stroke="currentColor" stroke-width="2" fill="none"/><path d="M22 6l-10 7L2 6" stroke="currentColor" stroke-width="2" fill="none"/>',
        'quote-doc' => '<path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z" stroke="currentColor" stroke-width="2" fill="none"/><path d="M14 2v6h6M9 15l2 2 4-4" stroke="currentColor" stroke-width="2" fill="none"/>',
        'source' => '<circle cx="24" cy="24" r="10" stroke="currentColor" stroke-width="2"/><path d="M24 6v6M24 36v6M6 24h6M36 24h6" stroke="currentColor" stroke-width="2"/>',
        'check-box' => '<path d="M12 20l4 4 8-9" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"/><rect x="10" y="10" width="28" height="28" rx="3" stroke="currentColor" stroke-width="2"/>',
        'transport' => '<rect x="4" y="20" width="22" height="12" rx="1.5" stroke="currentColor" stroke-width="2"/><path d="M26 22h8l6 6v4h-14z" stroke="currentColor" stroke-width="2" stroke-linejoin="round"/><circle cx="13" cy="34" r="3.5" stroke="currentColor" stroke-width="2"/><circle cx="34" cy="34" r="3.5" stroke="currentColor" stroke-width="2"/>',
        'deliver' => '<path d="M24 6v22M14 20l10 10 10-10" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"/><path d="M8 34v6h32v-6" stroke="currentColor" stroke-width="2"/>',
        'arrow-right' => '<path d="M5 12h14M13 6l6 6-6 6" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>',
    ];

    $paths = $icons[$name] ?? '';
    $classAttr = $class !== '' ? ' class="' . vx_e($class) . '"' : '';

    return '<svg' . $classAttr . ' viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">' . $paths . '</svg>';
}
