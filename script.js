// get the form element
var form = document.getElementById("formId").submit();

// attach a submit event handler to the form
form.addEventListener("submit", function(event) {
  event.preventDefault();

  // get all the input elements in the form
  var inputs = form.elements;

  // loop through the input elements and log their values
  for (var i = 0; i < inputs.length; i++) {
    console.log(inputs[i].name + ": " + inputs[i].value);
  }
});