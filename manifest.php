<?php 
    // if (!defined('FW')) die('Forbidden');

    // class FW_Extension_e25_blurb extends FW_Extension
    // {
    
    // }

    $manifest = array();

        $manifest['name']        = __( 'Blurb', 'fw' );
        $manifest['description'] = __( "Adds the Blurb extension to your website. You'll be able to create different blurb for your all the other website pages.", 'fw' );
        $manifest['version'] = '0.0.1';
        $manifest['github_repo'] = 'https://github.com/dasun-eranga/blurb-unyson-shortcode';
        // $manifest['uri'] = 'http://manual.unyson.io/en/latest/extension/slider/index.html#content';
        $manifest['author'] = 'Dasun';
        // $manifest['author_uri'] = 'http://themefuse.com/';
        $manifest['display'] = true;
        $manifest['standalone'] = true;
        $manifest['requirements'] = array(
            'extensions' => array(
                'population-method' => array(),
            )
        );

?>