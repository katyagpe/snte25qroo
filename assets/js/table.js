/*$(document).ready(function(){
$("#mytable .delete").click(function () {
    var el = this;
    var id = this.id;
    var splitid = id.split("_");

    // Delete id
    var deleteid = splitid[1];

    // AJAX request

    $.ajax({
      url : "<?php echo base_url(); ?>/Table/delete",
      type : 'POST',
      data : { id:deleteid },
      success : function(response) {

      });

    });



});*/

$(document).ready(function(){

 // Delete 
 $('#mytable .delete').click(function(e){
    e.preventDefault();
   var el = this;
   var id = this.id;
   var splitid = id.split("_");

   // Delete id
   var deleteid = splitid[1];
   alert( deleteid );

   jQuery.ajax({
            type: 'post', 
            url: 'table/delete', 
            dataType: 'text',
            // notice how I am using 'traceId'? on the server-side, the data will accessible by using $_POST['traceId'] or $this->input->post('traceId') 
            data: { 'traceId': deleteid },
            // look at the response sent to you;
            // if I am not mistaken (boolean) true and false get sent back as (strings) 1 or 0, respectively;
            // so if the response is 1, then it was successfully deleted
            success: function (res) {
                alert('AJAX response ' + res);
                if (res === '1') {
                    alert('hiding button');
                    // hide the message
                    $li.fadeOut();
                }
            },
            error: function (xhr, ajaxOptions, thrownError){
                alert(thrownError);
            }
        });


 });

});