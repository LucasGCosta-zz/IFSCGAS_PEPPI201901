<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Pagina $pagina
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Paginas'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="paginas form large-9 medium-8 columns content">
    <?= $this->Form->create($pagina) ?>
    <fieldset>
        <legend><?= __('Edit Pagina') ?></legend>
        <?php
            echo $this->Form->control('identificador');
            echo $this->Form->control('nome');
            echo $this->Form->control('conteudo');
        ?>
    </fieldset>
	<script>
	$(function () {
		var editor = new Jodit("#conteudo", {
			"language": "pt_br",
			"defaultMode": "1",
			"buttons": "|,bold,underline,italic,|,|,ul,ol,|,outdent,indent,|,font,fontsize,brush,paragraph,|,image,file,video,table,link,|,align,undo,redo,\n,eraser,|,symbol,fullsize,selectall,print"
		});
	});
	</script>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
