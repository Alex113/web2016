  function remove(rem) {
	  $(rem).parent().parent().remove();
	 
  }

(function($){
$(function() {
  $("#btnShowTable").click(function(){
    $(this).hide();
    $("#hiddenTable").show();
  });
  


  $("#btnAdd").click(function(){
    var p = $(this).parent().parent();
    var str = "";
    str += '<tr>';
    str += '<td>';

    str += $('#hiddenTable  tr').length-1;
    str += '</td>';
    str += '<td>';
    str += 'Petr';
    str += '</td>';
    str += '<td>';
    str += 'Saransk';
    str += '</td>';
    str += '<td>';
    str += '<span class="glyphicon glyphicon-pencil" aria-hidden="true"></span> <span onclick="remove(this);" class="glyphicon glyphicon-trash" aria-hidden="true"></span>';
    str += '</td>';
    str += '</tr>';
    $(str).insertBefore(p);
  });



  $('a.gallery').colorbox({rel:'gal'});


  
});



})(jQuery);

