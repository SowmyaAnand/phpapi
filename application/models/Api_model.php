<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Api_model extends CI_Model {

	function __construct(){
		parent:: __construct();
        
	}
  
  //to get list of users
  function listUser($limit='',$start='')
  {
            $this->db->select('*');
            $this->db->from('users');
            $this->db->limit($limit, $start);
            $query = $this->db->get()->result_array();
        if (!empty($query)){
          return $query;
        }
        else{
           return '0';
        }
    }
    //to get user details
  function userDetails($userId='')
  {
        $query = $this->db->get_where('users',array('userId' => $userId))->row_array();
        if (!empty($query)){
          return $query;
        }
        else{
           return '0';
        }
    }

  //to get list Category
  function listCategory()
  {
        $query = $this->db->order_by('typeId','ASC')->get_where('category')->result_array();
        if (!empty($query)){
          return $query;
        }
        else{
           return '0';
        }
  }

  //to get list sub Category
  function listSubCategory($typeId='')
  {
        $query = $this->db->get_where('subcategory',array('typeId' =>$typeId))->result_array();
        if (!empty($query)){
          return $query;
        }
        else{
           return '0';
        }
  }

  //to get item list
  function itemList($typeId='')
  {
        $query = $this->db->get_where('itemdetails',array('typeId' =>$typeId))->result_array();
        if (!empty($query)){
          return $query;
        }
        else{
           return '0';
        }
  }

  //to get item details
  function listItemDetails($itemId='')
  {
        $query = $this->db->get_where('itemdetails',array('itemId' =>$itemId))->row_array();
        if (!empty($query)){
          return $query;
        }
        else{
           return '0';
        }
  }

  //to get cart list
  function cartList($userId='')
  {
        $query = $this->db->get_where('usercart',array('userId' =>$userId))->result_array();
        if (!empty($query)){
          return $query;
        }
        else{
           return '0';
        }
  }

  //to get cart item details
  function cartItemDetails($cartId='')
  {
        $query = $this->db->get_where('usercart',array('cartId' =>$cartId))->row_array();
        if (!empty($query)){
          return $query;
        }
        else{
           return '0';
        }
  }

   //to get item details by main category
  function itemsByCategory($typeId='')
  {
        $query = $this->db->get_where('itemdetails',array('typeId' =>$typeId))->result_array();
        if (!empty($query)){
          return $query;
        }
        else{
           return '0';
        }
  }

   //to get item details by main category
  function myOffers()
  {
        $offers = $this->db->select("ofr.*,itd.*");
                  $this->db->from('itemdetails itd');
                  $this->db->join('offers ofr', 'ofr.itemId = itd.itemId', 'left'); 
                  $this->db->get()->result_array();
        if (!empty($query)){
          return $query;
        }
        else{
           return '0';
        }
  }

   //to get item details by main category
  function offerByCategory($typeId='')
  {
        $offers = $this->db->select('ofr.*,itd.*');
                  $this->db->from('itemdetails itd');
                  $this->db->join('offers ofr', 'ofr.itemId = itd.itemId', 'left'); 
                  $this->db->where('itd.typeId',$typeId); 
                  $this->db->get()->result_array();
        if (!empty($query)){
          return $query;
        }
        else{
           return '0';
        }
  }

  //to get login details
  function loginData($username='',$password='',$type="")
  {
        $query = $this->db->get_where('login',array('username'=>$username,'password'=>$password,'type'=>$type))->row_array();
        if (!empty($query)){
          return $query['userId'];
        }
        else{
           return '0';
        }
  }

// contact us
public function userRegister($data='')
{
      $idata['firstName']='Adam';
      $idata['lastName']='John';
      $idata['email']='ambikabalan@gmail.com';
      $idata['phone']='9876543210';
      $idata['address']='ABC Skyline';
      $idata['pinCode']='NN1 4HJ';
      $idata['dob']='26/08/1992';
      $insertdata = $this->db->insert('users',$idata);
            $id = $this->db->insert_id();    
      if(!empty($id)){
        return $id;
      }else{
        return 0;
      }
}

// contact us
public function contactUs($data='')
{
      $idata['userId']='1';
      $idata['email']='ambikabalan@gmail.com';
      $idata['mobile']='9876543210';
      $idata['address']='ABC Skyline';
      $idata['message']='Hi test message';
      $insertdata = $this->db->insert('contactus',$idata);
            $id = $this->db->insert_id();    
      if(!empty($id)){
        return $id;
      }else{
        return 0;
      }
}

  //////////////////////////////Admin Start//////////////////////////////
public function activateItem($itemId='',$status='')
{
      $qry = $this->db->set('status',$status)->where('itemId',$itemId)->update('itemdetails');
      $afftectedRows=$this->db->affected_rows();
      if($afftectedRows>0){
        return 1;
      }else{
        return 0;
      }
}
// add new category
public function addCategory($data='')
{
      $data='Grocery';
      $insertdata = array('itemName'=>$data);
                  $this->db->insert('category',$insertdata);
            $id = $this->db->insert_id();    
      if(!empty($id)){
        return $id;
      }else{
        return 0;
      }
}

// add new sub category
public function addSubCategory($data='')
{
   // pr($data);exit();
      $idata['typeId']='4';
      $idata['subName']='Custard';
      $idata['subItemImage']='';
      $idata['createdBy']='1';
      $insertdata = $this->db->insert('subcategory',$idata);
            $id = $this->db->insert_id();    
      if(!empty($id)){
        return $id;
      }else{
        return 0;
      }
}

//to get list Category by id
  function categoryById($typeId='')
  {
        $query = $this->db->get_where('category', array('typeId' => $typeId))->row_array();
        if (!empty($query)){
          return $query;
        }
        else{
           return '0';
        }
  }

  //to get list sub Category by id
  function subCategoryById($subId='')
  {
        $query = $this->db->get_where('subcategory', array('subId' => $subId))->result_array();
        if (!empty($query)){
          return $query;
        }
        else{
           return '0'; 
        }
  }

  // add new  items
public function addItems($data='')
{
      $insertdata = $this->db->insert('itemdetails',$data);
            $id = $this->db->insert_id();    
      if(!empty($id)){
        return $id;
      }else{
        return 0;
      }
}

public function orderStatus($orderId='',$status='')
{
      $qry = $this->db->set('status',$status)->where('orderId',$orderId)->update('orders');
      $afftectedRows=$this->db->affected_rows();
      if($afftectedRows>0){
        return 1;
      }else{
        return 0;
      }
}

//to get all comments
  function viewComments()
  {
        $query = $this->db->get('contactus')->result_array();
        if (!empty($query)){
          return $query;
        }
        else{
           return '0';
        }
	}
	
//to get all comments -sowmya
	function viewCommentsNew($limit='',$start='')
  {
            $this->db->select('*');
            $this->db->from('contactus');
            $this->db->limit($limit, $start);
            $query = $this->db->get()->result_array();
        if (!empty($query)){
          return $query;
        }
        else{
           return '0';
        }
    }
  
  //to add to cart 
  function addToCart($data='')
  {
        $insertdata = array('itemId'=>$data['itemId'],'count'=>$data['count'],'quantity'=>$data['quantity'],'price'=>$data['price'],'userId'=>$data['userId']);
                  $this->db->insert('usercart',$insertdata);
            $id = $this->db->insert_id();    
        if(!empty($id)){
            return $id;
        }else{
            return 0;
        }
  }

  //to get cart item details
  function viewCommentById($cId='')
  {
        $query = $this->db->get_where('contactus',array('cId' =>$cId))->row_array();
        if (!empty($query)){
          return $query;
        }
        else{
           return '0';
        }
  }
  
  //get last category
  function listCategory1()
  {
        $query = $this->db->limit('1')->order_by('typeId','ASC')->get_where('category')->row_array();
        if (!empty($query)){
          return $query;
        }
        else{
           return '0';
        }
  }
  
  //to get list sub Category
  function listSubCategory1($typeId='')
  {
        $query = $this->db->limit('1')->order_by('subId','DESC')->get_where('subcategory',array('typeId' =>$typeId))->result_array();
        if (!empty($query)){
          return $query;
        }
        else{
           return '0';
        }
  }
  
public function allOrders()
{
	
      //$qry = $this->db->order_by('orderId','desc')->get('orders')->result_array();
        $offers = $this->db->select("odr.*,itd.*,u.*");
                  $this->db->from('itemdetails itd');
                  $this->db->join('users u', 'u.userId = itd.userId', 'left');
                  $this->db->join('orders odr','odr.itemId = itd.itemId','left');
                  $this->db->order_by('odr.orderId','desc')->get()->result_array();
                  
      if(!empty($offers)){
        return $offers;
      }else{
        return 0;
      }
}

//to get all orders - sowmya new
public function allOrdersNew()
{
      //$qry = $this->db->order_by('orderId','desc')->get('orders')->result_array();
        $this->db->select("odr.*,itd.itemName");
									$this->db->from('orders odr');
									$this->db->join('itemdetails itd','itd.itemId = odr.itemId','left');
									$offers = $this->db->order_by('orderId','desc')->get()->result_array();      
      if(!empty($offers)){
        return $offers;
      }else{
        return 0;
      }
}

public function orderStatusChange($orderId='',$status='')
{
      $qry = $this->db->set('status',$status)->where('orderId',$orderId)->update('orders');
      $afftectedRows=$this->db->affected_rows();
      if($afftectedRows>0){
        return 1;
      }else{
        return 0;
      }
}

//to get item list
public function subItemList($subId='')
  {
        $query = $this->db->get_where('itemdetails',array('subId' =>$subId))->result_array();
        if (!empty($query)){
          return $query;
        }
        else{
           return '0';
        }
	}
	
	//to get item list -sowmya
	function subItemListNew($limit='',$start='',$subId='')
  {
            
						$this->db->limit($limit, $start);
						$query = $this->db->get_where('itemdetails',array('subId' =>$subId))->result_array();
		        if (!empty($query)){
          return $query;
        }
        else{
           return '0';
        }
    }



  //////////////////////////////Admin End////////////////////////////////





}
