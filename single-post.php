<?php
wp_head();

    the_post();
?>
 
    
<section class="section-single-blog">
    <div class="single-blog">
        <div class="single-blog__title header-1-small">
            <?php the_title(); ?>
        </div>
        <div class="single-blog__details sub-header-2">
            <span class="blog__item-category"><?php foreach((get_the_category()) as $category) { ?>
                <a href="<?php echo get_category_link($category->cat_ID); ?>"><?php echo $category->category_nicename ?> </a>
                <?php } ?> | </span>
            <span class="bold" class=""><?php echo get_the_date('m.d.y'); ?></span>
        </div>
        <div class="single-blog__content text-1">
            <?php 
            the_content();
            ?>
            Lorem ipsum, dolor sit amet consectetur adipisicing elit. Doloremque iste, autem pariatur quibusdam minus, vel tempore, commodi praesentium et id omnis alias sapiente. Maxime, ex quia nostrum rerum soluta ipsam.
            Lorem ipsum dolor sit, amet consectetur adipisicing elit. Laborum quae animi beatae alias ullam, nisi aliquid eligendi ipsam obcaecati repellat perferendis iusto molestiae voluptatum magni quasi blanditiis exercitationem quia eum!
            Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quo earum recusandae illum officiis culpa hic soluta libero. Esse saepe fugit, optio itaque perferendis, natus quaerat corrupti ducimus qui magnam amet!
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Officiis officia maiores in! Quam quia dicta deserunt minus id amet maxime possimus debitis, sit provident, aliquid quo officiis vel eaque ratione!
            Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nisi fugiat officia molestiae laboriosam aliquid aperiam sapiente veniam tempore, porro nihil laborum amet saepe ratione perferendis. Reprehenderit cumque repellat molestias similique.
            Lorem ipsum dolor sit amet consectetur, adipisicing elit. Necessitatibus cum temporibus reprehenderit odio distinctio eos culpa tempora, ipsa, perspiciatis voluptatem iusto libero in sint nesciunt natus accusamus qui vero quo?
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Hic similique debitis facere tempora, nihil magni voluptatibus, odit velit optio placeat impedit, vel architecto. Quis facilis illo, minima ducimus voluptatum sapiente.
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Asperiores ut illum ullam possimus quia nemo culpa voluptatum repellendus vel quisquam! Nostrum ea adipisci dignissimos similique! Eligendi odio facilis natus earum?
            <img class="single-blog__btn btn__home" src="<?php echo get_template_directory_uri()?>/assets/images/back-home-btn.svg" alt="" class="read-more-button">
        </div>
    </div>      
</div>
</section>

<?php

get_footer();

?>