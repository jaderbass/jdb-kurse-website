<?php

/**
 * Grundeinstellungen für JAderBass Kurse-Seite
 *
 * Diese Datei beinhaltet diese Einstellungen:
 *
 * * Wartungsmodus,
 * * und CURRENTDIR.
 *
 * @author Jörg Aderhold, JAderBass web'n'more, 
 * 
 * @url https://www.jaderbass.de
 * 
 * @version 1.0.0
 * 
 */

/* Wartungsmodus aktivieren */
define('MAINTENANCE_MODE', false);

/**
 * Debug-Modus 
 * 
 * Zeigt Fehlermeldungen und Warnungen an
 * 
 */
define('DEBUG_MODE', true);

/* Root-Verzeichnis */
define('CURRENTDIR', dirname(__FILE__));
