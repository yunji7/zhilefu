<?php


    define(
        '__YORK_CDN__',
        __ROOT__.'/'.
        'Public'.'/'.
        'York'
    );
return array(
	//'配置项'=>'配置值'

    'TMPL_L_DELIM'          =>  '<{',
    'TMPL_R_DELIM'          =>  '}>',


    'URL_CASE_INSENSITIVE' =>true, //大小写不敏感


    'TMPL_PARSE_STRING' => array(
        '__LINK__'    => __YORK_CDN__,
    ),

);