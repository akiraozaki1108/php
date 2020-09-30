
if(isset($_POST['signin'])) {
	$username = $_POST['username'];
	$password = $_POST['password'];
	try {
		$db = new PDO('mysql:host=localhost; dbname=データベース名','ユーザー名','パスワード');
		$sql = 'insert into テーブル名(username,password) values(?,?)';
		$stmt = $db->prepare($sql);
		$stmt->execute(array($username,$password));
		$stmt = null;
		$db = null;

		header('Location: http://localhost/◯◯/');
		exit;

	}catch (PDOException $e){
		echo $e->getMessage();
		exit;
	}
}
