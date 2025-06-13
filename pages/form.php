<form method="post" action="index.php?page=result">
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
