<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Movie;
use App\Models\Order;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class ShowUsersController extends Controller
{
    public function index($id = 0){
        $id != 0 ? $user = User::where('id',$id)->firstOrFail() : $user = null;
        $users = User::all();
        return view('backend.src.users', compact('users','user'));
    }
    public function store(Request $request, $id = 0)
    {
        $id != 0 ? $user = User::whereId($id)->firstOrFail() : $user = new User();
            $user->role = $request->input('role');
            $user->first_name = $request->input('first_name');
            $user->last_name = $request->input('last_name');
            $user->email = $request->input('email');
            $user->password = bcrypt($request->input('password'));
            $user->order_count = 0;
            $user->save();
            return redirect( '/admin/users');
        }
    public function status($id)
    {
        $user = User::findOrFail($id);
        $user->status = !$user->status; // Toggle the status (true to false or false to true)
        $user->save();
        return redirect('/admin/users');
    }

    public function destroy($id)
        {
            $user = User::findOrFail($id);
            $user->delete();
            return redirect('/admin/users');
        }



    public function importUsers(Request $request)
    {
        $request->validate([
            'file' => 'required|mimes:csv,txt'
        ]);

        if ($request->hasFile('file')) {
            $file = $request->file('file');

            // Process the file here
            // For example, you can read the file and create users

            // Open and read the file
            $contents = file_get_contents($file->path());

            // Process the contents and create users
            $lines = explode("\n", $contents);
            foreach ($lines as $line) {
                $user = explode(',', $line);

                try {
                    DB::beginTransaction();
                    $newUser = new User();
                    $newUser->role = $user[0];
                    $newUser->status = $user[1];
                    $newUser->first_name = $user[2];
                    $newUser->last_name = $user[3];
                    $newUser->email = $user[4];
                    $newUser->password = bcrypt($user[5]);
                    $newUser->order_count = 0;
                    $newUser->save();
                    DB::commit();
                } catch (\Illuminate\Database\QueryException $e) {
                    DB::rollBack();
                    // Log the error message to investigate the issue
                    Log::error($e->getMessage());

                    // Check for duplicate key violation (unique constraint)
                    if ($e->getCode() == 23000) {
                        $lines = explode("\n", $contents);
                        $duplicateEmails = []; // Array to store duplicate email addresses

                        foreach ($lines as $line) {
                            $user = explode(',', $line);
                            $email = $user[4];

                            // Check if the email is already in the duplicateEmails array
                            if (in_array($email, $duplicateEmails)) {
                                continue; // Skip if the email is already captured
                            }

                            // Check if the email already exists in the database
                            $existingUser = User::where('email', $email)->first();
                            if ($existingUser) {
                                $duplicateEmails[] = $email; // Add the email to the duplicateEmails array
                            }
                        }

                        // Redirect back with the error message and duplicate emails
                        if (!empty($duplicateEmails)) {
                            return redirect()->back()->with([
                                'error' => 'Cannot import users! Duplicate emails found!',
                                'duplicateEmails' => $duplicateEmails
                            ]);
                        }
                    }

                    return redirect()->back()->with('error', 'An error occurred while importing users');
                } catch (\Exception $e) {
                    DB::rollBack();
                    // Log the error message to investigate the issue
                    Log::error($e->getMessage());

                    return redirect()->back()->with('error', 'An error occurred while importing users');
                }
            }

            return redirect()->back()->with('success', 'Users imported successfully');
        }

        return redirect()->back()->with('error', 'File upload failed');
    }

}

