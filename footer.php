        </section>
        <footer class="site-footer" role="contentinfo">
        <div class="container">
          <div class="row">
              <div class="col-md-3">
                  <ul class="list-unstyled footer-link">
                    <img src="<?= get_stylesheet_directory_uri(); ?>/img/logo3.PNG" class="logo-footer2" alt="logo"/>
                  </ul>
                </div>
            <div class="col-md-3">
              <ul class="list-unstyled footer-link">
                <li class="d-flex"><span class="mr-3">A:</span><span class="text-black">71 rue Pasteur, 59110 La Madeleine</span></li>
                <li class="d-flex"><span class="mr-3">T:</span><span class="text-black">09 72 62 11 69</span></li>
                <li class="d-flex"><span class="mr-3">E:</span><span class="text-black"><a class="lien" href='mailto:contact@jinkau.com'>contact@jinkau.com</a></span></li>
              </ul>
            </div>
            <div class="col-md-3">
                <h3> </h3>
                </ul>
              </div>
            <div class="col-md-3">
              <h2>Newsletter</h2>
                  
                  <p class="footertext-color">Abonnez-vous à notre newsletter hebdomadaire et restez à l'écoute.</p>
                  
              <form action="" method="post">
                  <div class="input-prepend"><span class="add-on"><i class="icon-envelope"></i></span>
                      <input type="email" id="" name="" placeholder="votre@email.com">
                  </div>
                  <br />
                  <input type="submit" value="S'abonner" class="btn btn-large" />
            </form>
            <!-- <h3>Social</h3> -->
            <!-- <ul class="list-unstyled footer-link d-flex footer-social">
              <li><a href="#" class="p-2"><span class="fa fa-twitter"></span></a></li>
              <li><a href="#" class="p-2"><span class="fa fa-facebook"></span></a></li>
              <li><a href="#" class="p-2"><span class="fa fa-linkedin"></span></a></li>
              <li><a href="#" class="p-2"><span class="fa fa-instagram"></span></a></li>
            </ul> -->
            </div>
          </div>
        </div>
        <div class="copyrightfooter">
          <p class="copyright footertext-color">Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved</p>
        </div>
      </footer>

    <?php wp_footer(); ?>
  </body>
</html>

