<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Api extends CI_Controller {

	function __construct()
	{
		parent:: __construct();
		$this->load->database();
		$this->load->model('api_model');

	}
	//to get user list
	public function listUser()
	{
		$array_of_event = array();
		$limit=$this->input->post('limit');
		$start=$this->input->post('start');
		$result_login= $this->api_model->listUser($limit,$start);
		//pr($result_login);exit();
		foreach($result_login as $row)
		{
		$array_of_event[] = $row;
		}
		if(!empty($result_login)&&($result_login!=''))
		{
			$data['success'] = "1";
		}else{
			$data['success'] = "0";		    
		}
		    $data['data'] = $array_of_event; //need to assign event here
		    $response['responsedata'] = $data;

		    echo json_encode($response);
	}
	//to get user details
	public function userDetails()
	{
		$array_of_event = array();
		$userId = $this->input->post('userId');
		$result_login= $this->api_model->userDetails($userId);
		
		if(!empty($result_login)&&($result_login!=''))
		{
			$data['success'] = "1";
		}else{
			$data['success'] = "0";		    
		}
		    $data['data'] = $result_login; //need to assign event here
		    $response['responsedata'] = $data;

		    echo json_encode($response);
	}

	//list category
	public function listCategory()
	{
		$array_of_event = array();
		$categories= $this->api_model->listCategory();
		
		if(!empty($categories)&&($categories!=''))
		{
			foreach($categories as $row)
			{
			$array_of_event[] = $row;
			}
			$data['success'] = "1";
		}else{
			$data['success'] = "0";		    
		}
		    $data['data'] = $array_of_event; //need to assign event here
		    $response['responsedata'] = $data;

		    echo json_encode($response);
	}

	//list sub category
	public function listSubCategory()
	{
		$array_of_event = array();
		$typeId = $this->input->post('typeId');
		$subcategories= $this->api_model->listSubCategory($typeId);
		
		if(!empty($subcategories)&&($subcategories!=''))
		{
			foreach($subcategories as $row)
			{
			$array_of_event[] = $row;
			}
			$data['success'] = "1";
		}else{
			$data['success'] = "0";		    
		}
		    $data['data'] = $array_of_event; //need to assign event here
		    $response['responsedata'] = $data;

		    echo json_encode($response);
	}

	//list sub item list
	public function itemList()
	{
		$array_of_event = array();
		$typeId = $this->input->post('typeId');
		$itemList= $this->api_model->itemList($typeId);
		
		if(!empty($itemList)&&($itemList!=''))
		{
			foreach($itemList as $row)
			{
			$array_of_event[] = $row;
			}
			$data['success'] = "1";
		}else{
			$data['success'] = "0";		    
		}
		    $data['data'] = $array_of_event; //need to assign event here
		    $response['responsedata'] = $data;

		    echo json_encode($response);
	}

	//list sub item details
	public function listItemDetails()
	{
		$array_of_event = array();
		$itemId = $this->input->post('itemId');
		$listItemDetails= $this->api_model->listItemDetails($itemId);
		
		if(!empty($listItemDetails)&&($listItemDetails!=''))
		{
			
			$data['success'] = "1";
		}else{
			$data['success'] = "0";		    
		}
		    $data['data'] = $listItemDetails; //need to assign event here
		    $response['responsedata'] = $data;

		    echo json_encode($response);
	}
	
	//Add to cart
	public function addToCart()
	{
		$idata = $this->input->post();
		$addToCart= $this->api_model->addToCart($idata);
		
		if(!empty($addToCart)&&($addToCart!=''))
		{			
			$data['success'] = "1";
		}else{
			$data['success'] = "0";		    
		}
		    $data['data'] = $addToCart; //need to assign event here
		    $response['responsedata'] = $data;

		    echo json_encode($response);

	}
	//list cart item list
	public function cartList()
	{
		$array_of_event = array();
		$userId = $this->input->post('userId');
		$cartList= $this->api_model->cartList($userId);
		
		if(!empty($cartList)&&($cartList!=''))
		{
			foreach($cartList as $row)
			{
			$array_of_event[] = $row;
			}
			$data['success'] = "1";
		}else{
			$data['success'] = "0";		    
		}
		    $data['data'] = $array_of_event; //need to assign event here
		    $response['responsedata'] = $data;

		    echo json_encode($response);
	}

	//list cart item details
	public function cartItemDetails()
	{
		$array_of_event = array();
		$cartId = $this->input->post('cartId');
		$cartItemDetails= $this->api_model->cartItemDetails($cartId);
		
		if(!empty($cartItemDetails)&&($cartItemDetails!=''))
		{
			
			$data['success'] = "1";
		}else{
			$data['success'] = "0";		    
		}
		    $data['data'] = $cartItemDetails; //need to assign event here
		    $response['responsedata'] = $data;

		    echo json_encode($response);
	}

	//list sub category and all items
	public function listAllCategoryItem()
	{
		$array_of_event = array();
		$typeId = $this->input->post('typeId');
		$subcategories= $this->api_model->listSubCategory($typeId);
		$itemsbycategory= $this->api_model->itemsByCategory($typeId);
		
		if(!empty($subcategories)&&($subcategories!=''))
		{
			foreach($subcategories as $row)
			{
			$array_of_event[] = $row;
			}			
		}
		if(!empty($itemsbycategory)&&($itemsbycategory!=''))
		{
			foreach($itemsbycategory as $rows)
			{
			$array_of_event1[] = $rows;
			}			
		}
		if((!empty($itemsbycategory)&&($itemsbycategory!='')) ||(!empty($subcategories)&&($subcategories!='')) )
		{		
			$data['success'] = "1";
		}else{
			$data['success'] = "0";		    
		}

		    $data['category'] = $array_of_event; //need to assign event here
		    $data['items'] = $array_of_event1; //need to assign event here
		    $response['responsedata'] = $data;

		    echo json_encode($response);
	}

	//list category and all offer items
	public function myOffers()
	{
		$array_of_event = array();
		$categories= $this->api_model->listCategory();
		$myOffers= $this->api_model->myOffers();
		//pr($myOffers);
		if(!empty($myOffers)&&($myOffers!=''))
		{
			foreach($myOffers as $row)
			{
			$array_of_event[] = $row;
			}			
		}
		if(!empty($categories)&&($categories!=''))
		{
			foreach($categories as $rows)
			{
			$array_of_event1[] = $rows;
			}			
		}
		if((!empty($myOffers)&&($myOffers!='')) ||(!empty($categories)&&($categories!='')) )
		{		
			$data['success'] = "1";
		}else{
			$data['success'] = "0";		    
		}

		    $data['category'] = $array_of_event1; //need to assign event here
		    $data['offers'] = $array_of_event; //need to assign event here
		    $response['responsedata'] = $data;

		    echo json_encode($response);
	}

	//list category and all offer items
	public function offerByCategory()
	{
		$array_of_event = array();
		$typeId = $this->input->post('typeId');
		$offerByCategory= $this->api_model->offerByCategory($typeId);
		
		if(!empty($offerByCategory)&&($offerByCategory!=''))
		{
			
			$data['success'] = "1";
		}else{
			$data['success'] = "0";		    
		}
		    $data['data'] = $offerByCategory; //need to assign event here
		    $response['responsedata'] = $data;

		    echo json_encode($response);

	}
	//login

	public function loginData()
	{
		$array_of_event = array();
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$type = $this->input->post('type');
		$loginData= $this->api_model->loginData($username,$password,$type);
		
		if(!empty($loginData)&&($loginData!=''))
		{
			
			$data['success'] = "1";
		}else{
			$data['success'] = "0";		    
		}
		    $data['data'] = $loginData; //need to assign event here
		    $response['responsedata'] = $data;

		    echo json_encode($response);

	}

	//Registration
	public function userRegister()
	{
	    $idata = $this->input->post();
		$userRegister= $this->api_model->userRegister($idata);
		
		if(!empty($userRegister)&&($userRegister!=''))
		{			
			$data['success'] = "1";
		}else{
			$data['success'] = "0";		    
		}
		    $data['data'] = $userRegister; //need to assign event here
		    $response['responsedata'] = $data;

		    echo json_encode($response);

	}



	//Add comments
	public function contactUs()
	{
		$idata = $this->input->post();
		$contactUs= $this->api_model->contactUs($idata);
		
		if(!empty($contactUs)&&($contactUs!=''))
		{			
			$data['success'] = "1";
		}else{
			$data['success'] = "0";		    
		}
		    $data['data'] = $contactUs; //need to assign event here
		    $response['responsedata'] = $data;

		    echo json_encode($response);

	}

	////////////////////////////////////////////////Admin Start///////////////////////////////////////

	//Activate/outof stock items
	public function activateItem()
	{
		$itemId = $this->input->post('itemId');
		$status = $this->input->post('status');
		$activateItem= $this->api_model->activateItem($itemId,$status);
		
		if(!empty($activateItem)&&($activateItem=='1'))
		{			
			$data['success'] = "1";
		}else{
			$data['success'] = "0";		    
		}
		    $data['data'] = $activateItem; //need to assign event here
		    $response['responsedata'] = $data;

		    echo json_encode($response);

	}

	//Add new categories
	public function addCategory()
	{
		$idata = $this->input->post('');
		$addCategory= $this->api_model->addCategory($idata);
		
		if(!empty($addCategory)&&($addCategory!=''))
		{			
			$data['success'] = "1";
		}else{
			$data['success'] = "0";		    
		}
		    $data['data'] = $addCategory; //need to assign event here
		    $response['responsedata'] = $data;

		    echo json_encode($response);

	}

	//Add new sub categories
	public function addSubCategory()
	{
		$idata = $this->input->post('');
		$addCategory= $this->api_model->addSubCategory($idata);
		
		if(!empty($addCategory)&&($addCategory!=''))
		{			
			$data['success'] = "1";
		}else{
			$data['success'] = "0";		    
		}
		    $data['data'] = $addCategory; //need to assign event here
		    $response['responsedata'] = $data;

		    echo json_encode($response);

	}

	//Add new items
	public function addItems()
	{
	    $data = $this->input->post();
	    if($_FILES){
	    //$file = $this->input->post('image');
         
         		// $s_mail=$this->session->set_userdata('email');

         		// print_r($_FILES);exit();

         		$target_dir = "uploads/items";
				$target_file = $target_dir . basename($_FILES["image"]["name"]);


				$uploadOk = 1;
				$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
				// Check if image file is a actual image or fake image
				// if(isset($_POST["submit"])) {
				    $check = getimagesize($_FILES["image"]["tmp_name"]);
				    
				    if($check !== false) {
				        // echo "File is an image - " . $check["mime"] . ".";
				        $uploadOk = 1;
				    } else {
				        echo "File is not an image.";
				        $uploadOk = 0;
				    }
				// }

                    

				// Allow certain file formats
				if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" ) {
				    // echo "Sorry, only JPG, JPEG, PNG files are allowed.";
				    $uploadOk = 0;
				}
				
				print_r($uploadOk);exit();
				// Check if $uploadOk is set to 0 by an error
				if ($uploadOk == 0) {
				    echo "Sorry, your file was not uploaded.";
				// if everything is ok, try to upload file
				} else {
				    // if (
				    	move_uploaded_file($_FILES["image"]["tmp_name"], $target_file);
				    // ) {
				    //     echo "The file ". basename( $_FILES["logo"]["name"]). " has been uploaded.";

				    // } else {
				    //     echo "Sorry, there was an error uploading your file.";
				    // }
				}
	    
	    
	    }
		$insertData['typeId']= '1';
		$insertData['subId'] = $data['subId'];
		$category=$this->api_model->categoryById($insertData['typeId']);
		$subcategory=$this->api_model->subCategoryById($insertData['subId']);
		$insertData['itemTypeName']= $category['itemName'];
		$insertData['subName']= $subcategory['subName'];
		$insertData['itemName']= $data['itemName'];
		$insertData['description']= $data['description'];
		$insertData['quantity']= $data['quantity'];
		$insertData['price']= $data['price'];
		$insertData['status']= $data['status'];
		$insertData['image']= $target_file;
		$insertData['createdBy']= $data['createdBy'];
		
		$insertData1 = $this->input->post();
		$addItems= $this->api_model->addItems($insertData);
		
		if(!empty($addItems)&&($addItems!=''))
		{			
			$data['success'] = "1";
		}else{
			$data['success'] = "0";		    
		}
		    $data['data'] = $addItems; //need to assign event here
		    $response['responsedata'] = $data;

		    echo json_encode($response);

	}

	//Change status of the orders
	public function orderStatus()
	{
		$orderId = $this->input->post('orderId');
		$status = $this->input->post('status');
		$activateItem= $this->api_model->orderStatus($orderId,$status);
		
		if(!empty($activateItem)&&($activateItem=='1'))
		{			
			$data['success'] = "1";
		}else{
			$data['success'] = "0";		    
		}
		    $data['data'] = $activateItem; //need to assign event here
		    $response['responsedata'] = $data;

		    echo json_encode($response);

	}

	//View comments
	public function viewCommentById($idata='1')
	{
		$idata = $this->input->post();
		$viewComments= $this->api_model->viewCommentById($idata);
		
		if(!empty($viewComments)&&($viewComments!=''))
		{			
			$data['success'] = "1";
		}else{
			$data['success'] = "0";		    
		}
		    $data['data'] = $viewComments; //need to assign event here
		    $response['responsedata'] = $data;

		    echo json_encode($response);

	}

	//View comments by id
	public function viewComments()
	{
		$array_of_event = array();
		$viewComments= $this->api_model->viewComments();
		
		if(!empty($viewComments)&&($viewComments!=''))
		{
			foreach($viewComments as $row)
			{
			$array_of_event[] = $row;
			}
			$data['success'] = "1";
		}else{
			$data['success'] = "0";		    
		}
		    $data['data'] = $array_of_event; //need to assign event here
		    $response['responsedata'] = $data;

		echo json_encode($response);


		

	}


//to get user comments -sowmya
public function viewCommentsNew()
{
	$array_of_event = array();
	$limit=$this->input->post('limit');
	$start=$this->input->post('start');
	$result_login= $this->api_model->viewCommentsNew($limit,$start);
	//pr($result_login);exit();
	foreach($result_login as $row)
	{
	$array_of_event[] = $row;
	}
	if(!empty($result_login)&&($result_login!=''))
	{
		$data['success'] = "1";
	}else{
		$data['success'] = "0";		    
	}
		$data['data'] = $array_of_event; //need to assign event here
		$response['responsedata'] = $data;

		echo json_encode($response);
}



	
		//list category subcategory, items
	public function listAllCategory()
	{
	    
		$array_of_event = array();
		$categories= $this->api_model->listCategory();
		$category1= $this->api_model->listCategory1();
		
		if(!empty($this->input->post('typeId')) && $this->input->post('typeId')!='')
	    {
	        $typeId = $this->input->post('typeId');
	    }else{
	        $typeId = $category1['typeId'];
	    }
	    
		$subs = $this->api_model->listSubCategory($typeId);
		$subs1 = $this->api_model->listSubCategory1($typeId);
		$items = $this->api_model->itemList($typeId);
		//pr($category1);exit();
		
		if(!empty($categories)&&($categories!=''))
		{
			foreach($categories as $row)
			{
			$array_of_event[] = $row;
			}
			if(!empty($subs)&&($subs!=''))
		    {
    			foreach($subs as $rowsub)
    			{
    			$array_of_eventsubs[] = $rowsub;
    			}
    			if(!empty($subs)&&($subs!=''))
		        {
        			foreach($items as $rowitem)
        			{
        			$array_of_eventitem[] = $rowitem;
        			}
		        }
		    }
			$data['success'] = "1";
		}else{
			$data['success'] = "0";		    
		}
		    $data['cats'] = $array_of_event; //need to assign event here
		    $data['subs'] = $array_of_eventsubs; //need to assign event here
		    $data['items'] = $array_of_eventitem; //need to assign event here
		    $response['responsedata'] = $data;

		    echo json_encode($response);
	}
	
	//26-08-2020
	
		//All orders
	public function allOrders()
	{
		$array_of_event = array();
		$allOrders= $this->api_model->allOrders();
		//pr($allOrders);exit();
		
		if(!empty($allOrders)&&($allOrders!=''))
		{
			foreach($allOrders as $row)
			{
			$array_of_event[] = $row;
			}
			$data['success'] = "1";
		}else{
			$data['success'] = "0";		    
		}
		    $data['data'] = $array_of_event; //need to assign event here
		    $response['responsedata'] = $data;
		    
        echo json_encode($response);
	}
	

///All orders new sowmya

public function allOrdersNew()
	{
		$array_of_event = array();
		$allOrders= $this->api_model->allOrdersNew();
		//pr($allOrders);exit();
		
		if(!empty($allOrders)&&($allOrders!=''))
		{
			foreach($allOrders as $row)
			{
			$array_of_event[] = $row;
			}
			$data['success'] = "1";
		}else{
			$data['success'] = "0";		    
		}
		    $data['data'] = $array_of_event; //need to assign event here
		    $response['responsedata'] = $data;
		    
        echo json_encode($response);
	}
	

		//change status of order
	public function orderStatusChange()
	{
		$orderId = $this->input->post('orderId');
		$status = $this->input->post('status');
		$activateItem= $this->api_model->activateItem($orderId,$status);
		
		if(!empty($activateItem)&&($activateItem=='1'))
		{			
			$data['success'] = "1";
		}else{
			$data['success'] = "0";		    
		}
		    $data['data'] = $activateItem; //need to assign event here
		    $response['responsedata'] = $data;

		    echo json_encode($response);

	}
	
	//View comments
	public function subCategoryById()
	{
		$idata = $this->input->post('subId');
		$viewComments= $this->api_model->subCategoryById($idata);
		
		if(!empty($viewComments)&&($viewComments!=''))
		{			
			$data['success'] = "1";
		}else{
			$data['success'] = "0";		    
		}
		    $data['data'] = $viewComments; //need to assign event here
		    $response['responsedata'] = $data;

		    echo json_encode($response);

	}
		//list sub item list
	public function subItemList()
	{
		$array_of_event = array();
		$subId = $this->input->post('subId');
		$itemList= $this->api_model->subItemList($subId);
		
		if(!empty($itemList)&&($itemList!=''))
		{
			foreach($itemList as $row)
			{
			$array_of_event[] = $row;
			}
			$data['success'] = "1";
		}else{
			$data['success'] = "0";		    
		}
		    $data['data'] = $array_of_event; //need to assign event here
		    $response['responsedata'] = $data;

		    echo json_encode($response);
	}

//list sub item list

public function subItemListNew()
	{
		$array_of_event = array();
		$limit=$this->input->post('limit');
		$start=$this->input->post('start');
		$subId = $this->input->post('subId');
		$itemList= $this->api_model->subItemListNew($limit,$start,$subId);
		//pr($result_login);exit();
		foreach($itemList as $row)
		{
		$array_of_event[] = $row;
		}
		if(!empty($itemList)&&($itemList!=''))
		{
			$data['success'] = "1";
		}else{
			$data['success'] = "0";		    
		}
		    $data['data'] = $array_of_event; //need to assign event here
		    $response['responsedata'] = $data;

		    echo json_encode($response);
	}



	////////////////////////////////////////////////Admin End/////////////////////////////////////////

	

}
