<?php

return [

    /*
    |----------------------------------------------------------
    | Pagination Get
    |----------------------------------------------------------
    |  This parameter will be sent in HTTP Get contains the
    |  page number
    */

    'pagination_param'=> 'page',

    /*
    |----------------------------------------------------------
    | Pagination Style
    |----------------------------------------------------------
    |  Style of pagination
    |  supported slider or simple
    */

    'pagination_style'        => 'slider',
    'paginationSimpleNext'    => 'Suivant',
    'paginationSimplePrevious'=> 'Précedent',

    /*
    |----------------------------------------------------------
    | Pagination class
    |----------------------------------------------------------
    |  The CSS class of the pagination by default we use a
    |  Bootstrap button style
    */

    'pagination_class'=> '{bootstrap}',

];
