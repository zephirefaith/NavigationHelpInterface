<?php
App::uses('InterfaceController', 'Controller');

class KeyboardTeleopInterfaceController extends InterfaceController {

        public function view() {
                // set the title of the HTML page
                $this->set('title_for_layout', 'Keyboard Teleoperation Interface');
                // we will need some RWT libraries
                $this->set('rwt', array('roslibjs' => 'current'));
        }
}
