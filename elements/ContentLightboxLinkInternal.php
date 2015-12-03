<?php

namespace Contao;

class ContentLightboxLinkInternal extends \ContentElement
{
    protected $strTemplate = 'ce_lightboxlink';

    public function generate()
    {
	return parent::generate();
    }

    protected function compile()
    {
	$arrData = array();
	$arrData['linkUrl'] = $this->url;
	$arrData['lbl_css'] = 'lbl_internal';

	if(!$this->lightboxlink_gallery) {
	    for($n = 0; $n < 8; $n++) {
		switch(rand(1, 2)) {
		    case 1:
			$this->lightboxlink_galleryId .= chr(rand(97, 122));
			break;
		    case 2:
			$this->lightboxlink_galleryId .= chr(rand(48, 57));
			break;
		}
	    }
	}

	$arrData['lightboxlink_galleryId'] = $this->lightboxlink_galleryId;

	if($this->useImage) {
	    if($this->singleSRC) {
		$objFile  = \FilesModel::findByPk($this->singleSRC);
		$objImage = new \stdClass();

		$this->addImageToTemplate($objImage, array
		(
		    'addImage'    => 1,
		    'singleSRC'   => $objFile->path,
		    'alt'         => $this->alt,
		    'size'        => $this->size,
		    'imageUrl'    => $arrData['linkUrl'],
		    'caption'     => $this->caption
		), null, $article['id']);

		$arrImage = (array) $objImage;
	    }

	    $arrData = array_merge($arrData, $this->Template->getData());
	    $arrData = array_merge($arrData, $arrImage);
	}
	else {
	    if($this->linkTitle) {
	        $arrData['linkTitle'] = $this->linkTitle;
	    }
	    else {
	        $arrData['linkTitle'] = $arrData['linkUrl'];
	    }
	}

	$this->Template->setData($arrData);
    }
}
     