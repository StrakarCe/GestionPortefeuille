$("#validation").click(function(){
    $.ajax({
      url : 'Controlleur/user.control.php',
      type : 'POST',
      data : JSON.parse('{"transition":"userAdd","data" :{"nom":"' + $("#first_name").val() + ',"prenom":"}}'),
      dataType : 'json',
      success : function(code_html, statut){

       },

       error : function(resultat, statut, erreur){

       },

       complete : function(resultat, statut){

       }
    });
});
