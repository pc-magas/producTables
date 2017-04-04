<?php
$this->output->set_status_header(403)
  ->set_content_type('application/json')
  ->set_output(json_encode(['message'=>'You need to login first in order to perform this action']));
