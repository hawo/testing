function dboutput(){
  console.log('Hallooo');
   $.ajax({
      url:'/test/php/api.php',
      data: "",
      dataType: 'json',
      success: function(data){
	 console.log('Hallo');
	 var i;
	 for(i = 0; i < data.length; i++){
	    $('#id01').html(out +=  	 '<p>'+data[i].name+'</p><br>'+
		    			 '<p>'+data[i].email+'</p><br>'+
		    			 '<p>'+data[i].tele+'</p><br>'+
		    			 '<p>'+data[i].strasse+'</p><br>'+
		    			 '<p>'+data[i].postleitzahl+'</p><br>'+
		    			 '<p>'+data[i].stadt+'</p><br>'+
		    			 '<p>'+data[i].land+'</p><br>');

		     console.log('Hallo'+data[i]);
	 }
	 //document.getElementById("id01").innerHTML = out;
	 //$('#id01').html(out);
      },
	error: function(jqXHR, textStatus, errorThrown){
        alert('Error: ' + textStatus + ' - ' + errorThrown);
	}
   });
}
