// Validate values between password and re-password
const rePassword = document.querySelector("[name='re_password']");
rePassword.addEventListener('blur', () => {
    if (password.value !== rePassword.value) {
        if (document.getElementById('match-error') === null) {
            const matchError = document.createElement('p');
            matchError.setAttribute('id', 'match-error');
            matchError.setAttribute('class', 'error');
            matchError.innerHTML = 'Mật khẩu không khớp!';
            rePassword.parentNode.insertBefore(matchError, rePassword.nextSibling);
        }
    }
    else {
        const matchError = document.getElementById('match-error');
        if (matchError !== null)
            matchError.remove();
    }
});

// Generally validate form for disabling button submit
const formSignup = document.getElementById('signup-form');
formSignup.addEventListener('change', () => {
    const btnSignup = document.getElementById('btn-signup');
    btnSignup.disabled = (document.getElementById('duplicate-error') != null ||
        document.getElementById('length-error') != null ||
        document.getElementById('match-error') != null);
});

const username = document.getElementById('signup-username');
$(() => {
    username.addEventListener('blur', () => {
        const username_text = username.value;
        $.ajax({
            url: 'http://localhost:8080/coffee-cake/index.php?controller=User&action=username_available',
            method: 'post',
            data: {username: username_text},
            dataType: "text",
            success: (isAvailable) => {
                if (!isAvailable) {
                    if (document.getElementById('duplicate-error') == null) {
                        const duplicateError = document.createElement('p');
                        duplicateError.setAttribute('id', 'duplicate-error');
                        duplicateError.setAttribute('class', 'error');
                        duplicateError.innerHTML = "Tên đăng nhập đã tồn tại!";
                        username.parentNode.insertBefore(duplicateError, username.nextSibling);
                    }
                }
                else {
                    const duplicate_error = document.getElementById('duplicate-error');
                    if (duplicate_error != null)
                        duplicate_error.remove();
                }
            }
        });
    });
});
