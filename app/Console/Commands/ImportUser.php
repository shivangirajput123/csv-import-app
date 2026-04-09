<?php

namespace App\Console\Commands;

use Illuminate\Console\Attributes\Description;
use Illuminate\Console\Attributes\Signature;
use Illuminate\Console\Command;

#[Signature('app:importuser')]
#[Description('Command description')]
class ImportUser extends Command
{
    /**
     * Execute the console command.
     */

    protected $signature = 'import:users';
    protected $description = 'Import users from a CSV file';

    public function handle(){
        $this->info('Command executed successfully.');
    }

    // public function handle()
    // {
    //     try{
    //         $file = fopen(storage -> path ('app/public/users.csv'), 'r');
    //         $headers = fgetcsv($file);
    //         while(($row = fgetcsv($file)) !== false){
    //             $username = $row[0];
    //             $email = $row[1];
    //             $password = $row[2];
                
    //             if(!filter_var ($email, FILTER_VALIDATE_EMAIL)){
    //                 $this->error("Invalid email formar for user: $username");
    //                 continue;
    //             }

    //             if(!preg_match('/^(a-zA-Z0-9) {3,20} $', $username)){
    //                 $this->error("Invalid username format for user: $username");
    //             }
    //         }

    //          \App\Models\User::create([
    //         'name' => $username,
    //         'email' => $email,
    //         'password' => $password
    //     ]);

    //     fclose($file);
    //     $this->info('User import completed successfully.');
    //     } catch (\Exception $e){
    //         $this->error('An error occurred: ' . $e->getMessage());
    //     }
    
    // }
}
