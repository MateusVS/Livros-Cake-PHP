<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Genero $genero
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Generos'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="generos form large-9 medium-8 columns content">
    <?= $this->Form->create($genero) ?>
    <fieldset>
        <legend><?= __('Adicionar genero') ?></legend>
        <?php
            echo $this->Form->control('descricao');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Confirmar')) ?>
    <?= $this->Form->end() ?>
</div>
