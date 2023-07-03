<?php

function lang($phrase){
         
    static $lang = array(

            'home'                =>    'الرئيسية',
            'Cars'                =>    ' سبارات',
            'Gulf Cars'           =>    ' خليجي',
            'Incoming Cars'       =>    '  وارد ',
            'Car shows'           =>    'معارض السيارات',
            'Categories'          =>    'الاقسام',
            'Parts'               =>    ' قطع غيار',
            'Electronics'         =>    'الكترونيات',
            'Real Estate'         =>    'عقارات',
            'Trailers'            =>    'مقطورات',
            'yachts'              =>    'البحريات',
            'Caravans'            =>    ' كارافانات',
            'Other'               =>    'اخري',
            'Pricing'             =>    'الباقات',
            'Contact us'          =>    'تواصل معنا',
            'Add'                 =>    'اضف اعلان',
            'Login'               =>    'تسجيل دخول',
            'Favorite'            =>    'المفضلة',
            'Settings'            =>    'الاعدادات',
            'Sign up'             =>    'انشاء حساب',
            'Logout'              =>    ' تسجيل خروج',
            'My Ads'              =>    '  اعلاناتي',
            'Spare Website'              =>    'موقع سبير الإلكترون',
            'A site'              =>    'موقع يعرض الإعلانات المبوبة .. حيث يتيح للعملاء نشر الاعلانات الخاصة بسياراته ',
     );
    
    return $lang[$phrase];

}