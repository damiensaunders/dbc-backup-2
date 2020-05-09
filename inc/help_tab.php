<?php 

function damien_dbc_admin_add_help_tab () {
    global $dbc_backup_admin;
    $screen = get_current_screen();
    //echo $screen->id;
    /*
     * Check if current screen is My Admin Page
     * Don't add help tab if it's not
     */
    if ( $screen->id != $dbc_backup_admin )
        return;

    // Add my_help_tab if current screen is My Admin Page
    $screen->add_help_tab( array(
    'id'      => 'dbc-start',
    'title'   => __('Getting Started', 'dbc'),
    'content' => '<ol>
					<li>Set your backup directory ideally to ../wp-content/backup or something harder.</li>
					<li>Set compression level to help save space</li>
					<li>Set how often the backup will run and when</li>
					<li>Select ACTIVE</li>
					<li>Click on Save Changes</li>
					</ol>',
));
 

$screen->add_help_tab( array(
    'id'      => 'dbc-download',
    'title'   => __('How to download my backup', 'dbc'),
    'content' => '<p>Your Protected<br>
                   Your backup directory is protected to block anyone browsing or attempting to directly download your precious database backup.</p>
                   <ol><li>FTP or SFTP Download<br>
                   You will need to use an FTP client to transfer your backup from your webserver to your pc or other location.</li>
                    <li>Web Browser<br>
                    You can download the backup file if your download is less than 2Gb. Look for the dl link in the Backup Log.',
));

$screen->add_help_tab( array(
    'id'      => 'dbc-restore',
    'title'   => __('How to restore my backup', 'vpl'),
    'content' => '<p>Restoring your backup is easy with PHPMyAdmin or apps like SequelPro</p><ol>
					<li>Look on line for guides on how to use PHPMyAdmin to import a sql file.</li>
					<li>Before I release an update of this plugin, I import a file using Sequel Pro (Mac OSx) into a test MySQL database.</li>
					<li>Did you know you can also open a sql file in apps like NotePad to check the file is not corrupt.</li>
					</ol>',
));    


    
    
    $screen->set_help_sidebar( '<p>' .'Related Content'. '</p> <p>Thanks for using my plugin ' . DBCBACKUP2_VERSION .
					'<ul><li><a target="_blank" href="https://bitbucket.org/damien1/help/wiki/Home?utm_source=WordPress&utm_medium=dbc-backup-installed&utm_content=help&utm_campaign=dbc-backup">Help & FAQs</a></li>
					<li><a target="_blank" href="http://wordpress.damien.co/?utm_source=WordPress&utm_medium=dbc-backup-installed&utm_content=help&utm_campaign=dbc-backup">More WordPress Tips & Ideas</a></li>
					</ul>'
    
    );
}
