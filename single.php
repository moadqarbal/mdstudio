<?php get_header() ?>

    <!-- single-page section -->
    <?php if(have_posts()): ?>
        <?php while(have_posts()): the_post(); ?>
            <section class="single-page">
            <div class="row">
                <div class="col text-center m-0 p-0" class="title-header">
                    <img src="https://via.placeholder.com/900" class="w-100 title-header-img" alt="test">
                    <div class="title">
                        <h1 class="text-white"><?php the_title() ?></h1>
                        <span class="text-white">Creer Par : Moad | En : 15-12-2018</span>
                    </div>
                    <div class="overlay"></div>
                </div>
            </div>

            <div class="container">
                <div class="row py-5">
                    <div class="col-md-12 main-post">
                        <p>
                            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has
                            survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently
                            with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                        </p>
                        <a href="#"> hello world </a>
                        <h2>Title number one</h2>
                        <ul>
                            <li>test one</li>
                            <li>test two</li>
                            <li>test three</li>
                            <li>test four</li>
                        </ul>
                        <img src="https://via.placeholder.com/900" alt="test">
                    </div>

                    <div class="col-md-12 my-4">
                        <div class="tags">
                            <h3>Les Tags</h3>
                            <a href="#" class="badge badge-pill mx-1 px-3 text-white py-2 bg-dark">hello</a>
                            <a href="#" class="badge badge-pill mx-1 px-3 text-white py-2 bg-dark">hello</a>
                            <a href="#" class="badge badge-pill mx-1 px-3 text-white py-2 bg-dark">hello</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <?php endwhile; ?>
    <?php endif; ?>


<?php get_footer() ?>