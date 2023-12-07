document.addEventListener('DOMContentLoaded', function () {
    var emailElement = document.getElementById('scrambled-email');
    var scrambledEmail = emailElement.textContent;
    var unscrambledEmail = unscrambleEmail(scrambledEmail);
    emailElement.innerHTML = '<a href="mailto:' + unscrambledEmail + '">' + unscrambledEmail + '</a>';
  });
  
  function unscrambleEmail(scrambledEmail) {
    return scrambledEmail.split('').reverse().join('');
  }