$(document).ready(function() {
  $("#next").click(function() {
      console.log('ici');
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
  $("#back").click(function() {
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
    console.log('validate...');
    var output = true;
    $(".registration-error").html('');
    if ($("#account-field").css('display') != 'none') {
        if (!($("#email").val())) {
            output = false;
            $("#email-error").html("required");
        }
        if (!$("#email").val().match(/^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/)) {
            $("#email-error").html("invalid");
            output = false;
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