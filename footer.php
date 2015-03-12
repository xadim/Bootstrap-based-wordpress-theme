    <footer id="footer">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    &copy; 2014 <a target="_blank" href="http://teambuktoo.com/" title="Full Stack Freelance PHP Developer">TEAMBuktoo | Full Stack Freelance PHP Developer</a>. All Rights Reserved.
                </div>
                <div class="col-sm-6">
                    <?php $url = content_url(); $url_images = $url."/themes/teambuktoo/images/";?>
                    <img class="pull-right" src="<?php echo $url_images.'designedby.png' ?>" alt="TEAMBuktoo" title="Full Stack Freelance PHP Developer">
                </div>
            </div>
        </div>
    </footer><!--/#footer-->
<?php wp_footer(); ?>
</body>
</html>