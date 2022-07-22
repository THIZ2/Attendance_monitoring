<?php  
      include_once ("C:\wamp64\www\attendance\config\config.php");
?>
<?php
/**
 * Student Class
 */
class Student{
	private $db;
	private $fm;
	
	public function __construct(){
		$this->db = new Database();
	}

	public function getStudents(){
		$query = "SELECT * FROM student";
		$result = $this->db->select($query);
		return $result;
	}
	
	
	public function insertAttendance($attend = array()){
		$query = "SELECT DISTINCT date FROM attendance";
		if($getdata = $this->db->select($query)){
		while ($result = $getdata->fetch_assoc()) {
			$db_date = $result['date'];
			$cur_date = date('Y-m-d');
			if ($cur_date == $db_date) {
				$msg = "<div><strong>Error !</strong> Attendance Already Taken Today !</div>";
				return $msg;
			}
		}
		}
		
		foreach ($attend as $atn_key => $atn_value) {
			if ($atn_value == "present") {
				$stu_query = "INSERT INTO attendance(id, attendance, date) VALUES('$atn_key','present', now())";
				$data_insert = $this->db->insert($stu_query);
			} else if ($atn_value == "absent") {
				$stu_query = "INSERT INTO attendance(id, attendance, date) VALUES('$atn_key','absent', now())";
				$data_insert = $this->db->insert($stu_query);
			}
		}

		if ($data_insert) {
			$msg = "<div><strong>Success !</strong> Attendance data inserted successfully !</div>";
			return $msg;
		} else {
			$msg = "<div><strong>Error !</strong> Attendance data not inserted !</div>";
			return $msg;
		}
	}

}