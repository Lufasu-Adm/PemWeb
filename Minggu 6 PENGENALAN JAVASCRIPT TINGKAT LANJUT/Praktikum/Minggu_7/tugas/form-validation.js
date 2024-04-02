document.getElementById('registrationForm').addEventListener('submit', function(event) {
        var isValid = true;

        // Validasi Nama
        var namaInput = document.getElementById('nama');
        var namaError = document.getElementById('namaError');
        if (namaInput.value.trim() === '') {
            namaError.textContent = 'Nama harus diisi';
            isValid = false;
        } else {
            namaError.textContent = '';
        }

        // Validasi Username
        var usernameInput = document.getElementById('username');
        var usernameError = document.getElementById('usernameError');
        if (usernameInput.value.trim() === '') {
            usernameError.textContent = 'Username harus diisi';
            isValid = false;
        } else {
            usernameError.textContent = '';
        }

        // Validasi Email
        var emailInput = document.getElementById('email');
        var emailError = document.getElementById('emailError');
        var emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        if (!emailRegex.test(emailInput.value)) {
            emailError.textContent = 'Email tidak valid';
            isValid = false;
        } else {
            emailError.textContent = '';
        }

        // Validasi Password
        var passwordInput = document.getElementById('password');
        var passwordConfirmationInput = document.getElementById('passwordConfirmation');
        var passwordError = document.getElementById('passwordError');
        if (passwordInput.value === '') {
            passwordError.textContent = 'Password harus diisi';
            isValid = false;
        } else if (passwordInput.value !== passwordConfirmationInput.value) {
            passwordError.textContent = 'Konfirmasi password tidak cocok';
            isValid = false;
        } else {
            passwordError.textContent = '';
        }

        // Validasi No Telepon
        var teleponInput = document.getElementById('telepon');
        var teleponError = document.getElementById('teleponError');
        var teleponRegex = /^\d{10,12}$/; // Angka dengan panjang 10-12 digit
        if (!teleponRegex.test(teleponInput.value)) {
            teleponError.textContent = 'No Telepon tidak valid';
            isValid = false;
        } else {
            teleponError.textContent = '';
        }

        // Validasi Jenis Kelamin
        var priaInput = document.getElementById('pria');
        var wanitaInput = document.getElementById('wanita');
        var jenisKelaminError = document.getElementById('jenisKelaminError');
        if (!priaInput.checked && !wanitaInput.checked) {
            jenisKelaminError.textContent = 'Jenis Kelamin harus dipilih';
            isValid = false;
        } else {
            jenisKelaminError.textContent = '';
        }

        // Validasi Alamat Website
        var websiteInput = document.getElementById('website');
        var websiteError = document.getElementById('websiteError');
        var urlRegex = /^(ftp|http|https):\/\/[^ "]+$/;
        if (!urlRegex.test(websiteInput.value)) {
            websiteError.textContent = 'Alamat Website tidak valid';
            isValid = false;
        } else {
            websiteError.textContent = '';
        }

        // Hentikan submit jika ada kesalahan validasi
        if (!isValid) {
            event.preventDefault();
        }
    });
