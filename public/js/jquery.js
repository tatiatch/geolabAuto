$(document).ready(function() {
  $(".nav-toggler").click("toggle", function() {
    $(".nav").toggle(1000);
    $(".main-pic-name").attr("src", "pics/svg/auto-name-red.svg");
    $(".nav-toggler").toggle();
    $(".nav-toggler-close").show();
    $(".carousel-control-prev").hide();
    $(".carousel-control-next").hide();
  });
  $(".nav-toggler-close").click(function() {
    $(".nav").toggle();
    $(".main-pic-name").attr("src", "pics/svg/auto-name.svg");
    $(".nav-toggler").toggle();
    $(".nav-toggler-close").hide();
    $(".carousel-control-prev").show();
    $(".carousel-control-next").show();
  });
});

$(".main-form").submit(function(e) {
  let elements = [
    $("#exampleInputName"),
    $("#exampleInputEmail"),
    $("#exampleInputSubject"),
    $("#exampleFormControlTextarea1")
  ];
  let errors = [
    $(".name-error"),
    $(".email-error"),
    $(".subject-error"),
    $(".textarea-error")
  ];
  document.getElementById("male");
  document.getElementById("female");

  for (i = 0; i < elements.length; i++) {
    if (elements[i].val() == "") {
      errors[i].show();
      e.preventDefault();
    } else {
      errors[i].hide();
    }

    if (!male.checked && !female.checked) {
      $(".gender-error").show();
      e.preventDefault();
    } else {
      $(".gender-error").hide();
      $(".success-message").show();
    }
  }
});

// form-error-p
// form-control
