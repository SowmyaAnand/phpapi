<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class First_model extends CI_Model {

	function __construct(){
		parent:: __construct();

        $this->load->model('admin_model');
	}
  //to save poll to database
  public function savePoll($data)
  {
    $insert_data['qId']     = $data['qId'];
    if($data['type'] =='1')
    {
      $option = $this->db->get_where('options', array('id' =>$data['option']))->row_array();
      $insert_data['options']  = $option['options'];
      $this->db->insert('testpoll',$insert_data);
    }else if($data['type'] == '2'){
      $option = $data['option'];  
      foreach ($option as $key => $value) {
            $options = $this->db->get_where('options', array('id' =>$option[$key]))->row_array();
            $opt['options'] = $options['options'];                 
            $opt['qId'] = $data['qId'];
            $this->db->insert("testpoll",$opt);        
          }
    }
    else{
      $insert_data['options']  = $data['option'];
      $this->db->insert('testpoll',$insert_data);    
    }    
    if($this->db->insert_id()>0)
    {
      return 1;
    }
    else
    {
      return 0;
    }
  }
  //to get total number of questionnaire
  function total_questionnaire()
  {
        $query = $this->db->get('questionnaire');
        if ($query->num_rows() > 0){
          return $query->num_rows();
        }
        else{
           return '0';
        }
  }
  //to get total number of questions
  function total_questions()
  {
        $query = $this->db->get('questions');
        if ($query->num_rows() > 0){
          return $query->num_rows();
        }
        else{
           return '0';
        }
  }
  //to get total number of polls
  function total_polls()
  {
        $query = $this->db->get('testpoll');
        if ($query->num_rows() > 0){
          return $query->num_rows();
        }
        else{
           return '0';
        }
    }





}
