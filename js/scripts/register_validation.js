$().ready(function(){

  $.validator.addMethod("regx", function(value, element, regexpr) {
      return regexpr.test(value);
  }, "Please enter a valid text.");

  $('#registerForm').validate({
    rules: {
      nom: {
        required : true,
        minlength : 5,
        maxlength : 30,
      },
      prenom: {
        required : true,
        minlength : 5,
        maxlength : 30,
      },
      username: {
        required : true,
        remote: {
          url: $('#url').val() + 'Signup/checkUser',
          type: 'post',
          data: {
            username : function(){
              return $('#username').val();
            }
          }
        }
      },
      email: {
        required : true,
        email : true
      },
      password: {
        required : true,
        minlength : 5,
        maxlength : 60,
      },
      password_match : {
        required : true,
        equalTo: "#password"
      }
    },
    messages: {
      nom: {
        required : 'Ce champ est obligatoire',
        minlength : 'Le nom doit contient au moin 5 caracteres',
        maxlength : 'Le nom doit contient 30 caracteres maximum'
      },
      prenom: {
        required : 'Ce champ est obligatoire',
        minlength : 'Le prenom doit contient au moin 5 caracteres',
        maxlength : 'Le prenom doit contient 30 caracteres maximum'
      },
      username: {
        required : 'Ce champ est obligatoire',
        remote : 'Nom d\'utilisateur existe dejas'
      },
      email: {
        required : 'Ce champ est obligatoire',
        email : 'saisissez un email valide'
      },
      password: {
        required : 'Ce champ est obligatoire',
        minlength : 'Le mot de passe doit contient au moin 5 caracteres',
        maxlength : 'Le mot de passe doit contient 30 caracteres maximum',
      },
      password_match: {
        required : 'Ce champ est obligatoire',
        equalTo : 'Mot de passe incorrecte'
      }
    }
  });
});
