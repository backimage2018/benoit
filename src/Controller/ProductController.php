<?phpnamespace App\Controller;use App\Form\ProductType;use App\Form\ReviewType;
use App\Entity\Image;
use App\Entity\Product;
use App\Entity\Review;use App\Service\FileUploader;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Form\Form;use Symfony\Component\HttpFoundation\File\File;
class ProductController extends Controller
{
    /**
     * @Route("/admin/product_admin", name="product_admin")
     */
    public function registerProduct(Request $request,FileUploader $fileUploader)
    {
        // 1) build the form  
        $Product = new Product();        $Image = new Image();        
        $form = $this->createForm(ProductType::class, $Product);        $form->handleRequest($request);           if ($form->isSubmitted() && $form->isValid()){                    $file = $Product->getImage()->getlien();            $fileName = $fileUploader->upload($file);            $Image->setLien($fileName);            $Image->setProduct($Product);            $Product->setImage($Image);            $em = $this->getDoctrine()->getManager();            $em->persist($Product);            $em->flush();                    return $this->redirectToRoute('product_admin');            }     
        return $this->render('admin\product_admin.html.twig',array(                        'form' => $form->createView(),            ////base            "welcome"=>constante::welcome,            "logo"=>constante::logo,            "menuheader"=>constante::menuheader,            "langue"=>constante::langue,            "devise"=>constante::devise,            "searchcategories"=>constante::searchcategories,            "custommenus"=>constante::custommenu,            "categorieshead"=>constante::categorieshead,            "ressocial"=>constante::ressocial,            "Account_login" =>constante::Account_login,            "Account_join" => constante::Account_join,            "footermyaccount"=>constante::footer_my_account,            "footerCustomer"=>constante::footer_Customer_Service,            "footer_subscribe_h3"=>constante::footer_subscribe_h3,            "footer_subscribe_p"=>constante::footer_subscribe_p,            "menunav"=>constante::menunav,            "footer_subscribe_button"=>constante::footer_subscribe_button,            "categories"=>constante::categories));            }        /**     * @return string     */    private function generateUniqueFileName()    {        // md5() reduces the similarity of the file names generated by        // uniqid(), which is based on timestamps        return md5(uniqid());    }            /**     * @Route("/products", name="products")     */        Public function recherche(){                $article= $this-> getDoctrine()        ->getRepository(Product::class)        ->findAll();                                return $this->render('products.php.twig',array(        'article'=>$article,               ////base        "welcome"=>constante::welcome,        "logo"=>constante::logo,        "menuheader"=>constante::menuheader,        "langue"=>constante::langue,        "devise"=>constante::devise,        "searchcategories"=>constante::searchcategories,        "custommenus"=>constante::custommenu,        "categorieshead"=>constante::categorieshead,        "ressocial"=>constante::ressocial,        "Account_login" =>constante::Account_login,        "Account_join" => constante::Account_join,        "footermyaccount"=>constante::footer_my_account,        "footerCustomer"=>constante::footer_Customer_Service,        "footer_subscribe_h3"=>constante::footer_subscribe_h3,        "footer_subscribe_p"=>constante::footer_subscribe_p,        "menunav"=>constante::menunav,        "footer_subscribe_button"=>constante::footer_subscribe_button,        "categories"=>constante::categories));
}/** * @Route("/product-page/{id}", name="product-page") */Public function rechercheid($id){        $article= $this-> getDoctrine()    ->getRepository(Product::class)    ->find($id);    $articles= $this-> getDoctrine()    ->getRepository(Product::class)    ->findAll();        $review= $this-> getDoctrine()    ->getRepository(Review::class)    ->findAll();              return $this->render('product-page.php.twig',array(        'articlesdetail'=>$article,        "commentaires"=>json_decode(constante::commentaires),        "option_productpage"=>constante::option_productpage,        "Review"=>constante::Reviewlength,        "titredetail"=>constante::titredetail,        'articles'=>$articles,        'commentaires'=>$review,         ////base        "welcome"=>constante::welcome,        "logo"=>constante::logo,        "menuheader"=>constante::menuheader,        "langue"=>constante::langue,        "devise"=>constante::devise,        "searchcategories"=>constante::searchcategories,        "custommenus"=>constante::custommenu,        "categorieshead"=>constante::categorieshead,        "ressocial"=>constante::ressocial,        "Account_login" =>constante::Account_login,        "Account_join" => constante::Account_join,        "footermyaccount"=>constante::footer_my_account,        "footerCustomer"=>constante::footer_Customer_Service,        "footer_subscribe_h3"=>constante::footer_subscribe_h3,        "footer_subscribe_p"=>constante::footer_subscribe_p,        "menunav"=>constante::menunav,        "footer_subscribe_button"=>constante::footer_subscribe_button,        "categories"=>constante::categories));        }/** * @Route("/admin/list", name="list_product") */        Public function list(){                        $articles= $this-> getDoctrine()            ->getRepository(Product::class)            ->findAll();                        return $this->render('admin/list.html.twig',array(                'articles'=>$articles,                ////base                "welcome"=>constante::welcome,                "logo"=>constante::logo,                "menuheader"=>constante::menuheader,                "langue"=>constante::langue,                "devise"=>constante::devise,                "searchcategories"=>constante::searchcategories,                "custommenus"=>constante::custommenu,                "categorieshead"=>constante::categorieshead,                "ressocial"=>constante::ressocial,                "Account_login" =>constante::Account_login,                "Account_join" => constante::Account_join,                "footermyaccount"=>constante::footer_my_account,                "footerCustomer"=>constante::footer_Customer_Service,                "footer_subscribe_h3"=>constante::footer_subscribe_h3,                "footer_subscribe_p"=>constante::footer_subscribe_p,                "menunav"=>constante::menunav,                "footer_subscribe_button"=>constante::footer_subscribe_button,                "categories"=>constante::categories));                                                        }        /**         * @Route("/admin/edit/{id}", name="edit_product")         */        Public function edit(Request $request,Product $Product,fileUploader $fileUploader){            $filename=$Product->getImage()->getLien();            $file=new File($this->getParameter('image_directory').DIRECTORY_SEPARATOR . $filename);            $Product->getImage()->setLien($file);                      $form = $this->createForm(ProductType::class, $Product);            $form->handleRequest($request);                        if ($form->isSubmitted() && $form->isValid()){                $file = $Product->getImage()->getlien();                $fileName = $fileUploader->upload($file);                                $Product->getImage()->setLien($fileName);                $em = $this->getDoctrine()->getManager();                $em->flush();                                return $this->redirectToRoute('product_admin');            }                        return $this->render('admin\product_admin.html.twig',array(                'articles'=>$Product,                'form' => $form->createView(),                ////base                "welcome"=>constante::welcome,                "logo"=>constante::logo,                "menuheader"=>constante::menuheader,                "langue"=>constante::langue,                "devise"=>constante::devise,                "searchcategories"=>constante::searchcategories,                "custommenus"=>constante::custommenu,                "categorieshead"=>constante::categorieshead,                "ressocial"=>constante::ressocial,                "Account_login" =>constante::Account_login,                "Account_join" => constante::Account_join,                "footermyaccount"=>constante::footer_my_account,                "footerCustomer"=>constante::footer_Customer_Service,                "footer_subscribe_h3"=>constante::footer_subscribe_h3,                "footer_subscribe_p"=>constante::footer_subscribe_p,                "menunav"=>constante::menunav,                "footer_subscribe_button"=>constante::footer_subscribe_button,                "categories"=>constante::categories));                    }                        }?>