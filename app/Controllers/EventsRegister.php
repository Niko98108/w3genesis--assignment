<?php namespace App\Controllers;

class EventsRegister extends BaseController{


public function register(){ 

        $session = session(); 
        $rules = [
			'fname'=> 'required|min_length[3]',
			'lname'=> 'required|min_length[3]',
            'email'=> 'required',
			//'imagetxt'=> 'required',
			'mobile'=> 'required|min_length[9]',
            'address'=> 'required',
            'district'=> 'required',
            'nic'=> 'required|min_length[9]',
            'eventname'=> 'required',
		];

		if($this->validate($rules)){

         
            $data = [
				'firstName' => $_POST['fname'],
				'lastName' => $_POST['lname'],
                'email' => $_POST['email'],
                'phoneNo' => $_POST['mobile'],
                'address' => $_POST['address'],
                'districts' => $_POST['district'],
                'nic' => $_POST['nic'],
                'address' => $_POST['address'],
                'eventID' => $_POST['eventname'],
        
			];
			$userModel = model('App\Models\UserModel' , false);
			$userModel->insert($data); 
          

            $session->setFlashdata("msg","Events Registration Successfully");
			$session->setFlashdata("msgtype",1);
            return redirect()->to("/Home");

        }else{
            $session->setFlashdata("msg",$this->validator->listErrors());
			$session->setFlashdata("msgtype",0);
            return redirect()->to("/Home");
			
		}
        }
    }