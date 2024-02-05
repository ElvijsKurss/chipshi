<?php


get_header();
?>

<main>
    <div id="klasiskie-container" class="content-wrapper">
        <h1 class="helper-one">Veseligākas uzkodas</h1>
        <ul>
            <div class="element-container">
                <?php
                $args = array(
                    'post_type'        => 'produkts',
                    'category_name'    => 'veseligakas-uzkodas',
                );

                $query = new WP_Query($args);

                $posts = $query->get_posts();
                ?>
                <div id="photoGrid">
                    <?php
                    foreach ($posts as $post) {
                        $title = $post->post_title;
                        $content = $post->post_content;
                        $imageThumbnailSrc = get_the_post_thumbnail_url($post, 'Small boy size');
                        $imageLargeSrc = get_the_post_thumbnail_url($post, 'medium');
                        $customCategory = "Veselīgākas uzkodas";
                        $postLink = get_permalink($post);
                    ?>
                        <a href="<?= $postLink ?>" class="post-item">
                            <span class="choose-span">Izvēlies</span>
                            <div class="text-container">
                                <span class="post-title"><?= $title ?></span>
                                <span class="post-categories"><?= $customCategory ?></span>
                            </div>
                            <img src="<?= $imageLargeSrc ?>" alt="<?= $title ?>" class="post-image" />
                        </a>
                    <?php
                    }
                    ?>
                </div>
            </div>
        </ul>
    </div>
</main>

<?php

get_footer();
