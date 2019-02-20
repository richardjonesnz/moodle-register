<?php
class utility {
    public static function fetch_links() {
        $links = array();
        $links[] = ['link' => 'index.php', 'text' => 'Home page'];
        $links[] = ['link' => '#', 'text' => 'Register'];
        $links[] = ['link' => '#', 'text' => 'About'];
        return $links;
    }
}
?>