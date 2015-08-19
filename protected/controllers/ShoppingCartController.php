<?php
class ShoppingCartController extends Controller
{
    	public function actionCreate()
	{
		if(!is_numeric($_POST['count']) || $_POST['count'] <= 0) {
			Shop::setFlash('Вкажіть будь ласка коректну кількість товару');
			$this->redirect(array( 
							'//shop/product', 'id' => $_POST['product']));
		}
		$cart = Shop::getCartContent();

		// remove potential clutter
		if(isset($_POST['yt0']))
			unset($_POST['yt0']);
		if(isset($_POST['yt1']))
			unset($_POST['yt1']);
        if(isset($cart[$_POST['sklad']])){
            $cart[$_POST['sklad']]['count']+=$_POST['count'];
        }
        else{
            	$cart[$_POST['sklad']] = $_POST;
        }
	
	
		Shop::setCartcontent($cart);
		Shop::setFlash('Продукт був доданий у кошик');
		$this->redirect(array('//shop/product','id' => $_POST['product']));
	}
    public function actionView(){
        $carts=Shop::GetCartContent();
         $this->render('view',array('carts'=>$carts));
        
    }
      public function actionDelete($id=Null){
        $cart = Shop::getCartContent();
        unset($cart[$id]);
        Shop::setCartcontent($cart);
		Shop::setFlash('Продукт був вилучений з кошика');
		$this->redirect(array('//shoppingcart/view'));
        
    }
    
}
?>