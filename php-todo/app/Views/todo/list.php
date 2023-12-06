<script>
function updateStatus(checkbox) {
    var id = checkbox.value;
    var status = checkbox.checked ? '1' : '0';
    console.log(id)
    console.log(status)

    var xhr = new XMLHttpRequest();
    xhr.open('POST', 'http://localhost:8080/todo/update', true);
    xhr.setRequestHeader('Content-Type', 'application/json');
    xhr.send(JSON.stringify({ id: id, status: status }));
}
</script>
<?php if (!empty($todos) && is_array($todos)) :?>
    <ul>
        <?php foreach ($todos as $todo) : ?>
            <p>
                <input 
                    type="checkbox" 
                    name="status" 
                    value="<?= esc($todo["id"]) ?>" 
                    <?= $todo["status"] === '1' ? 'checked' : '' ?> 
                    onchange="updateStatus(this);"
                />
                <?= esc($todo["title"]) ?>
            </p>
        <?php endforeach; ?>
    </ul>
<?php else : ?>
    <p>no todo</p>
<?php endif; ?>
