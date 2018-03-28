<?php
namespace App\Controller;

use App\Service\PanierService;

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
                                              'URL'=>'#',
                                              'class'=>'fa fa-user-o'],
                                            ['name'=>'My Wishlist',
                                              'URL'=>'#',
                                              'class'=>'fa fa-heart-o'],
                                            ['name'=>'Compare',
                                              'URL'=>'#',
                                              'class'=>'fa fa-exchange'],
                                            ['name'=>'Checkout',
                                                'URL'=>'#',
                                                'class'=>'fa fa-check'],
                                            ['name'=>'Login',
                                                'URL'=>'/Login',
                                                'class'=>'fa fa-unlock-alt'],
                                            ['name'=>'Create An Account',
                                                    'URL'=>'/join',
                                                    'class'=>'fa fa-user-plus'],);
                                        
    

    
    // class  list-links-title
    
 const categories = array('title'=>'Categories',
                                   'categoriesdetail'=>[
                                       
                                           
                                           'cat1'=>['name'=>'WomensClothing',
                                               'URL'=>'products/Women',
                                           ],
                                           
                                           'cat2'=> ['name'=>'MensClothing',
                                               'URL'=>'products/Men',
                                           ],
                                                
                                               'cat3'=> ['name'=>'Phones & Accessories',
                                                'URL'=>'#'],
                                                                    
                                                 'cat4'=> ['name'=>'Jewelry & Watches',
                                                  'URL'=>'#'],
                                                             
                                                  'cat5'=>['name'=>'Bags & Shoes',
                                                   'URL'=>'#']]);
                                             
    
        //category-nav category-header
        
 const categorieshead = array('title'=>'Categories',
     'categoriesdetail'=>[
         
         'cat1'=>['name'=>'WomensClothing',
             'URL'=>'/products/clothing/women',
              ],
         
         'cat2'=> ['name'=>'MensClothing',
             'URL'=>'/products/clothing/men',
             ],
         
         'cat3'=> ['name'=>'Phones & Accessories',
             'URL'=>'/products/category/PhonesandAccessories',
             ]
         ,
         
         'cat4'=> ['name'=>'COMPUTER & OFFICE',
             'URL'=>'/products/category/COMPUTERANDOFFICE'
             
         ],
         
         'cat5'=> ['name'=>'CONSUMER ELECTRONICS',
             'URL'=>'/products/category/CONSUMERELECTRONICS'
             ],
         
         'cat6'=> ['name'=>'Jewelry & Watches',
             'URL'=>'/products/category/JewelryWatches',
            ],
         
         'cat7'=>['name'=>'Bags & Shoes',
             'URL'=>'/products/category/BagsShoes'
         ],
         
         'cat8'=>['name'=>'View all',
             'URL'=>'/products',
             
         ]
         ]);
 //<!-- menu nav --> menu-header
 
 const menunav = array('menudetail'=>[
           'menu1'=>['name'=>'Home',
             'URL'=>'/'],
         
         'menu2'=> ['name'=>'Shop',
             'URL'=>'/products'],
         
          'menu3'=> ['name'=>'Women',
           'URL'=>'/products/Women',
           ],
     
         'menu4'=> ['name'=>'Men',
         'URL'=>'/products/men',
        ],
     
  
     ]);
 
 //<!-- menu nav --> custom-menu
 
 
         
 //footer-social
 
 const ressocial = array('reseau'=>[
         
         'facebook'=>['name'=>'fa fa-facebook',
                      'URL'=>'#'],
         
         'twitter'=> ['name'=>'fa fa-twitter',
                       'URL'=>'#'],
         
         'instagram'=> ['name'=>'fa fa-instagram',
                       'URL'=>'#'],
         
         'google-plus'=>['name'=>'fa fa-google-plus',
             'URL'=>'#'],
         
         'pinterest'=>['name'=>'fa fa-pinterest',
             'URL'=>'#']
     ]);
 
 //class footer my account
 
 const footer_my_account = array('title'=>'my account',
     'account'=>[
     
                 'lien1'=>['name'=>'my account',
                            'URL'=>'#'],
                 
                 'lien2'=> ['name'=>'MYWISHLIST',
                            'URL'=>'#'],
                 
                 'lien3'=> ['name'=>'COMPARE',
                            'URL'=>'#'],
                 
                 'lien4'=>['name'=>'CHECKOUT',
                     'URL'=>'#'],
                 
                 'lien5'=>['name'=>'LOGIN',
                     'URL'=>'/login']
     ]);
 // class footer_Customer_Service
 
 const footer_Customer_Service = array('title'=>'CUSTOMER SERVICE',
     'account'=>[
         
         'lien1'=>['name'=>'ABOUT US',
             'URL'=>'#'],
         
         'lien2'=> ['name'=>'SHIPING & RETURN',
             'URL'=>'#'],
         
         'lien3'=> ['name'=>'SHIPING GUIDE',
             'URL'=>'#'],
         
         'lien4'=>['name'=>'FAQ',
             'URL'=>'#'],
         
       
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
const cart = [
    [
        "title" => "My cart",
        "quantite" => "3",
        "total" => "$65.35",
        "viewbutton" => "View cart",
        "checkoutbutton" => "Checkout",
        "content" => [
            "article0" => [
                "price" => "$31.50",
                "name" => "Sac à main tissu",
                "url" => "./img/product01.jpg",
                "qty" => "1"
            ],
            "article1" => [
                "price" => "$42.50",
                "name" => "Montre kikou",
                "url" => "./img/product02.jpg",
                "qty" => "2"
            ],
            "article2" => [
                "price" => "$32.50",
                "name" => "Portefeuille cuir",
                "url" => "./img/product03.jpg",
                "qty" => "3"
            ]
            
        ]
    ]
];

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
            "commentaire":"TrÃ¨s bon article",
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

public static function variable($param)
{
    /* all displayed data in header */
    $param["welcome"] = self::welcome; // mandatory
    $param["logo"] = self::logo; // mandatory
    $param["menuheader"] = self::menuheader; // mandatory
    $param["langue"] = self::langue; // mandatory
    $param["devise"] = self::devise; // mandatory
    $param["searchcategories"] = self::searchcategories; // mandatory
    $param["custommenus"] = self::custommenu; // mandatory
    $param["categorieshead"] = self::categorieshead; // mandatory
    $param["ressocial"] = self::ressocial; // mandatory
    $param["Account_login"] = self::Account_login; // mandatory
    $param["Account_join"] = self::Account_join; // mandatory
    $param["footermyaccount"] = self::footer_my_account; // mandatory
    $param["footerCustomer"] = self::footer_Customer_Service; // mandatory
    $param["footer_subscribe_h3"] = self::footer_subscribe_h3; // mandatory
    $param["footer_subscribe_p"] = self::footer_subscribe_p; 
    $param["menunav"] = self::menunav; 
    $param["footer_subscribe_button"] = self::footer_subscribe_button; 
    $param["categories"] = self::categories;
    $param["cart"] = self::cart;
    return $param;
}
public static function variableindex($param)
{
    /* all displayed data in header */
    $param["index_banner"] = self::index_banner; // mandatory
    $param["index_section_banner"] = self::index_section_banner; // mandatory
    $param["index_deals_banner"] = self::index_deals_banner; // mandatory
    $param["index_sectiongrey_banner"] = self::index_sectiongrey_banner; // mandatory
    $param["index_sectiongrey_banner1"] = self::index_sectiongrey_banner1; // mandatory
    $param["index_latest_product"] = self::index_latest_product; // mandatory

    return $param;
}

//                 "index_banner"=>constante::index_banner,
//                 "index_section_banner"=>constante::index_section_banner,
//                 "index_deals_banner"=>constante::index_deals_banner,
//                 "index_sectiongrey_banner"=>constante::index_sectiongrey_banner,
//                 "index_sectiongrey_banner1"=>constante::index_sectiongrey_banner1,
//                 "index_latest_product"=>constante::index_latest_product,
}
?>