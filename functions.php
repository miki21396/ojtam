<?php 
//投稿ページにサムネイルを追加する方法
add_theme_support('post-thumbnails');
?>

<?php 
//投稿数を取得する
function count_user_posttype($userid,$posttype) {
global $wpdb;
$where = get_posts_by_author_sql($posttype, true, $userid,true);
$count = $wpdb->get_var( "SELECT COUNT(*) FROM $wpdb->posts $where" );
return $count;
}
?>

<?php if (5 < count_user_posttype(get_the_author_meta('ID'),"post")){ ?>
  <p class="more_btn"><?php the_author_posts_link(); ?></p>
<?php } ?>
