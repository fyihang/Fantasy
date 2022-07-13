<?php

/**
 * 一个优美梦幻的动漫风 Typecho 博客主题。
 * 源自Dreamer-Paul的1.2版本Fantasy主题
 * 遵守MIT许可二次修改分发
 *
 * @package Fantasy Theme
 * @author Fyihang
 * @version N.2
 * @link https://www.fyihang.com
 */

if (!defined('__TYPECHO_ROOT_DIR__')) exit;

$this->need('header.php');

?>
<main>
    <div class="wrap min">
        <section class="board">
<?php while($this->next()): ?>
            <div class="post-item">
                <time class="date"><?php $this->date(); ?></time>
                <h3 class="title"><a href="<?php $this->permalink() ?>"><?php $this->title() ?></a></h3>
            </div>
<?php endwhile; ?>
        </section>
        <?php $this->pageNav('', ''); ?>
    </div>
</main>

<?php $this->need('footer.php'); ?>
