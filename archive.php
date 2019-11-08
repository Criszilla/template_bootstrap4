<?php 
/* Archive Page
* Pagina que mostrará los "archivos" del sitio
*/

get_header();
?>

<body>
    <header>
        <section class="container">
            <?php the_archive_title( '<h1>', '</h1>' ); ?>
        </section>
    </header>
    <main class="container-fluid">
        <section class="container">
            <?php if(have_posts()): ?>
                <?php while(have_posts()):?>
                    <?php the_post(); ?>
                <?php endwhile; ?>
            <?php else: ?>
            <?php endif; ?>
        </section>
    </main>

    <?php get_footer(); ?>
</body>