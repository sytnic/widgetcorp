<?php require_once("../includes/session.php") ?>
<?php require_once("../includes/functions.php") ?>
<?php
	// ������ 1: ������� �����
	// ������ ���� �������� ������: session_start();
	$_SESSION["admin_id"] = null;
	$_SESSION["username"] = null;
	redirect_to("login.php");
?>
<?php
/*
	// ������ 2: �������� ������
	// �������� ������ ��������� ������ � �������� ����� �� ��
	
	session_start();  //������ ���� �������� ������
	$_SESSION = array(); // ������ ������������ � ������ ������, �� ���� ��������� ��� �������� �� ��
	if (isset($_COOKIE[session_name()])){	//���� �� ����� ���� � ������ ������
		setcookie(session_name(), '', time()-42000, '/'); // �� ������ ����: � ���� ������, ��� ��������, 
														// � ����������� �� �������� ����� � �������
														// � ����� �������� �� ��������� ������ ��������
		}
	session_destroy(); // ������� ������ �� �������
	redirect_to("login.php");
*/
?>