<?php  
require 'functions.php';

// Validate the ID parameter
$paramResult = checkParamId('id');

if (is_numeric($paramResult)) {
    $announcementId = validate($paramResult);

    // Check if the announcement exists
    $announcement = getById('announcements', $announcementId);
    if ($announcement) {
        // Perform the delete query
        $announcementDeleteRes = deleteQuery('announcements', $announcementId);
        if ($announcementDeleteRes) {
            redirect('announcement.php', 'Announcement deleted successfully');
        } else {
            redirect('announcement.php', 'Failed to delete announcement');
        }
    } else {
        redirect('announcement.php', 'Announcement not found');
    }
} else {
    redirect('announcement.php', $paramResult);
}
?>
