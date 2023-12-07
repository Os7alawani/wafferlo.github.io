function validateForm() {
    var name = document.getElementById('name').value;
    var email = document.getElementById('email').value;
    var comments = document.getElementById('comments').value;
    var satisfaction = document.querySelector('input[name="satisfaction"]:checked');
    var category = document.getElementById('category').value;

    // Simple validation for Name, Email, and Comments
    if (name === '' || email === '' || comments === '' || category==='' || !satisfaction) {
        if (name === '') {
            alert('Please enter name');
        }
        if (email === '') {
            alert('Please enter an email address')
        }

        if (!category) {
            alert('Please choose a catgory')
        }

        if (!satisfaction) {
            alert('Please choose a satisfaction level')
        }

        if (comments === '') {
            alert('Please enter comment')
        }
        return false;
    }

    return true;

}