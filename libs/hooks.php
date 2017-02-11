<?php

class APIAdapter_Hooks {
  private $adapter;

  public static function get_instance() {
    static $instance;
    if ( ! $instance instanceof self ) {
      $instance = new static;
    }
    return $instance;
  }

  private function __construct() {

  add_action("_admin_menu", [$this, "hooks__admin_menu"], 10, 1);
  add_action("_network_admin_menu", [$this, "hooks__network_admin_menu"], 10, 1);
  add_action("_user_admin_menu", [$this, "hooks__user_admin_menu"], 10, 1);
  add_action("activated_plugin", [$this, "hooks_activated_plugin"], 10, 1);
  add_action("activity_box_end", [$this, "hooks_activity_box_end"], 10, 1);
  add_action("add_admin_bar_menus", [$this, "hooks_add_admin_bar_menus"], 10, 1);
  add_action("add_attachment", [$this, "hooks_add_attachment"], 10, 1);
  add_action("add_category", [$this, "hooks_add_category"], 10, 1);
  add_action("add_category_form_pre", [$this, "hooks_add_category_form_pre"], 10, 1);
  add_action("add_link", [$this, "hooks_add_link"], 10, 1);
  add_action("add_meta_boxes", [$this, "hooks_add_meta_boxes"], 10, 1);
  add_action("add_option", [$this, "hooks_add_option"], 10, 1);
  add_action("add_submenu_page", [$this, "hooks_add_submenu_page"], 10, 1);
  add_action("added_option", [$this, "hooks_added_option"], 10, 1);
  add_action("admin_bar_init", [$this, "hooks_admin_bar_init"], 10, 1);
  add_action("admin_bar_menu", [$this, "hooks_admin_bar_menu"], 10, 1);
  add_action("admin_enqueue_scripts", [$this, "hooks_admin_enqueue_scripts"], 10, 1);
  add_action("admin_footer", [$this, "hooks_admin_footer"], 10, 1);
  add_action("admin_head", [$this, "hooks_admin_head"], 10, 1);
  add_action("admin_menu", [$this, "hooks_admin_menu"], 10, 1);
  add_action("admin_notices", [$this, "hooks_admin_notices"], 10, 1);
  add_action("admin_print_footer_scripts", [$this, "hooks_admin_print_footer_scripts"], 10, 1);
  add_action("admin_print_scripts", [$this, "hooks_admin_print_scripts"], 10, 1);
  add_action("admin_print_styles", [$this, "hooks_admin_print_styles"], 10, 1);
  add_action("admin_xml_ns", [$this, "hooks_admin_xml_ns"], 10, 1);
  add_action("adminmenu", [$this, "hooks_adminmenu"], 10, 1);
  add_action("after_setup_theme", [$this, "hooks_after_setup_theme"], 10, 1);
  add_action("after_switch_theme", [$this, "hooks_after_switch_theme"], 10, 1);
  add_action("all_admin_notices", [$this, "hooks_all_admin_notices"], 10, 1);
  add_action("atom_entry", [$this, "hooks_atom_entry"], 10, 1);
  add_action("atom_head", [$this, "hooks_atom_head"], 10, 1);
  add_action("atom_ns", [$this, "hooks_atom_ns"], 10, 1);
  add_action("auth_cookie_malformed", [$this, "hooks_auth_cookie_malformed"], 10, 1);
  add_action("auth_cookie_valid", [$this, "hooks_auth_cookie_valid"], 10, 1);
  add_action("auth_redirect", [$this, "hooks_auth_redirect"], 10, 1);
  add_action("before_delete_post", [$this, "hooks_before_delete_post"], 10, 1);
  add_action("blog_privacy_selector", [$this, "hooks_blog_privacy_selector"], 10, 1);
  add_action("category_add_form_fields", [$this, "hooks_category_add_form_fields"], 10, 1);
  add_action("category_edit_form", [$this, "hooks_category_edit_form"], 10, 1);
  add_action("check_admin_referer", [$this, "hooks_check_admin_referer"], 10, 1);
  add_action("check_ajax_referer", [$this, "hooks_check_ajax_referer"], 10, 1);
  add_action("check_passwords", [$this, "hooks_check_passwords"], 10, 1);
  add_action("clean_post_cache", [$this, "hooks_clean_post_cache"], 10, 1);
  add_action("comment_closed", [$this, "hooks_comment_closed"], 10, 1);
  add_action("comment_flood_trigger", [$this, "hooks_comment_flood_trigger"], 10, 1);
  add_action("comment_form", [$this, "hooks_comment_form"], 10, 1);
  add_action("comment_id_not_found", [$this, "hooks_comment_id_not_found"], 10, 1);
  add_action("comment_on_draft", [$this, "hooks_comment_on_draft"], 10, 1);
  add_action("comment_post", [$this, "hooks_comment_post"], 10, 1);
  add_action("commentrss2_item", [$this, "hooks_commentrss2_item"], 10, 1);
  add_action("create_category", [$this, "hooks_create_category"], 10, 1);
  add_action("current_screen", [$this, "hooks_current_screen"], 10, 1);
  add_action("customize_register", [$this, "hooks_customize_register"], 10, 1);
  add_action("dbx_page_advanced", [$this, "hooks_dbx_page_advanced"], 10, 1);
  add_action("dbx_page_sidebar", [$this, "hooks_dbx_page_sidebar"], 10, 1);
  add_action("dbx_post_advanced", [$this, "hooks_dbx_post_advanced"], 10, 1);
  add_action("dbx_post_sidebar", [$this, "hooks_dbx_post_sidebar"], 10, 1);
  add_action("deactivated_plugin", [$this, "hooks_deactivated_plugin"], 10, 1);
  add_action("delete_attachment", [$this, "hooks_delete_attachment"], 10, 1);
  add_action("delete_category", [$this, "hooks_delete_category"], 10, 1);
  add_action("delete_comment", [$this, "hooks_delete_comment"], 10, 1);
  add_action("delete_link", [$this, "hooks_delete_link"], 10, 1);
  add_action("delete_option", [$this, "hooks_delete_option"], 10, 1);
  add_action("delete_post", [$this, "hooks_delete_post"], 10, 1);
  add_action("delete_user", [$this, "hooks_delete_user"], 10, 1);
  add_action("deleted_comment", [$this, "hooks_deleted_comment"], 10, 1);
  add_action("deleted_option", [$this, "hooks_deleted_option"], 10, 1);
  add_action("deleted_post", [$this, "hooks_deleted_post"], 10, 1);
  add_action("do_robots", [$this, "hooks_do_robots"], 10, 1);
  add_action("do_robotstxt", [$this, "hooks_do_robotstxt"], 10, 1);
  add_action("dynamic_sidebar", [$this, "hooks_dynamic_sidebar"], 10, 1);
  add_action("edit_attachment", [$this, "hooks_edit_attachment"], 10, 1);
  add_action("edit_category", [$this, "hooks_edit_category"], 10, 1);
  add_action("edit_category_form", [$this, "hooks_edit_category_form"], 10, 1);
  add_action("edit_category_form_pre", [$this, "hooks_edit_category_form_pre"], 10, 1);
  add_action("edit_comment", [$this, "hooks_edit_comment"], 10, 1);
  add_action("edit_form_advanced", [$this, "hooks_edit_form_advanced"], 10, 1);
  add_action("edit_form_after_editor", [$this, "hooks_edit_form_after_editor"], 10, 1);
  add_action("edit_form_after_title", [$this, "hooks_edit_form_after_title"], 10, 1);
  add_action("edit_form_top", [$this, "hooks_edit_form_top"], 10, 1);
  add_action("edit_link", [$this, "hooks_edit_link"], 10, 1);
  add_action("edit_page_form", [$this, "hooks_edit_page_form"], 10, 1);
  add_action("edit_post", [$this, "hooks_edit_post"], 10, 1);
  add_action("edit_tag_form", [$this, "hooks_edit_tag_form"], 10, 1);
  add_action("edit_tag_form_pre", [$this, "hooks_edit_tag_form_pre"], 10, 1);
  add_action("edit_terms", [$this, "hooks_edit_terms"], 10, 1);
  add_action("edit_user_profile", [$this, "hooks_edit_user_profile"], 10, 1);
  add_action("edited_terms", [$this, "hooks_edited_terms"], 10, 1);
  add_action("generate_rewrite_rules", [$this, "hooks_generate_rewrite_rules"], 10, 1);
  add_action("get_footer", [$this, "hooks_get_footer"], 10, 1);
  add_action("get_header", [$this, "hooks_get_header"], 10, 1);
  add_action("get_search_form", [$this, "hooks_get_search_form"], 10, 1);
  add_action("get_sidebar", [$this, "hooks_get_sidebar"], 10, 1);
  add_action("get_template_part_content", [$this, "hooks_get_template_part_content"], 10, 1);
  add_action("in_admin_footer", [$this, "hooks_in_admin_footer"], 10, 1);
  add_action("in_admin_header", [$this, "hooks_in_admin_header"], 10, 1);
  add_action("init", [$this, "hooks_init"], 10, 1);
  add_action("load_textdomain", [$this, "hooks_load_textdomain"], 10, 1);
  add_action("login_form", [$this, "hooks_login_form"], 10, 1);
  add_action("login_head", [$this, "hooks_login_head"], 10, 1);
  add_action("loop_end", [$this, "hooks_loop_end"], 10, 1);
  add_action("loop_start", [$this, "hooks_loop_start"], 10, 1);
  add_action("lost_password", [$this, "hooks_lost_password"], 10, 1);
  add_action("lostpassword_form", [$this, "hooks_lostpassword_form"], 10, 1);
  add_action("lostpassword_post", [$this, "hooks_lostpassword_post"], 10, 1);
  add_action("mce_options", [$this, "hooks_mce_options"], 10, 1);
  add_action("muplugins_loaded", [$this, "hooks_muplugins_loaded"], 10, 1);
  add_action("network_admin_menu", [$this, "hooks_network_admin_menu"], 10, 1);
  add_action("network_admin_notices", [$this, "hooks_network_admin_notices"], 10, 1);
  add_action("parse_query", [$this, "hooks_parse_query"], 10, 1);
  add_action("parse_request", [$this, "hooks_parse_request"], 10, 1);
  add_action("password_reset", [$this, "hooks_password_reset"], 10, 1);
  add_action("personal_options_update", [$this, "hooks_personal_options_update"], 10, 1);
  add_action("pingback_post", [$this, "hooks_pingback_post"], 10, 1);
  add_action("plugins_loaded", [$this, "hooks_plugins_loaded"], 10, 1);
  add_action("post_submitbox_misc_actions", [$this, "hooks_post_submitbox_misc_actions"], 10, 1);
  add_action("post_updated", [$this, "hooks_post_updated"], 10, 1);
  add_action("posts_selection", [$this, "hooks_posts_selection"], 10, 1);
  add_action("pre_get_comments", [$this, "hooks_pre_get_comments"], 10, 1);
  add_action("pre_ping", [$this, "hooks_pre_ping"], 10, 1);
  add_action("pre_post_update", [$this, "hooks_pre_post_update"], 10, 1);
  add_action("pre_user_query", [$this, "hooks_pre_user_query"], 10, 1);
  add_action("profile_personal_options", [$this, "hooks_profile_personal_options"], 10, 1);
  add_action("profile_update", [$this, "hooks_profile_update"], 10, 1);
  add_action("publish_future_post", [$this, "hooks_publish_future_post"], 10, 1);
  add_action("publish_page", [$this, "hooks_publish_page"], 10, 1);
  add_action("publish_phone", [$this, "hooks_publish_phone"], 10, 1);
  add_action("publish_post", [$this, "hooks_publish_post"], 10, 1);
  add_action("quick_edit_custom_box", [$this, "hooks_quick_edit_custom_box"], 10, 1);
  add_action("rdf_header", [$this, "hooks_rdf_header"], 10, 1);
  add_action("rdf_item", [$this, "hooks_rdf_item"], 10, 1);
  add_action("rdf_ns", [$this, "hooks_rdf_ns"], 10, 1);
  add_action("register_form", [$this, "hooks_register_form"], 10, 1);
  add_action("register_post", [$this, "hooks_register_post"], 10, 1);
  add_action("register_sidebar", [$this, "hooks_register_sidebar"], 10, 1);
  add_action("registered_post_type", [$this, "hooks_registered_post_type"], 10, 1);
  add_action("registered_taxonomy", [$this, "hooks_registered_taxonomy"], 10, 1);
  add_action("restrict_manage_posts", [$this, "hooks_restrict_manage_posts"], 10, 1);
  add_action("retrieve_password", [$this, "hooks_retrieve_password"], 10, 1);
  add_action("right_now_content_table_end", [$this, "hooks_right_now_content_table_end"], 10, 1);
  add_action("right_now_discussion_table_end", [$this, "hooks_right_now_discussion_table_end"], 10, 1);
  add_action("right_now_end", [$this, "hooks_right_now_end"], 10, 1);
  add_action("right_now_table_end", [$this, "hooks_right_now_table_end"], 10, 1);
  add_action("rss2_item", [$this, "hooks_rss2_item"], 10, 1);
  add_action("rss2_ns", [$this, "hooks_rss2_ns"], 10, 1);
  add_action("rss_head", [$this, "hooks_rss_head"], 10, 1);
  add_action("rss_item", [$this, "hooks_rss_item"], 10, 1);
  add_action("sanitize_comment_cookies", [$this, "hooks_sanitize_comment_cookies"], 10, 1);
  add_action("save_post", [$this, "hooks_save_post"], 10, 1);
  add_action("send_headers", [$this, "hooks_send_headers"], 10, 1);
  add_action("set_current_user", [$this, "hooks_set_current_user"], 10, 1);
  add_action("setup_theme", [$this, "hooks_setup_theme"], 10, 1);
  add_action("show_user_profile", [$this, "hooks_show_user_profile"], 10, 1);
  add_action("shutdown", [$this, "hooks_shutdown"], 10, 1);
  add_action("sidebar_admin_page", [$this, "hooks_sidebar_admin_page"], 10, 1);
  add_action("sidebar_admin_setup", [$this, "hooks_sidebar_admin_setup"], 10, 1);
  add_action("simple_edit_form", [$this, "hooks_simple_edit_form"], 10, 1);
  add_action("switch_theme", [$this, "hooks_switch_theme"], 10, 1);
  add_action("template_redirect", [$this, "hooks_template_redirect"], 10, 1);
  add_action("trackback_post", [$this, "hooks_trackback_post"], 10, 1);
  add_action("transition_post_status ", [$this, "hooks_transition_post_status "], 10, 1);
  add_action("trash_comment", [$this, "hooks_trash_comment"], 10, 1);
  add_action("trash_post", [$this, "hooks_trash_post"], 10, 1);
  add_action("trashed_comment", [$this, "hooks_trashed_comment"], 10, 1);
  add_action("trashed_post", [$this, "hooks_trashed_post"], 10, 1);
  add_action("untrash_post", [$this, "hooks_untrash_post"], 10, 1);
  add_action("untrashed_post", [$this, "hooks_untrashed_post"], 10, 1);
  add_action("update_option", [$this, "hooks_update_option"], 10, 1);
  add_action("updated_option", [$this, "hooks_updated_option"], 10, 1);
  add_action("updated_postmeta", [$this, "hooks_updated_postmeta"], 10, 1);
  add_action("upgrader_process_complete", [$this, "hooks_upgrader_process_complete"], 10, 1);
  add_action("user_admin_menu", [$this, "hooks_user_admin_menu"], 10, 1);
  add_action("user_admin_notices", [$this, "hooks_user_admin_notices"], 10, 1);
  add_action("user_new_form", [$this, "hooks_user_new_form"], 10, 1);
  add_action("user_profile_update_errors", [$this, "hooks_user_profile_update_errors"], 10, 1);
  add_action("user_register", [$this, "hooks_user_register"], 10, 1);
  add_action("welcome_panel", [$this, "hooks_welcome_panel"], 10, 1);
  add_action("widgets_init", [$this, "hooks_widgets_init"], 10, 1);
  add_action("wp", [$this, "hooks_wp"], 10, 1);
  add_action("wp_after_admin_bar_render", [$this, "hooks_wp_after_admin_bar_render"], 10, 1);
  add_action("wp_authenticate", [$this, "hooks_wp_authenticate"], 10, 1);
  add_action("wp_before_admin_bar_render", [$this, "hooks_wp_before_admin_bar_render"], 10, 1);
  add_action("wp_blacklist_check", [$this, "hooks_wp_blacklist_check"], 10, 1);
  add_action("wp_dashboard_setup", [$this, "hooks_wp_dashboard_setup"], 10, 1);
  add_action("wp_default_scripts", [$this, "hooks_wp_default_scripts"], 10, 1);
  add_action("wp_default_styles", [$this, "hooks_wp_default_styles"], 10, 1);
  add_action("wp_enqueue_scripts", [$this, "hooks_wp_enqueue_scripts"], 10, 1);
  add_action("wp_insert_comment", [$this, "hooks_wp_insert_comment"], 10, 1);
  add_action("wp_insert_post", [$this, "hooks_wp_insert_post"], 10, 1);
  add_action("wp_loaded", [$this, "hooks_wp_loaded"], 10, 1);
  add_action("wp_login", [$this, "hooks_wp_login"], 10, 1);
  add_action("wp_logout", [$this, "hooks_wp_logout"], 10, 1);
  add_action("wp_meta", [$this, "hooks_wp_meta"], 10, 1);
  add_action("wp_print_footer_scripts", [$this, "hooks_wp_print_footer_scripts"], 10, 1);
  add_action("wp_print_scripts", [$this, "hooks_wp_print_scripts"], 10, 1);
  add_action("wp_print_styles", [$this, "hooks_wp_print_styles"], 10, 1);
  add_action("wp_register_sidebar_widget", [$this, "hooks_wp_register_sidebar_widget"], 10, 1);
  add_action("wp_set_comment_status", [$this, "hooks_wp_set_comment_status"], 10, 1);
  add_action("wpmu_new_user", [$this, "hooks_wpmu_new_user"], 10, 1);
  add_action("xmlrpc_publish_post", [$this, "hooks_xmlrpc_publish_post"], 10, 1);
  }

  public function setAdapter($adapter){
    $this->adapter = $adapter;
  }

  public function execute_hook($data, $name){
    $this->adapter->execute_hook($data, $name);
  }


  public function hooks__admin_menu($data){
    $this->execute_hook($data, "_admin_menu");
  }

  public function hooks__network_admin_menu($data){
    $this->execute_hook($data, "_network_admin_menu");
  }

  public function hooks__user_admin_menu($data){
    $this->execute_hook($data, "_user_admin_menu");
  }

  public function hooks_activated_plugin($data){
    $this->execute_hook($data, "activated_plugin");
  }

  public function hooks_activity_box_end($data){
    $this->execute_hook($data, "activity_box_end");
  }

  public function hooks_add_admin_bar_menus($data){
    $this->execute_hook($data, "add_admin_bar_menus");
  }

  public function hooks_add_attachment($data){
    $this->execute_hook($data, "add_attachment");
  }

  public function hooks_add_category($data){
    $this->execute_hook($data, "add_category");
  }

  public function hooks_add_category_form_pre($data){
    $this->execute_hook($data, "add_category_form_pre");
  }

  public function hooks_add_link($data){
    $this->execute_hook($data, "add_link");
  }

  public function hooks_add_meta_boxes($data){
    $this->execute_hook($data, "add_meta_boxes");
  }

  public function hooks_add_option($data){
    $this->execute_hook($data, "add_option");
  }

  public function hooks_add_submenu_page($data){
    $this->execute_hook($data, "add_submenu_page");
  }

  public function hooks_added_option($data){
    $this->execute_hook($data, "added_option");
  }

  public function hooks_admin_bar_init($data){
    $this->execute_hook($data, "admin_bar_init");
  }

  public function hooks_admin_bar_menu($data){
    $this->execute_hook($data, "admin_bar_menu");
  }

  public function hooks_admin_enqueue_scripts($data){
    $this->execute_hook($data, "admin_enqueue_scripts");
  }

  public function hooks_admin_footer($data){
    $this->execute_hook($data, "admin_footer");
  }

  public function hooks_admin_head($data){
    $this->execute_hook($data, "admin_head");
  }

  public function hooks_admin_menu($data){
    $this->execute_hook($data, "admin_menu");
  }

  public function hooks_admin_notices($data){
    $this->execute_hook($data, "admin_notices");
  }

  public function hooks_admin_print_footer_scripts($data){
    $this->execute_hook($data, "admin_print_footer_scripts");
  }

  public function hooks_admin_print_scripts($data){
    $this->execute_hook($data, "admin_print_scripts");
  }

  public function hooks_admin_print_styles($data){
    $this->execute_hook($data, "admin_print_styles");
  }

  public function hooks_admin_xml_ns($data){
    $this->execute_hook($data, "admin_xml_ns");
  }

  public function hooks_adminmenu($data){
    $this->execute_hook($data, "adminmenu");
  }

  public function hooks_after_setup_theme($data){
    $this->execute_hook($data, "after_setup_theme");
  }

  public function hooks_after_switch_theme($data){
    $this->execute_hook($data, "after_switch_theme");
  }

  public function hooks_all_admin_notices($data){
    $this->execute_hook($data, "all_admin_notices");
  }

  public function hooks_atom_entry($data){
    $this->execute_hook($data, "atom_entry");
  }

  public function hooks_atom_head($data){
    $this->execute_hook($data, "atom_head");
  }

  public function hooks_atom_ns($data){
    $this->execute_hook($data, "atom_ns");
  }

  public function hooks_auth_cookie_malformed($data){
    $this->execute_hook($data, "auth_cookie_malformed");
  }

  public function hooks_auth_cookie_valid($data){
    $this->execute_hook($data, "auth_cookie_valid");
  }

  public function hooks_auth_redirect($data){
    $this->execute_hook($data, "auth_redirect");
  }

  public function hooks_before_delete_post($data){
    $this->execute_hook($data, "before_delete_post");
  }

  public function hooks_blog_privacy_selector($data){
    $this->execute_hook($data, "blog_privacy_selector");
  }

  public function hooks_category_add_form_fields($data){
    $this->execute_hook($data, "category_add_form_fields");
  }

  public function hooks_category_edit_form($data){
    $this->execute_hook($data, "category_edit_form");
  }

  public function hooks_check_admin_referer($data){
    $this->execute_hook($data, "check_admin_referer");
  }

  public function hooks_check_ajax_referer($data){
    $this->execute_hook($data, "check_ajax_referer");
  }

  public function hooks_check_passwords($data){
    $this->execute_hook($data, "check_passwords");
  }

  public function hooks_clean_post_cache($data){
    $this->execute_hook($data, "clean_post_cache");
  }

  public function hooks_comment_closed($data){
    $this->execute_hook($data, "comment_closed");
  }

  public function hooks_comment_flood_trigger($data){
    $this->execute_hook($data, "comment_flood_trigger");
  }

  public function hooks_comment_form($data){
    $this->execute_hook($data, "comment_form");
  }

  public function hooks_comment_id_not_found($data){
    $this->execute_hook($data, "comment_id_not_found");
  }

  public function hooks_comment_on_draft($data){
    $this->execute_hook($data, "comment_on_draft");
  }

  public function hooks_comment_post($data){
    $this->execute_hook($data, "comment_post");
  }

  public function hooks_commentrss2_item($data){
    $this->execute_hook($data, "commentrss2_item");
  }

  public function hooks_create_category($data){
    $this->execute_hook($data, "create_category");
  }

  public function hooks_current_screen($data){
    $this->execute_hook($data, "current_screen");
  }

  public function hooks_customize_register($data){
    $this->execute_hook($data, "customize_register");
  }

  public function hooks_dbx_page_advanced($data){
    $this->execute_hook($data, "dbx_page_advanced");
  }

  public function hooks_dbx_page_sidebar($data){
    $this->execute_hook($data, "dbx_page_sidebar");
  }

  public function hooks_dbx_post_advanced($data){
    $this->execute_hook($data, "dbx_post_advanced");
  }

  public function hooks_dbx_post_sidebar($data){
    $this->execute_hook($data, "dbx_post_sidebar");
  }

  public function hooks_deactivated_plugin($data){
    $this->execute_hook($data, "deactivated_plugin");
  }

  public function hooks_delete_attachment($data){
    $this->execute_hook($data, "delete_attachment");
  }

  public function hooks_delete_category($data){
    $this->execute_hook($data, "delete_category");
  }

  public function hooks_delete_comment($data){
    $this->execute_hook($data, "delete_comment");
  }

  public function hooks_delete_link($data){
    $this->execute_hook($data, "delete_link");
  }

  public function hooks_delete_option($data){
    $this->execute_hook($data, "delete_option");
  }

  public function hooks_delete_post($data){
    $this->execute_hook($data, "delete_post");
  }

  public function hooks_delete_user($data){
    $this->execute_hook($data, "delete_user");
  }

  public function hooks_deleted_comment($data){
    $this->execute_hook($data, "deleted_comment");
  }

  public function hooks_deleted_option($data){
    $this->execute_hook($data, "deleted_option");
  }

  public function hooks_deleted_post($data){
    $this->execute_hook($data, "deleted_post");
  }

  public function hooks_do_robots($data){
    $this->execute_hook($data, "do_robots");
  }

  public function hooks_do_robotstxt($data){
    $this->execute_hook($data, "do_robotstxt");
  }

  public function hooks_dynamic_sidebar($data){
    $this->execute_hook($data, "dynamic_sidebar");
  }

  public function hooks_edit_attachment($data){
    $this->execute_hook($data, "edit_attachment");
  }

  public function hooks_edit_category($data){
    $this->execute_hook($data, "edit_category");
  }

  public function hooks_edit_category_form($data){
    $this->execute_hook($data, "edit_category_form");
  }

  public function hooks_edit_category_form_pre($data){
    $this->execute_hook($data, "edit_category_form_pre");
  }

  public function hooks_edit_comment($data){
    $this->execute_hook($data, "edit_comment");
  }

  public function hooks_edit_form_advanced($data){
    $this->execute_hook($data, "edit_form_advanced");
  }

  public function hooks_edit_form_after_editor($data){
    $this->execute_hook($data, "edit_form_after_editor");
  }

  public function hooks_edit_form_after_title($data){
    $this->execute_hook($data, "edit_form_after_title");
  }

  public function hooks_edit_form_top($data){
    $this->execute_hook($data, "edit_form_top");
  }

  public function hooks_edit_link($data){
    $this->execute_hook($data, "edit_link");
  }

  public function hooks_edit_page_form($data){
    $this->execute_hook($data, "edit_page_form");
  }

  public function hooks_edit_post($data){
    $this->execute_hook($data, "edit_post");
  }

  public function hooks_edit_tag_form($data){
    $this->execute_hook($data, "edit_tag_form");
  }

  public function hooks_edit_tag_form_pre($data){
    $this->execute_hook($data, "edit_tag_form_pre");
  }

  public function hooks_edit_terms($data){
    $this->execute_hook($data, "edit_terms");
  }

  public function hooks_edit_user_profile($data){
    $this->execute_hook($data, "edit_user_profile");
  }

  public function hooks_edited_terms($data){
    $this->execute_hook($data, "edited_terms");
  }

  public function hooks_generate_rewrite_rules($data){
    $this->execute_hook($data, "generate_rewrite_rules");
  }

  public function hooks_get_footer($data){
    $this->execute_hook($data, "get_footer");
  }

  public function hooks_get_header($data){
    $this->execute_hook($data, "get_header");
  }

  public function hooks_get_search_form($data){
    $this->execute_hook($data, "get_search_form");
  }

  public function hooks_get_sidebar($data){
    $this->execute_hook($data, "get_sidebar");
  }

  public function hooks_get_template_part_content($data){
    $this->execute_hook($data, "get_template_part_content");
  }

  public function hooks_in_admin_footer($data){
    $this->execute_hook($data, "in_admin_footer");
  }

  public function hooks_in_admin_header($data){
    $this->execute_hook($data, "in_admin_header");
  }

  public function hooks_init($data){
    $this->execute_hook($data, "init");
  }

  public function hooks_load_textdomain($data){
    $this->execute_hook($data, "load_textdomain");
  }

  public function hooks_login_form($data){
    $this->execute_hook($data, "login_form");
  }

  public function hooks_login_head($data){
    $this->execute_hook($data, "login_head");
  }

  public function hooks_loop_end($data){
    $this->execute_hook($data, "loop_end");
  }

  public function hooks_loop_start($data){
    $this->execute_hook($data, "loop_start");
  }

  public function hooks_lost_password($data){
    $this->execute_hook($data, "lost_password");
  }

  public function hooks_lostpassword_form($data){
    $this->execute_hook($data, "lostpassword_form");
  }

  public function hooks_lostpassword_post($data){
    $this->execute_hook($data, "lostpassword_post");
  }

  public function hooks_mce_options($data){
    $this->execute_hook($data, "mce_options");
  }

  public function hooks_muplugins_loaded($data){
    $this->execute_hook($data, "muplugins_loaded");
  }

  public function hooks_network_admin_menu($data){
    $this->execute_hook($data, "network_admin_menu");
  }

  public function hooks_network_admin_notices($data){
    $this->execute_hook($data, "network_admin_notices");
  }

  public function hooks_parse_query($data){
    $this->execute_hook($data, "parse_query");
  }

  public function hooks_parse_request($data){
    $this->execute_hook($data, "parse_request");
  }

  public function hooks_password_reset($data){
    $this->execute_hook($data, "password_reset");
  }

  public function hooks_personal_options_update($data){
    $this->execute_hook($data, "personal_options_update");
  }

  public function hooks_pingback_post($data){
    $this->execute_hook($data, "pingback_post");
  }

  public function hooks_plugins_loaded($data){
    $this->execute_hook($data, "plugins_loaded");
  }

  public function hooks_post_submitbox_misc_actions($data){
    $this->execute_hook($data, "post_submitbox_misc_actions");
  }

  public function hooks_post_updated($data){
    $this->execute_hook($data, "post_updated");
  }

  public function hooks_posts_selection($data){
    $this->execute_hook($data, "posts_selection");
  }

  public function hooks_pre_get_comments($data){
    $this->execute_hook($data, "pre_get_comments");
  }

  public function hooks_pre_ping($data){
    $this->execute_hook($data, "pre_ping");
  }

  public function hooks_pre_post_update($data){
    $this->execute_hook($data, "pre_post_update");
  }

  public function hooks_pre_user_query($data){
    $this->execute_hook($data, "pre_user_query");
  }

  public function hooks_profile_personal_options($data){
    $this->execute_hook($data, "profile_personal_options");
  }

  public function hooks_profile_update($data){
    $this->execute_hook($data, "profile_update");
  }

  public function hooks_publish_future_post($data){
    $this->execute_hook($data, "publish_future_post");
  }

  public function hooks_publish_page($data){
    $this->execute_hook($data, "publish_page");
  }

  public function hooks_publish_phone($data){
    $this->execute_hook($data, "publish_phone");
  }

  public function hooks_publish_post($data){
    $this->execute_hook($data, "publish_post");
  }

  public function hooks_quick_edit_custom_box($data){
    $this->execute_hook($data, "quick_edit_custom_box");
  }

  public function hooks_rdf_header($data){
    $this->execute_hook($data, "rdf_header");
  }

  public function hooks_rdf_item($data){
    $this->execute_hook($data, "rdf_item");
  }

  public function hooks_rdf_ns($data){
    $this->execute_hook($data, "rdf_ns");
  }

  public function hooks_register_form($data){
    $this->execute_hook($data, "register_form");
  }

  public function hooks_register_post($data){
    $this->execute_hook($data, "register_post");
  }

  public function hooks_register_sidebar($data){
    $this->execute_hook($data, "register_sidebar");
  }

  public function hooks_registered_post_type($data){
    $this->execute_hook($data, "registered_post_type");
  }

  public function hooks_registered_taxonomy($data){
    $this->execute_hook($data, "registered_taxonomy");
  }

  public function hooks_restrict_manage_posts($data){
    $this->execute_hook($data, "restrict_manage_posts");
  }

  public function hooks_retrieve_password($data){
    $this->execute_hook($data, "retrieve_password");
  }

  public function hooks_right_now_content_table_end($data){
    $this->execute_hook($data, "right_now_content_table_end");
  }

  public function hooks_right_now_discussion_table_end($data){
    $this->execute_hook($data, "right_now_discussion_table_end");
  }

  public function hooks_right_now_end($data){
    $this->execute_hook($data, "right_now_end");
  }

  public function hooks_right_now_table_end($data){
    $this->execute_hook($data, "right_now_table_end");
  }

  public function hooks_rss2_item($data){
    $this->execute_hook($data, "rss2_item");
  }

  public function hooks_rss2_ns($data){
    $this->execute_hook($data, "rss2_ns");
  }

  public function hooks_rss_head($data){
    $this->execute_hook($data, "rss_head");
  }

  public function hooks_rss_item($data){
    $this->execute_hook($data, "rss_item");
  }

  public function hooks_sanitize_comment_cookies($data){
    $this->execute_hook($data, "sanitize_comment_cookies");
  }

  public function hooks_save_post($data){
    $this->execute_hook($data, "save_post");
  }

  public function hooks_send_headers($data){
    $this->execute_hook($data, "send_headers");
  }

  public function hooks_set_current_user($data){
    $this->execute_hook($data, "set_current_user");
  }

  public function hooks_setup_theme($data){
    $this->execute_hook($data, "setup_theme");
  }

  public function hooks_show_user_profile($data){
    $this->execute_hook($data, "show_user_profile");
  }

  public function hooks_shutdown($data){
    $this->execute_hook($data, "shutdown");
  }

  public function hooks_sidebar_admin_page($data){
    $this->execute_hook($data, "sidebar_admin_page");
  }

  public function hooks_sidebar_admin_setup($data){
    $this->execute_hook($data, "sidebar_admin_setup");
  }

  public function hooks_simple_edit_form($data){
    $this->execute_hook($data, "simple_edit_form");
  }

  public function hooks_switch_theme($data){
    $this->execute_hook($data, "switch_theme");
  }

  public function hooks_template_redirect($data){
    $this->execute_hook($data, "template_redirect");
  }

  public function hooks_trackback_post($data){
    $this->execute_hook($data, "trackback_post");
  }

  public function hooks_transition_post_status ($data){
    $this->execute_hook($data, "transition_post_status ");
  }

  public function hooks_trash_comment($data){
    $this->execute_hook($data, "trash_comment");
  }

  public function hooks_trash_post($data){
    $this->execute_hook($data, "trash_post");
  }

  public function hooks_trashed_comment($data){
    $this->execute_hook($data, "trashed_comment");
  }

  public function hooks_trashed_post($data){
    $this->execute_hook($data, "trashed_post");
  }

  public function hooks_untrash_post($data){
    $this->execute_hook($data, "untrash_post");
  }

  public function hooks_untrashed_post($data){
    $this->execute_hook($data, "untrashed_post");
  }

  public function hooks_update_option($data){
    $this->execute_hook($data, "update_option");
  }

  public function hooks_updated_option($data){
    $this->execute_hook($data, "updated_option");
  }

  public function hooks_updated_postmeta($data){
    $this->execute_hook($data, "updated_postmeta");
  }

  public function hooks_upgrader_process_complete($data){
    $this->execute_hook($data, "upgrader_process_complete");
  }

  public function hooks_user_admin_menu($data){
    $this->execute_hook($data, "user_admin_menu");
  }

  public function hooks_user_admin_notices($data){
    $this->execute_hook($data, "user_admin_notices");
  }

  public function hooks_user_new_form($data){
    $this->execute_hook($data, "user_new_form");
  }

  public function hooks_user_profile_update_errors($data){
    $this->execute_hook($data, "user_profile_update_errors");
  }

  public function hooks_user_register($data){
    $this->execute_hook($data, "user_register");
  }

  public function hooks_welcome_panel($data){
    $this->execute_hook($data, "welcome_panel");
  }

  public function hooks_widgets_init($data){
    $this->execute_hook($data, "widgets_init");
  }

  public function hooks_wp($data){
    $this->execute_hook($data, "wp");
  }

  public function hooks_wp_after_admin_bar_render($data){
    $this->execute_hook($data, "wp_after_admin_bar_render");
  }

  public function hooks_wp_authenticate($data){
    $this->execute_hook($data, "wp_authenticate");
  }

  public function hooks_wp_before_admin_bar_render($data){
    $this->execute_hook($data, "wp_before_admin_bar_render");
  }

  public function hooks_wp_blacklist_check($data){
    $this->execute_hook($data, "wp_blacklist_check");
  }

  public function hooks_wp_dashboard_setup($data){
    $this->execute_hook($data, "wp_dashboard_setup");
  }

  public function hooks_wp_default_scripts($data){
    $this->execute_hook($data, "wp_default_scripts");
  }

  public function hooks_wp_default_styles($data){
    $this->execute_hook($data, "wp_default_styles");
  }

  public function hooks_wp_enqueue_scripts($data){
    $this->execute_hook($data, "wp_enqueue_scripts");
  }

  public function hooks_wp_insert_comment($data){
    $this->execute_hook($data, "wp_insert_comment");
  }

  public function hooks_wp_insert_post($data){
    $this->execute_hook($data, "wp_insert_post");
  }

  public function hooks_wp_loaded($data){
    $this->execute_hook($data, "wp_loaded");
  }

  public function hooks_wp_login($data){
    $this->execute_hook($data, "wp_login");
  }

  public function hooks_wp_logout($data){
    $this->execute_hook($data, "wp_logout");
  }

  public function hooks_wp_meta($data){
    $this->execute_hook($data, "wp_meta");
  }

  public function hooks_wp_print_footer_scripts($data){
    $this->execute_hook($data, "wp_print_footer_scripts");
  }

  public function hooks_wp_print_scripts($data){
    $this->execute_hook($data, "wp_print_scripts");
  }

  public function hooks_wp_print_styles($data){
    $this->execute_hook($data, "wp_print_styles");
  }

  public function hooks_wp_register_sidebar_widget($data){
    $this->execute_hook($data, "wp_register_sidebar_widget");
  }

  public function hooks_wp_set_comment_status($data){
    $this->execute_hook($data, "wp_set_comment_status");
  }

  public function hooks_wpmu_new_user($data){
    $this->execute_hook($data, "wpmu_new_user");
  }

  public function hooks_xmlrpc_publish_post($data){
    $this->execute_hook($data, "xmlrpc_publish_post");
  }

}
