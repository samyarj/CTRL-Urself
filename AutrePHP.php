<button data-text="Awesome" class="button" onclick="alert('Button clicked!')">
  <span class="actual-text" >
  &nbsp; Start&nbsp;</span>
  <span class="hover-text" aria-hidden="true">
  &nbsp; Start&nbsp;</span>
</button>

<script>
  const button = document.querySelector('.button');
  button.addEventListener('click', function() {
    alert('Button clicked!');
  });
</script>