<?php

$GLOBALS['TL_DCA']['tl_content']['palettes']['__selector__'][]          = 'lightboxlink_gallery';
$GLOBALS['TL_DCA']['tl_content']['palettes']['lightboxLinkInternal']    = '{type_legend},type,headline;{image_legend},useImage;{config_legend},linkTitle,url;{gallery_legend},lightboxlink_gallery;{protected_legend:hide},protected;{expert_legend:hide},guests,cssID,space;{invisible_legend:hide},invisible,start,stop';
$GLOBALS['TL_DCA']['tl_content']['palettes']['lightboxLinkWebpage']     = '{type_legend},type,headline;{image_legend},useImage;{config_legend},linkTitle,lightboxlink_url;{gallery_legend},lightboxlink_gallery;{protected_legend:hide},protected;{expert_legend:hide},guests,cssID,space;{invisible_legend:hide},invisible,start,stop';
$GLOBALS['TL_DCA']['tl_content']['palettes']['lightboxLinkYoutube']     = '{type_legend},type,headline;{image_legend},useImage;{config_legend},linkTitle,youtube;{gallery_legend},lightboxlink_gallery;{protected_legend:hide},protected;{expert_legend:hide},guests,cssID,space;{invisible_legend:hide},invisible,start,stop';

$GLOBALS['TL_DCA']['tl_content']['subpalettes']['lightboxlink_gallery'] = 'lightboxlink_galleryId';

$GLOBALS['TL_DCA']['tl_content']['fields']['lightboxlink_url'] = array
(
    'label'                   => &$GLOBALS['TL_LANG']['MSC']['url'],
    'exclude'                 => true,
    'search'                  => true,
    'inputType'               => 'text',
    'eval'                    => array('mandatory'=>true, 'rgxp'=>'url', 'decodeEntities'=>true, 'maxlength'=>255, 'fieldType'=>'radio', 'tl_class'=>'w50 wizard'),
    'sql'                     => "varchar(255) NOT NULL default ''"
);

$GLOBALS['TL_DCA']['tl_content']['fields']['lightboxlink_gallery'] = array
(
    'label'                   => &$GLOBALS['TL_LANG']['tl_content']['lightboxlink_gallery'],
    'exclude'                 => true,
    'inputType'               => 'checkbox',
    'eval'                    => array('submitOnChange'=>true),
    'sql'                     => "char(1) NOT NULL default ''"
);

$GLOBALS['TL_DCA']['tl_content']['fields']['lightboxlink_galleryId'] = array
(
    'label'                   => &$GLOBALS['TL_LANG']['tl_content']['lightboxlink_galleryId'],
    'exclude'                 => true,
    'search'                  => false,
    'inputType'               => 'text',
    'eval'                    => array('mandatory'=>true, 'maxlength'=>255, 'tl_class'=>'w50'),
    'sql'                     => "varchar(255) NOT NULL default ''"
);
