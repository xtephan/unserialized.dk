<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the id=main div and all content after
 *
 * @package _s
 * @since _s 1.0
 */
?>

</div>

<aside class="col-md-4 blog-aside">

    <div class="aside-widget">
        <header>
            <h3>Read next...</h3>
        </header>
        <div class="body">
            <ul class="tales-list">
                <li><a href="index.html">Email Encryption Explained</a></li>
                <li><a href="#">Selling is a Function of Design.</a></li>
                <li><a href="#">It’s Hard To Come Up With Dummy Titles</a></li>
                <li><a href="#">Why the Internet is Full of Cats</a></li>
                <li><a href="#">Last Made-Up Headline, I Swear!</a></li>
            </ul>
        </div>
    </div>

    <div class="aside-widget">
        <header>
            <h3>Authors Favorites</h3>
        </header>
        <div class="body">
            <ul class="tales-list">
                <li><a href="index.html">Email Encryption Explained</a></li>
                <li><a href="#">Selling is a Function of Design.</a></li>
                <li><a href="#">It’s Hard To Come Up With Dummy Titles</a></li>
                <li><a href="#">Why the Internet is Full of Cats</a></li>
                <li><a href="#">Last Made-Up Headline, I Swear!</a></li>
            </ul>
        </div>
    </div>

    <div class="aside-widget">
        <header>
            <h3>Tags</h3>
        </header>
        <div class="body clearfix">
            <ul class="tags">
                <li><a href="#">OpenPGP</a></li>
                <li><a href="#">Django</a></li>
                <li><a href="#">Bitcoin</a></li>
                <li><a href="#">Security</a></li>
                <li><a href="#">GNU/Linux</a></li>
                <li><a href="#">Git</a></li>
                <li><a href="#">Homebrew</a></li>
                <li><a href="#">Debian</a></li>
            </ul>
        </div>
    </div>
</aside>
</div>
</div>
</div>

<footer>
    <div class="widewrapper footer">
        <div class="container">
            <div class="row">
                <div class="col-md-4 footer-widget">
                    <h3> <i class="icon-cog"></i>Statistics</h3>

                    <span>Even we sometimes loose track of how many articles we actually have here.  This one helps:</span>

                    <div class="stats">
                        <div class="line">
                            <span class="counter">27</span>
                            <span class="caption">Articles</span>
                        </div>
                        <div class="line">
                            <span class="counter">208</span>
                            <span class="caption">Comments</span>
                        </div>
                        <div class="line">
                            <span class="counter">2</span>
                            <span class="caption">Authors</span>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 footer-widget">
                    <h3> <i class="icon-star"></i>Hall of Fame</h3>
                    <ul class="tales-list">
                        <li><a href="index.html">Why we Need to Encrypt All Communication</a></li>
                        <li><a href="#">Selling is a Function of Design. Not Vice-Versa.</a></li>
                        <li><a href="#">It’s Hard To Come Up With Dummy Titles</a></li>
                        <li><a href="#">Why the Internet is Full of Cats</a></li>
                        <li><a href="#">Last Made-Up Headline, I Swear!</a></li>
                    </ul>
                </div>

                <div class="col-md-4 footer-widget">
                    <h3> <i class="icon-cog"></i>Contact Me</h3>

                    <span>I'm happy to hear from my readers. Thoughts, feedback, critique - all welcome! Drop me a line:</span>

                        <span class="email">
                            <a href="#">jimmy@notanactualemail.com</a>, PGP key 0x5AK0BEA1
                        </span>
                </div>
            </div>
        </div>
    </div>
    <div class="widewrapper copyright">
        <div class="container">
            Tales Theme, Designed and Developed by <a href="http://hackerthemes.com">Hackerthemes</a>, Copyright 2013
        </div>
    </div>
</footer>

<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script>window.jQuery || document.write('<script src="<?php echo get_template_directory_uri(); ?>/js/vendor/jquery/jquery-1.9.1.min.js"><\/script>')</script>
<script src="<?php echo get_template_directory_uri(); ?>/js/vendor/bootstrap/bootstrap.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/vendor/modernizr/modernizr.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/main.js"></script>

<!-- W3TC-include-js-body-end -->
<?php wp_footer(); ?>

</body>
</html>