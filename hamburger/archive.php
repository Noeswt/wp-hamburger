<?php get_header(); ?>

            <section class="p-subVisual">
                <img src="<?php echo get_template_directory_uri(); ?>/images/head.png" alt="">
                <h2 class="p-subVisual__ttl"><strong>Menu:</strong><?php single_cat_title(); ?></h2>
            </section>
            
            <div class="l-subContainer">
                <div class="p-arcContents">
                    <h3>小見出しが入ります</h3>
                    <p>
                        テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。
                    </p>

                    <div class="p-arcContents__inner">
                        <?php if (have_posts()): ?> <!-- 1.投稿データがあるかの条件分岐。 -->
                            <?php while (have_posts()): ?> <!-- 2.表示する投稿データがあれば繰り返し処理開始 -->
                            <?php the_post(); ?> <!-- 3.ループ処理に必要なカウント処理等 -->
                                    
                                <div class="p-arcContents__inner__box">
                                    <?php the_post_thumbnail(); ?>
                                    <div class="p-arcContents__inner__box__right">
                                        <div class="p-arcContents__inner__box__right__txt">
                                            <h3>
                                                <?php the_title(); ?>
                                            </h3>
                                            <p>
                                                <?php the_excerpt(); ?>
                                            </p>
                                        </div>
                                        <a href="<?php the_permalink(); ?>" class="p-arcContents__inner__box__right__btn c-btn">詳しく見る</a>
                                    </div>
                                </div>

                            <?php endwhile; ?> <!-- 5.繰り返し処理ここまで。投稿データがまだあればwhileに戻る。なければ終了 -->
                        <?php else: ?>  
                            <p>表示する記事がありません</p>
                        <?php endif; ?> <!-- if構文終了 -->
                    </div>
                </div>

                <div class="p-page">
                    <?php wp_pagenavi(); ?>
                </div>
            </div>
        </div>
       
        <?php get_sidebar(); ?>
    </main>

<?php get_footer(); ?>