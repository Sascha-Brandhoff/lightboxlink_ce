<?php

/**
 * Register the classes
 */
ClassLoader::addClasses(array
(
    'Contao\ContentLightboxLinkInternal'	=> 'system/modules/lightboxlink_ce/elements/ContentLightboxLinkInternal.php',
    'Contao\ContentLightboxLinkWebpage'		=> 'system/modules/lightboxlink_ce/elements/ContentLightboxLinkWebpage.php',
    'Contao\ContentLightboxLinkYoutube'		=> 'system/modules/lightboxlink_ce/elements/ContentLightboxLinkYoutube.php'
));


/**
 * Register the templates
 */
TemplateLoader::addFiles(array
(
    'ce_lightboxlink'			=> 'system/modules/lightboxlink_ce/templates/elements'
));
