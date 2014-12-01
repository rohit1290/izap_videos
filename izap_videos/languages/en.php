<?php
/**
 * iZAP Videos plugin by iionly
 * (based on version 3.71b of the original izap_videos plugin for Elgg 1.7)
 * Contact: iionly@gmx.de
 * https://github.com/iionly
 *
 * Original developer of the iZAP Videos plugin:
 * @package Elgg videotizer, by iZAP Web Solutions
 * @license GNU Public License version 2
 * @Contact iZAP Team "<support@izap.in>"
 * @Founder Tarun Jangra "<tarun@izap.in>"
 * @link http://www.izap.in/
 *
 */

return array (
	'admin:administer_utilities:izap_videos' => 'iZAP Videos',
	'izap_videos' => "iZAP Videos",
	'item:object:izap_videos' => "Videos",
	'item:object:izapVideoQueue' => 'Videos in queue',
	'item:object:izap_recycle_bin' => 'Videos in trash',
	'videos' => "Videos",
	'videos:add' => "Add video",
	'izap_videos:videos' => "Videos",
	'izap_videos:add' => "Add new video",
	'izap_videos:user' => "%s's videos",
	'izap_videos:deleted' => "Video has been deleted successfully.",
	'izap_videos:notdeleted' => "An error occured on deleting the video. Video was not deleted.",
	'izap_videos:frnd' => "Friends' videos",
	'izap_videos:widget' => "Lists latest videos added.",
    'izap_videos:numbertodisplay' => "Number of videos to display",
	'izap_videos:mostrecent' => 'Most recent videos',
	'izap_videos:mostrecent:description' => 'This widget lists the most recent videos added to the site.',
	'izap_videos:mostrecent:group:description' => 'This widget lists the most recent videos added to this group.',

	'izap_videos:views' => "%s views",
	'izap_videos:readmore' => 'More',
	'izap_videos:notfound' => "No video has been added yet.",

	'izap_videos:editVideo' => "Edit video",
	'izap_videos:group:enablevideo' => "Enable group videos",
	'izap_videos:groupvideos' => "Group videos",
	'izap_videos:processed' => 'Video is queued up for conversion.',
	'izap_videos:queueStatus' => 'Queue status: ',
	'izap_videos:queueStatus:none' => 'There are currently no videos in queue for conversion.',
	'izap_videos:notRunning' => 'Not running',
	'izap_videos:running' => 'Running',
	'izap_videos:error_videos' => 'Videos with errors during conversion',
	'izap_videos:error_videos:none' => 'There are currently no videos which had errors during conversion.',
	'izap_videos:restore' => 'Restore',
	'izap_videos:restore_size' => 'Size: ',
	'izap_videos:send_user_message' => 'Send message to user',

	'izap_videos:OFFSERVER:supported_sites' => '(Supported websites: Dailymotion.com, Vimeo.com and Youtube.com)',
	'izap_videos:ONSERVER:supported_formats' => '(Supported video formats: avi, flv, 3gp, mp4, wmv, mpg and mpeg)',

	'izap_videos:upgrade' => 'Upgrade',
	'izap_videos:upgrade:success' => 'Upgrade of iZAP Videos was successful.',

	// Error messages
	'izap_videos:error:notUploaded' => 'Error in uploading file.',
	'izap_videos:error:videoOptionBlank' => 'Video option can\'t be left blank.',
	'izap_videos:error:adminSettingsReset' => 'An error occured on resetting. Settings haven\'t been reset.',
	'izap_videos:error:notValidUrl' => 'This url is invalid.',
	'izap_videos:error:code:101' => 'Can\'t get the video from the site. Site is not responding.',
	'izap_videos:error:code:103' => 'This url is not supported.',
	'izap_videos:error:code:104' => 'There was an error on uploding the file.',
	'izap_videos:error:code:105' => 'The provided file is empty or no valid input file.',
	'izap_videos:error:code:106' => 'The file format is not supported.',
	'izap_videos:error:code:107' => 'The provided file is larger than the maximum allowed size.',
	'izap_videos:error:code:Array' => 'Unknown error while fetching the video. This might be because of limited rights assigned to the video.',
	'izap_videos:error:emptyTitle' => 'Video title can\'t be left blank.',
	'izap_videos:error:save' => 'Error in saving the video.',
	'izap_videos:error:unsupported' => 'Unsupported file format.',
	'izap_videos:error:emptyEmbedCode' => 'Please provide the embed code.',
	'izap_videos:error:sqliteDrivers' => 'Please install PDO sqlite drivers to enable onserver support.',

	// Success message
	'izap_videos:success:adminSettingsSaved' => 'Settings have been saved successfully.',
	'izap_videos:success:adminSettingsReset' => 'Settings have been reset successfully.',
	'izap_videos:success:save' => 'Video saved successfully.',

	// Notify messages
	'izap_videos:notify:summary_newvideo' => 'New video called %s',
	'izap_videos:notify:subject_newvideo' => 'New video: %s',
	'izap_videos:notify:body_newvideo' => '%s added a new video: %s

View and comment on the video:
%s',
	'izap_videos:notifySub:videoConverted' => 'Video has been converted',
	'izap_videos:notifyMsg:videoConverted' => 'Your video has been converted successfully. Click here to see your converted video: %s',
	'izap_videos:notifySub:videoNotConverted' => 'Video not converted',
	'izap_videos:notifyAdminMsg:videoNotConverted' => 'There was an error while one of the user was trying to upload a video.<br />Error: <b>%s</b>',
	'izap_videos:notifySub:video_deleted' => 'Your video has been deleted',

	// River
	'river:create:object:izap_videos' => '%s added a new video %s',
	'river:comment:object:izap_videos' => '%s commented on the video %s',

	// Admin settings
	'izap_videos:adminSettings:tabs_settings' => 'Settings',
	'izap_videos:adminSettings:tabs_queue_status' => 'Queue status (%s)',
	'izap_videos:adminSettings:tabs_recycle_bin' => 'Trash (%s)',
	'izap_videos:adminSettings:tabs_server_analysis' => 'Server analysis',

	'izap_videos:adminSettings:settings' => 'Settings for iZAP Videos',
	'izap_videos:adminSettings:onServerVideos_okay' => 'On server videos',
	'izap_videos:adminSettings:onServerVideos_notokay' => 'On server videos <em class="elgg-subtext">(Enable PDO sqlite drivers to use on server video feature)</em>',
	'izap_videos:adminSettings:offServerVideos' => 'Off server videos <em class="elgg-subtext">(Supported sites see README.txt)</em>',
	'izap_videos:adminSettings:embedCode' => 'Embed code <em class="elgg-subtext">(Does not work if htmlawed plugin is enabled. Please read README.txt!!!)</em>',
	'izap_videos:adminSettings:izapVideoOptions' => 'Video options:',
	'izap_videos:adminSettings:izapPhpInterpreter' => 'Path for the PHP interpreter:',
	'izap_videos:adminSettings:izapVideoCommand' => 'Video converting command:',
	'izap_videos:adminSettings:izapVideoThumb' => 'Video thumbnail command:',
	'izap_videos:adminSettings:izapBorderColor1' => 'Color for progress bar of on server video player:',
	'izap_videos:adminSettings:izapBorderColor2' => 'Color for texts of on server video player:',
	'izap_videos:adminSettings:izapBorderColor3' => 'Color for buttons of on server video player:',
	'izap_videos:adminSettings:izapMaxFileSize' => 'Enter max allowed video file size (in MB):',
	'izap_videos:adminSettings:izapKeepOriginal' => 'Keep original file on server?',
	'izap_videos:adminSettings:keep-original' => 'Yes',
	'izap_videos:adminSettings:resetSettings' => 'Reset to defaults',
	'izap_videos:adminSettings:resetSettings_confirm' => 'Do you really want to reset the settings to default values?',
	'izap_videos:adminSettings:resetQueueAll' => 'Empty Queue',
	'izap_videos:adminSettings:resetQueue_info' => 'Refresh every 5 seconds.',
	'izap_videos:adminSettings:resetQueueAll_confirm' => 'Are you sure? This will delete all videos from queue and correspondingly from the database.',
	'izap_videos:adminSettings:resetQueue_confirm' => 'Are you sure? This will delete this videos from queue and correspondingly from the database.',
	'izap_videos:adminSettings:izap_cron_time' => 'Set cron interval to trigger queue:',
	'izap_videos:adminSettings:minute' => '1 minute',
	'izap_videos:adminSettings:fiveminute' => '5 minutes',
	'izap_videos:adminSettings:fifteenmin' => '15 minutes',
	'izap_videos:adminSettings:halfhour' => '30 minutes',
	'izap_videos:adminSettings:hourly' => '1 hour',
	'izap_videos:adminSettings:cron_off' => 'Queue-cron-trigger disabled',
	'izap_videos:adminSettings:info:izap_cron_time' => '(Setting the cron interval for triggering the queue is required for on server videos to work. The shorter the interval the sooner a video gets converted after it has been uploaded. For example, if the interval is set to \'1 minute\' the converting starts a minute after uploading has finished at the latest but if you have selected \'1 hour\' it might start only an hour after it has been uploaded in the worst case. For the queue trigger to work you must have configured the corresponding Elgg cronjob. If you don\'t use the on server videos option on your site, you can disable the queue-cron-trigger)',
	'izap_videos:adminSettings:save' => 'Save settings',
	'izap_videos:adminSettings:messages_plugin_missing' => '<em class="elgg-subtext">Enable messages plugin to inform user about reason for the permanent deletion of a video.</em>',
	'izap_videos:adminSettings:deleted_from_trash' => 'Deleted successfully from trash.',
	'izap_videos:adminSettings:reset_queue' => 'Now queue is empty.',
	'izap_videos:adminSettings:restore_video' => 'Restored successfully.',
	'izap_videos:adminSettings:izap_river_thumbnails' => 'Preview image size in activity river entries (new videos added and comments on videos):',
	'izap_videos:adminSettings:thumbnails_small' => "Image in size 'small'",
	'izap_videos:adminSettings:thumbnails_medium' => "Image in size 'medium'",
	'izap_videos:adminSettings:thumbnails_large' => "Image in size 'large'",
	'izap_videos:adminSettings:thumbnails_none' => "No preview image",

	'izap_videos:server_analysis:success' => 'Success',
	'izap_videos:server_analysis:fail' => 'Fail',
	'izap_videos:server_analysis:exec' => 'exec()',
	'izap_videos:server_analysis:exec_info' => 'Required to execute the commands.',
	'izap_videos:server_analysis:curl' => 'cURL support',
	'izap_videos:server_analysis:curl_info' => 'Required for fetching the remote feed.',
	'izap_videos:server_analysis:pdo' => 'PDO_SQLITE Support',
	'izap_videos:server_analysis:pdo_info' => 'Required to manage queue by sqlite database.',
	'izap_videos:server_analysis:php' => 'PHP interpreter test',
	'izap_videos:server_analysis:php_not_found' => 'PHP interpreter not found.',
	'izap_videos:server_analysis:php_action' => '<em>(Make sure the path in the "Path for the PHP interpreter" input field on the "Settings" tab is correct)</em>',
	'izap_videos:server_analysis:ffmpeg' => 'FFmpeg',
	'izap_videos:server_analysis:ffmpeg_action' => '<em>(Copy the success command and paste it in the "Video converting command" input field on the "Settings" tab)</em>',
	'izap_videos:server_analysis:simple_command' => '<em><b>Tested with avi format only.</b></em>',
	'izap_videos:server_analysis:upload_max_filesize' => 'The maximum size of files that PHP will accept for uploads. Increase in .htaccess if necessary for larger files.',
	'izap_videos:server_analysis:post_max_size' => 'Needs to be at least as large as upload_max_filesize. Better set it a bit larger than upload_max_filesize in .htaccess to be able to handle a slight overhead that might occur.',
	'izap_videos:server_analysis:max_input_time' => 'The time in seconds PHP will wait when receiving file data/uploads. Set it large enough in .htaccess. Setting it to "0" means no limit.',
	'izap_videos:server_analysis:max_execution_time' => 'The maximum time in seconds a script is allowed to run before it is terminated. Set it large enough in .htaccess. Setting it to "0" means no limit.',
	'izap_videos:server_analysis:memory_limit' => 'Memory limit for a PHP thread. Set the limit high enough in .htaccess to allow processing of the largest to be expected files by ffmpeg.',

	// Info messages
	'izap_videos:adminSettings:info:convert-command' => '(Optimized command: /path/of/ffmpeg -y -i [inputVideoPath] -vcodec libx264 -preset medium -b 330k -s 480x360 -acodec libmp3lame -ar 22050 -ab 48k [outputVideoPath] )',
	'izap_videos:adminSettings:info:bg-color' => '(Give hex value of color without #. For example #FFFFFF is white, so insert "FFFFFF")',
	'izap_videos:adminSettings:info:izapKeepOriginal' => '(Uncheck, if you don\'t want to keep the original files on the server)',

	// Add/edit form
	'izap_videos:addEditForm:ONSERVER' => 'Upload video',
	'izap_videos:addEditForm:OFFSERVER' => 'Add url',
	'izap_videos:addEditForm:EMBED' => 'Add embed code',
	'izap_videos:addEditForm:title' => 'Title',
	'izap_videos:addEditForm:videoImage' => 'Thumbnail (optional)',
	'izap_videos:addEditForm:description' => 'Description',
	'izap_videos:addEditForm:access_id' => 'Access',
	'izap_videos:addEditForm:tags' => 'Tags',
	'izap_videos:addEditForm:guid' => '',
	'izap_videos:addEditForm:container_guid' => '',
	'izap_videos:addEditForm:videoUrl' => 'Video url',
	'izap_videos:addEditForm:maxFilesize' => '(maximum allowed file size is %s MB)',
	'izap_videos:addEditForm:videoType' => '',
	'izap_videos:addEditForm:videoFile' => 'Video file',
	'izap_videos:addEditForm:videoEmbed' => 'Video embed code',
	'izap_videos:addEditForm:' => '',
	'izap_videos:addEditForm:save' => 'Save',

	'izap_videos:please_wait' => 'Please wait, till we have saved your data...',
	'izap_videos:favorites_short' => 'Favorites',
	'izap_videos:favorites' => 'Favorite videos',
	'izap_videos:user_favorites' => '%s\'s favorite videos',
	'izap_videos:save_favorite' => 'Save as favorite',
	'izap_videos:favorite_saved' => 'Video has been added to your favorite list.',
	'izap_videos:favorite_removed' => 'Video removed from your favorite list.',
	'izap_videos:remove_favorite' => 'Remove from favorite list',
	'izap_videos:no_favorites' => 'No favorite videos yet.'
);