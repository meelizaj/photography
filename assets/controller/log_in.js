document.addEventListener('DOMContentLoaded', function () {
    const forms = {
        'login': document.getElementById('login-form'),
        'signup': document.getElementById('signup-form'),
        'forgot': document.getElementById('forgot-form')
    };
    const titleElement = document.getElementById('authModalTitle');
    const links = document.querySelectorAll('.link-switch-form');

    // Function to switch form views
    function switchForm(target) {
        // Hide all forms
        Object.values(forms).forEach(form => form.style.display = 'none');

        // Show the target form
        forms[target].style.display = 'block';

        // Update the modal title
        if (target === 'login') {
            titleElement.textContent = 'LOG IN';
        } else if (target === 'signup') {
            titleElement.textContent = 'SIGN UP';
        } else if (target === 'forgot') {
            titleElement.textContent = 'RESET PASSWORD';
        }

        // Reset password input types to 'password' and icons to 'slash' when switching forms
        document.querySelectorAll('.password-input').forEach(input => {
            input.setAttribute('type', 'password');
        });
        document.querySelectorAll('.show-password-toggle i').forEach(icon => {
            icon.classList.remove('bi-eye-fill');
            icon.classList.add('bi-eye-slash-fill');
        });
    }

    // Add click listeners to switch links
    links.forEach(link => {
        link.addEventListener('click', function () {
            const target = this.getAttribute('data-target');
            switchForm(target);
        });
    });

    // Ensure the modal starts on the login screen every time it opens
    const authModal = document.getElementById('authModal');
    authModal.addEventListener('show.bs.modal', function () {
        switchForm('login');
    });

    // Initialize tooltips
    var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
    var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
        return new bootstrap.Tooltip(tooltipTriggerEl)
    })

    // --- New Password Visibility Toggle Logic ---
    function setupPasswordToggle(toggleButton) {
        const targetId = toggleButton.getAttribute('data-target');
        const passwordInput = document.getElementById(targetId);
        const icon = toggleButton.querySelector('i');

        toggleButton.addEventListener('click', function () {
            // Toggle the type attribute
            const type = passwordInput.getAttribute('type') === 'password' ? 'text' : 'password';
            passwordInput.setAttribute('type', type);

            // Toggle the eye icon
            if (type === 'text') {
                icon.classList.remove('bi-eye-slash-fill');
                icon.classList.add('bi-eye-fill');
            } else {
                icon.classList.remove('bi-eye-fill');
                icon.classList.add('bi-eye-slash-fill');
            }
        });
    }

    // Find all toggle buttons and set them up
    document.querySelectorAll('.show-password-toggle').forEach(setupPasswordToggle);
    // ------------------------------------------

});