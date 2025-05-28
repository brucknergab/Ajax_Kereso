document.addEventListener("DOMContentLoaded", function () {
    const input = document.getElementById("id");
    const nameInput = document.getElementById("name");
    const birthdayInput = document.getElementById("birthday");

    input.addEventListener("input", function () {
        const id = this.value;
        if (id === "") return;

        const xhr = new XMLHttpRequest();
        xhr.open("GET", "./keres.php?id=" + id, true);

        xhr.onreadystatechange = function () {
            if (xhr.readyState === 4 && xhr.status === 200) {
                const adat = JSON.parse(xhr.responseText);
                nameInput.value = adat.name;
                birthdayInput.value = adat.birthday;

                if (adat.id !== -1) {
                    input.classList.remove("nemtalalt");
                    input.classList.add("talalt");
                } else {
                    input.classList.remove("talalt");
                    input.classList.add("nemtalalt");
                }
            }
        };
        xhr.send();
    });
});
