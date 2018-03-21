<?phpnamespace App\Controller;
use App\Entity\Image;
use App\Entity\Product;
use App\Entity\Review;use App\Service\FileUploader;
use Doctrine\ORM\EntityNotFoundException;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Config\Definition\Exception\Exception;
use Symfony\Component\Form\Form;use Symfony\Component\HttpFoundation\File\File;use RangeException;
use Doctrine\DBAL\Driver\PDOException;use Symfony\Component\Validator\Constraints\IsNull;use Symfony\Component\Validator\Tests\Constraints\IsNullValidatorTest;use Doctrine\ORM\Mapping\Id;use App\Form\ProductType;
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
        return $this->render('admin\product_admin.html.twig',array(                        'form' => $form->createView(),            'articles'=>"",            'image'=>"",            ////base            "welcome"=>constante::welcome,            "logo"=>constante::logo,            "menuheader"=>constante::menuheader,            "langue"=>constante::langue,            "devise"=>constante::devise,            "searchcategories"=>constante::searchcategories,            "custommenus"=>constante::custommenu,            "categorieshead"=>constante::categorieshead,            "ressocial"=>constante::ressocial,            "Account_login" =>constante::Account_login,            "Account_join" => constante::Account_join,            "footermyaccount"=>constante::footer_my_account,            "footerCustomer"=>constante::footer_Customer_Service,            "footer_subscribe_h3"=>constante::footer_subscribe_h3,            "footer_subscribe_p"=>constante::footer_subscribe_p,            "menunav"=>constante::menunav,            "footer_subscribe_button"=>constante::footer_subscribe_button,            "categories"=>constante::categories));            }        /**     * @return string     */    private function generateUniqueFileName()    {        // md5() reduces the similarity of the file names generated by        // uniqid(), which is based on timestamps        return md5(uniqid());    }            /**     * @Route("/products", name="products")     */        Public function recherche(){                $article= $this-> getDoctrine()        ->getRepository(Product::class)        ->findAll();           return $this->render('products.php.twig',array(        'article'=>$article,               ////base        "welcome"=>constante::welcome,        "logo"=>constante::logo,        "menuheader"=>constante::menuheader,        "langue"=>constante::langue,        "devise"=>constante::devise,        "searchcategories"=>constante::searchcategories,        "custommenus"=>constante::custommenu,        "categorieshead"=>constante::categorieshead,        "ressocial"=>constante::ressocial,        "Account_login" =>constante::Account_login,        "Account_join" => constante::Account_join,        "footermyaccount"=>constante::footer_my_account,        "footerCustomer"=>constante::footer_Customer_Service,        "footer_subscribe_h3"=>constante::footer_subscribe_h3,        "footer_subscribe_p"=>constante::footer_subscribe_p,        "menunav"=>constante::menunav,        "footer_subscribe_button"=>constante::footer_subscribe_button,        "categories"=>constante::categories));
}/** * @Route("/delete/{id}") */Public function deleted($id) {    $Product=$this-> getDoctrine()    ->getRepository(Product::class)    ->findOneBy(array('id' => $id));            $em = $this->getDoctrine()->getEntityManager();     try {   $em->remove($Product);    $em->flush();       }    catch (\Exception $e){        return $this->redirectToRoute('exception');    }    return $this->redirectToRoute('list');}/** * @Route("/product-page/{id}", name="product-page") */Public function rechercheid($id){     $article= $this-> getDoctrine()    ->getRepository(Product::class)    ->findOneBy(array('id' => $id));         if ( is_null($article)){        return $this->redirectToRoute('exception');    }    else {    $review=$article->getreviews()->toArray();    }    $articles= $this-> getDoctrine()    ->getRepository(Product::class)    ->findAll();    if ( is_null($articles)){        return $this->redirectToRoute('exception');    }      return $this->render('product-page.php.twig',array(        'articlesdetail'=>$article,        "option_productpage"=>constante::option_productpage,        "Review"=>constante::Reviewlength,        "titredetail"=>constante::titredetail,        'articles'=>$articles,        'commentaires'=>$review,         ////base        "welcome"=>constante::welcome,        "logo"=>constante::logo,        "menuheader"=>constante::menuheader,        "langue"=>constante::langue,        "devise"=>constante::devise,        "searchcategories"=>constante::searchcategories,        "custommenus"=>constante::custommenu,        "categorieshead"=>constante::categorieshead,        "ressocial"=>constante::ressocial,        "Account_login" =>constante::Account_login,        "Account_join" => constante::Account_join,        "footermyaccount"=>constante::footer_my_account,        "footerCustomer"=>constante::footer_Customer_Service,        "footer_subscribe_h3"=>constante::footer_subscribe_h3,        "footer_subscribe_p"=>constante::footer_subscribe_p,        "menunav"=>constante::menunav,        "footer_subscribe_button"=>constante::footer_subscribe_button,        "categories"=>constante::categories));        }/** * @Route("/admin/list", name="list") */        Public function list(){                        $articles= $this->getDoctrine()            ->getRepository(Product::class)            ->customdeletedproduct();                        return $this->render('admin/list.html.twig',array(                'articles'=>$articles,                ////base                "welcome"=>constante::welcome,                "logo"=>constante::logo,                "menuheader"=>constante::menuheader,                "langue"=>constante::langue,                "devise"=>constante::devise,                "searchcategories"=>constante::searchcategories,                "custommenus"=>constante::custommenu,                "categorieshead"=>constante::categorieshead,                "ressocial"=>constante::ressocial,                "Account_login" =>constante::Account_login,                "Account_join" => constante::Account_join,                "footermyaccount"=>constante::footer_my_account,                "footerCustomer"=>constante::footer_Customer_Service,                "footer_subscribe_h3"=>constante::footer_subscribe_h3,                "footer_subscribe_p"=>constante::footer_subscribe_p,                "menunav"=>constante::menunav,                "footer_subscribe_button"=>constante::footer_subscribe_button,                "categories"=>constante::categories));                                                        }        /**         * @Route("/admin/edit/{id}", name="edit_product")         */                           Public function edit(Request $request,fileUploader $fileUploader,$id){                       $Product=$this-> getDoctrine()            ->getRepository(Product::class)            ->findOneBy(array('id' => $id));            if ( is_null($Product)){                return $this->redirectToRoute('exception');            }            $filename=$Product->getImage()->getLien();            $file=new File($this->getParameter('image_directory').DIRECTORY_SEPARATOR . $filename);            $Product->getImage()->setLien($file);            $form = $this->createForm(ProductType::class, $Product);            $form->handleRequest($request);                                   if ($form->isSubmitted() && $form->isValid()){                $file = $Product->getImage()->getlien();                if ( is_null($file)){                    $Product->getImage()->setLien($filename);                 }                else{                $fileName = $fileUploader->upload($file);                $Product->getImage()->setLien($fileName);                }                $em = $this->getDoctrine()->getManager();                $em->flush();                return $this->redirectToRoute('list');            }                    return $this->render('admin\product_admin1.html.twig',array(                'articles'=>$Product,                'form' => $form->createView(),                'image'=> $Product->getImage()->getlien()->getfileName(),                ////base                "welcome"=>constante::welcome,                "logo"=>constante::logo,                "menuheader"=>constante::menuheader,                "langue"=>constante::langue,                "devise"=>constante::devise,                "searchcategories"=>constante::searchcategories,                "custommenus"=>constante::custommenu,                "categorieshead"=>constante::categorieshead,                "ressocial"=>constante::ressocial,                "Account_login" =>constante::Account_login,                "Account_join" => constante::Account_join,                "footermyaccount"=>constante::footer_my_account,                "footerCustomer"=>constante::footer_Customer_Service,                "footer_subscribe_h3"=>constante::footer_subscribe_h3,                "footer_subscribe_p"=>constante::footer_subscribe_p,                "menunav"=>constante::menunav,                "footer_subscribe_button"=>constante::footer_subscribe_button,                "categories"=>constante::categories));        }                /**         * @Route("/admin/corbeille", name="corbeille")         */                Public function corbeille(){                      $articles= $this->getDoctrine()            ->getRepository(Product::class)            ->customcorbeilleproduct();                        return $this->render('admin/list.html.twig',array(                'articles'=>$articles,                ////base                "welcome"=>constante::welcome,                "logo"=>constante::logo,                "menuheader"=>constante::menuheader,                "langue"=>constante::langue,                "devise"=>constante::devise,                "searchcategories"=>constante::searchcategories,                "custommenus"=>constante::custommenu,                "categorieshead"=>constante::categorieshead,                "ressocial"=>constante::ressocial,                "Account_login" =>constante::Account_login,                "Account_join" => constante::Account_join,                "footermyaccount"=>constante::footer_my_account,                "footerCustomer"=>constante::footer_Customer_Service,                "footer_subscribe_h3"=>constante::footer_subscribe_h3,                "footer_subscribe_p"=>constante::footer_subscribe_p,                "menunav"=>constante::menunav,                "footer_subscribe_button"=>constante::footer_subscribe_button,                "categories"=>constante::categories));                                            }        /**         * @Route("/search", name="search")         */        Public function search(){                        $valeur= "%".$_POST['search']."%";                        $articles= $this->getDoctrine()            ->getRepository(Product::class)            ->search($valeur);                             return $this->render('products.php.twig',array(            'article'=>$articles,            ////base            "welcome"=>constante::welcome,            "logo"=>constante::logo,            "menuheader"=>constante::menuheader,            "langue"=>constante::langue,            "devise"=>constante::devise,            "searchcategories"=>constante::searchcategories,            "custommenus"=>constante::custommenu,            "categorieshead"=>constante::categorieshead,            "ressocial"=>constante::ressocial,            "Account_login" =>constante::Account_login,            "Account_join" => constante::Account_join,            "footermyaccount"=>constante::footer_my_account,            "footerCustomer"=>constante::footer_Customer_Service,            "footer_subscribe_h3"=>constante::footer_subscribe_h3,            "footer_subscribe_p"=>constante::footer_subscribe_p,            "menunav"=>constante::menunav,            "footer_subscribe_button"=>constante::footer_subscribe_button,            "categories"=>constante::categories));}}?>