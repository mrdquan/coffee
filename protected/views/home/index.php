<div class="section">
    <ul>
    <?php foreach ($lstNews as $new): ?>
        <li>
            <a href="blog.html"><img style="width: 194px; height: 194px" src="images/<?php echo $new->img; ?>" alt="Image"></a>
            <h2><a href="blog.html"><?php echo $new->title; ?></a></h2>
            <p>
                <?php echo $new->content; ?>
            </p>
            <a href="blog.html" class="readmore">Read More</a>
        </li>
    <?php endforeach; ?>
    </ul>
    <div>
        <ul>
            <li>
                <h3><a href="blog.html">Lorem ipsum</a></h3>
                <span>28 November 2011</span>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. blandit nunc. Donec in velit sed ante interdum condimentum pretium sit amet erat.
                </p>
                <a href="blog.html" class="readmore">Read more</a>
            </li>
            <li>
                <h3><a href="blog.html">Dolor sit amet</a></h3>
                <span>25 November 2011</span>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                </p>
                <a href="blog.html" class="readmore">Read more</a>
            </li>
        </ul>
    </div>
</div>