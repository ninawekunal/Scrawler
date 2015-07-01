<?php 
/**
 * This handles the database connection
 * 
 * @package = Scrawler
 * @author = Pranjal Pandey
 * 
 */

namespace Scrawler\Core;
use mysqli;
class Database
{
	private $db;
	function __construct()
	{ 
	   $config = parse_ini_file(__DIR__.'/../../config.ini');
       $host = $config['dbhost']; 
       $user = $config['dbuser'];      
       $pass = $config['dbpass'];          
       $name = $config['dbname'];     
	 
       $mysqli = new mysqli($host, $user, $pass, $name);
       $this->db = $mysqli;

	}
	
	function add_site($site,$name,$discription)
	{
		$stmt = $this->db->prepare("INSERT INTO blogo (site, name, discription) VALUES (?, ?, ?)");
		$stmt->bind_param('sss', $site, $name, $discription);
		if($stmt->execute())
		{
			return true;
		}
		else 
		{
			return false;
		}
	}
	function get_articles()
	{
	   $stmt = $this->db->query("SELECT * FROM articles ORDER BY published DESC");        
	   $data = array();
       while ($row = $stmt->fetch_assoc()) 
	   {
       $data[] = $row;
       }      
	   return $data;		
		
	}
	
	function get_site()
	{
		$stmt = $this->db->query("SELECT *  FROM blogo ");		
        return $stmt->fetch_row();	
       
		
          		
	}
	
	function remove_article($id)
	{
		$stmt = $this->db->prepare("DELETE FROM articles WHERE id=?");
		$stmt->bind_param('i', $id);
		if($stmt->execute())
		{
			return true;
		}
		else 
		{
			return false;
		}
	}
	
	function add_article($title,$body)
	{
		$stmt = $this->db->prepare("INSERT INTO articles (title, body) VALUES (?, ?)");
		$stmt->bind_param('ss', $title, $body);
		if($stmt->execute())
		{
			return true;
		}
		else 
		{
			return false;
		}
	}
	
	function login($email,$password)
	{
		$stmt = $this->db->prepare("SELECT id, password  FROM user WHERE email = ? LIMIT 1");
		$stmt->bind_param('s', $email);
		$stmt->execute();
        $stmt->store_result();
        $stmt->bind_result($user_id,$db_password);
        $stmt->fetch();	
        if ($stmt->num_rows == 1 && $password == $db_password) {
          
            $_SESSION['admin']= $user_id;
          			
			return true;
			}
		else{
			return false;
		}
          		
	}
}