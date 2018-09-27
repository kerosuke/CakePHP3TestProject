<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Article $tags
 */
?>
<h1>
    Articles tagged with
    <?= $this->Text->toList(h($tags), 'or') ?>
</h1>

<section>
<?php foreach ($articles as $article): ?>
    <article>
        <!-- �����N�̍쐬�� HtmlHelper ���g�p -->
        <h4><?= $this->Html->link(
            $article->title,
            ['controller' => 'Articles', 'action' => 'view', $article->slug]
        ) ?></h4>
        <span><?= h($article->created) ?>
    </article>
<?php endforeach; ?>
</section>