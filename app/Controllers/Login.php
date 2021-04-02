<?php namespace App\Controllers;

class Login extends BaseController{

	public function index(){
		$session = session();
	
		var_dump($session->has('ORGID'));
		if($session->get("ORGID") == null){
			echo view('organizerDashboard/login');
		}else{
			return redirect()->to("/OrgernizerDashboard");
		}
		
		return view('organizerDashboard/login');
    }
    
    public function Submit(){
		$session = session();
		// $session->set("ORGID" ,1);
		var_dump($session->has('ORGID'));
		
			$email = $this->request->getPost('email');
			$password = $this->request->getPost('password');
			
			if( $email=="nisal@.com" && $password == "123456"){
	
			  $orgernizerModel = model('App\Models\OrganizerModel' ,false);
			  $data['orgernizer'] = $orgernizerModel->findAll();
			  //Login Success                
			  $session = session();
			//   $this.var_dump($session->has('ORGID'));
			  $session->set("ORGID" ,1);
			  $session->setFlashdata("msg" , "Successfully Login.");
			  $session->setFlashdata("msgtype",1);
						// return redirect()->to("/OrgernizerDashboard");
			  return redirect()->to("/OrgernizerDashboard");
					   
						
					}
		
		
			else{

				//Login Failed
				$session->setFlashdata("msg" , "Incorrect Email or Password. Please Try Again. Thank You.");
				return redirect()->to("/Login");

					}   
                    
                }

	}


