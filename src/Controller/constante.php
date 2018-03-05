<?php
namespace App\Controller;

class constante {

   //tableaux des constantes 
    // id="top-header"><div class="container">
    
  const welcome = "Bienvenue to E-shop!" ;
 // base.html.twing
    // class header-top-links (menu/langue/devise)
    //menu
    
  // logo 
  const logo = "./img/logo.png";
    const menuheader = array('menu'=>['name'=>'store',
                                       'url'=>'/store'],
                                      ['name'=>'newsletter',
                                       'url'=>''],
                                        ['name'=>'FAQ',
                                        'url'=>'/FAQ']);
     
    //langue
     const langue = array('language'=>['name'=>'English (EN)',
                                            'url'=>'/English'],
                                            ['name'=>'russian (RU)',
                                                'url'=>'/russian'],
                                            ['name'=>'france (FR)',
                                                'url'=>'/france'],
                                            ['name'=>'Spanish (SP)',
                                            'url'=>'/Spanish']);
    
    //devise
    const devise = array('devises'=>['name'=>'USD',
                                     'url'=>'/USD'],
                                     ['name'=>'EUR',
                                       'url'=>'/EUR']
        );
    //	<!-- Account -->
    const Account_login = "Login";
    const Account_join = "join";
    
    // class input search-categories
    const searchcategories = array('categories'=>['name'=>'All Categories',
                                    'value'=>'0'],
                                    ['name'=>'Category 01',
                                    'value'=>'1'],
                                     ['name'=>'Category 02',
                                       'value'=>'1']
    );
    // class custom-menu
    const custommenu = array('custommenu1'=>['name'=>'My Account',
                                              'URL'=>'/Myaccount',
                                              'class'=>'fa fa-user-o'],
                                            ['name'=>'My Wishlist',
                                              'URL'=>'/MyWishlist',
                                              'class'=>'fa fa-heart-o'],
                                            ['name'=>'Compare',
                                              'URL'=>'/Compare',
                                              'class'=>'fa fa-exchange'],
                                            ['name'=>'Checkout',
                                                'URL'=>'/Checkout',
                                                'class'=>'fa fa-check'],
                                            ['name'=>'Login',
                                                'URL'=>'/Login',
                                                'class'=>'fa fa-unlock-alt'],
                                            ['name'=>'Create An Account',
                                                    'URL'=>'/Create',
                                                    'class'=>'fa fa-user-plus'],);
                                        
    

    
    // class  list-links-title
    
 const categories = array('title'=>'Categories',
                                   'categoriesdetail'=>[
                                             'cat1'=>['name'=>'Clothing',
                                             'URL'=>'/WomensClothing'],
                                                               
                                                                                                                         
                                               'cat2'=> ['name'=>'Phones & Accessories',
                                                'URL'=>'/PhonesAccessories'],
                                                                    
                                                 'cat3'=> ['name'=>'Jewelry & Watches',
                                                  'URL'=>'/Jewelry&Watches'],
                                                             
                                                  'cat4'=>['name'=>'Bags & Shoes',
                                                   'URL'=>'/Bags&Shoes']]);
                                             
    
        //category-nav category-header
        
 const categorieshead = array('title'=>'Categories',
     'categoriesdetail'=>[
         
         'cat1'=>['name'=>'WomensClothing',
             'URL'=>'/WomensClothing',
              'sousmenu'=>'1'],
         
         'cat2'=> ['name'=>'MensClothing',
             'URL'=>'/Jewelry&Watches',
             ],
         
         'cat3'=> ['name'=>'Phones & Accessories',
             'URL'=>'/PhonesAccessories',
             'sousmenu'=>'1']
         ,
         
         'cat4'=> ['name'=>'COMPUTER & OFFICE',
             'URL'=>'/COMPUTEROFFICE'
             
         ],
         
         'cat5'=> ['name'=>'CONSUMER ELECTRONICS',
             'URL'=>'/CONSUMERELECTRONICS'
             ],
         
         'cat6'=> ['name'=>'Jewelry & Watches',
             'URL'=>'/Jewelry&Watches',
             'sousmenu'=>'1'],
         
         'cat7'=>['name'=>'Bags & Shoes',
             'URL'=>'/Bags&Shoes'
         ],
         
         'cat8'=>['name'=>'View all',
             'URL'=>'/Viewall',
             'sousmenu'=>'1'
         ]
         ]);
 //<!-- menu nav --> menu-header
 
 const menunav = array('menudetail'=>[
           'menu1'=>['name'=>'Home',
             'URL'=>'/Home'],
         
         'menu2'=> ['name'=>'Shop',
             'URL'=>'/Shop'],
         
          'menu3'=> ['name'=>'Women',
           'URL'=>'/Women',
           'sousmenu'=>'1'],
     
         'menu4'=> ['name'=>'Men',
         'URL'=>'/Men',
         'sousmenu'=>'1'],
     
         'menu5'=> ['name'=>'Sale',
         'URL'=>'/Sale']     
     ]);
 
 //<!-- menu nav --> custom-menu
 
 
         
 //footer-social
 
 const ressocial = array('reseau'=>[
         
         'facebook'=>['name'=>'fa fa-facebook',
                      'URL'=>'/facebook'],
         
         'twitter'=> ['name'=>'fa fa-twitter',
                       'URL'=>'/twitter'],
         
         'instagram'=> ['name'=>'fa fa-instagram',
                       'URL'=>'/instagram'],
         
         'google-plus'=>['name'=>'fa fa-google-plus',
             'URL'=>'/goolgeplus'],
         
         'pinterest'=>['name'=>'fa fa-pinterest',
             'URL'=>'/pinterest']
     ]);
 
 //class footer my account
 
 const footer_my_account = array('title'=>'my account',
     'account'=>[
     
                 'lien1'=>['name'=>'my account',
                            'URL'=>'/MYACCOUNT'],
                 
                 'lien2'=> ['name'=>'MYWISHLIST',
                            'URL'=>'/MYWISHLIST'],
                 
                 'lien3'=> ['name'=>'COMPARE',
                            'URL'=>'/COMPARE'],
                 
                 'lien4'=>['name'=>'CHECKOUT',
                     'URL'=>'/CHECKOUT'],
                 
                 'lien5'=>['name'=>'LOGIN',
                     'URL'=>'/login']
     ]);
 // class footer_Customer_Service
 
 const footer_Customer_Service = array('title'=>'CUSTOMER SERVICE',
     'account'=>[
         
         'lien1'=>['name'=>'ABOUT US',
             'URL'=>'/ABOUTUS'],
         
         'lien2'=> ['name'=>'SHIPING & RETURN',
             'URL'=>'/SHIPING'],
         
         'lien3'=> ['name'=>'SHIPING GUIDE',
             'URL'=>'/SHIPINGGUIDE'],
         
         'lien4'=>['name'=>'FAQ',
             'URL'=>'/FAQ'],
         
       
     ]);
const footer_subscribe_h3="Stay Connected";
const footer_subscribe_p ="Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor.";
const footer_subscribe_button ="Join Newslatter";

///index////

//banner HOME

const index_banner = array('account'=>[
        
        'lien1'=>['name'=>'Bags sale',
            'h3'=>'Up to 50% Discount',
            'button'=>'Shop Now',
            'URL'=>'./img/banner01.jpg'],
        
        'lien2'=> ['name'=>'HOT DEAL',
            'span'=>'Up to 50% OFF',
            'button'=>'Shop Now',
            'URL'=>'./img/banner02.jpg'],
        
        'lien3'=> ['name'=>'New Product',
            'span'=>'Collection', 
            'button'=>'Shop Now',
            'URL'=>'./img/banner03.jpg'],
        
            
        
    ]);

//banner section1

const index_section_banner = array('account'=>[
    
    'lien1'=>['name'=>'NEW COLLECTION',
          'URL'=>'./img/banner10.jpg'],
    
    'lien2'=>['name'=>'NEW COLLECTION',
        'URL'=>'./img/banner11.jpg'],
    
    'lien3'=>['name'=>'NEW COLLECTION',
        'URL'=>'./img/banner12.jpg'],
    
    
    
]);
//banner section1 deals of the day 


/// Index deals of the day

const index_deals_banner = array('title'=>"Deals Of The Day",
                                  'account'=>[
    
                                    'lien1'=>['name'=>"NEW COLLECTION",
                                        'URL'=>'./img/banner14.jpg',
                                    'button'=>'Shop Now'],
                                ]);
/// Index section section-grey banner 1

const index_sectiongrey_banner1 = array(  
    
    'lien1'=>['name'=>'NEW COLLECTION',
               'span'=>'Up to 50% OFF',
        'button'=>'Shop Now',
        'URL'=>'./img/banner11.jpg'],
    
    
);

/// Index section section-grey banner 2

const index_sectiongrey_banner = array('account'=>[
    
      
    'lien1'=>['name'=>'NEW COLLECTION',
        'URL'=>'./img/banner11.jpg'],
    
    'lien2'=>['name'=>'NEW COLLECTION',
        'URL'=>'./img/banner12.jpg'],

]);


/// Index latest product 

const index_latest_product = array('title'=> 'Latest Products',
    
    'account'=>[
    
    
    'lien1'=>['name'=>'NEW COLLECTION',
        'URL'=>'./img/banner15.jpg',
        'button'=>'Shop Now'],
  
    
]);
    const deals='[
{
"id":"1",
"nom":"sac",
"prix":"32.50$",
"url":"./img/product01.jpg"
},
{
"id":"2",
"nom":"montre",
"prix":"32.50$",
"url":"./img/product02.jpg",
"new":"new"
},
{
"id":"3",
"nom":"portefeuille",
"prix":"32.50$",
"url":"./img/product03.jpg",
"new":"new",
"sold":"-20%" 
},
{
"id":"4",
"nom":"basket",
"prix":"32.50$",
"url":"./img/product04.jpg",
"new":"new",
"sold":"-20%"
},
{
"id":"5",
"nom":"botte",
"prix":"32.50$",
"url":"./img/product05.jpg",
"new":"new"
},
{
"id":"6",
"nom":"sac cartable",
"prix":"32.50$",
"url":"./img/product06.jpg"
}]';
    
    const articles='[
{
"id":"1",
"nom":"sac",
"prix":"32.50$",
"url":"./img/product01.jpg"
},
{
"id":"2",
"nom":"montre",
"prix":"32.50$",
"url":"./img/product02.jpg",
"new":"new"
},
{
"id":"3",
"nom":"portefeuille",
"prix":"32.50$",
"url":"./img/product03.jpg",
"new":"new",
"sold":"-20%"   
},
{
"id":"4",
"nom":"basket",
"prix":"32.50$",
"url":"./img/product04.jpg",
"sold":"-20%"
},
{
"id":"5",
"nom":"botte",
"prix":"32.50$",
"url":"./img/product05.jpg"
},
{
"id":"6",
"nom":"sac cartable",
"prix":"32.50$",
"url":"./img/product06.jpg"
},
{
"id":"7",
"nom":"sac a main",
"prix":"32.50$",
"url":"./img/product07.jpg"
},
{
"id":"8",
"nom":"ceinture",
"prix":"32.50$",
"url":"./img/product08.jpg"
},
{
"id":"9",
"nom":"sac",
"prix":"32.50$",
"url":"./img/product01.jpg"
}
]';

    

    const Cate=array(
      
        "cate1" => "Women",
        "cate2" => "man",
        "cate3" => "PHONES & ACCESSORIES",
        "cate4" => "Computer & Office",
        "cate5" => "Consumer Electronics",
        "cate6" => "Jewelry & Watches",
        "cate7" => "Bags & Shoes",
        "cate8" => "View all",
);   




/// products page

    const titredetail = array('titreavail'=>'Availability:',
        'titrebrand'=>'brand:',
        'titrequantite'=>'QTY');  
    



const commentaires='[
        {
            "id" : "1",
            "auteur":"John",
            "date":"27 DEC 2017 / 8:0 PM",
            "commentaire":"Très bon article",
            "note":"2"
        },
        {
            "id" : "2",
            "auteur":"Benoit",
            "date":"27 DEC 2017 / 8:0 PM",
            "commentaire":"moyen article",
            "note":"1"
        }
 
        ]';

const Reviewlength = array('Review1'=>"Review(s) / Add Review");



    

const option_productpage = array('title1'=>'Size',
        
        'title2'=>"color",
        
        'list'=>[
        
        
        'lien1'=>['name'=>'S'],
        'lien2'=>['name'=>'XL'],
        'lien3'=>['name'=>'SL'],
      ],
    
);

}
?>