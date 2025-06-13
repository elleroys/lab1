<form id="myForm" method="post" action="index.php?page=result">
    <label for="lastname">Прізвище</label>
    <input id="lastname" name="lastname" required>

    <label for="firstname">Ім'я</label>
    <input id="firstname" name="firstname" required>

    <label for="middlename">По‑батькові</label>
    <input id="middlename" name="middlename">

    <label for="age">Вік</label>
    <select id="age" name="age">
        <option>до 16</option>
        <option>16‑21</option>
        <option>21‑27</option>
        <option>27‑35</option>
        <option>35‑45</option>
        <option>45‑55</option>
        <option>більше 55</option>
    </select>

    <label for="about">Про себе</label>
    <textarea id="about" name="about" rows="4"></textarea>

    <button class="btn" type="submit">Надіслати</button>
</form>

<script>
    document.getElementById('myForm').addEventListener('submit', function(event) {
        // Регулярний вираз для англійських літер (великих і малих)
        const engRegex = /^[A-Za-z]+$/;

        // Збираємо поля для перевірки ПІБ
        const fields = [
            {id: 'lastname', label: 'Прізвище'},
            {id: 'firstname', label: "Ім'я"},
            {id: 'middlename', label: 'По‑батькові'}
        ];

        let errors = [];

        fields.forEach(field => {
            const input = document.getElementById(field.id);
            const value = input.value.trim();

            if (value.length > 0 && !engRegex.test(value)) {
                errors.push(`Поле "${field.label}" містить неанглійські символи.`);
            }
        });

        if (errors.length > 0) {
            alert(errors.join('\n'));
            event.preventDefault(); // Не відправляти форму
        }
    });
</script>
