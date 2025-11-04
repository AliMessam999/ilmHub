<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;
use Spatie\Backup\BackupDestination\BackupDestination;

class backupdb extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:backupdb';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        // Run the database backup
        $this->info('Running database backup...');
        if (env('APP_ENV') != 'production') {

            // Assuming XAMPP is installed in the default location on Windows
            $xamppMysqlDirectory = 'C:\xampp\mysql\bin';

            // Change the current working directory
            chdir($xamppMysqlDirectory);

            $this->info("Changed to XAMPP MySQL directory: $xamppMysqlDirectory");
        }
        $sc = $this->call('backup:run');
        $latestBackup = $this->getlatestbackup();

        // Check if a backup exists
        if ($latestBackup) {
            $this->info('Backup successful.');

            // Transfer the backup file via FTP
            $this->info('Transferring backup via FTP...');
            $this->transferBackupViaFtp($latestBackup);
            $this->info('Transfer complete.');
        } else {
            $this->error('No backups available.');
        }
    }

    protected function transferBackupViaFtp($backup)
    {
        // Specify the remote directory on the FTP server
        $remoteDirectory = '/Cdigital-main-site';

        // Use league/flysystem to transfer the file via FTP
        $filesystem = Storage::disk('ftp');

        // Get the filename from the path
        $filename = pathinfo($backup)['basename'];
        $files = Storage::disk('ftp');
        // Put the backup file on the FTP server
        $filesystem->put($remoteDirectory . '/' . $filename, file_get_contents($backup));
        // dd(pathinfo($backup)['filename']);
       unlink($backup);
    }

    protected function getlatestbackup()
    {
        // Specify the directory path
        $directory = public_path('backupdb');

        // Get an array of files in the directory
        $files = File::files($directory);

        // Sort the files based on modification time in descending order (newest first)
        usort($files, function ($a, $b) {
            return filemtime($b) - filemtime($a);
        });

        // Get the latest file
        return $latestFile = reset($files);

        // Get the file name
        $latestFileName = pathinfo($latestFile)['filename'];

        // Output the latest file name
        echo "The latest file is: $latestFile\n";
    }
    function checkFtpConnection($ftpHost, $ftpUsername, $ftpPassword)
{
    // Attempt to connect to the FTP server
    $ftpConnection = ftp_connect($ftpHost);

    if ($ftpConnection) {
        // Attempt to log in to the FTP server
        $loginResult = ftp_login($ftpConnection, $ftpUsername, $ftpPassword);

        // Close the FTP connection
        ftp_close($ftpConnection);

        if ($loginResult) {
            return true; // Connection and login successful
        } else {
            return false; // Connection successful, but login failed
        }
    } else {
        return false; // Connection failed
    }
}



}
