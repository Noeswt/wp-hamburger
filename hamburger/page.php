<?php get_header(); ?>

            <section class="p-mainVisual">
                <img src="<?php echo get_template_directory_uri(); ?>/images/shop.png" alt="">
                <h1 class="p-mainVisual__ttl"><?php the_title(); ?></h1>
            </section>

            <div class="l-subContainer">
                <div class="p-search">
                <?php the_content(); ?>
                
                    <!-- <h2>見出しh2</h3>
                    <p>
                        pタグテキスト。pタグテキスト。pタグテキスト。pタグテキスト。pタグテキスト。pタグテキスト。pタグテキスト。pタグテキスト。pタグテキスト。pタグテキスト。pタグテキスト。pタグテキスト。pタグテキスト。pタグテキスト。pタグテキスト。pタグテキスト。pタグテキスト。pタグテキスト。pタグテキスト。pタグテキスト。pタグテキスト。pタグテキスト。pタグテキスト。
                    </p>
                    <h3 class="p-search__ttl">見出しh3</h3>
                    <h4 class="p-search__ttl">見出しh4</h4>
                    <h5 class="p-search__ttl">見出しh5</h5>
                    <h6 class="p-search__ttl">見出しh6</h6>

                    <div class="p-search__box">
                        <p>
                            Blockquote引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ
                        </p>
                        <span>出典元：<a href="">〇〇〇〇〇〇〇〇〇〇〇</a></span>
                    </div>
                </div>
                <img src="<?php echo get_template_directory_uri(); ?>/images/cooked-foods-750073.png" alt="" class="p-search__main">
                <div class="p-search__flexbox">
                    <div class="p-search__flexbox__flex">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/cooked-foods-1.png" alt="">
                        <p>
                            テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。
                        </p>
                    </div>
                    <div class="p-search__flexbox__flex">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/cooked-foods-1.png" alt="">
                        <p>
                            テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。
                        </p>
                    </div>
                </div>

                <div class="p-search__subimg">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/cooked-foods-1.png" alt="">
                </div>

                <div class="p-search__grid">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/cooked-foods-1.png" alt="">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/cooked-foods-1.png" alt="">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/cooked-foods-1.png" alt="">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/cooked-foods-1.png" alt="">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/cooked-foods-1.png" alt="">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/cooked-foods-1.png" alt="">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/cooked-foods-1.png" alt="">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/cooked-foods-1.png" alt="">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/cooked-foods-1.png" alt="">
                </div>

                <div class="p-search__listbox">
                    <div class="p-search__listbox__inner"> 
                        <ul>
                            <li>1.リストリストリスト</li>
                            <li>2.リストリストリスト</li>
                        </ul>
                        <ul class="p-search__listbox__inner__ul">
                            <li>1.リスト2リスト2リスト2</li>
                            <li>2.リスト2リスト2リスト2</li>
                        </ul>
                        <ul>
                            <li>1.リストリストリスト</li>
                            <li>2.リストリストリスト</li>
                        </ul>
                    </div>
                    <div class="p-search__listbox__inner"> 
                        <ul>
                            <li>1.リストリストリスト</li>
                            <li>2.リストリストリスト</li>
                        </ul>
                        <ul class="p-search__listbox__inner__ul">
                            <li>リスト2リスト2リスト2</li>
                            <li>リスト2リスト2リスト2</li>
                        </ul>
                        <ul>
                            <li>1.リストリストリスト</li>
                            <li>2.リストリストリスト</li>
                        </ul>
                    </div>
                </div>

                <div class="p-search__box">
                    &lt;html&gt;<br>
                    <div class="p-search__box__tag">
                        &lt;head&gt;<br>
                        &lt;/head&gt;<br>
                        &lt;body&gt;<br>
                        &lt;/body&gt;<br>
                    </div>
                    &lt;/html&gt;<br>
                </div>

                <div class="p-search__table">
                    <table>
                        <tr>
                            <td class="c-td1">テーブル</td>
                            <td class="c-td2">テーブル</td>
                        </tr>
                        <tr>
                            <td class="c-td1">テーブル</td>
                            <td class="c-td2">テーブル</td>
                        </tr>
                        <tr>
                            <td class="c-td1">テーブル</td>
                            <td class="c-td2">テーブル</td>
                        </tr>
                        <tr>
                            <td class="c-td1">テーブル</td>
                            <td class="c-td2">テーブル</td>
                        </tr>
                    </table>
                </div>

                <div class="p-search__btn">
                    <a href="#" class="c-btn1">ボタン</a>
                </div>

                <div class="p-search__bold">
                    <p>boldboldboldboldboldboldbold</p> -->
                </div>
            </div>
        </div>

        <?php get_sidebar(); ?>
    </main>

<?php get_footer(); ?>