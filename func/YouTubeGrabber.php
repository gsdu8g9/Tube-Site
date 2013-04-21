<?php

/**
 * The order must be followed.
 *  $addvideo = new YouTubeGrabber("http://www.youtube.com/watch?v=bOKeD2KYf6U");
 *  $addvideo->constructOembed();
 *  $addvideo->getXML();
 *  $addvideo->getEmbedCode();
 * 
 */
class YouTubeGrabber {

    private $url;
    private $oEmbedUrl;
    private $xml;

    public function __construct($url) {
        $this->url = $url;
    }

    public function constructOembed() {
        $oEmbed = "http://www.youtube.com/oembed?url=";
        $oEmbed .= $this->url;
        $oEmbed .= "&format=xml";
        $this->oEmbedUrl = $oEmbed;
        //print_r($this->oEmbedUrl);
    }

    public function getXML() {
        if (isset($this->oEmbedUrl)) {
            $this->xml = simplexml_load_file($this->oEmbedUrl);
        } else {
            die("Before you request XML, Please construct oEmbedURL.");
        }
    }

    public function getEmbedCode() {
        if (isset($this->xml)) {
            return $this->xml->html;
        } else {
            die("Some shit happened! oEmbedCode() XML may be null");
        }
    }

    public function getThumbnail() {
        if (isset($this->xml)) {
            $originalUrl = $this->xml->thumbnail_url;
            return $modifiedUrl = str_replace("hqdefault.jpg", "mqdefault.jpg", $originalUrl);
        } else {
            die("Some shit happened! getThumbnail() XML may be null");
        }
    }

    public function getAuthor() {
        if (isset($this->xml)) {
            $author = $this->xml->author_name;
            return $author;
        } else {
            die("Some shit happened! getAuthor() XML may be null");
        }
    }

    public function getTitle() {
        if (isset($this->xml)) {
            $title = $this->xml->title;
            return $title;
        } else {
            die("Some shit happened! getTitle() XML may be null");
        }
    }

    

}

?>
