<?php

require_once("facebook.php");

$params = array(
"scope" => "ads_management, ads_read, basic_info, create_event, create_note, email, export_stream, friends_about_me, friends_actions.books, friends_actions.music, friends_actions.news, friends_actions.video, friends_activities, friends_birthday, friends_checkins, friends_education_history, friends_events, friends_games_activity, friends_groups, friends_hometown, friends_interests, friends_likes, friends_location, friends_notes, friends_online_presence, friends_photo_video_tags, friends_photos, friends_questions, friends_relationship_details, friends_relationships, friends_religion_politics, friends_status, friends_subscriptions, friends_videos, friends_website, friends_work_history, manage_friendlists, manage_notifications, manage_pages, photo_upload, public_profile, publish_actions, publish_stream, read_friendlists, read_insights, read_mailbox, read_page_mailboxes, read_requests, read_stream, rsvp_event, share_item, sms, status_update, user_about_me, user_actions.books, user_actions.music, user_actions.news, user_actions.video, user_activities, user_birthday, user_checkins, user_education_history, user_events, user_friends, user_games_activity, user_groups, user_hometown, user_interests, user_likes, user_location, user_notes, user_online_presence, user_photo_video_tags, user_photos, user_questions, user_relationship_details, user_relationships, user_religion_politics, user_status, user_subscriptions, user_videos, user_website, user_work_history, video_upload, xmpp_login",
"redirect_uri" => "http://localhost/".$_SERVER['PHP_SELF'],
"response_type" => "token"
);
$user = $facebook->getLoginUrl($params);

?>
