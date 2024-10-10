</div>
</main>
<!-- Footer -->
<footer>
    <div class="footer-info">
        <!-- Sektion innehåll skrivs ut dynamiskt från inlägg med hjälp av funktion i functions.php -->
        <div>
            <h6>Besök</h6>
            <?php writeSpecPost('adress'); ?>
        </div>
        <div>
            <h6>Kontakt</h6>
            <div class="side-by-side">
                <p>Telefon:</p> <?php writeSpecPost('telefon'); ?>
            </div>
            <div class="side-by-side lower">
                <p>E-post:</p><?php writeSpecPost('e-post'); ?>
            </div>
        </div>
    </div>
    <div class="footer-menu">
        <!-- Meny i footer -->
        <nav>
            <?php
            wp_nav_menu(array('theme_location' => 'main-nav'));
            ?>
        </nav>
    </div>
    <div class="copyright-div">
        <!-- Copyright text med datum som uppdateras automatiskt -->
        <p>© copyright Charlie´s Coffee House | <?php echo date('Y'); ?></p>
    </div>
</footer>

</div>
<!-- js script, för meny funktionalitet -->
<script src="<?= get_template_directory_uri(); ?>/js/main.js"></script>
<?php wp_footer();?>
</body>

</html>