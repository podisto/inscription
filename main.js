$(document).ready(function () {
   $(".allownumericwithoutdecimal").on("keypress keyup blur",function (event) {    
     $(this).val($(this).val().replace(/[^\d].+/, ""));
      
  });
  $("#next").click(function () {
    // console.log('ici');
    var output = validate();
    if (output) {
      var current = $(".highlight");
      var next = $(".highlight").next("li");
      if (next.length > 0) {
        $("#" + current.attr("id") + "-field").hide();
        $("#" + next.attr("id") + "-field").show();
        $("#back").show();
        $("#finish").hide();
        $(".highlight").removeClass("highlight");
        next.addClass("highlight");
        if (
          $(".highlight").attr("id") ==
          $("li")
            .last()
            .attr("id")
        ) {
          $("#next").hide();
          $("#finish").show();
        }
      }
    }
  });
  $("#back").click(function () {
    var current = $(".highlight");
    var prev = $(".highlight").prev("li");
    if (prev.length > 0) {
      $("#" + current.attr("id") + "-field").hide();
      $("#" + prev.attr("id") + "-field").show();
      $("#next").show();
      $("#finish").hide();
      $(".highlight").removeClass("highlight");
      prev.addClass("highlight");
      if (
        $(".highlight").attr("id") ==
        $("li")
          .first()
          .attr("id")
      ) {
        $("#back").hide();
      }
    }
  });
});



function validate() {
  console.log($("#prenom").val());
  var output = true;
  $(".registration-error").html('');
  if ($("#account-field").css('display') != 'none') {
    if (!($("input[name=civilite]:checked").val())) {
      output = false;
      $("#civilite-error").html('required')
    }
    if (!($("#prenom").val())) {
      output = false;
      $("#prenom-error").html("Veuillez saisir le prénom");
    }
    if (!($("#nom").val())) {
      output = false;
      $("#nom-error").html("Veuillez saisir le nom");
    }
    if (!($("#fonction").val())) {
      output = false;
      $("#fonction-error").html("Veuillez saisir la fonction");
    }
    if (!($("#email").val())) {
      output = false;
      $("#email-error").html("Veuillez saisir l'email");
    }
    if (!($("#email").val().match(/^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/))) {
      $("#email-error").html("Cet email est invalide");
      output = false;
    }
    if (!($("#tel").val())) {
      output = false;
      $("#tel-error").html("Veuillez saisir le numéro de téléphone");
    }
    if (!($("#agissantcpte").val())) {
      output = false;
      $("#agissantcpte-error").html("Veuillez remplir ce champ");
    }
    if (!($("#secteuractivite").val())) {
      output = false;
      $("#secteuractivite-error").html("Veuillez saisir le secteur d'activité");
    }
    if (!($("select#typevoie").val())) {
      output = false;
      $("#typevoie-error").html("Veuillez choisir le type de voie");
    }
    if (!($("#commune").val())) {
      output = false;
      $("#commune-error").html("Veuillez saisir la commune");
    }
    if (!($("#ninea").val())) {
      output = false;
      $("#ninea-error").html("Veuillez saisir le NINEA");
    }
    if (!($("#centrefiscal").val())) {
      output = false;
      $("#centrefiscal-error").html("Veuillez saisir le centre fiscal");
    }

    /** ================== Point Focal ======================= **/
    if (!($("input[name=soussignepf]:checked").val())) {
      output = false;
      $("#soussignepf-error").html('required')
    }
    if (!($("#prenompf").val())) {
      output = false;
      $("#prenompf-error").html("Veuillez saisir le prénom");
    }
    if (!($("#nompf").val())) {
      output = false;
      $("#nompf-error").html("Veuillez saisir le nom");
    }
    if (!($("#fonctionpf").val())) {
      output = false;
      $("#fonctionpf-error").html("Veuillez saisir la fonction");
    }
    if (!($("#emailpf").val())) {
      output = false;
      $("#emailpf-error").html("Veuillez saisir l'email");
    }
    if (!($("#emailpf").val().match(/^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/))) {
      $("#emailpf-error").html("Cet email est invalide");
      output = false;
    }
    if (!($("#telportablepf").val())) {
      output = false;
      $("#telportablepf-error").html("Veuillez saisir la fonction");
    }
  }

  if ($("#password-field").css('display') != 'none') {
    if (!($("#user-password").val())) {
      output = false;
      $("#password-error").html("required");
    }
    if (!($("#confirm-password").val())) {
      output = false;
      $("#confirm-password-error").html("Not Matched");
    }
    if ($("#user-password").val() != $("#confirm-password").val()) {
      output = false;
      $("#confirm-password-error").html("Not Matched");
    }
  }

  return output;
}