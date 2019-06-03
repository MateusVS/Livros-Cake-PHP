<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Autore $autore
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Ações') ?></li>
        <li><?= $this->Html->link(__('Listar Autor'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="autores form large-9 medium-8 columns content">
    <?= $this->Form->create($autore) ?>
    <fieldset>
        <legend><?= __('Adicionar Autor') ?></legend>
        <?php
            echo $this->Form->control('nome');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Confirmar')) ?>
    <?= $this->Form->end() ?>
</div>
