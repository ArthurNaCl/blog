const form_list = document.querySelectorAll('form');

function go_to_home() {
    window.location.replace("index.php");
}

function go_to_config() {
    window.location.replace("config.php");
}

function go_to_post_form() {
    window.location.replace("add_post_form.php");
}

function go_to_user_page(id) {
    window.location.replace(`user_page.php?id=${id}`);
}

function logout() {
    window.location.replace("php/logout.php");
}

function delete_account() {
    window.location.replace("php/delete_user.php");
}

function delete_post(id) {
    window.location.replace(`php/delete_post.php?id=${id}`);
}

form_list.forEach(function (form) {
    form.addEventListener("submit", function (e) {
        if (form.id == "login") {
            const username = document.getElementById("username");
            const password = document.getElementById("password");
            
            console.log(password.value);

            if (username.value == "") {
                username.style.border = "1px solid #ff0000";

                e.preventDefault();
            } else {
                username.style.border = "1px solid #000000";
            }

            if (password.value == "") {
                password.style.border = "1px solid #ff0000";

                e.preventDefault();
            } else {
                password.style.border = "1px solid #000000";
            }
        }

        if (form.id == "signup") {
            const username = document.getElementById("username");
            const password = document.getElementById("password");
            const password_confirmation = document.getElementById("password_confirmation");
            const age = document.getElementById("age");
            const error = document.getElementById("error");

            let not_empty = true;

            if (username.value == "") {
                username.style.border = "1px solid #ff0000";

                not_empty = false;

                e.preventDefault();
            } else {
                username.style.border = "1px solid #000000";
            }

            if (password.value == "") {
                password.style.border = "1px solid #ff0000";

                not_empty = false;

                e.preventDefault();
            } else {
                password.style.border = "1px solid #000000";
            }

            if (password_confirmation.value == "") {
                password_confirmation.style.border = "1px solid #ff0000";

                not_empty = false;

                e.preventDefault();
            } else {
                password_confirmation.style.border = "1px solid #000000";
            }

            if (age.value == "") {
                age.style.border = "1px solid #ff0000";

                not_empty = false;

                e.preventDefault();
            } else {
                age.style.border = "1px solid #000000";
            }

            if (not_empty && password.value != password_confirmation.value) {
                error.style.display = "block";

                e.preventDefault();
            } else {
                error.style.display = "none";
            }
        }
    });
})