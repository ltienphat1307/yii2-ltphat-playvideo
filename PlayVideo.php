<?php

namespace ltphat\playvideo;

/**
 * This is just an example.
 */
class PlayVideo extends \yii\base\Widget
{
	public $url;

	public function init()
    {
        parent::init();

        if (!$this->url) {
        	$this->url = 'https://www.youtube.com/embed/A6XUVjK9W4o';
        }
    }

    public function run()
    {
    	$template = 
    		'<div class="video-player-container custom-padding-horizontal hb-widget hb-widget-video" data-field="video">'
			    .'<div class="embed-responsive embed-responsive-16by9">'
				    	.'<div class="video">'
				        	.'<iframe class="embed-responsive-item active video-player" src="' .$this->url.'" frameborder="0" allowfullscreen></iframe>'
				        .'</div>'
			    .'</div>'
			.'</div>';
        return $template;
    }
}
