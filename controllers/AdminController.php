<?php 

Class AdminController extends Controller {

	// login page
	public function login() 
	{
		$this->loadLastView("views/admin-login.php"); // final view
	}

	// admin user login
	public function doLogIn()
	{
		$username = $_POST["strUsername"];
		$password = $_POST["strPassword"];
		$passwordHash = password_hash($password, PASSWORD_DEFAULT);
		// echo $passwordHash;

		// if username & password are given
		if(!($username=="" OR $password==""))
		{
			$_SESSION["userId"] = Employees::logIn($username);
			// echo $_SESSION["userId"];

			// get user info with user ID
			$user = Employees::getUserInfo($_SESSION["userId"]);
			// print_r($user);

			if ($user)
			{
				// check if password matches
				if (password_verify($user->strPassword, $passwordHash)) 
				{
					// go to user main page if match
					$this->go("admin", "adminMain"); 

				} else {
					echo "password not correct";
				}
			}

		// if username & password are not given
		} else if ($username=="" && $password==""){
			echo "enter your user name and  password";
		
		// if username are not given
		} else if ($username=="") {
			echo "enter your user name";

		// if password are not given
		} else if ($password=="") {
			echo "enter your password";
		}
	}


	// admin main page after login 
	public function adminMain() 
	{
		$this->loadRoute("Global", "adminNav", "navHTML"); // load nav

        $this->loadView("views/admin-main.php", 1, "contentHTML"); 
        $this->loadView("views/admin-layout.php", 1, "content"); // save the results of this view, into $this->content

		$this->loadLastView("views/main-admin.php"); // final view
	}
	
	// accomodation list
	public function accomodationList() 
	{
		$this->loadRoute("Global", "adminNav", "navHTML"); // load nav

        $this->loadView("views/admin-accommodations.php", 1, "contentHTML"); 
        $this->loadView("views/admin-layout.php", 1, "content"); // save the results of this view, into $this->content

		$this->loadLastView("views/main-admin.php"); // final view
	}
	
	// accomodation detail
	public function accomodation() 
	{
		$this->loadRoute("Global", "adminNav", "navHTML"); // load nav

        $this->loadView("views/admin-accommodation.php", 1, "contentHTML"); 
        $this->loadView("views/admin-layout.php", 1, "content"); // save the results of this view, into $this->content

		$this->loadLastView("views/main-admin.php"); // final view
	}
	
	// save/update accomodation info
	public function saveAccomodation()
	{

	}
    
    // customer's booking list
    public function bookingList()
    {
        $this->loadRoute("Global", "adminNav", "navHTML"); // load nav

        $this->loadView("views/admin-booking.php", 1, "contentHTML"); 
        $this->loadView("views/admin-layout.php", 1, "content"); // save the results of this view, into $this->content

		$this->loadLastView("views/main-admin.php"); // final view
    }

    // customer's list
    public function customerList() 
    {
        $this->loadRoute("Global", "adminNav", "navHTML"); // load nav

        $this->loadView("views/admin-customer.php", 1, "contentHTML"); 
        $this->loadView("views/admin-layout.php", 1, "content"); // save the results of this view, into $this->content

		$this->loadLastView("views/main-admin.php"); // final view
    }

    // admin logout
    public function doLogOut()
    {
		unset($_SESSION["userId"]);
		$this->go("admin", "login");
	}
}

?>