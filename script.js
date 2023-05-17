// get the form element
var form = document.getElementById("form").submit();
const menuToggle = document.querySelector('.menu-toggle');
const navigation = document.querySelector('nav');

menuToggle.addEventListener('click', function() {
  navigation.classList.toggle('menu-active');
});

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

