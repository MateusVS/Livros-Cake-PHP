<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Livro $livro
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Ações') ?></li>
        <li><?= $this->Form->postLink(
                __('Deletar'),
                ['action' => 'delete', $livro->id],
                ['confirm' => __('Tem certeza que deseja deletar # {0}?', $livro->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('Listar Livros'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('Listar Autores'), ['controller' => 'Autores', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('Novo Autor'), ['controller' => 'Autores', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="livros form large-9 medium-8 columns content">
    <?= $this->Form->create($livro) ?>
    <fieldset>
        <legend><?= __('Editar Livro') ?></legend>
        <?php
            echo $this->Form->control('titulo');
            echo $this->Form->control('descricao');
            echo $this->Form->control('quantidade');
            echo $this->Form->control('isbn');
            echo $this->Form->control('autor_id', ['options' => $autores, 'empty' => true]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Confirmar')) ?>
    <?= $this->Form->end() ?>
</div>
