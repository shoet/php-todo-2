<?php if (!empty($todos) && is_array($todos)) :?>
    <ul>
        <?php foreach ($todos as $todo) : ?>
            <p><?= esc($todo["title"]) ?></p>
        <?php endforeach; ?>
    </ul>
<?php else : ?>
    <p>no todo</p>
<?php endif; ?>
