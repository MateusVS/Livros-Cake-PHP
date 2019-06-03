<?php
/**
 * CakePHP(tm) : Rapid Development Framework (https://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 * @link          https://cakephp.org CakePHP(tm) Project
 * @since         0.10.0
 * @license       https://opensource.org/licenses/mit-license.php MIT License
 */
use Cake\Cache\Cache;
use Cake\Core\Configure;
use Cake\Core\Plugin;
use Cake\Datasource\ConnectionManager;
use Cake\Error\Debugger;
use Cake\Http\Exception\NotFoundException;

$this->layout = false;

if (!Configure::read('debug')) :
    throw new NotFoundException(
        'Please replace src/Template/Pages/home.ctp with your own version or re-enable debug mode.'
    );
endif;

$cakeDescription = 'CakePHP: the rapid development PHP framework';
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Gerenciamento de livros</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>           
</head>
<body>
  <div class="row">
    <div class="col s12 m6">
      <div class="card blue-grey darken-1">
        <div class="card-content white-text">
          <span class="card-title">Livros</span>
          <p>Visualize e gerencie todas as opções de livros que possuimos.</p>
        </div>
        <div class="card-action">
         <?= $this->Html->link(__('Gerenciar Livros'), ['controller' => 'Livros', 'action' => 'index']) ?>
        </div>
      </div>
    </div>
  </div>

  <div class="row">
    <div class="col s12 m6">
      <div class="card blue-grey darken-1">
        <div class="card-content white-text">
          <span class="card-title">Gerenciamento de Autores</span>
          <p>Visualize e gerencie todos os autores cadastrados em nossa base de dados.</p>
        </div>
        <div class="card-action">
          <?= $this->Html->link(__('Gerenciar Autores'), ['controller' => 'Autores', 'action' => 'index']) ?>
        </div>
      </div>
    </div>
  </div>

    <div class="row">
    <div class="col s12 m6">
      <div class="card blue-grey darken-1">
        <div class="card-content white-text">
          <span class="card-title">Gerenciamento de Generos</span>
          <p>Visualize e gerencie todos os generos que nossos livros podem possuir.</p>
        </div>
        <div class="card-action">
            <?= $this->Html->link(__('Gerenciar Generos'), ['controller' => 'Generos', 'action' => 'index']) ?>
        </div>
      </div>
    </div>
  </div>


</body>
</html>
