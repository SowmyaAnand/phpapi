<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_model extends CI_Model {
// to verify the login credentials
  public function verify_user($data='')
  {
       
        $this->db->where('email',$data['email']);
        $this->db->where('password',$data['password']);
        $this->db->where('type',$data['userType']);
        $query = $this->db->get('users');
        if ($query->num_rows() > 0){
          return true;
        }
        else{
           return false;
        }
  }
// get admin data for login
  public function get_admindata($data='')
  {
        $this->db->where('email',$data['email']);
        $this->db->where('password',$data['password']);
        $this->db->where('type',$data['userType']);
        $query = $this->db->get('users');
        if ($query->num_rows() > 0){
          return $query->row_array();
        }
        else{
           return false;
        }
  }
  //to get admin details by id
  public function admin_details($user_id)
  {
    $result = $this->db->get_where('users', array('id' => $user_id))->row_array();
    return $result;
  }
  //to update login credentials
  public function update_profile($data,$id)
  {
    $insert_data['email']     = $data['email'];
    $insert_data['password']  = $data['con_password'];
    
    $this->db->set($insert_data);
    $this->db->where('id',$id);
    $this->db->update('users');
    if($this->db->affected_rows()>0)
    {
      return 1;
    }
    else
    {
      return 0;
    }

  }
  //to get question details by question id
  public function question_details($qId='')
  {
        $this->db->where('qId',$qId);
        $query = $this->db->get('questions');
        if ($query->num_rows() > 0){
          return $query->row_array();
        }
        else{
           return false;
        }
  }
  //to get option details by question id
  public function option_details($qId='')
  {
        $this->db->where('qId',$qId);
        $query = $this->db->get('options');
        if ($query->num_rows() > 0){
          return $query->result_array();
        }
        else{
           return false;
        }
  }
  // to delete option
  function delete_option($id)
  {
    
    $this->db->where('id', $id);  
    if ($this->db->delete('options')) 

        {return true;}

        else

        {return false;}

  }
  // to update question
  public function update_question($qdata='')
  {
    $data['question'] = $qdata['question'];
    $data['type']     = $qdata['type'];
    $qId              = $qdata['qId'];
    $data['qrId']     = $qdata['qrId'];        
        
    $this->db->where("qId",$qId);
    $this->db->update("questions",$data);
    $id = $this->db->affected_rows();
    return $id;
  }
  // to get question name by question id
  public function get_questionnaire_name($qrId='')
  {
    return $this->db->get_where("questionnaire",array('qrId'=>$qrId))->row()->questionnaire;
  }

}