<main>
  <div class="container">
    <div class="section">

      <div class="row">
        <form class="col s12">
          <div class="row">
            <div class="input-field col s6">
              <input id="first_name" type="text" class="validate">
              <label for="first_name">Prénom</label>
            </div>
            <div class="input-field col s6">
              <input id="last_name" type="text" class="validate">
              <label for="last_name">Nom de famille</label>
            </div>
          </div>

          <div class="row">
            <div class="input-field col s12">
              <input id="email" type="email" class="validate">
              <label for="email" data-error="wrong" data-success="right">Email</label>
            </div>
          </div>
          <div class="row">
            <div class="input-field col s12">
              <input id="password" type="password" class="validate">
              <label for="password">Password</label>
            </div>
          </div>
          <a class="btn-floating btn-large waves-effect waves-light red" id="validation" name="validation"><i class="material-icons">add</i></a>
        </form>
      </div>

    </div>
    <br><br>
  </div>
</main>

<script>
$("#validation").click(function(){
    $.ajax({
      url : 'Controlleur/user.control.php',
      type : 'POST',
      data : JSON.parse('{"transition":"userAdd","data" :{'
              + '"nom":"' + $("#last_name").val() + '",'
              + '"prenom":"' + $('#first_name').val() + '",'
              + '"mail":"' + $('#email').val()  + '",'
              + '"password":"' + $('#password').val()  + '"}}'),
      dataType : 'json',
      success : function(code_html, statut){

       },

       error : function(resultat, statut, erreur){

       },

       complete : function(resultat, statut){

       }
    });
});
</script>
