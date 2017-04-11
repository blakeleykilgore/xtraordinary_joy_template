    <footer>
        <h2 class="hidden">Footer Menu</h2>
        <?php
            wp_nav_menu(array(
                'menu' => 'footer_menu'
            ));
        ?>
    </footer>
    <?php wp_footer(); ?>
</div>
</body>
</html>
