<?php global $redux_demo; ?> 

<footer>
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                <ul class="list-inline text-center">
                    <?php
                    if ($redux_demo['tw'] !== '') {
                        ?>

                        <li>
                            <a href="#">
                                <span class="fa-stack fa-lg">
                                    <i class="fa fa-circle fa-stack-2x"></i>
                                    <i class="fa fa-twitter fa-stack-1x fa-inverse"></i>
                                </span>
                            </a>
                        </li>

                    <?php }
                    ?>



 <?php
                    if ($redux_demo['fb'] !== '') {
                        ?>
                    <li>
                        <a href="#">
                            <span class="fa-stack fa-lg">
                                <i class="fa fa-circle fa-stack-2x"></i>
                                <i class="fa fa-facebook fa-stack-1x fa-inverse"></i>
                            </span>
                        </a>
                    </li>
                    <?php }
                    ?>
                    
                     <?php
                    if ($redux_demo['ld'] !== '') {
                        ?>
                    <li>
                        <a href="#">
                            <span class="fa-stack fa-lg">
                                <i class="fa fa-circle fa-stack-2x"></i>
                                <i class="fa fa-linkedin fa-stack-1x fa-inverse"></i>
                            </span>
                        </a>
                    </li>
                    <?php }
                    ?>
                    
                     <?php
                    if ($redux_demo['git'] !== '') {
                        ?>
                    <li>
                        <a href="#">
                            <span class="fa-stack fa-lg">
                                <i class="fa fa-circle fa-stack-2x"></i>
                                <i class="fa fa-github fa-stack-1x fa-inverse"></i>
                            </span>
                        </a>
                    </li>
                    <?php }
                    ?>

                </ul>
                <p class="copyright text-muted"><?php echo $redux_demo['fcontent']; ?></p>
            </div>
        </div>
    </div>
</footer>


<?php wp_footer(); ?>
</body>

</html>
