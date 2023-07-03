<?php

function lang($phrase){
         
      static $lang = array(
        
            'home'                =>    'Home',
            'Cars'                =>    'Cars',
            'Gulf Cars'           =>    'Gulf Cars',
            'Incoming Cars'       =>    'Incoming Cars',
            'Car shows'           =>    'Car shows',
            'Categories'          =>    'Categories',
            'Parts'               =>    'Parts',
            'Electronics'         =>    'Electronics',
            'Real Estate'         =>    'Real Estate',
            'Trailers'            =>    'Trailers',
            'yachts'              =>    'yachts',
            'Caravans'            =>    'Caravans',
            'Other'               =>    'Other',
            'Pricing'             =>    'Pricing',
            'Contact us'          =>    'Contact us',
            'Add'                 =>    'Add',
            'Login'               =>    'Login',
            'Favorite'            =>    'Favorite',
            'Settings'            =>    'Settings',
            'Sign up'             =>    'Sign up',
            'Logout'              =>    'Logout',
            'My Ads'              =>    'My Ads',
            'Spare Website'              =>    'Spare Website',
            'A site'              =>    ' A site that displays classified ads, allowing customers to post ads for their cars',


      );
    
      return $lang[$phrase];
}
?>

<?php //echo lang('welcome') .' '. lang('waled') ?>
