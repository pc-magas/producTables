<?php
  $this->output->set_content_type('application/javascript');
  $this->load->helper('url');
?>

$(document).ready(function()
{

  var datatableConfig={
    'ajax':function(data,callback,settings){
      $.ajax({
        method:'GET',
        url:'<?=base_url('/index.php/panel/getProducts');?>',
        statusCode:{
          403:function(){
            window.location.reload(false);
          },
          200: function(data){
            callback(data);
          }
        }
      });
    },
    "columns":[{data:'title'},{data:'price'},{data:'discount'}],
  };


  $('#data').DataTable(datatableConfig);
});
