<?php namespace App\Controllers;

class OrgernizerDashboard extends BaseController{

    public function index(){
        $session = session();
		if($session->get("ORGID") == null){
			return redirect()->to("/Login");
		}
        else{

            $headercontents =[
                'title' => 'Dashboard',
                'baseurl' => 'organizerDashboard'
            ];
        
            echo view('templates/header' , $headercontents);
            echo view('organizerDashboard/dashboard');
            echo view('templates/footer' , $headercontents);
        }



    }
    public function createEvent(){
        $session = session();
		if($session->get("ORGID") == null){
			return redirect()->to("/Login");
		}else{

            $headercontents =[
                'title' => 'Create New Event',
                'baseurl' => 'organizerDashboard'
            ];
        
            echo view('templates/header' , $headercontents);
            echo view('organizerDashboard/createEvents');
            echo view('templates/footer' , $headercontents);

        }    


    }

    public function addEvents(){
        $session = session();
		if($session->get("ORGID") == null){
			return redirect()->to("/Login");
		}else{

            $rules = [
                'eventname'=> 'required',
                'description'=> 'required',
                //'imagetxt'=> 'required',
                'date'=> 'required',
            ];
    
            if($this->validate($rules)){
    
                //Upload event Image
                $thumb = $this->request->getFile('imagetxt');
                $thumbName = "uploads/events/default.png";
                if($thumb->isValid()){
                    $thumbName = "uploads/events/".$thumb->getName();
                    $thumb->move(ROOTPATH.'public/uploads/events');
                }
    
                $data = [
                    'eventName' => $_POST['eventname'],
                    'eventDesc' => $_POST['description'],
                    'image' => $thumbName,
                    'thumb' => $thumbName,
                    'organizerID' => $session->get("ORGID"),
                    'date' => date('Y-m-d'),
                    
                ];
                $eventModel = model('App\Models\EventsModel' , false);
                $eventModel->insert($data); 
                
                $session->setFlashdata("msg","Event created Successfully");
                $session->setFlashdata("msgtype",1);
                return redirect()->to("/OrgernizerDashboard/createEvent");
    
            }else{
                $session->setFlashdata("msg",$this->validator->listErrors());
                $session->setFlashdata("msgtype",0);
                return redirect()->to("/OrgernizerDashboard/createEvent");
                
            }

        }    


    }

    public function Users(){
        $session = session();
		if($session->get("ORGID") == null){
			return redirect()->to("/Login");
		}else{

            $headercontents =[
                'title' => 'All Register Users',
                'baseurl' => 'organizerDashboard'
            ];
            $db = db_connect();
            $sql = "SELECT user.* ,events.eventName 
            FROM user , events 
            WHERE user.eventID = events.eventID";
    
    
            $query = $db->query($sql);
            $rows = $query->getResultArray();
            $data['users'] = $rows;
        
            echo view('templates/header' , $headercontents);
            echo view('organizerDashboard/users',$data);
            echo view('templates/footer' , $headercontents);
        }


    }
    public function events(){
        $session = session();
		if($session->get("ORGID") == null){
			return redirect()->to("/Login");
		}else{

            $headercontents =[
                'title' => 'Events',
                'baseurl' => 'organizerDashboard'
            ];
    
            $db = db_connect();
            $sql = "SELECT events.*,organizer.orgName,organizer.phoneNo FROM organizer,events WHERE organizer.orgID = events.organizerID";
    
    
            $query = $db->query($sql);
            $rows = $query->getResultArray();
            $data['events'] = $rows;
         
        
            echo view('templates/header' , $headercontents);
            echo view('organizerDashboard/events',$data);
            echo view('templates/footer' , $headercontents);
        }



    }
    public function DeleteEvents($id){
        $session = session(); 


        $eventModel = model('App\Models\EventsModel' , false);
		if($eventModel->delete($id)){


            $session->setFlashdata("msg","Event Deletd Successfully");
            $session->setFlashdata("msgtype",1);
            return redirect()->to("/OrgernizerDashboard/events");
        }
            
         

        else{
            $session->setFlashdata("msg",$this->validator->listErrors());
			$session->setFlashdata("msgtype",0);
            return redirect()->to("/OrgernizerDashboard/events");
			
		}


    }

}