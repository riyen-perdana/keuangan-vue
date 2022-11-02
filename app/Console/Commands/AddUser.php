<?php

namespace App\Console\Commands;
use App\Models\User;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Hash;

class AddUser extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'AddUser';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Penambahan Pengguna Aplikasi';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $admin = new User();
        $admin->name            = 'Riyen Perdana';
        $admin->email           = 'riyenperdana@uin-suska.ac.id';
        $admin->password        = Hash::make('p455w0rdqwertyuiop');
        $admin->save();
        echo "Akun User Berhasil Dibuat\n";
    }
}
