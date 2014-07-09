<?php 
	
	//cika1prjoect/applications/model/user.php
	
	class MUser extends Model{
		
		public function MUser(){
			
			parent::Model();		
		}
	
		public function verifyUser($username,$password){
			
			$this->db->where('username',$username);
			$this->db->where('password',$password);
			$this->db->where('status','active');
			$this->db->limit(1);
			$UserQuery  = $this->db->get('tb_user');
			
			if($UserQuery->num_rows > 0){
				return $UserQuery;
			}
			else{
				return FALSE;	
			}

		}
		
	//e2 ung mag function na mgccreate ng user at insert sa user table
		
		public function insertUser($data){
			if($this->db->insert('tb_user',$data)){
				return TRUE;
			}
				return FALSE;
		}
		
	//e2 ung function ng rretrieve ng lahat ng users sa user table
		
		public function deleteUser($user_id){
		
			$this->db->where('user_id',$user_id);
			$this->db->delete('tb_user');	
		}
		
		public function batchDelete($idlist){
		
			$where = "user_id IN($idlist)";
			$this->db->where($where);
			$this->db->delete('tb_user');
			
		}
		
		public function getUserDetails($user_id){
			
			$this->db->where('user_id',$user_id);
			$UserDetailQuery = $this->db->get('tb_user');
			
			if($UserDetailQuery->num_rows > 0){
				return $UserDetailQuery;
			}
				
			else{
				return FALSE;	
			}					
		}
		
		public function updateUser($user_id,$data){
				
			$this->db->where('user_id',$user_id);
			$this->db->update('tb_user',$data);
		}
		
		public function getAllUsers($offset,$count){
			
			$UsersQuery = $this->db->get('tb_user',$offset,$count);
			
				if($UsersQuery->num_rows > 0){
					return $UsersQuery;
				}
				
				else{
					return FALSE;	
				}			
		}		
			
		//e2 ung ung mgiidentfy kung ilang page ung dapat i display

		public function getUsersPages(){
				
			$Pagesquery = $this->db->get('tb_user');
            	$config['base_url'] = site_url('cuser/displayUsers');
		       	$config['total_rows']= $Pagesquery->num_rows();
            	$config['per_page'] = 5;
				
				$config['first_link'] = 'First'; 
				$config['prev_link'] = 'Previous';
				$config['next_link'] = 'Next';
				$config['last_link'] = 'Last';	
            	$this->pagination->initialize($config);
       		
		//e2 ung magccreate ng pagination links: create_links
	     			
		return $this->pagination->create_links();	
		
		}

		
		
	}
?>
