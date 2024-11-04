function togglePasswordVisibility() {
    const passwordInput = document.getElementById('password');
    const eyeIcon = document.getElementById('eye-icon');
    if (passwordInput.type === 'password') {
        passwordInput.type = 'text';
        eyeIcon.classList.remove('fa-eye-slash');
        eyeIcon.classList.add('fa-eye');
    } else {
        passwordInput.type = 'password';
        eyeIcon.classList.remove('fa-eye');
        eyeIcon.classList.add('fa-eye-slash');
    }
}

function validateForm() {
    const phoneInput = document.getElementById('phone');
    const passwordInput = document.getElementById('password');
    const confirmPasswordInput = document.getElementById('confirm-password');
    const nameInput = document.getElementById('name');
    const termsCheckbox = document.getElementById('terms');
    if (phoneInput.value === '' || passwordInput.value === '' || confirmPasswordInput.value === '' || nameInput.value === '' || !termsCheckbox.checked) {
        alert('Please fill in all fields and agree to the terms and conditions.');
        return false;
    }
    if (passwordInput.value !== confirmPasswordInput.value) {
        alert('Passwords do not match.');
        return false;
    }
    return true;
}