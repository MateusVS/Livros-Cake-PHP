<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Livrosgenero $livrosgenero
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Livrosgeneros'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Livros'), ['controller' => 'Livros', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Livro'), ['controller' => 'Livros', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Generos'), ['controller' => 'Generos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Genero'), ['controller' => 'Generos', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="livrosgeneros form large-9 medium-8 columns content">
    <?= $this->Form->create($livrosgenero) ?>
    <fieldset>
        <legend><?= __('Add Livrosgenero') ?></legend>
        <?php
            echo $this->Form->control('livros_id', ['options' => $livros, 'empty' => true]);
            echo $this->Form->control('generos_id', ['options' => $generos, 'empty' => true]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
