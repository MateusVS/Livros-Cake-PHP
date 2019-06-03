<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Autore $autore
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Ações') ?></li>
        <li><?= $this->Form->postLink(
                __('Deletar'),
                ['action' => 'delete', $autore->id],
                ['confirm' => __('Tem certeza que realmente deseja deletar # {0}?', $autore->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('Listar Autores'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="autores form large-9 medium-8 columns content">
    <?= $this->Form->create($autore) ?>
    <fieldset>
        <legend><?= __('Editar Autor') ?></legend>
        <?php
            echo $this->Form->control('nome');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Confirmar')) ?>
    <?= $this->Form->end() ?>
</div>
